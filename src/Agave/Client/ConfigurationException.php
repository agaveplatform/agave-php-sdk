<?php
/**
 * ConfigurationException
 * PHP version 5
 *
 * @category Class
 * @package  Agave\Client
 */

/**
 * Agave Platform Science API
 *
 * Power your digital lab and reduce the time from theory to discovery using the Agave Science-as-a-Service API Platform. Agave provides hosted services that allow researchers to manage data, conduct experiments, and publish and share results from anywhere at any time.
 *
 * OpenAPI spec version: 2.2.14
 */

namespace Agave\Client;

use \Exception;
use Throwable;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Agave\Client
 */
class ConfigurationException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }


}
