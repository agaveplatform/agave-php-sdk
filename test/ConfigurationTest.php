<?php
/**
 * Created by PhpStorm.
 * User: dooley
 * Date: 4/27/18
 * Time: 1:37 AM
 */

namespace Agave\Client;


use Agave\Client\API\ClientsApi;
use Agave\Client\API\TokensApi;
use Agave\Client\Exceptions\ConfigurationException;
use Agave\Client\Exceptions\OAuthException;
use Agave\Client\Model\Client;
use Agave\Client\Model\ClientSubscriptionTier;
use Agave\Client\Model\EmptyClientResponse;
use Agave\Client\Model\RefreshToken;
use Agave\Client\Model\Token;
use Agave\Client\Util\AuthCacheUtil;
use Agave\Client\Util\AuthCacheUtilTest;
use Faker\Generator;
use phpDocumentor\Reflection\Types\This;
use PHPUnit_Framework_Constraint_IsType;
use PHPUnit_Framework_MockObject_MockObject;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    const DEFAULT_CLIENT_NAME_VALUE = 'test-php-sdk-client-name';

    /** @var Generator */
    protected static $FAKER;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        self::$FAKER = \Faker\Factory::create();
    }


    /***************************************************************************
     * Utility methods
     **************************************************************************/

    /**
     * Adds all the Agave environment variables used by the SDK into
     * the environment with fake values.
     */
    private function setFakeAgaveEnvironmentVariables() {
        /** @var Client $client */
        $client = $this->getFakeClient();

        $token = $this->getFakeToken();

        putenv('AGAVE_CACHE_DIR=' . sys_get_temp_dir() . '/' . uniqid().'/');
        putenv('AGAVE_BASE_URL='. AuthCacheUtilTest::DEFAULT_BASE_URL_VALUE);
        putenv('AGAVE_DEV_URL=' . AuthCacheUtilTest::DEFAULT_DEV_URL_VALUE);
        putenv('AGAVE_USERNAME=' . AuthCacheUtilTest::DEFAULT_USERNAME_VALUE);
        putenv('AGAVE_CLIENT_NAME=' . $client->getName());
        putenv('AGAVE_CLIENT_KEY=' . $client->getKey());
        putenv('AGAVE_CLIENT_SECRET=' . $client->getSecret());
        putenv('AGAVE_TENANT=' . AuthCacheUtilTest::DEFAULT_TENANT_ID_VALUE);
        putenv('AGAVE_ACCESS_TOKEN=' . $token->getAccessToken());
        putenv('AGAVE_REFRESH_TOKEN=' . $token->getRefreshToken());
    }

    /**
     * Clears all Agave environment variables from the runtime environment
     */
    private function unsetAgaveEnvironmentVariables() {
        putenv('AGAVE_CACHE_DIR');
        putenv('AGAVE_BASE_URL');
        putenv('AGAVE_DEV_URL');
        putenv('AGAVE_USERNAME');
        putenv('AGAVE_CLIENT_NAME');
        putenv('AGAVE_CLIENT_KEY');
        putenv('AGAVE_CLIENT_SECRET');
        putenv('AGAVE_TENANT');
        putenv('AGAVE_ACCESS_TOKEN');
        putenv('AGAVE_REFRESH_TOKEN');
    }

    private function getFakeAuthCacheUtilData($data = []) {
        $authCacheTest = new AuthCacheUtilTest();
        $authCacheData = $authCacheTest->_getDefaultModelTestData();
        $authCacheData['password'] = uniqid();
        $authCacheData['authCacheDir'] = sys_get_temp_dir() . "/" . uniqid();

        return array_merge($authCacheData, $data);
    }

    private function getFakeAuthCacheUtil($data = []) {
        return new AuthCacheUtil($this->getFakeAuthCacheUtilData($data));
    }

    private function getFakeClient()
    {
        return new Client([
            'key' => self::$FAKER->word,
            'secret' => self::$FAKER->word,
            'tier' => ClientSubscriptionTier::UNLIMITED,
            'callbackUrl' => self::$FAKER->url,
            'name' => self::DEFAULT_CLIENT_NAME_VALUE,
            'description' => self::$FAKER->sentence(5),
        ]);
    }

    protected function getFakeToken() {
        $expiresIn = self::$FAKER->numberBetween(0, 14400);

        return new Token([
            'access_token' => self::$FAKER->word,
            'refresh_token' => self::$FAKER->word,
            'expires_in' => $expiresIn,
            'token_type' => 'bearer',
            'scope' => 'default'
        ]);
    }

    protected function getFakeRefreshToken() {
        $expiresIn = self::$FAKER->numberBetween(0, 14400);

        $token = new RefreshToken([
            'access_token' => self::$FAKER->randomAscii,
            'refresh_token' => self::$FAKER->randomAscii,
            'expires_in' => $expiresIn,
            'token_type' => 'bearer',
            'scope' => 'default'
        ]);

        return $token;
    }

    /**
     * Generates a mock stub of the TokensApi to verify behavior of the
     * Configuration methods without making remote calls. Only the
     * TokensApi#create() and TokensApi#refresh methods are stubbed to return
     * fake tokens by default.
     *
     * @return PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockTokensApi()
    {
        $apiStub = $this->getMock(TokensApi::class, ['create','refresh']);

        $apiStub->method("create")
            ->willReturn($this->getFakeToken());

        $apiStub->method("refresh")
            ->willReturn($this->getFakeRefreshToken());

        return $apiStub;
    }

    /**
     * Generates a mock stub of the ClientsApi to verify behavior of the
     * Configuration methods without making remote calls. Only the
     * ClientsApi#createClient(), ClientsApi#getClient(), and
     * ClientsApi#refreshClient methods are stubbed to return a
     * fake Client object by default.
     *
     * @return PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockClientsApi()
    {
        $apiStub = $this->getMock(ClientsApi::class);

        /** @var Client $client */
        $client = $this->getFakeClient();
        $apiStub->method("addClient")
            ->willReturn($client);

        $clientCopy = new Client($client->toArray());
        $clientCopy->setSecret(null);

        $client = $this->getFakeClient();
        $apiStub->method("getClient")
            ->with($client->getName())
            ->willReturn($clientCopy);

        $apiStub->method("deleteClient")
            ->willReturn(new EmptyClientResponse());

        return $apiStub;
    }

    /**
     * Verify that the agave client sdk is in the default user agent
     * for all request.
     */
    public function testGetUserAgent()
    {
        $configuration = new Configuration();
        $this->assertTrue(preg_match('/Agave Client SDK\/\d\.\d(?:(\.\d)*)?\/php/', $configuration->getUserAgent()) === 1,
            "Default user agent should start with Agave Client SDK and end with php");
    }


    /**
     * Verify the default config loads the auth cache
     *
     * @expectedException        \Agave\Client\Exceptions\OAuthException
     * @throws OAuthException
     * @throws ApiException
     */
    public function testRefreshWithoutRefreshKey()
    {
        /** @var Configuration $configurationStub */
        $configurationStub = $this->getMockBuilder(Configuration::class)
            ->setMethods(['getTokensApi','getClientsApi'])
            ->getMock();

        $configurationStub->method("getTokensApi")
            ->willReturn($this->getMockTokensApi());


        $configurationStub->method("getClientsApi")
            ->willReturn($this->getMockClientsApi());

        $configurationStub->setClientSecret("test_client-secret")
                          ->setClientKey("test_client-key")
                          ->refresh();

    }

    /**
     * Verify the default config loads the auth cache
     *
     * @expectedException        \Agave\Client\Exceptions\OAuthException
     * @throws OAuthException
     * @throws ApiException
     */
    public function testRefreshWithoutClientKey()
    {
        /** @var Configuration $configurationStub */
        $configurationStub = $this->getMockBuilder(Configuration::class)
            ->setMethods(['getTokensApi','getClientsApi'])
            ->getMock();

        $configurationStub->method("getTokensApi")
            ->willReturn($this->getMockTokensApi());


        $configurationStub->method("getClientsApi")
            ->willReturn($this->getMockClientsApi());

        $configurationStub->setRefreshToken("test_refresh_token")
                          ->setClientSecret("test_client-secret")
                          ->refresh();

    }

    /**
     * Verify the default config loads the auth cache
     *
     * @expectedException        \Agave\Client\Exceptions\OAuthException
     * @throws OAuthException
     * @throws ApiException
     */
    public function testRefreshWithoutClientSecret()
    {
        /** @var Configuration $configurationStub */
        $configurationStub = $this->getMockBuilder(Configuration::class)
            ->setMethods(['getTokensApi','getClientsApi'])
            ->getMock();

        $configurationStub->method("getTokensApi")
            ->willReturn($this->getMockTokensApi());


        $configurationStub->method("getClientsApi")
            ->willReturn($this->getMockClientsApi());

        $configurationStub->setRefreshToken("test_refresh_token")
                          ->setClientKey("test_client-key")
                          ->refresh();

    }

    /**
     * Verify the refresh fires with valid client and refresh token
     *
     * @throws OAuthException
     * @throws ApiException
     */
    public function testRefreshUpdatesAuthCache()
    {
        $initialRefreshToken = "test_refresh_token";
        $newRefreshToken = null;

        /** @var Configuration $configurationStub */
        $configurationStub = $this->getMockBuilder(Configuration::class)
            ->setMethods(['getTokensApi','setAccessToken','setRefreshToken','getRefreshToken'])
            ->disableProxyingToOriginalMethods()->disableArgumentCloning()
            ->disableAutoload()
            ->getMock();


        $apiStub = $this->getMockBuilder(TokensApi::class)
            ->setConstructorArgs([$configurationStub])
            ->setMethods(['create','refresh','refreshWithHttpInfo','refreshRequest'])
            ->disableProxyingToOriginalMethods()
            ->disableArgumentCloning()
            ->disableAutoload()->getMock();

        $fakeToken = $this->getFakeToken();
        $fakeRefreshToken = $this->getFakeRefreshToken();

        $apiStub->method("create")
            ->with($fakeToken)
            ->willReturn($fakeToken);

        $apiStub->expects($this->once())
            ->method("refresh")
            ->with($this->equalTo($initialRefreshToken))
            ->willReturn($fakeRefreshToken);

        $configurationStub
            ->method("getTokensApi")
            ->willReturn($apiStub);

        $configurationStub->method('getRefreshToken')
            ->will($this->onConsecutiveCalls(
                $initialRefreshToken,
                $initialRefreshToken,
                $this->callback(function ($val) use($fakeRefreshToken) {
                    return $val === $fakeRefreshToken->getRefreshToken();
                })));

        $configurationStub->expects($this->exactly(2))
            ->method('setRefreshToken')
            ->withConsecutive(
                $this->equalTo($initialRefreshToken),
                $this->callback(function ($val) use($initialRefreshToken) {
                    return $val ===  $initialRefreshToken;
                }))
            ->willReturnSelf();

        $configurationStub->expects($this->once())
            ->method("setAccessToken")
            ->with($this->equalTo($fakeRefreshToken->getAccessToken()))
            ->willReturnSelf();

        $configurationStub->setRefreshToken($initialRefreshToken);
        $configurationStub->setUsername("testuser");
        $configurationStub->setClientKey("test_client-key");
        $configurationStub->setClientSecret("test_client-secret");

        $configurationStub->refresh();

    }

    /**
     * Tests that all Agave environment variables are loaded into the auth cache
     * when the Configuration#restoreFromEnvironment() method is called.
     *
     */
    public function testRestoreFromEnvironment()
    {
        try {
            $this->setFakeAgaveEnvironmentVariables();

            $configuration = new Configuration();

            $configuration->setAuthCache(new AuthCacheUtil());

            $configuration->restoreFromEnvironment();

            $this->assertEquals(getenv('AGAVE_CACHE_DIR'), $configuration->getAuthCache()->getAuthCacheDir(),
                "The value of AGAVE_CACHE_DIR should overwrite the existing auth cache value.");

            $this->assertEquals(getenv('AGAVE_BASE_URL'), $configuration->getAuthCache()->getBaseUrl(),
                "The value of AGAVE_BASE_URL should overwrite the existing auth cache value.");

            $this->assertEquals(getenv('AGAVE_DEV_URL'), $configuration->getAuthCache()->getDevUrl(),
                "The value of AGAVE_DEV_URL should overwrite the existing auth cache value.");

            $this->assertEquals(getenv('AGAVE_USERNAME'), $configuration->getUsername(),
                "The value of AGAVE_USERNAME should overwrite the existing auth cache value.");

            $this->assertEquals(getenv('AGAVE_CLIENT_NAME'), $configuration->getAuthCache()->getClientName(),
                "The value of AGAVE_CLIENT_NAME should overwrite the existing auth cache value.");

            $this->assertEquals(getenv('AGAVE_CLIENT_KEY'), $configuration->getClientKey(),
                "The value of AGAVE_CLIENT_KEY should overwrite the existing auth cache value.");

            $this->assertEquals(getenv('AGAVE_CLIENT_SECRET'), $configuration->getClientSecret(),
                "The value of AGAVE_CLIENT_SECRET should overwrite the existing auth cache value.");

            $this->assertEquals(getenv('AGAVE_TENANT'), $configuration->getAuthCache()->getTenantId(),
                "The value of AGAVE_TENANT should overwrite the existing auth cache value.");

            $this->assertEquals(getenv('AGAVE_ACCESS_TOKEN'), $configuration->getAccessToken(),
                "The value of AGAVE_CACHE_DIR should overwrite the existing auth cache value.");

            $this->assertEquals(getenv('AGAVE_REFRESH_TOKEN'), $configuration->getRefreshToken(),
                "The value of AGAVE_REFRESH_TOKEN should overwrite the existing auth cache value.");
        }
        finally {
            $this->unsetAgaveEnvironmentVariables();
        }
    }

    /**
     * Tests that unset environment variables do not null out existing values
     * when the Configuration#restoreFromEnvironment() method is called.
     *
     */
    public function testRestoreFromEnvironmentIgnoresNull()
    {
        $this->unsetAgaveEnvironmentVariables();

        $configuration = new Configuration();

        // generate and set teh configuration with fake data to check for environment overrides
        $fakeAuthCacheUtil = $this->getFakeAuthCacheUtil();

        $configuration->setAuthCache($fakeAuthCacheUtil);

        $configuration->restoreFromEnvironment();

        $this->assertJsonStringEqualsJsonString($fakeAuthCacheUtil->__toString(),
            $configuration->getAuthCache()->__toString(),
            "Missing environment variables should be ignored when restoring from the environment.");
    }

    /**
     * Tests persisting of auth cache to disk
     */
    public function testStore()
    {
        /** @var Configuration $configurationStub */
        $configurationStub = $this->getMockBuilder(Configuration::class)
            ->setMethods(['getAuthCache'])
            ->setConstructorArgs([])
            ->disableProxyingToOriginalMethods()
            ->disableArgumentCloning()
            ->disableAutoload()
            ->getMock();


        $authCacheUtilStub = $this->getMockBuilder(AuthCacheUtil::class)
            ->setMethods(['write'])
            ->disableProxyingToOriginalMethods()
            ->disableArgumentCloning()
            ->disableAutoload()
            ->getMock();

        // forces cache to return true then false reflecting the two states it can have
        $authCacheUtilStub->expects($this->exactly(2))
            ->method('write')
            ->willReturnOnConsecutiveCalls(true, false);


        $configurationStub->method('getAuthCache')
            ->willReturn($authCacheUtilStub);


        // first call should return true
        $this->assertTrue($configurationStub->store(),
            "Configuration#store() should pass true respose from auth cache write operation back in response.");

        // second call should return true
        $this->assertFalse($configurationStub->store(),
            "Configuration#store() should pass false respose from auth cache write operation back in response.");
    }


    /**
     * Data provider for testing restore from file
     * @return mixed[]
     */
    public function testRestoreStringDataProvider() {

        $defaultCacheDir = AuthCacheUtil::getDefaultAuthCacheDirectory();
        $userPath = "/user/supplied/path";

        $environmentCacheDirPath = "/environment/variable/path";

        return [
            //user path         AGAVE_CACHE_DIR             expected
            [ "",               null,                       getcwd()."/"],
            [ "",               "",                         getcwd()."/"],
            [ "",               $environmentCacheDirPath,   getcwd()."/"],

            [ $userPath,        null,                       $userPath."/"],
            [ $userPath,        "",                         $userPath."/"],
            [ $userPath,        $environmentCacheDirPath,   $userPath."/"],

            [ $userPath."/",        null,                       $userPath."/"],
            [ $userPath."/",        "",                         $userPath."/"],
            [ $userPath."/",        $environmentCacheDirPath,   $userPath."/"],
        ];
    }

    /**
     * Tests paths are resolved and propagated to the AuthCacheUtil#readFromFile() method
     * when the Configuration#restore method is called.
     * @param string $restorePath
     * @param string $existingEnvironmentAuthCacheDirPath
     * @param string $expectedAuthCacheDirPath
     *
     * @dataProvider testRestoreStringDataProvider
     * @throws ConfigurationException
     */
    public function testRestoreString($restorePath, $existingEnvironmentAuthCacheDirPath, $expectedAuthCacheDirPath)
    {
        try {
            $this->unsetAgaveEnvironmentVariables();

            if (isset($existingEnvironmentAuthCacheDirPath)) {
                putenv("AGAVE_CACHE_DIR={$existingEnvironmentAuthCacheDirPath}");
            }

//            /** @var Configuration $configurationStub */
//            $configurationStub = $this->getMockBuilder(Configuration::class)
//                ->setMethods(['getAuthCacheDir', 'callStatic'])
//                ->setConstructorArgs([])
//                ->disableProxyingToOriginalMethods()
//                ->disableArgumentCloning()
//                ->disableAutoload()
//                ->getMock();

            $fakeAuthCacheUtil = $this->getFakeAuthCacheUtil();

            $fakeAuthCacheUtil->setAuthCacheDir(null);

            $configuration = new Configuration();

            $configuration->setAuthCache($fakeAuthCacheUtil);

            $configuration->restore($restorePath);

            $this->assertEquals($expectedAuthCacheDirPath, $configuration->getAuthCacheDir(),
                "Auth cache directory should be " . $expectedAuthCacheDirPath);

//            $configurationStub->expects($this->once())
//                ->method('callStatic')
//                ->with(AuthCacheUtil::class, 'readFromFile', $restorePath);
//                ->willReturn($fakeAuthCacheUtil);
//
//            // sets default fake path for the config file in the mocked AuthCacheUtil.
//            $configurationStub->method('getAuthCache')
//                ->willReturn();

            // sets default fake path for the config file in the mocked AuthCacheUtil.
//            $configurationStub->method('getAuthCacheDir')
//                ->willReturn(null);
//
//            $configurationStub->restore($restorePath);
//
//            $this->assertEquals($expectedAuthCacheDirPath, $configurationStub->getAuthCache()->getAuthCacheDir(),
//                "Auth cache directory should be " . $expectedAuthCacheDirPath);

        }
        finally {
            putenv("AGAVE_CACHE_DIR");
        }
    }

    /**
     * Data provider for testing restore from file when passed in value is null
     * @return mixed[]
     */
    public function testRestoreNullDataProvider() {

        $defaultCacheDir = AuthCacheUtil::getDefaultAuthCacheDirectory();

        $authCacheUtilPath = "/existing/auth/cache/dir/path";

        $environmentCacheDirPath = "/environment/variable/path";

        return [
            //authCacheDir       AGAVE_CACHE_DIR             expected
            [null,               null,                       $defaultCacheDir],
            [null,               "",                         $defaultCacheDir],
            [null,               $environmentCacheDirPath,   $environmentCacheDirPath."/"],
            [null,               $environmentCacheDirPath."/",   $environmentCacheDirPath."/"],

            ["",                 null,                       getcwd()."/"],
            ["",                 "",                         getcwd()."/"],
            ["",                 $environmentCacheDirPath,   getcwd()."/"],
            ["",                 $environmentCacheDirPath."/",   getcwd()."/"],

            [$authCacheUtilPath, null,                       $authCacheUtilPath."/"],
            [$authCacheUtilPath, "",                         $authCacheUtilPath."/"],
            [$authCacheUtilPath, $environmentCacheDirPath,   $authCacheUtilPath."/"],

            [$authCacheUtilPath."/", null,                       $authCacheUtilPath."/"],
            [$authCacheUtilPath."/", "",                         $authCacheUtilPath."/"],
            [$authCacheUtilPath."/", $environmentCacheDirPath,   $authCacheUtilPath."/"],
            [$authCacheUtilPath."/", $environmentCacheDirPath."/",   $authCacheUtilPath."/"],
        ];
    }

    /**
     * Tests paths are resolved and propagated to the AuthCacheUtil#readFromFile() method
     * when the Configuration#restore method is called with a null value.
     * @param string $exisingAuthCacheDirPath
     * @param string $existingEnvironmentAuthCacheDirPath
     * @param string $expectedAuthCacheDirPath
     *
     * @dataProvider testRestoreNullDataProvider
     * @throws ConfigurationException
     */
    public function testRestoreNull($exisingAuthCacheDirPath, $existingEnvironmentAuthCacheDirPath, $expectedAuthCacheDirPath)
    {
        try {
            $this->unsetAgaveEnvironmentVariables();

            if (isset($existingEnvironmentAuthCacheDirPath)) {
                putenv("AGAVE_CACHE_DIR={$existingEnvironmentAuthCacheDirPath}");
            }

            $fakeAuthCacheUtil = $this->getFakeAuthCacheUtil();

            $fakeAuthCacheUtil->setAuthCacheDir($exisingAuthCacheDirPath);

            $configuration = new Configuration();

            $configuration->setAuthCache($fakeAuthCacheUtil);

            $configuration->restore();

            $this->assertEquals($expectedAuthCacheDirPath, $configuration->getAuthCacheDir(),
                "Auth cache directory should be " . $expectedAuthCacheDirPath);
        }
        finally {
            putenv("AGAVE_CACHE_DIR");
        }
    }

    /**
     * Tests that restoring loads a config from disk, then calls the Configuration::readFromEnvironment()
     * method
     */
    public function testRestoreOnlyFromEnvironment()
    {
        try {

            $this->unsetAgaveEnvironmentVariables();

            $this->setFakeAgaveEnvironmentVariables();

            $fakeAuthCacheUtil = $this->getFakeAuthCacheUtil();

            $fakeAuthCacheUtil->setAuthCacheDir(null);

            $configuration = new Configuration();

            $configuration->setAuthCache($fakeAuthCacheUtil);

            $configuration->restore();

            $env = array_filter(getenv(), function($value, $key) {
                return (strpos($key, "AGAVE_") === 0);
            }, ARRAY_FILTER_USE_BOTH);

            $updatedAuthConfigData = $configuration->getAuthCache()->toArray();

            foreach (AuthCacheUtil::$environmenVariableMap as $environmentVariableName => $localName) {
                if (!empty($localName)) {
                    $this->assertEquals(getenv($environmentVariableName), $updatedAuthConfigData[$localName],
                    "The value of {$environmentVariableName} should overwrite the existing auth cache {$localName} value.");
                }
            }


        }
        finally {
            $this->unsetAgaveEnvironmentVariables();
        }
    }

    /**
     * Data provider for testAuthenticate. Generates all combinations of valid, null, and empty
     * username, password, client key, and client secret to test Configuration#authenticate()
     * @return array
     */
    public function authenticateDataProvider() {

        $faker = \Faker\Factory::create();

        $username = $faker->userName;
        $password = $faker->password;
        $clientKey = $faker->word;
        $clientSecret = $faker->word;

        $testData = [];

        foreach ([$username, null, ''] as $user) {
            foreach ([$password, null, ''] as $pass) {
                foreach ([$clientKey, null, ''] as $key) {
                    foreach ([$clientSecret, null, ''] as $secret) {
                        $testData[] = [ $user, $pass, $key, $secret ];
                    }
                }
            }
        }

        return $testData;
    }

    /**
     * Tests exception and calling behavior of Configuration#authenticate() method.
     * @param $username
     * @param $password
     * @param $clientKey
     * @param $clientSecret
     * @param $shouldThrowException
     *
     * @dataProvider authenticateDataProvider
     */
    public function testAuthenticate($username, $password, $clientKey, $clientSecret) {
        try {

            $this->unsetAgaveEnvironmentVariables();

            $this->setFakeAgaveEnvironmentVariables();

//            /** @var Configuration $configurationStub */
            $configuration = $this->getMockBuilder(Configuration::class)
                ->setMethods(['getTokensApi', 'getAuthCache', 'getAuthCacheDir', 'setAuthCacheDir', 'setToken', 'callStatic', 'getUsername', 'getPassword', 'getClientKey', 'getClientSecret'])
                ->setConstructorArgs([])
                ->disableProxyingToOriginalMethods()
                ->disableArgumentCloning()
                ->disableAutoload()
                ->getMock();

            $fakeAuthCache = $this->getFakeAuthCacheUtil([
                    'username' => $username,
                    'password' => $password,
                    'clientKey' => $clientKey,
                    'clientSecret' => $clientSecret,]
            );


            $tokensApiStub = $this->getMockBuilder(TokensApi::class)
                ->setMethods(['create'])
                ->setConstructorArgs([$configuration])
                ->disableProxyingToOriginalMethods()
                ->disableArgumentCloning()
                ->disableAutoload()
                ->getMock();

            /** @var Token $fakeToken */
            $fakeToken = $this->getFakeToken();

            $fluentTokenCreate = $tokensApiStub->expects($this->once())
                ->method('create')
                ->with($this->equalTo($username),
                    $this->equalTo($password),
                    $this->equalTo($clientKey),
                    $this->equalTo($clientSecret))
                ->willReturn($fakeToken);

            $configuration->expects($this->once())
                    ->method("setToken")
                    ->with($this->equalTo($fakeToken))
                    ->willReturnSelf();


            $configuration->expects($this->once())
                ->method("getTokensApi")
                ->willReturn($tokensApiStub);


            $configuration->method("getAuthCache")
                ->willReturn($fakeAuthCache);

            $configuration->method("getUsername")
                ->willReturn($username);

            $configuration->method("getPassword")
                ->willReturn($password);

            $configuration->method("getClientKey")
                ->willReturn($clientKey);

            $configuration->method("getClientSecret")
                ->willReturn($clientSecret);

            // make the auth call and verify the behavior
            $configuration->authenticate();
        }
        finally {
            $this->unsetAgaveEnvironmentVariables();
        }
    }

    public function testBootstrap()
    {
        $configuration = new Configuration();
        $fakeAuthCacheUtil = $this->getFakeAuthCacheUtil();
    }

}
