<?php
namespace Aws\Credentials;

use Aws\Exception\CredentialsException;
use Aws\Result;
use Aws\Sts\StsClient;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Credential provider that provides credentials via assuming a role
 * More Information, see: http://docs.agaveplatform.org/#
 */
class ImpersonationCredentialProvider
{
    const ERROR_MSG = "Missing required 'ImpersonationCredentialProvider' configuration option: ";

    /** @var StsClient */
    private $client;

    /** @var array */
    private $assumeRoleParams;

    /**
     * The constructor requires following configure parameters:
     *  - client: a StsClient
     *  - assume_role_params: Parameters used to make assumeRole call
     *
     * @param array $config Configuration options
     * @throws \InvalidArgumentException
     */
    public function __construct(array $config = [])
    {
        if (!isset($config['impersonated_username'])) {
            throw new \InvalidArgumentException(self::ERROR_MSG . "'impersonation_username'.");
        }

        if (!isset($config['client'])) {
            throw new \InvalidArgumentException(self::ERROR_MSG . "'client'.");
        }

        $this->client = $config['client'];
        $this->assumeRoleParams = $config['assume_role_params'];
    }

    /**
     * Loads assume role credentials.
     *
     * @return PromiseInterface
     */
    public function __invoke()
    {
        $client = $this->client;
        return $client->assumeRoleAsync($this->assumeRoleParams)
            ->then(function (Result $result) {
                return $this->client->createCredentials($result);
            })->otherwise(function (\RuntimeException $exception) {
                throw new CredentialsException(
                    "Error in retrieving assume role credentials.",
                    0,
                    $exception
                );
            });
    }
}
