<?php
/**
 * AuthCacheUtil
 *
 * PHP version 5
 *
 * @category Class
 * @package  Agave\Client\Util
 * @author   Rion Dooley <deardooley@gmail.com>
 */

/**
 * Agave Platform Science API
 *
 * Power your digital lab and reduce the time from theory to discovery using the Agave Science-as-a-Service API Platform. Agave provides hosted services that allow researchers to manage data, conduct experiments, and publish and share results from anywhere at any time.
 *
 * OpenAPI spec version: 2.2.14
 *
 *
 */

/**
 * NOTE: This is a custom class overlaid on the autogenerated swagger-codegen client code.
 */

namespace Agave\Client\Util;

use Agave\Client\Configuration;
use Agave\Client\Exceptions\ConfigurationException;
use Agave\Client\Model\Client;
use Agave\Client\Model\ModelInterface;
use Agave\Client\Model\Token;
use \ArrayAccess;
use \Agave\Client\ObjectSerializer;
use DateTime;

/**
 * AuthCacheUtil
 *
 * Utility class for reading and writing a user's auth cache to/from the local disk in a consistent way across all
 * Agave Platform language SDK. This class is implemented as a static utility class to ensure consistent behavior
 * across both sync and async use cases.
 *
 * @category Class
 * @package  Agave\Client\Util
 * @author   Rion Dooley <deardooley@gmail.com>
 */
class AuthCacheUtil implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = "AuthCacheUtil";

    protected static $authCache = null;

    protected $authCacheDir = null;


    public static $environmenVariableMap = [
        'AGAVE_BASE_URL' => 'baseUrl',
        'AGAVE_DEV_URL' => 'devUrl',
        'AGAVE_TENANT' => 'tenantId',
        'AGAVE_ACCESS_TOKEN' => 'accessToken',
        'AGAVE_REFRESH_TOKEN' => 'refreshToken',
        'AGAVE_CLIENT_KEY' => 'apiKey',
        'AGAVE_CLIENT_SECRET' => 'apiSecret',
        'AGAVE_CLIENT_NAME' => 'clientName',
        'AGAVE_USERNAME' => 'username',
        'AGAVE_PASSWORD' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        "tenantId" => "string",
        "baseUrl" => "string",
        "devUrl" => "string",
        "apiSecret" => "string",
        "apiKey" => "string",
        "username" => "string",
        "accessToken" => "string",
        "refreshToken" => "string",
        "createdAt" => "DateTime",
        "expiresIn" => "integer",
        "expiresAt" => "DateTime",
        "clientName" => "string"
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        "tenantId" => null,
        "baseUrl" => null,
        "devUrl" => null,
        "apiSecret" => null,
        "apiKey" => null,
        "username" => null,
        "accessToken" => null,
        "refreshToken" => null,
        "createdAt" => 'DateTime',
        "expiresIn" => 'integer',
        "expiresAt" => 'DateTime',
        "clientName" => null
    ];
    /**
     * @var array|mixed[]
     */
    private $data;

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        "tenantId" => "tenantid",
        "baseUrl" => "baseurl",
        "devUrl" => "devurl",
        "apiSecret" => "apisecret",
        "apiKey" => "apikey",
        "username" => "username",
        "accessToken" => "access_token",
        "refreshToken" => "refresh_token",
        "createdAt" => "created_at",
        "expiresIn" => "expires_in",
        "expiresAt" => "expires_at",
        "clientName" => "client_name"
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        "tenantId" => "setTenantId",
        "baseUrl" => "setBaseUrl",
        "devUrl" => "setDevUrl",
        "apiSecret" => "setApiSecret",
        "apiKey" => "setApiKey",
        "username" => "setUsername",
        "accessToken" => "setAccessToken",
        "refreshToken" => "setRefreshToken",
        "createdAt" => "setCreatedAt",
        "expiresIn" => "setExpiresIn",
        "expiresAt" => "setExpiresAt",
        "clientName" => "setClientName"
//        'key' => 'getKey',
//        'secret' => 'setSecret',
//        'consumerKey' => 'setKey',
//        'consumerSecret' => 'setSecret',
//        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        "tenantId" => "getTenantId",
        "baseUrl" => "getBaseUrl",
        "devUrl" => "getDevUrl",
        "apiSecret" => "getApisecret",
        "apiKey" => "getApiKey",
        "username" => "getUsername",
        "accessToken" => "getAccessToken",
        "refreshToken" => "getRefreshToken",
        "createdAt" => "getCreatedAt",
        "expiresIn" => "getExpiresIn",
        "expiresAt" => "getExpiresAt",
        "clientName" => "getClientName"
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     * @param null $authCacheDir
     */
    function __construct(array $data = null, $authCacheDir = null)
    {
        $this->authCacheDir = $authCacheDir === null ? self::getDefaultAuthCacheDirectory() : $authCacheDir;

        $this->container["tenantId"] = isset($data['tenantId']) ?
            $data['tenantId'] : (isset($data['tenantid']) ?
                $data['tenantid'] : (isset($data['tenantCode']) ?
                    $data['tenantCode'] : (isset($data['AGAVE_TENANT']) ?
                        $data['AGAVE_TENANT'] : null)));

        $this->container["apiSecret"] = isset($data['apiSecret']) ?
            $data['apiSecret'] : (isset($data['apisecret']) ?
                $data['apisecret'] : (isset($data['api_secret']) ?
                    $data['api_secret'] : (isset($data['clientSecret']) ?
                        $data['clientSecret'] : (isset($data['secret']) ?
                            $data['secret'] : (isset($data['consumerSecret']) ?
                                $data['consumerSecret']: (isset($data['consumer_secret']) ?
                                    $data['consumer_secret']: (isset($data['AGAVE_CLIENT_SECRET']) ?
                                        $data['AGAVE_CLIENT_SECRET'] : null)))))));

        $this->container["apiKey"] = isset($data['apiKey']) ?
            $data['apiKey'] : (isset($data['apikey']) ?
                $data['apikey'] : (isset($data['api_key']) ?
                    $data['api_key'] : (isset($data['clientKey']) ?
                        $data['clientKey'] : (isset($data['key']) ?
                            $data['key'] : (isset($data['consumerKey']) ?
                                $data['consumerKey']: (isset($data['consumer_key']) ?
                                    $data['consumer_key']: (isset($data['AGAVE_CLIENT_KEY']) ?
                                        $data['AGAVE_CLIENT_KEY'] : null)))))));

        $this->container["baseUrl"] = isset($data['baseUrl']) ?
            $data['baseUrl'] : (isset($data['baseurl']) ?
                $data['baseurl'] : (isset($data['base_url']) ?
                    $data['base_url'] : (isset($data['AGAVE_BASE_URL']) ?
                        $data['AGAVE_BASE_URL'] : null)));

        $this->container["devUrl"] = isset($data['devUrl']) ?
            $data['devUrl'] : (isset($data['devurl']) ?
                $data['devurl'] : (isset($data['dev_url']) ?
                    $data['dev_url'] : (isset($data['AGAVE_DEV_URL']) ?
                        $data['AGAVE_DEV_URL'] : null)));

        $this->container["username"] = isset($data['username']) ?
            $data['username'] : (isset($data['AGAVE_USERNAME']) ?
                $data['AGAVE_USERNAME'] : null);

        $this->container["accessToken"] = isset($data['accessToken']) ?
            $data['accessToken'] : (isset($data['accesstoken']) ?
                $data['accesstoken'] : (isset($data['access_token']) ?
                    $data['access_token'] : (isset($data['AGAVE_ACCESS_TOKEN']) ?
                        $data['AGAVE_ACCESS_TOKEN'] : null)));

        $this->container["refreshToken"] = isset($data['refreshToken']) ?
            $data['refreshToken'] : (isset($data['refreshtoken']) ?
                $data['refreshtoken'] : (isset($data['refresh_token']) ?
                    $data['refresh_token'] : (isset($data['AGAVE_REFRESH_TOKEN']) ?
                        $data['AGAVE_REFRESH_TOKEN'] : null)));

        $this->container["createdAt"] = isset($data['createdAt']) ?
            $data['createdAt'] : (isset($data['createdat']) ?
                $data['createdat'] : (isset($data['created_at']) ?
                    $data['created_at'] : null));

        $this->container["expiresIn"] = isset($data['expiresIn']) ?
            $data['expiresIn'] : (isset($data['expiresin']) ?
                $data['expiresin'] : (isset($data['expires_in']) ?
                    $data['expires_in'] : null));

        $this->container["expiresAt"] = isset($data['expiresAt']) ?
            $data['expiresAt'] : (isset($data['expiresat']) ?
                $data['expiresat'] : (isset($data['expires_at']) ?
                    $data['expires_at'] : null));

        $this->container["clientName"] = isset($data['clientName']) ?
            $data['clientName'] : (isset($data['clientname']) ?
                $data['clientname'] : (isset($data['name']) ?
                    $data['name'] : (isset($data['client_name']) ?
                        $data['client_name'] : (isset($data['AGAVE_CLIENT_NAME']) ?
                            $data['AGAVE_CLIENT_NAME'] : null))));
        $this->data = $data;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];


        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
     * @param string $tenantId
     */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->container['baseUrl'];
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl($baseUrl)
    {
        $this->container['baseUrl'] = $baseUrl;
    }

    /**
     * @return string
     */
    public function getDevUrl()
    {
        return $this->container['devUrl'];
    }

    /**
     * @param string $devUrl
     */
    public function setDevUrl($devUrl)
    {
        $this->container['devUrl'] = $devUrl;
    }

    /**
     * @return string
     */
    public function getApiSecret()
    {
        return $this->container['apiSecret'];
    }

    /**
     * @param string $apiSecret
     */
    public function setApiSecret($apiSecret)
    {
        $this->container['apiSecret'] = $apiSecret;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['apiKey'];
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->container['apiKey'] = $apiKey;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
     * @param string $refreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refreshToken'] = $refreshToken;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
    }

    /**
     * @return string
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * @param integer $expiresIn
     */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expires_in'] = $expiresIn;
    }

    /**
     * @return DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * @param string $expiresAt
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
    }

    /**
     * @return string
     */
    public function getClientName()
    {
        return $this->container['clientName'];
    }

    /**
     * @param string $clientName
     */
    public function setClientName($clientName)
    {
        $this->container['clientName'] = $clientName;
    }

    /**
     * @return string
     */
    public function getAuthCacheDir()
    {
        return $this->authCacheDir;
    }

    /**
     * @param string $authCacheDir
     */
    public function setAuthCacheDir($authCacheDir)
    {
        if ($authCacheDir != null) {
            $authCacheDir = trim($authCacheDir);
            if (empty($authCacheDir)) {
                $authCacheDir = getcwd();
            }
            if (!Configuration::endsWith($authCacheDir, "/")) {
                $authCacheDir = $authCacheDir . "/";
            }
        }

        $this->authCacheDir = $authCacheDir;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Reads in the auth cache config from a serialized JSON string and initializes
     * the config with the values. This should work regardless of which SDK wrote
     * the JSON object.
     *
     * @param string $jsonValue the serialized JSON to load
     * @return AuthCacheUtil
     */
    public static function readFromJSON($jsonValue) {

        if (!empty($jsonValue)) {
            if ($json = json_decode($jsonValue, true)) {
                return new AuthCacheUtil($json);
            }
        }

        return new AuthCacheUtil([]);
    }

    /**
     * Reads in the auth cache config from a file on disk. The file should
     * contain a valid JSON auth config. If the file does not exist on disk,
     * an empty config will be loaded. No exception will be thrown.
     *
     * @param string $value the serialized JSON to load. Set to #getDefaultAuthCacheDirectory if null
     * @return AuthCacheUtil
     * @throws ConfigurationException
     */
    public static function readFromFile($path = null) {

        if ($path === null) {
            $path = self::getDefaultAuthCacheDirectory();
        }
        if (trim($path) == null) {
            $path = getcwd();
        }

        if (file_exists($path)) {
            if (is_file($path)) {
                if (basename($path) === 'current') {
                    $cacheFilePath = $path;
                    $path = substr($path, 0, -strlen("current"));
                } else {
                    throw new ConfigurationException("Auth cache directory should point to a directory. " .
                        "The configuration file, if included, should be named \"current\" in it");
                }
            } else {
                $cacheFilePath = $path . "/current";
            }
        }
        else if (basename($path) === 'current') {
            $cacheFilePath = $path;
            $path = substr($path, 0, -strlen("current"));
        }
        else {
            $cacheFilePath = $path;
        }

        $jsonValue = file_exists($cacheFilePath ) ? file_get_contents($cacheFilePath) : null;

        $authCache = self::readFromJSON($jsonValue);

        $authCache->setAuthCacheDir($path);

        return $authCache;
    }

    /**
     * Serializes the auth cache object to JSON and writes to a file at
     * <pre>$this->getAuthCacheDir() . '/current'</pre>
     *
     * @return bool true if the file was written, false otherwise
     */
    public function write() {

        $path = $this->getAuthCacheDir();

        if ($path === null) {
            $path = self::getDefaultAuthCacheDirectory();
        }
        else if (empty($path)) {
            $path = getcwd();
        }

        if (!file_exists($path)) {
            mkdir($path, 750, true);
        }

        $cacheFilePath = $path . "/current";

        return file_put_contents($cacheFilePath, json_encode(ObjectSerializer::sanitizeForSerialization($this)));
    }

    /**
     * Resolve the local auth cache. Following order is checked.
     *
     * 1. $path user supplied path
     * 2. AGAVE_CACHE_DIR environment variable
     * 3. ~/.agave if not found anywhere else
     *
     * @param string $path path to the cache directory on the local system.
     * @return array|false|null|string
     */
    public static function getDefaultAuthCacheDirectory() {

        $cacheDir = getenv("AGAVE_CACHE_DIR");

        if (empty($cacheDir)) {
            $cacheDir = getenv("HOME") . "/.agave/";
        }

        return Configuration::endsWith($cacheDir, "/") ? $cacheDir : $cacheDir . "/";
    }


    /**
     * Updates the AuthCacheUtil with the values from the Token
     *
     * @param Token $token
     * @return $this
     */
    public function setToken($token) {
        if (isset($token)) {
            $this->setAccessToken($token->getAccessToken());
            $this->setRefreshToken($token->getRefreshToken());
            $this->setExpiresIn($token->getExpiresIn());
            $this->setExpiresAt($token->getExpiresAt());
        }

        return $this;
    }


    /**
     * Updates the AuthCache with the values from the Client
     *
     * @param Client $client
     */
    public function setClient($client) {
        if (isset($client)) {
            $this->setApiSecret($client->getSecret());
            $this->setApiKey($client->getKey());
            $this->setClientName($client->getName());
        }

        return $this;
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function toArray()
    {
        return $this->container;
    }
}


