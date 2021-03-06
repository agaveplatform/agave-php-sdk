<?php
/**
 * SystemActionType
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
 * SystemActionType Class Doc Comment
 *
 * @category Class
 * @description The actions available on a system.
 * @package  Agave\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SystemActionType
{
    /**
     * Possible values of this enum
     */
    const PUBLISH = 'PUBLISH';
    const UNPUBLISH = 'UNPUBLISH';
    const SETDEFAULT = 'SETDEFAULT';
    const UNSETDEFAULT = 'UNSETDEFAULT';
    const SETGLOBALDEFAULT = 'SETGLOBALDEFAULT';
    const UNSETGLOBALDEFAULT = 'UNSETGLOBALDEFAULT';
    const _CLONE = 'CLONE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PUBLISH,
            self::UNPUBLISH,
            self::SETDEFAULT,
            self::UNSETDEFAULT,
            self::SETGLOBALDEFAULT,
            self::UNSETGLOBALDEFAULT,
            self::_CLONE,
        ];
    }
}


