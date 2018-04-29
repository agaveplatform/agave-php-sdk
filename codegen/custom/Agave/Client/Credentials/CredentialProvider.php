<?php
namespace Agave\Client\Credentials;

use Agave\Client\ConfigurationException;
use Agave\Client\Model\Client;
use Agave\Client\Model\Token;
use Agave\Client\Util\AuthCacheUtil;
use Aws;
use Aws\CacheInterface;
use Agave\Client\CredentialsException;
use GuzzleHttp\Promise;

/**
 * Credential providers are functions that accept no arguments and return a
 * promise that is fulfilled with an {@see \Aws\Credentials\CredentialsInterface}
 * or rejected with an {@see \Aws\Exception\CredentialsException}.
 *
 * <code>
 * use Aws\Credentials\CredentialProvider;
 * $provider = CredentialProvider::defaultProvider();
 * // Returns a CredentialsInterface or throws.
 * $creds = $provider()->wait();
 * </code>
 *
 * Credential providers can be composed to create credentials using conditional
 * logic that can create different credentials in different environments. You
 * can compose multiple providers into a single provider using
 * {@see Aws\Credentials\CredentialProvider::chain}. This function accepts
 * providers as variadic arguments and returns a new function that will invoke
 * each provider until a successful set of credentials is returned.
 *
 * <code>
 * // First try an INI file at this location.
 * $a = CredentialProvider::ini(null, '/path/to/file.ini');
 * // Then try an INI file at this location.
 * $b = CredentialProvider::ini(null, '/path/to/other-file.ini');
 * // Then try loading from environment variables.
 * $c = CredentialProvider::env();
 * // Combine the three providers together.
 * $composed = CredentialProvider::chain($a, $b, $c);
 * // Returns a promise that is fulfilled with credentials or throws.
 * $promise = $composed();
 * // Wait on the credentials to resolve.
 * $creds = $promise->wait();
 * </code>
 */
class CredentialProvider
{
    const ENV_BASE_URL = "AGAVE_BASE_URL";
    const ENV_DEV_URL = "AGAVE_DEV_URL";
    const ENV_TENANT = "AGAVE_TENANT";
    const ENV_ACCESS_TOKEN = "AGAVE_ACCESS_TOKEN";
    const ENV_REFRESH_TOKEN = "AGAVE_REFRESH_TOKEN";
    const ENV_CLIENT_KEY = "AGAVE_CLIENT_KEY";
    const ENV_CLIENT_SECRET = "AGAVE_CLIENT_SECRET";
    const ENV_CLIENT_NAME = "AGAVE_CLIENT_NAME";
    const ENV_USERNAME = "AGAVE_USERNAME";
    const ENV_PASSWORD = "AGAVE_PASSWORD";
    
    /**
     * Create a default credential provider that first checks for a profile
     * in the "agaveCacheDir" location, if provided, then checks for environment
     * variables, then checks for "default configuration" profile in ~/.agave/config,
     * then checks for the "default" profile in ~/.agave/current (which is
     * the default profile of Agave CLI).
     *
     * This provider is automatically wrapped in a memoize function that caches
     * previously provided credentials.
     *
     * @param string $path Optional path to config file on disk.
     *
     * @return callable
     */
    public static function defaultProvider()
    {
        $localCredentialProviders = self::localCredentialProviders();

        return self::memoize(
            call_user_func_array(
                'self::chain',
                $localCredentialProviders
            )
        );
    }

    /**
     * Create a credential provider function from a set of static credentials.
     *
     * @param CredentialsInterface $creds
     *
     * @return callable
     */
    public static function fromCredentials(CredentialsInterface $creds)
    {
        $promise = Promise\promise_for($creds);

        return function () use ($promise) {
            return $promise;
        };
    }

    /**
     * Creates an aggregate credentials provider that invokes the provided
     * variadic providers one after the other until a provider returns
     * credentials.
     *
     * @return callable
     */
    public static function chain()
    {
        $links = func_get_args();
        if (empty($links)) {
            throw new \InvalidArgumentException('No providers in chain');
        }

        return function () use ($links) {
            /** @var callable $parent */
            $parent = array_shift($links);
            $promise = $parent();
            while ($next = array_shift($links)) {
                $promise = $promise->otherwise($next);
            }
            return $promise;
        };
    }

    /**
     * Wraps a credential provider and caches previously provided credentials.
     *
     * Ensures that cached credentials are refreshed when they expire.
     *
     * @param callable $provider Credentials provider function to wrap.
     *
     * @return callable
     */
    public static function memoize(callable $provider)
    {
        return function () use ($provider) {
            static $result;
            static $isConstant;

            // Constant credentials will be returned constantly.
            if ($isConstant) {
                return $result;
            }

            // Create the initial promise that will be used as the cached value
            // until it expires.
            if (null === $result) {
                $result = $provider();
            }

            // Return credentials that could expire and refresh when needed.
            return $result
                ->then(function (CredentialsInterface $creds) use ($provider, &$isConstant, &$result) {
                    // Determine if these are constant credentials.
                    if (!$creds->getExpiresAt()) {
                        $isConstant = true;
                        return $creds;
                    }

                    // Refresh expired credentials.
                    if (!$creds->isExpired()) {
                        return $creds;
                    }
                    // Refresh the result and forward the promise.
                    return $result = $provider();
                });
        };
    }

    /**
     * Wraps a credential provider and saves provided credentials in an
     * instance of Agave\Client\CacheInterface. Forwards calls when no credentials found
     * in cache and updates cache with the results.
     *
     * Defaults to using a simple file-based cache when none provided.
     *
     * @param callable $provider Credentials provider function to wrap
     * @param CacheInterface $cache Cache to store credentials
     * @param string|null $cacheKey (optional) Cache key to use
     *
     * @return callable
     */
    public static function cache(
        callable $provider,
        CacheInterface $cache,
        $cacheKey = null
    ) {
        $cacheKey = $cacheKey ?: 'agave_cached_credentials';

        return function () use ($provider, $cache, $cacheKey) {
            $found = $cache->get($cacheKey);
            if ($found instanceof CredentialsInterface && !$found->isExpired()) {
                return Promise\promise_for($found);
            }

            return $provider()
                ->then(function (CredentialsInterface $creds) use (
                    $cache,
                    $cacheKey
                ) {
                    $cache->set(
                        $cacheKey,
                        $creds,
                        null === $creds->getExpiresAt() ?
                            0 : $creds->getExpiresAt() - time()
                    );

                    return $creds;
                });
        };
    }

    /**
     * Provider that creates credentials from environment variables
     * AGAVE_BASE_URL, AGAVE_DEV_URL, AGAVE_TENANT, AGAVE_ACCESS_TOKEN,
     * AGAVE_REFRESH_TOKEN, AGAVE_CLIENT_KEY, AGAVE_CLIENT_SECRET,
     * AGAVE_CLIENT_NAME, AGAVE_USERNAME, AGAVE_PASSWORD.
     *
     * @return callable
     */
    public static function env()
    {
        return function () {
            // Use credentials from environment variables, if available
            $accessToken = getenv(self::ENV_ACCESS_TOKEN);
            $localEnvironment = getenv();
            if ($accessToken) {
                return Promise\promise_for(
                    new Credentials(new Token($localEnvironment), new Client($localEnvironment),
                        getenv(self::ENV_USERNAME) ?: NULL,
                        getenv(self::ENV_PASSWORD) ?: NULL)
                );
            }

            return self::reject('Could not find environment variable '
                . 'credentials in ' . self::ENV_ACCESS_TOKEN);
        };
    }

    /**
     * Credential provider that creates credentials using instance profile
     * credentials.
     *
     * @param array $config Array of configuration data.
     *
     * @return InstanceProfileProvider
     * @see Aws\Credentials\InstanceProfileProvider for $config details.
     */
    public static function instanceProfile(array $config = [])
    {
        return new InstanceProfileProvider($config);
    }

    /**
     * Credential provider that creates credentials using
     * ecs credentials by a GET request, whose uri is specified
     * by environment variable
     *
     * @param array $config Array of configuration data.
     *
     * @return EcsCredentialProvider
     * @see Aws\Credentials\EcsCredentialProvider for $config details.
     */
    public static function ecsCredentials(array $config = [])
    {
        return new EcsCredentialProvider($config);
    }

    /**
     * Credential provider that creates credentials using assume role
     *
     * @param array $config Array of configuration data
     * @return callable
     * @see Aws\Credentials\AssumeRoleCredentialProvider for $config details.
     */
    public static function assumeRole(array $config=[])
    {
        return new AssumeRoleCredentialProvider($config);
    }

    /**
     * Credentials provider that creates credentials using an json file stored
     * in the current user's home directory.
     *
     * @param string|null $filename If provided, uses a custom filename rather
     *                              than looking in the home directory.
     *
     * @return callable
     */
    public static function authCacheFile($filename = null)
    {
        $filename = $filename ?: (self::getHomeDir() . '/.agave/credentials');
//        $profile = $profile ?: (getenv(self::ENV_PROFILE) ?: 'default');

        return function () use ($filename) {
            if (!is_readable($filename)) {
                return self::reject("Cannot read credentials from $filename");
            }

            $authCache = null;
            try {
                $authCache = AuthCacheUtil::readFromFile($filename);
            }
            catch (ConfigurationException $e) {
                return self::reject("Invalid credentials file: $filename");
            }


            if (empty($authCache->getAccessToken()))
            {
                if (empty($authCache->getApiKey()) ||
                    empty($authCache->getApiSecret())) {
                    return self::reject("No access token or client api keys present in credentials file "
                        . $filename);
                }
                else if(empty($authCache->getRefreshToken()) &&
                        (empty($authCache->getUsername()) || empty(getenv('AGAVE_PASSWORD')))) {
                    return self::reject("No access token, refresh token, or username present in credentials file "
                        . $filename);
                }
            }

            return Promise\promise_for(
                new Credentials(
                    new Token($authCache->toArray()),
                    new Client($authCache->toArray()),
                    $authCache->getUsername(),
                    getenv("AGAVE_PASSWORD") ?: NULL
                )
            );
        };
    }

    /**
     * Local credential providers returns a list of local credential providers
     * in following order:
     *  - credentials from environment variables
     *  - 'default' sdk auth cache file in '.agave/credentials' file
     *  - 'profile default' sdk auth cache file in '.agave/current' file
     *
     * @return array
     */
    private static function localCredentialProviders()
    {
        return [
            self::env(),
            self::authCacheFile(),
            self::authCacheFile(self::getHomeDir() . '/.agave/current')
        ];
    }

    /**
     * Gets the environment's HOME directory if available.
     *
     * @return null|string
     */
    private static function getHomeDir()
    {
        // On Linux/Unix-like systems, use the HOME environment variable
        if ($homeDir = getenv('HOME')) {
            return $homeDir;
        }

        // Get the HOMEDRIVE and HOMEPATH values for Windows hosts
        $homeDrive = getenv('HOMEDRIVE');
        $homePath = getenv('HOMEPATH');

        return ($homeDrive && $homePath) ? $homeDrive . $homePath : null;
    }

    private static function reject($msg)
    {
        return new Promise\RejectedPromise(new CredentialsException($msg));
    }
}
