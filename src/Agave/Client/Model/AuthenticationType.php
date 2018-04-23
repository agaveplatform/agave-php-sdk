<?php
/**
 * AuthenticationType
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
use \Agave\Client\ObjectSerializer;

/**
 * AuthenticationType Class Doc Comment
 *
 * @category Class
 * @package  Agave\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationType
{
    /**
     * Possible values of this enum
     */
    const APIKEYS = 'APIKEYS';
    const LOCAL = 'LOCAL';
    const PAM = 'PAM';
    const PASSWORD = 'PASSWORD';
    const SSHKEYS = 'SSHKEYS';
    const TOKEN = 'TOKEN';
    const X509 = 'X509';
    const ANONYMOUS = 'ANONYMOUS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APIKEYS,
            self::LOCAL,
            self::PAM,
            self::PASSWORD,
            self::SSHKEYS,
            self::TOKEN,
            self::X509,
            self::ANONYMOUS,
        ];
    }
}


