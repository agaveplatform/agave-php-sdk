<?php
namespace Agave\Client\Credentials;

use Agave\Client\Model\Client;
use Agave\Client\Model\Token;
use Agave\Client\Util\AuthCacheUtil;

/**
 * Basic implementation of the Agave Credentials interface that allows callers to
 * pass in the Oauth2 tokens and client keys.
 */
class Credentials implements CredentialsInterface, \Serializable
{
    private $token;
    private $client;
    private $username;
    private $password;

    /**
     * Constructs a new BasicAWSCredentials object, with the specified AWS
     * access key and AWS secret key
     *
     * @param Token  $token     Agave Token object containing access and refresh tokens
     * @param Client $client    Agave Client object representing a registered oauth client and keys
     * @param string $username  Username of the user for whom the credentials apply
     * @param string $password  Password of the user for whom the token should be created
     */
    public function __construct(Token $token, Client $client, $username = null, $password = null)
    {
        $this->token = empty($token) ? new Token() : $token;

        $this->client = empty($client) ? new Client() : $client;

        $this->username = isset($username) ? trim($username) : null;

        $this->password = isset($password) ? trim($password) : null;
    }



    public function isExpired()
    {
        return $this->token !== null && time() >= $this->token->getExpiresAt();
    }

    public function toArray()
    {
        $authCacheUtil = new AuthCacheUtil();
        $authCacheUtil->setToken($this->token)
            ->setClient($this->client)
            ->setUsername($this->username);

        return $authCacheUtil->toArray();
    }

    public function serialize()
    {
        /** @var AuthCacheUtil $authCacheUtil */
        $authCacheUtil = new AuthCacheUtil();
        $authCacheUtil->setToken($this->token)
            ->setClient($this->client)
            ->setUsername($this->username);

        return $authCacheUtil->__toString();

    }

    public function unserialize($serialized)
    {
        $data = json_decode($serialized, true);

        $this->token = new Token($data);
        $this->client = new Client($data);
        $this->username = $data['username'];
        $this->password = $data['password'];
    }

    /**
     * Returns the AWS secret access key for this credentials object.
     *
     * @return string
     */
    public function getAccessToken()
    {
        return isset($this->token) ? $this->token->getAccessToken() : null;
    }

    /**
     * Get the associated security token if available
     *
     * @return string|null
     */
    public function getRefreshToken()
    {
        return isset($this->token) ? $this->token->getRefreshToken() : null;
    }

    /**
     * Get the UNIX timestamp in which the credentials will expire
     *
     * @return int|null
     */
    public function getExpiresAt()
    {
        return isset($this->token) ? $this->token->getExpiresAt() : null;
    }
}
