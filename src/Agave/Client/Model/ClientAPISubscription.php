<?php
/**
 * ClientAPISubscription
 *
 * PHP version 5
 *
 * @category Class
 * @package  Agave\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Agave Platform Science API
 *
 * Power your digital lab and reduce the time from theory to discovery using the Agave Science-as-a-Service API Platform. Agave provides hosted services that allow researchers to manage data, conduct experiments, and publish and share results from anywhere at any time.
 *
 * OpenAPI spec version: 2.2.14
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Agave\Client\Model;

use \ArrayAccess;
use \Agave\Client\ObjectSerializer;

/**
 * ClientAPISubscription Class Doc Comment
 *
 * @category Class
 * @package  Agave\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientAPISubscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClientAPISubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_context' => 'string',
        'api_name' => 'string',
        'api_provider' => 'string',
        'api_version' => 'string',
        'status' => '\Agave\Client\Model\ClientAPISubscriptionStatusType',
        'tier' => '\Agave\Client\Model\ClientSubscriptionTier'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_context' => null,
        'api_name' => null,
        'api_provider' => null,
        'api_version' => null,
        'status' => null,
        'tier' => null
    ];

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
        'api_context' => 'apiContext',
        'api_name' => 'apiName',
        'api_provider' => 'apiProvider',
        'api_version' => 'apiVersion',
        'status' => 'status',
        'tier' => 'tier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_context' => 'setApiContext',
        'api_name' => 'setApiName',
        'api_provider' => 'setApiProvider',
        'api_version' => 'setApiVersion',
        'status' => 'setStatus',
        'tier' => 'setTier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_context' => 'getApiContext',
        'api_name' => 'getApiName',
        'api_provider' => 'getApiProvider',
        'api_version' => 'getApiVersion',
        'status' => 'getStatus',
        'tier' => 'getTier'
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
     */
    public function __construct(array $data = null)
    {
        $this->container['api_context'] = isset($data['api_context']) ? $data['api_context'] : null;
        $this->container['api_name'] = isset($data['api_name']) ? $data['api_name'] : null;
        $this->container['api_provider'] = isset($data['api_provider']) ? $data['api_provider'] : null;
        $this->container['api_version'] = isset($data['api_version']) ? $data['api_version'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['api_context'] === null) {
            $invalidProperties[] = "'api_context' can't be null";
        }
        if ($this->container['api_name'] === null) {
            $invalidProperties[] = "'api_name' can't be null";
        }
        if ($this->container['api_provider'] === null) {
            $invalidProperties[] = "'api_provider' can't be null";
        }
        if ($this->container['api_version'] === null) {
            $invalidProperties[] = "'api_version' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['tier'] === null) {
            $invalidProperties[] = "'tier' can't be null";
        }
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
     * Gets api_context
     *
     * @return string
     */
    public function getApiContext()
    {
        return $this->container['api_context'];
    }

    /**
     * Sets api_context
     *
     * @param string $api_context The base url path of the API.
     *
     * @return $this
     */
    public function setApiContext($api_context)
    {
        $this->container['api_context'] = $api_context;

        return $this;
    }

    /**
     * Gets api_name
     *
     * @return string
     */
    public function getApiName()
    {
        return $this->container['api_name'];
    }

    /**
     * Sets api_name
     *
     * @param string $api_name The name of the API.
     *
     * @return $this
     */
    public function setApiName($api_name)
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets api_provider
     *
     * @return string
     */
    public function getApiProvider()
    {
        return $this->container['api_provider'];
    }

    /**
     * Sets api_provider
     *
     * @param string $api_provider The user who registered the API.
     *
     * @return $this
     */
    public function setApiProvider($api_provider)
    {
        $this->container['api_provider'] = $api_provider;

        return $this;
    }

    /**
     * Gets api_version
     *
     * @return string
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     *
     * @param string $api_version The current major version of the API. This is appended to the api_context to create the base API url.
     *
     * @return $this
     */
    public function setApiVersion($api_version)
    {
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Agave\Client\Model\ClientAPISubscriptionStatusType
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Agave\Client\Model\ClientAPISubscriptionStatusType $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tier
     *
     * @return \Agave\Client\Model\ClientSubscriptionTier
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param \Agave\Client\Model\ClientSubscriptionTier $tier tier
     *
     * @return $this
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
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
}


