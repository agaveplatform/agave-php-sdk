<?php
namespace Agave\Client\Credentials;

/**
 * Provides access to the OAuth2 credentials used for accessing Agave services.
 */
interface CredentialsInterface
{
    /**
     * Returns the AWS secret access key for this credentials object.
     *
     * @return string
     */
    public function getAccessToken();

    /**
     * Get the associated security token if available
     *
     * @return string|null
     */
    public function getRefreshToken();

    /**
     * Get the UNIX timestamp in which the credentials will expire
     *
     * @return int|null
     */
    public function getExpiresAt();

    /**
     * Check if the credentials are expired
     *
     * @return bool
     */
    public function isExpired();

    /**
     * Converts the credentials to an associative array.
     *
     * @return array
     */
    public function toArray();
}
