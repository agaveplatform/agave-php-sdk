# Agave\Client\ProfilesApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInternalUser**](ProfilesApi.md#addInternalUser) | **POST** /profiles/v2/{apiUsername}/users | 
[**addProfile**](ProfilesApi.md#addProfile) | **POST** /profiles/v2 | 
[**clearInternalUsers**](ProfilesApi.md#clearInternalUsers) | **DELETE** /profiles/v2/{apiUsername}/users | 
[**deleteInternalUser**](ProfilesApi.md#deleteInternalUser) | **DELETE** /profiles/v2/{apiUsername}/users/{internalUsername} | 
[**deleteProfile**](ProfilesApi.md#deleteProfile) | **DELETE** /profiles/v2/{apiUsername} | 
[**getInternalUser**](ProfilesApi.md#getInternalUser) | **GET** /profiles/v2/{apiUsername}/users/{internalUsername} | 
[**getProfile**](ProfilesApi.md#getProfile) | **GET** /profiles/v2/{apiUsername} | 
[**listInternalUsers**](ProfilesApi.md#listInternalUsers) | **GET** /profiles/v2/{apiUsername}/users | 
[**listProfiles**](ProfilesApi.md#listProfiles) | **GET** /profiles/v2 | 
[**updateInternalUser**](ProfilesApi.md#updateInternalUser) | **POST** /profiles/v2/{apiUsername}/users/{internalUsername} | 
[**updateProfile**](ProfilesApi.md#updateProfile) | **POST** /profiles/v2/{apiUsername} | 


# **addInternalUser**
> \Agave\Client\Model\InternalUser addInternalUser($api_username, $body, $naked)



Create or update an internal user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_username = "api_username_example"; // string | The username of a valid api user
$body = new \Agave\Client\Model\ProfileRequest(); // \Agave\Client\Model\ProfileRequest | The internal user to create.
$naked = true; // bool | 

try {
    $result = $apiInstance->addInternalUser($api_username, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->addInternalUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_username** | **string**| The username of a valid api user |
 **body** | [**\Agave\Client\Model\ProfileRequest**](../Model/ProfileRequest.md)| The internal user to create. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\InternalUser**](../Model/InternalUser.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProfile**
> \Agave\Client\Model\Profile addProfile($body, $naked)



Add a new user profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\Profile(); // \Agave\Client\Model\Profile | The user profile to add
$naked = true; // bool | 

try {
    $result = $apiInstance->addProfile($body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->addProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\Profile**](../Model/Profile.md)| The user profile to add |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearInternalUsers**
> clearInternalUsers($api_username, $naked)



Delete all internal users created by the authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_username = "api_username_example"; // string | The username of a valid api user
$naked = true; // bool | 

try {
    $apiInstance->clearInternalUsers($api_username, $naked);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->clearInternalUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_username** | **string**| The username of a valid api user |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInternalUser**
> \Agave\Client\Model\InternalUser deleteInternalUser($api_username, $internal_username, $naked)



Delete all internal users created by the authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_username = "api_username_example"; // string | The username of a valid api user
$internal_username = "internal_username_example"; // string | The username of a valid internal user
$naked = true; // bool | 

try {
    $result = $apiInstance->deleteInternalUser($api_username, $internal_username, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteInternalUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_username** | **string**| The username of a valid api user |
 **internal_username** | **string**| The username of a valid internal user |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\InternalUser**](../Model/InternalUser.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProfile**
> \Agave\Client\Model\EmptyClientResponse deleteProfile($api_username, $filter, $naked)



Delte a user profile by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_username = "api_username_example"; // string | The username of the profile to update
$filter = "*"; // string | A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects
$naked = true; // bool | 

try {
    $result = $apiInstance->deleteProfile($api_username, $filter, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_username** | **string**| The username of the profile to update |
 **filter** | **string**| A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects | [optional] [default to *]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\EmptyClientResponse**](../Model/EmptyClientResponse.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInternalUser**
> \Agave\Client\Model\InternalUser getInternalUser($api_username, $internal_username, $naked)



Find api user profile by their api username

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_username = "api_username_example"; // string | The username of a valid api user
$internal_username = "internal_username_example"; // string | The username of a valid internal user
$naked = true; // bool | 

try {
    $result = $apiInstance->getInternalUser($api_username, $internal_username, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getInternalUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_username** | **string**| The username of a valid api user |
 **internal_username** | **string**| The username of a valid internal user |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\InternalUser**](../Model/InternalUser.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfile**
> \Agave\Client\Model\Profile getProfile($api_username, $filter, $naked)



Get a user profile by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_username = "api_username_example"; // string | The username of the profile to update
$filter = "*"; // string | A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects
$naked = true; // bool | 

try {
    $result = $apiInstance->getProfile($api_username, $filter, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_username** | **string**| The username of the profile to update |
 **filter** | **string**| A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects | [optional] [default to *]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listInternalUsers**
> \Agave\Client\Model\InternalUser[] listInternalUsers($api_username, $username, $name, $email, $naked)



List all internal users created by the authenticated user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_username = "api_username_example"; // string | The username of a valid api user
$username = "username_example"; // string | The username of the internal user
$name = "name_example"; // string | The full name of the internal user
$email = "email_example"; // string | The email address of the internal user
$naked = true; // bool | 

try {
    $result = $apiInstance->listInternalUsers($api_username, $username, $name, $email, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->listInternalUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_username** | **string**| The username of a valid api user |
 **username** | **string**| The username of the internal user | [optional]
 **name** | **string**| The full name of the internal user | [optional]
 **email** | **string**| The email address of the internal user | [optional]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\InternalUser[]**](../Model/InternalUser.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProfiles**
> \Agave\Client\Model\Profile[] listProfiles($username, $name, $email, $naked)



List user profiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = "username_example"; // string | The username to search for
$name = "name_example"; // string | The user full name
$email = "email_example"; // string | The user email address
$naked = true; // bool | 

try {
    $result = $apiInstance->listProfiles($username, $name, $email, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->listProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The username to search for | [optional]
 **name** | **string**| The user full name | [optional]
 **email** | **string**| The user email address | [optional]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Profile[]**](../Model/Profile.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInternalUser**
> \Agave\Client\Model\InternalUser updateInternalUser($api_username, $internal_username, $body, $naked)



Create or update the given internal user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_username = "api_username_example"; // string | The username of a valid api user
$internal_username = "internal_username_example"; // string | The username of a valid internal user
$body = new \Agave\Client\Model\ProfileRequest(); // \Agave\Client\Model\ProfileRequest | A JSON description of the internal user to update
$naked = true; // bool | 

try {
    $result = $apiInstance->updateInternalUser($api_username, $internal_username, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateInternalUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_username** | **string**| The username of a valid api user |
 **internal_username** | **string**| The username of a valid internal user |
 **body** | [**\Agave\Client\Model\ProfileRequest**](../Model/ProfileRequest.md)| A JSON description of the internal user to update |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\InternalUser**](../Model/InternalUser.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProfile**
> \Agave\Client\Model\Profile updateProfile($api_username, $body, $naked)



Update an existing user profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: agaveApplication
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agaveImplicit
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: agavePassword
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_username = "api_username_example"; // string | The username of the profile to update
$body = new \Agave\Client\Model\ProfileRequest(); // \Agave\Client\Model\ProfileRequest | The updated profile
$naked = true; // bool | 

try {
    $result = $apiInstance->updateProfile($api_username, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_username** | **string**| The username of the profile to update |
 **body** | [**\Agave\Client\Model\ProfileRequest**](../Model/ProfileRequest.md)| The updated profile |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

