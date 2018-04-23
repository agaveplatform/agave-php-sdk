# Agave\Client\MetaApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMetadata**](MetaApi.md#addMetadata) | **POST** /meta/v2/data | 
[**addMetadataPermission**](MetaApi.md#addMetadataPermission) | **POST** /meta/v2/data/{uuid}/pems | 
[**addMetadataSchema**](MetaApi.md#addMetadataSchema) | **POST** /meta/v2/schemas | 
[**addMetadataSchemaPermission**](MetaApi.md#addMetadataSchemaPermission) | **POST** /meta/v2/schemas/{uuid}/pems | 
[**clearMetadataPermissions**](MetaApi.md#clearMetadataPermissions) | **DELETE** /meta/v2/data/{uuid}/pems | 
[**clearMetadataSchemaPermissions**](MetaApi.md#clearMetadataSchemaPermissions) | **DELETE** /meta/v2/schemas/{uuid}/pems | 
[**deleteMetadata**](MetaApi.md#deleteMetadata) | **DELETE** /meta/v2/data/{uuid} | 
[**deleteMetadataPermission**](MetaApi.md#deleteMetadataPermission) | **DELETE** /meta/v2/data/{uuid}/pems/{username} | 
[**deleteMetadataSchema**](MetaApi.md#deleteMetadataSchema) | **DELETE** /meta/v2/schemas/{uuid} | 
[**deleteSchemaPermission**](MetaApi.md#deleteSchemaPermission) | **DELETE** /meta/v2/schemas/{uuid}/pems/{username} | 
[**getMetadata**](MetaApi.md#getMetadata) | **GET** /meta/v2/data/{uuid} | 
[**getMetadataPermission**](MetaApi.md#getMetadataPermission) | **GET** /meta/v2/data/{uuid}/pems/{username} | 
[**getMetadataSchema**](MetaApi.md#getMetadataSchema) | **GET** /meta/v2/schemas/{uuid} | 
[**getMetadataSchemaPermission**](MetaApi.md#getMetadataSchemaPermission) | **GET** /meta/v2/schemas/{uuid}/pems/{username} | 
[**listMetadata**](MetaApi.md#listMetadata) | **GET** /meta/v2/data | 
[**listMetadataPermissions**](MetaApi.md#listMetadataPermissions) | **GET** /meta/v2/data/{uuid}/pems | 
[**listMetadataSchema**](MetaApi.md#listMetadataSchema) | **GET** /meta/v2/schemas | 
[**listMetadataSchemaPermissions**](MetaApi.md#listMetadataSchemaPermissions) | **GET** /meta/v2/schemas/{uuid}/pems | 
[**updateMetadata**](MetaApi.md#updateMetadata) | **POST** /meta/v2/data/{uuid} | 
[**updateMetadataPermission**](MetaApi.md#updateMetadataPermission) | **POST** /meta/v2/data/{uuid}/pems/{username} | 
[**updateMetadataSchema**](MetaApi.md#updateMetadataSchema) | **POST** /meta/v2/schemas/{uuid} | 
[**updateMetadataSchemaPermission**](MetaApi.md#updateMetadataSchemaPermission) | **POST** /meta/v2/schemas/{uuid}/pems/{username} | 


# **addMetadata**
> \Agave\Client\Model\Metadata addMetadata($body, $naked)



Update or Add new Metadata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\Metadata(); // \Agave\Client\Model\Metadata | The metadata to add.
$naked = true; // bool | 

try {
    $result = $apiInstance->addMetadata($body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->addMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\Metadata**](../Model/Metadata.md)| The metadata to add. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Metadata**](../Model/Metadata.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMetadataPermission**
> \Agave\Client\Model\Permission addMetadataPermission($uuid, $body, $naked)



Add a user permission for the given metadata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata item
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | The metadata permission to update.
$naked = true; // bool | 

try {
    $result = $apiInstance->addMetadataPermission($uuid, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->addMetadataPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata item |
 **body** | [**\Agave\Client\Model\Permission**](../Model/Permission.md)| The metadata permission to update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMetadataSchema**
> \Agave\Client\Model\MetadataSchema addMetadataSchema($body, $naked)



Add a new Metadata Schema.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\MetadataSchema(); // \Agave\Client\Model\MetadataSchema | A valid JSON Schema object
$naked = true; // bool | 

try {
    $result = $apiInstance->addMetadataSchema($body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->addMetadataSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\MetadataSchema**](../Model/MetadataSchema.md)| A valid JSON Schema object |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\MetadataSchema**](../Model/MetadataSchema.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMetadataSchemaPermission**
> \Agave\Client\Model\Permission addMetadataSchemaPermission($uuid, $body, $naked)



Add a user permission for the given schema.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata schema item
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | The schema permission to update.
$naked = true; // bool | 

try {
    $result = $apiInstance->addMetadataSchemaPermission($uuid, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->addMetadataSchemaPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata schema item |
 **body** | [**\Agave\Client\Model\Permission**](../Model/Permission.md)| The schema permission to update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMetadataPermissions**
> clearMetadataPermissions($uuid, $naked)



Deletes all permissions on the given metadata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata item
$naked = true; // bool | 

try {
    $apiInstance->clearMetadataPermissions($uuid, $naked);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->clearMetadataPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata item |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMetadataSchemaPermissions**
> clearMetadataSchemaPermissions($uuid, $naked)



Deletes all permissions on the given schema.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata schema item
$naked = true; // bool | 

try {
    $apiInstance->clearMetadataSchemaPermissions($uuid, $naked);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->clearMetadataSchemaPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata schema item |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadata**
> deleteMetadata($uuid, $naked)



Remove Metadata from the system.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata item
$naked = true; // bool | 

try {
    $apiInstance->deleteMetadata($uuid, $naked);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->deleteMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata item |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadataPermission**
> deleteMetadataPermission($uuid, $username, $naked)



Removes user permissions for a user on a given metadata resource.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata item
$username = "username_example"; // string | The username of the permission owner
$naked = true; // bool | 

try {
    $apiInstance->deleteMetadataPermission($uuid, $username, $naked);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->deleteMetadataPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata item |
 **username** | **string**| The username of the permission owner |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadataSchema**
> deleteMetadataSchema($uuid, $naked)



Remove Metadata Schema from the system.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata schema item
$naked = true; // bool | 

try {
    $apiInstance->deleteMetadataSchema($uuid, $naked);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->deleteMetadataSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata schema item |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSchemaPermission**
> deleteSchemaPermission($uuid, $username, $naked)



Deletes all metadata schema permissions on the given metadata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata schema item
$username = "username_example"; // string | The username of the permission owner
$naked = true; // bool | 

try {
    $apiInstance->deleteSchemaPermission($uuid, $username, $naked);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->deleteSchemaPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata schema item |
 **username** | **string**| The username of the permission owner |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata**
> \Agave\Client\Model\Metadata getMetadata($uuid, $naked)



Retrieve Metadata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata item
$naked = true; // bool | 

try {
    $result = $apiInstance->getMetadata($uuid, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata item |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Metadata**](../Model/Metadata.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadataPermission**
> \Agave\Client\Model\Permission getMetadataPermission($uuid, $username, $naked)



Get the user permission for this metadata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata item
$username = "username_example"; // string | The username of the permission owner
$naked = true; // bool | 

try {
    $result = $apiInstance->getMetadataPermission($uuid, $username, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getMetadataPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata item |
 **username** | **string**| The username of the permission owner |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadataSchema**
> \Agave\Client\Model\MetadataSchema getMetadataSchema($uuid, $naked)



Retrieve Metadata Schemata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata schema item
$naked = true; // bool | 

try {
    $result = $apiInstance->getMetadataSchema($uuid, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getMetadataSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata schema item |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\MetadataSchema**](../Model/MetadataSchema.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadataSchemaPermission**
> \Agave\Client\Model\Permission getMetadataSchemaPermission($uuid, $username, $naked)



Get the user permission for this schema.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata schema item
$username = "username_example"; // string | The username of the permission owner
$naked = true; // bool | 

try {
    $result = $apiInstance->getMetadataSchemaPermission($uuid, $username, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getMetadataSchemaPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata schema item |
 **username** | **string**| The username of the permission owner |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMetadata**
> \Agave\Client\Model\Metadata[] listMetadata($q, $naked, $limit, $offset)



List and/or search metadata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | The query to perform. Traditional MongoDB queries are supported
$naked = true; // bool | 
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listMetadata($q, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->listMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| The query to perform. Traditional MongoDB queries are supported |
 **naked** | **bool**|  | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\Metadata[]**](../Model/Metadata.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMetadataPermissions**
> \Agave\Client\Model\Permission listMetadataPermissions($uuid, $naked, $limit, $offset)



Get the permission ACL for this metadata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata item
$naked = true; // bool | 
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listMetadataPermissions($uuid, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->listMetadataPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata item |
 **naked** | **bool**|  | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMetadataSchema**
> \Agave\Client\Model\MetadataSchema[] listMetadataSchema($q, $limit, $offset, $naked)



List and query Metadata Schemata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | A valid query object defining the search parameters.
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query
$naked = true; // bool | 

try {
    $result = $apiInstance->listMetadataSchema($q, $limit, $offset, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->listMetadataSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| A valid query object defining the search parameters. |
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\MetadataSchema[]**](../Model/MetadataSchema.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMetadataSchemaPermissions**
> \Agave\Client\Model\Permission[] listMetadataSchemaPermissions($uuid, $limit, $offset, $naked)



Get the permission for this schema.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata schema item
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query
$naked = true; // bool | 

try {
    $result = $apiInstance->listMetadataSchemaPermissions($uuid, $limit, $offset, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->listMetadataSchemaPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata schema item |
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission[]**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetadata**
> \Agave\Client\Model\Metadata updateMetadata($uuid, $body, $naked)



Update or Add new Metadata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata item
$body = new \Agave\Client\Model\Metadata(); // \Agave\Client\Model\Metadata | The metadata to update.
$naked = true; // bool | 

try {
    $result = $apiInstance->updateMetadata($uuid, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->updateMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata item |
 **body** | [**\Agave\Client\Model\Metadata**](../Model/Metadata.md)| The metadata to update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Metadata**](../Model/Metadata.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetadataPermission**
> \Agave\Client\Model\Permission updateMetadataPermission($uuid, $username, $body, $naked)



Update a user permission for the given metadata.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata item
$username = "username_example"; // string | The username of the permission owner
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | The metadata permission to update.
$naked = true; // bool | 

try {
    $result = $apiInstance->updateMetadataPermission($uuid, $username, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->updateMetadataPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata item |
 **username** | **string**| The username of the permission owner |
 **body** | [**\Agave\Client\Model\Permission**](../Model/Permission.md)| The metadata permission to update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetadataSchema**
> \Agave\Client\Model\MetadataSchema updateMetadataSchema($uuid, $body, $naked)



Update an existing Metadata Schema.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata schema item
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | A valid JSON Schema object
$naked = true; // bool | 

try {
    $result = $apiInstance->updateMetadataSchema($uuid, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->updateMetadataSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata schema item |
 **body** | [**\Agave\Client\Model\Permission**](../Model/Permission.md)| A valid JSON Schema object |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\MetadataSchema**](../Model/MetadataSchema.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetadataSchemaPermission**
> \Agave\Client\Model\Permission updateMetadataSchemaPermission($uuid, $username, $body, $naked)



Add or update a user permission for the given metadata schema.

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

$apiInstance = new Agave\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The uuid of the metadata schema item
$username = "username_example"; // string | The username of the permission owner
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | The schema permission to update.
$naked = true; // bool | 

try {
    $result = $apiInstance->updateMetadataSchemaPermission($uuid, $username, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->updateMetadataSchemaPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The uuid of the metadata schema item |
 **username** | **string**| The username of the permission owner |
 **body** | [**\Agave\Client\Model\Permission**](../Model/Permission.md)| The schema permission to update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

