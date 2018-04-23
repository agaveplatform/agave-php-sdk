# Agave\Client\SystemsApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addExecutionSystem**](SystemsApi.md#addExecutionSystem) | **POST** /systems/v2/ | 
[**addStorageSystem**](SystemsApi.md#addStorageSystem) | **POST** /systems/v2 | 
[**addSystemCredential**](SystemsApi.md#addSystemCredential) | **POST** /systems/v2/{systemId}/credentials | 
[**addSystemRole**](SystemsApi.md#addSystemRole) | **POST** /systems/{systemId}/roles | 
[**clearSystemAuthCredentials**](SystemsApi.md#clearSystemAuthCredentials) | **DELETE** /systems/v2/{systemId}/credentials | 
[**clearSystemAuthCredentialsForInternalUser**](SystemsApi.md#clearSystemAuthCredentialsForInternalUser) | **DELETE** /systems/v2/{systemId}/credentials/{internalUsername} | 
[**clearSystemRoles**](SystemsApi.md#clearSystemRoles) | **DELETE** /systems/v2/{systemId}/roles | 
[**deleteSystem**](SystemsApi.md#deleteSystem) | **DELETE** /systems/v2/{systemId} | 
[**deleteSystemAuthCredentialForInternalUser**](SystemsApi.md#deleteSystemAuthCredentialForInternalUser) | **DELETE** /systems/v2/{systemId}/credentials/{internalUsername}/{credentialType} | 
[**deleteSystemRole**](SystemsApi.md#deleteSystemRole) | **DELETE** /systems/v2/{systemId}/roles/{username} | 
[**getSystemCredential**](SystemsApi.md#getSystemCredential) | **GET** /systems/v2/{systemId}/credentials/{internalUsername}/{credentialType} | 
[**getSystemDetails**](SystemsApi.md#getSystemDetails) | **GET** /systems/v2/{systemId} | 
[**getSystemRole**](SystemsApi.md#getSystemRole) | **GET** /systems/v2/{systemId}/roles/{username} | 
[**invokeSystemAction**](SystemsApi.md#invokeSystemAction) | **PUT** /systems/v2/{systemId} | 
[**listCredentialsForInternalUser**](SystemsApi.md#listCredentialsForInternalUser) | **GET** /systems/v2/{systemId}/credentials/{internalUsername} | 
[**listSystemCredentials**](SystemsApi.md#listSystemCredentials) | **GET** /systems/v2/{systemId}/credentials | 
[**listSystemRoles**](SystemsApi.md#listSystemRoles) | **GET** /systems/v2/{systemId}/roles | 
[**listSystems**](SystemsApi.md#listSystems) | **GET** /systems/v2/ | 
[**updateSystem**](SystemsApi.md#updateSystem) | **POST** /systems/v2/{systemId} | 
[**updateSystemCredential**](SystemsApi.md#updateSystemCredential) | **POST** /systems/v2/{systemId}/credentials/{internalUsername} | 
[**updateSystemCredentialOfType**](SystemsApi.md#updateSystemCredentialOfType) | **POST** /systems/v2/{systemId}/credentials/{internalUsername}/{credentialType} | 
[**updateSystemRole**](SystemsApi.md#updateSystemRole) | **POST** /systems/v2/{systemId}/roles/{username} | 


# **addExecutionSystem**
> \Agave\Client\Model\ExecutionSystem addExecutionSystem($body, $naked)



Add a new execution system

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\SystemRequest(); // \Agave\Client\Model\SystemRequest | The description of the system to add or update.
$naked = true; // bool | 

try {
    $result = $apiInstance->addExecutionSystem($body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->addExecutionSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\SystemRequest**](../Model/SystemRequest.md)| The description of the system to add or update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\ExecutionSystem**](../Model/ExecutionSystem.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addStorageSystem**
> \Agave\Client\Model\StorageSystem addStorageSystem($body, $naked)



Add  a storage system

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\SystemRequest(); // \Agave\Client\Model\SystemRequest | Description of a storage system
$naked = true; // bool | 

try {
    $result = $apiInstance->addStorageSystem($body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->addStorageSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\SystemRequest**](../Model/SystemRequest.md)| Description of a storage system |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\StorageSystem**](../Model/StorageSystem.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSystemCredential**
> \Agave\Client\Model\SystemCredential[] addSystemCredential($system_id, $body, $naked)



Add an internal user's credential on a system. This applies both to storage and, if applicable, login credentials.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$body = new \Agave\Client\Model\SystemCredential(); // \Agave\Client\Model\SystemCredential | The description of the internal user credential to add or update.
$naked = true; // bool | 

try {
    $result = $apiInstance->addSystemCredential($system_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->addSystemCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **body** | [**\Agave\Client\Model\SystemCredential**](../Model/SystemCredential.md)| The description of the internal user credential to add or update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\SystemCredential[]**](../Model/SystemCredential.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSystemRole**
> \Agave\Client\Model\SystemRole addSystemRole($system_id, $body, $naked)



Adds a role on the system for the given user

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system on which to grant the role
$body = new \Agave\Client\Model\SystemRoleRequest(); // \Agave\Client\Model\SystemRoleRequest | The new role to grant
$naked = true; // bool | 

try {
    $result = $apiInstance->addSystemRole($system_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->addSystemRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system on which to grant the role |
 **body** | [**\Agave\Client\Model\SystemRoleRequest**](../Model/SystemRoleRequest.md)| The new role to grant |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\SystemRole**](../Model/SystemRole.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearSystemAuthCredentials**
> clearSystemAuthCredentials($system_id, $naked)



Deletes all credentials registered to a system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$naked = true; // bool | 

try {
    $apiInstance->clearSystemAuthCredentials($system_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->clearSystemAuthCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearSystemAuthCredentialsForInternalUser**
> clearSystemAuthCredentialsForInternalUser($system_id, $internal_username, $naked)



Deletes all internal user credentials registered to a system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$internal_username = "internal_username_example"; // string | The username of a internal user on this system.
$naked = true; // bool | 

try {
    $apiInstance->clearSystemAuthCredentialsForInternalUser($system_id, $internal_username, $naked);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->clearSystemAuthCredentialsForInternalUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **internal_username** | **string**| The username of a internal user on this system. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearSystemRoles**
> clearSystemRoles($system_id, $naked)



Deletes all roles on a system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$naked = true; // bool | 

try {
    $apiInstance->clearSystemRoles($system_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->clearSystemRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSystem**
> deleteSystem($system_id, $naked)



Delete a system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The unique id of the system
$naked = true; // bool | 

try {
    $apiInstance->deleteSystem($system_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->deleteSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The unique id of the system |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSystemAuthCredentialForInternalUser**
> deleteSystemAuthCredentialForInternalUser($system_id, $internal_username, $credential_type, $naked)



Deletes the internal user credentials for the given credential type on a system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$internal_username = "internal_username_example"; // string | The username of a internal user on this system.
$credential_type = "credential_type_example"; // string | The configuration type to which to apply this credential.
$naked = true; // bool | 

try {
    $apiInstance->deleteSystemAuthCredentialForInternalUser($system_id, $internal_username, $credential_type, $naked);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->deleteSystemAuthCredentialForInternalUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **internal_username** | **string**| The username of a internal user on this system. |
 **credential_type** | **string**| The configuration type to which to apply this credential. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSystemRole**
> deleteSystemRole($system_id, $username, $naked)



Deletes all roles for a user on a system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$username = "username_example"; // string | The username of the api user associated with the role
$naked = true; // bool | 

try {
    $apiInstance->deleteSystemRole($system_id, $username, $naked);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->deleteSystemRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **username** | **string**| The username of the api user associated with the role |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSystemCredential**
> \Agave\Client\Model\SystemCredential getSystemCredential($system_id, $internal_username, $credential_type, $naked)



Get the internal user credential of the given type on the system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$internal_username = "internal_username_example"; // string | The username of a internal user on this system.
$credential_type = "credential_type_example"; // string | The configuration type to which to apply this credential.
$naked = true; // bool | 

try {
    $result = $apiInstance->getSystemCredential($system_id, $internal_username, $credential_type, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getSystemCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **internal_username** | **string**| The username of a internal user on this system. |
 **credential_type** | **string**| The configuration type to which to apply this credential. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\SystemCredential**](../Model/SystemCredential.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSystemDetails**
> \Agave\Client\Model\System getSystemDetails($system_id, $naked)



Find information about an individual system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The unique id of the system
$naked = true; // bool | 

try {
    $result = $apiInstance->getSystemDetails($system_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getSystemDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The unique id of the system |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\System**](../Model/System.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSystemRole**
> \Agave\Client\Model\SystemRole getSystemRole($system_id, $username, $naked)



Get a specific user role on this system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$username = "username_example"; // string | The username of the user about whose role you are inquiring.
$naked = true; // bool | 

try {
    $result = $apiInstance->getSystemRole($system_id, $username, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getSystemRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **username** | **string**| The username of the user about whose role you are inquiring. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\SystemRole**](../Model/SystemRole.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invokeSystemAction**
> invokeSystemAction($system_id, $body, $naked)



Perform a management action on the system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system receiving the action
$body = new \Agave\Client\Model\SystemAction(); // \Agave\Client\Model\SystemAction | The action to invoke
$naked = true; // bool | 

try {
    $apiInstance->invokeSystemAction($system_id, $body, $naked);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->invokeSystemAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system receiving the action |
 **body** | [**\Agave\Client\Model\SystemAction**](../Model/SystemAction.md)| The action to invoke |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCredentialsForInternalUser**
> \Agave\Client\Model\SystemCredentialsResponse listCredentialsForInternalUser($system_id, $internal_username)



Get a list of all internal users and their credentials on this system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$internal_username = "internal_username_example"; // string | The username of a internal user on this system.

try {
    $result = $apiInstance->listCredentialsForInternalUser($system_id, $internal_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->listCredentialsForInternalUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **internal_username** | **string**| The username of a internal user on this system. |

### Return type

[**\Agave\Client\Model\SystemCredentialsResponse**](../Model/SystemCredentialsResponse.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSystemCredentials**
> \Agave\Client\Model\SystemCredential[] listSystemCredentials($system_id, $naked, $limit, $offset)



Get a list of all internal user credentials on this system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$naked = true; // bool | 
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listSystemCredentials($system_id, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->listSystemCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **naked** | **bool**|  | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\SystemCredential[]**](../Model/SystemCredential.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSystemRoles**
> \Agave\Client\Model\MultipleSystemRoleResponse listSystemRoles($system_id, $naked, $limit, $offset)



Get a list of all users and their roles on this system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$naked = true; // bool | 
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listSystemRoles($system_id, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->listSystemRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **naked** | **bool**|  | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\MultipleSystemRoleResponse**](../Model/MultipleSystemRoleResponse.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSystems**
> \Agave\Client\Model\SystemSummary[] listSystems($offset, $type, $default, $public, $naked, $limit)



Show all systems available to the user.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The number of results skipped in the result set returned from this query
$type = "type_example"; // string | The type of system to return
$default = true; // bool | If true, only default systems be returned
$public = true; // bool | If true, only public systems will be returned. If false, no public systems will be returned. If null, both public and private systems will be returned.
$naked = true; // bool | 
$limit = 100; // int | The maximum number of results returned from this query

try {
    $result = $apiInstance->listSystems($offset, $type, $default, $public, $naked, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->listSystems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The number of results skipped in the result set returned from this query | [default to 0]
 **type** | **string**| The type of system to return | [optional]
 **default** | **bool**| If true, only default systems be returned | [optional]
 **public** | **bool**| If true, only public systems will be returned. If false, no public systems will be returned. If null, both public and private systems will be returned. | [optional]
 **naked** | **bool**|  | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]

### Return type

[**\Agave\Client\Model\SystemSummary[]**](../Model/SystemSummary.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSystem**
> \Agave\Client\Model\System updateSystem($system_id, $body, $naked)



Update a system description

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The unique id of the system
$body = new \Agave\Client\Model\SystemRequest(); // \Agave\Client\Model\SystemRequest | The description of the system to update.
$naked = true; // bool | 

try {
    $result = $apiInstance->updateSystem($system_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->updateSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The unique id of the system |
 **body** | [**\Agave\Client\Model\SystemRequest**](../Model/SystemRequest.md)| The description of the system to update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\System**](../Model/System.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSystemCredential**
> \Agave\Client\Model\SystemCredential updateSystemCredential($system_id, $internal_username, $body, $naked)



Update an internal user credential on a system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$internal_username = "internal_username_example"; // string | The username of a internal user on this system.
$body = new \Agave\Client\Model\SystemAuthConfig(); // \Agave\Client\Model\SystemAuthConfig | The description of the internal user credential to add or update.
$naked = true; // bool | 

try {
    $result = $apiInstance->updateSystemCredential($system_id, $internal_username, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->updateSystemCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **internal_username** | **string**| The username of a internal user on this system. |
 **body** | [**\Agave\Client\Model\SystemAuthConfig**](../Model/SystemAuthConfig.md)| The description of the internal user credential to add or update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\SystemCredential**](../Model/SystemCredential.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSystemCredentialOfType**
> \Agave\Client\Model\SystemCredential updateSystemCredentialOfType($system_id, $internal_username, $credential_type, $body, $naked)



Add or update a credential of the given type on a system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$internal_username = "internal_username_example"; // string | The username of a internal user on this system.
$credential_type = "credential_type_example"; // string | The configuration type to which to apply this credential.
$body = new \Agave\Client\Model\SystemAuthConfig(); // \Agave\Client\Model\SystemAuthConfig | The description of the internal user credential to add or update.
$naked = true; // bool | 

try {
    $result = $apiInstance->updateSystemCredentialOfType($system_id, $internal_username, $credential_type, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->updateSystemCredentialOfType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **internal_username** | **string**| The username of a internal user on this system. |
 **credential_type** | **string**| The configuration type to which to apply this credential. |
 **body** | [**\Agave\Client\Model\SystemAuthConfig**](../Model/SystemAuthConfig.md)| The description of the internal user credential to add or update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\SystemCredential**](../Model/SystemCredential.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSystemRole**
> \Agave\Client\Model\SystemRole updateSystemRole($system_id, $username, $body, $naked)



Update a user role on a system.

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

$apiInstance = new Agave\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$username = "username_example"; // string | The username of the api user associated with the role
$body = new \Agave\Client\Model\SystemRoleRequest(); // \Agave\Client\Model\SystemRoleRequest | The role to update.
$naked = true; // bool | 

try {
    $result = $apiInstance->updateSystemRole($system_id, $username, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->updateSystemRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **username** | **string**| The username of the api user associated with the role |
 **body** | [**\Agave\Client\Model\SystemRoleRequest**](../Model/SystemRoleRequest.md)| The role to update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\SystemRole**](../Model/SystemRole.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

