# Agave\Client\FilesApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearFileItemPermissions**](FilesApi.md#clearFileItemPermissions) | **DELETE** /files/v2/pems/system/{systemId}/{filePath} | 
[**deleteFileItem**](FilesApi.md#deleteFileItem) | **DELETE** /files/v2/media/system/{systemId}/{filePath} | 
[**deleteFileItemOnDefaultSystem**](FilesApi.md#deleteFileItemOnDefaultSystem) | **DELETE** /files/v2/media/{filePath} | 
[**downloadFileItem**](FilesApi.md#downloadFileItem) | **GET** /files/v2/media/system/{systemId}/{filePath} | 
[**downloadFileItemOnDefaultSystem**](FilesApi.md#downloadFileItemOnDefaultSystem) | **GET** /files/v2/media/{filePath} | 
[**importFileItem**](FilesApi.md#importFileItem) | **POST** /files/v2/media/system/{systemId}/{filePath} | 
[**importFileItemToDefaultSystem**](FilesApi.md#importFileItemToDefaultSystem) | **POST** /files/v2/media/{filePath} | 
[**invokeFileActionOnDefaultSystem**](FilesApi.md#invokeFileActionOnDefaultSystem) | **PUT** /files/v2/media/{filePath} | 
[**invokeFileItemAction**](FilesApi.md#invokeFileItemAction) | **PUT** /files/v2/media/system/{systemId}/{filePath} | 
[**listFileItemHistory**](FilesApi.md#listFileItemHistory) | **GET** /files/v2/history/system/{systemId}/{filePath} | 
[**listFileItemHistoryOnDefaultSystem**](FilesApi.md#listFileItemHistoryOnDefaultSystem) | **GET** /files/v2/history/{filePath} | 
[**listFileItemPermissions**](FilesApi.md#listFileItemPermissions) | **GET** /files/v2/pems/system/{systemId}/{filePath} | 
[**listFileItemPermissionsOnDefaultSystem**](FilesApi.md#listFileItemPermissionsOnDefaultSystem) | **GET** /files/v2/pems/{filePath} | 
[**listFileItems**](FilesApi.md#listFileItems) | **GET** /files/v2/listings/system/{systemId}/{filePath} | 
[**listFileItemsOnDefaultSystem**](FilesApi.md#listFileItemsOnDefaultSystem) | **GET** /files/v2/listings/{filepath} | 
[**updateFileItemPermission**](FilesApi.md#updateFileItemPermission) | **POST** /files/v2/pems/system/{systemId}/{filePath} | 
[**updateFileItemPermissionsOnDefaultSystem**](FilesApi.md#updateFileItemPermissionsOnDefaultSystem) | **POST** /files/v2/pems/{filePath} | 


# **clearFileItemPermissions**
> clearFileItemPermissions($file_path, $system_id, $naked)



Deletes all permissions on a file except those of the owner.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$system_id = "system_id_example"; // string | The id of the system on which the file item lives.
$naked = true; // bool | 

try {
    $apiInstance->clearFileItemPermissions($file_path, $system_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->clearFileItemPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **system_id** | **string**| The id of the system on which the file item lives. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFileItem**
> deleteFileItem($system_id, $file_path, $naked)



Deletes a file or folder at the specified path on the specified remote system.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The unique id of the system on which the data resides.
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$naked = "true"; // string | If true, the response wrapper is stripped and the raw object is returned

try {
    $apiInstance->deleteFileItem($system_id, $file_path, $naked);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFileItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The unique id of the system on which the data resides. |
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **naked** | **string**| If true, the response wrapper is stripped and the raw object is returned | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFileItemOnDefaultSystem**
> deleteFileItemOnDefaultSystem($file_path, $naked)



Deletes a file or folder on default storage system of the user

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$naked = true; // bool | 

try {
    $apiInstance->deleteFileItemOnDefaultSystem($file_path, $naked);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFileItemOnDefaultSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFileItem**
> downloadFileItem($system_id, $file_path, $force)



Download a file from the given system

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The unique id of the system on which the data resides.
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$force = false; // bool | Boolean flag to indicate whether the Content-Disposition header should be set to force a browser download.

try {
    $apiInstance->downloadFileItem($system_id, $file_path, $force);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->downloadFileItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The unique id of the system on which the data resides. |
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **force** | **bool**| Boolean flag to indicate whether the Content-Disposition header should be set to force a browser download. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFileItemOnDefaultSystem**
> downloadFileItemOnDefaultSystem($file_path, $force)



Download a file from the default storage location of the user.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user
$force = false; // bool | Boolean flag to indicate whether the Content-Disposition header should be set to force browser file download.

try {
    $apiInstance->downloadFileItemOnDefaultSystem($file_path, $force);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->downloadFileItemOnDefaultSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The path of the file relative to the default storage location of the user |
 **force** | **bool**| Boolean flag to indicate whether the Content-Disposition header should be set to force browser file download. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importFileItem**
> \Agave\Client\Model\FileInfo importFileItem($system_id, $file_path, $body, $naked)



Import file item from a remote URL to the target system

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The id of the system.
$file_path = "file_path_example"; // string | The relative or absolute path where the file item should be imported
$body = new \Agave\Client\Model\FileImportRequest(); // \Agave\Client\Model\FileImportRequest | The import request
$naked = true; // bool | 

try {
    $result = $apiInstance->importFileItem($system_id, $file_path, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->importFileItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The id of the system. |
 **file_path** | **string**| The relative or absolute path where the file item should be imported |
 **body** | [**\Agave\Client\Model\FileImportRequest**](../Model/FileImportRequest.md)| The import request |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\FileInfo**](../Model/FileInfo.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importFileItemToDefaultSystem**
> \Agave\Client\Model\FileInfo importFileItemToDefaultSystem($file_path, $body, $naked)



Import file item from a remote URL to the target system

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The relative or absolute path where the file item should be imported
$body = new \Agave\Client\Model\FileImportRequest(); // \Agave\Client\Model\FileImportRequest | The import request
$naked = "true"; // string | If true, the response wrapper is stripped and the raw object is returned

try {
    $result = $apiInstance->importFileItemToDefaultSystem($file_path, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->importFileItemToDefaultSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The relative or absolute path where the file item should be imported |
 **body** | [**\Agave\Client\Model\FileImportRequest**](../Model/FileImportRequest.md)| The import request |
 **naked** | **string**| If true, the response wrapper is stripped and the raw object is returned | [optional] [default to true]

### Return type

[**\Agave\Client\Model\FileInfo**](../Model/FileInfo.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invokeFileActionOnDefaultSystem**
> object invokeFileActionOnDefaultSystem($file_path, $body, $naked)



Perform an action on a file or folder.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$body = new \Agave\Client\Model\FileAction(); // \Agave\Client\Model\FileAction | The operation to perform
$naked = "true"; // string | If true, the response wrapper is stripped and the raw object is returned

try {
    $result = $apiInstance->invokeFileActionOnDefaultSystem($file_path, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->invokeFileActionOnDefaultSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **body** | [**\Agave\Client\Model\FileAction**](../Model/FileAction.md)| The operation to perform |
 **naked** | **string**| If true, the response wrapper is stripped and the raw object is returned | [optional] [default to true]

### Return type

**object**

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invokeFileItemAction**
> object invokeFileItemAction($system_id, $file_path, $body, $naked)



Perform an action on a file or folder.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The unique id of the system on which the data resides.
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$body = new \Agave\Client\Model\FileAction(); // \Agave\Client\Model\FileAction | The operation to perform.
$naked = true; // bool | 

try {
    $result = $apiInstance->invokeFileItemAction($system_id, $file_path, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->invokeFileItemAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The unique id of the system on which the data resides. |
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **body** | [**\Agave\Client\Model\FileAction**](../Model/FileAction.md)| The operation to perform. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

**object**

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFileItemHistory**
> \Agave\Client\Model\HistoryEvent listFileItemHistory($file_path, $system_id, $status, $created, $filter, $naked, $limit, $offset)



Download a file from the default storage location of the user.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The path of the file relative to the given system root location.
$system_id = "system_id_example"; // string | The system on which the file item resides
$status = "status_example"; // string | The status of the event
$created = "created_example"; // string | The date the event occurred
$filter = "*"; // string | A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects
$naked = "true"; // string | If true, the response wrapper is stripped and the raw object is returned
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listFileItemHistory($file_path, $system_id, $status, $created, $filter, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listFileItemHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The path of the file relative to the given system root location. |
 **system_id** | **string**| The system on which the file item resides |
 **status** | **string**| The status of the event | [optional]
 **created** | **string**| The date the event occurred | [optional]
 **filter** | **string**| A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects | [optional] [default to *]
 **naked** | **string**| If true, the response wrapper is stripped and the raw object is returned | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\HistoryEvent**](../Model/HistoryEvent.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFileItemHistoryOnDefaultSystem**
> \Agave\Client\Model\HistoryEvent[] listFileItemHistoryOnDefaultSystem($file_path, $status, $created, $filter, $naked, $limit, $offset)



List event history of a file item on the default storage system of the user

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$status = "status_example"; // string | The event status
$created = "created_example"; // string | The date the event occurred
$filter = "*"; // string | A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects
$naked = "true"; // string | If true, the response wrapper is stripped and the raw object is returned
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listFileItemHistoryOnDefaultSystem($file_path, $status, $created, $filter, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listFileItemHistoryOnDefaultSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **status** | **string**| The event status | [optional]
 **created** | **string**| The date the event occurred | [optional]
 **filter** | **string**| A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects | [optional] [default to *]
 **naked** | **string**| If true, the response wrapper is stripped and the raw object is returned | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\HistoryEvent[]**](../Model/HistoryEvent.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFileItemPermissions**
> \Agave\Client\Model\FilePermission[] listFileItemPermissions($file_path, $system_id, $limit, $offset, $naked)



List all the share permissions for a file or folder.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$system_id = "system_id_example"; // string | The system id
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query
$naked = true; // bool | 

try {
    $result = $apiInstance->listFileItemPermissions($file_path, $system_id, $limit, $offset, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listFileItemPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **system_id** | **string**| The system id |
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\FilePermission[]**](../Model/FilePermission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFileItemPermissionsOnDefaultSystem**
> \Agave\Client\Model\FilePermission[] listFileItemPermissionsOnDefaultSystem($file_path, $limit, $offset, $naked)



List all the share permissions for a file or folder.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query
$naked = true; // bool | 

try {
    $result = $apiInstance->listFileItemPermissionsOnDefaultSystem($file_path, $limit, $offset, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listFileItemPermissionsOnDefaultSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\FilePermission[]**](../Model/FilePermission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFileItems**
> \Agave\Client\Model\FileInfo[] listFileItems($system_id, $file_path, $naked, $limit, $offset)



Get a remote directory listing on a specific system.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_id = "system_id_example"; // string | The unique id of the system on which the data resides.
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$naked = true; // bool | 
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listFileItems($system_id, $file_path, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listFileItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **string**| The unique id of the system on which the data resides. |
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **naked** | **bool**|  | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\FileInfo[]**](../Model/FileInfo.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFileItemsOnDefaultSystem**
> \Agave\Client\Model\FileInfo[] listFileItemsOnDefaultSystem($filepath, $filter, $naked, $limit, $offset)



Get a remote directory listing on the default storage system of the user

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filepath = "filepath_example"; // string | The path of the file relative to the default storage location of the user
$filter = "*"; // string | A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects
$naked = "true"; // string | If true, the response wrapper is stripped and the raw object is returned
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listFileItemsOnDefaultSystem($filepath, $filter, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listFileItemsOnDefaultSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| The path of the file relative to the default storage location of the user |
 **filter** | **string**| A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects | [optional] [default to *]
 **naked** | **string**| If true, the response wrapper is stripped and the raw object is returned | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\FileInfo[]**](../Model/FileInfo.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFileItemPermission**
> \Agave\Client\Model\FilePermission updateFileItemPermission($file_path, $system_id, $body, $naked)



Update permissions for a single user.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$system_id = "system_id_example"; // string | The id of the system on which the file resides
$body = new \Agave\Client\Model\PermissionRequest(); // \Agave\Client\Model\PermissionRequest | The updated permission value
$naked = true; // bool | 

try {
    $result = $apiInstance->updateFileItemPermission($file_path, $system_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFileItemPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **system_id** | **string**| The id of the system on which the file resides |
 **body** | [**\Agave\Client\Model\PermissionRequest**](../Model/PermissionRequest.md)| The updated permission value |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\FilePermission**](../Model/FilePermission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFileItemPermissionsOnDefaultSystem**
> \Agave\Client\Model\FilePermission updateFileItemPermissionsOnDefaultSystem($file_path, $body, $file_path2)



Update permissions for a single user on their default storage system.

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

$apiInstance = new Agave\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_path = "file_path_example"; // string | The path of the file relative to the default storage location of the user.
$body = new \Agave\Client\Model\FilePermissionRequest(); // \Agave\Client\Model\FilePermissionRequest | The permission add or update.
$file_path2 = true; // bool | 

try {
    $result = $apiInstance->updateFileItemPermissionsOnDefaultSystem($file_path, $body, $file_path2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFileItemPermissionsOnDefaultSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_path** | **string**| The path of the file relative to the default storage location of the user. |
 **body** | [**\Agave\Client\Model\FilePermissionRequest**](../Model/FilePermissionRequest.md)| The permission add or update. |
 **file_path2** | **bool**|  | [default to true]

### Return type

[**\Agave\Client\Model\FilePermission**](../Model/FilePermission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

