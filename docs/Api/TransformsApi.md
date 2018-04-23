# Agave\Client\TransformsApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncTransform**](TransformsApi.md#asyncTransform) | **POST** /transforms/v2/{transformId}/async/{owner}/{filePath} | 
[**getTransform**](TransformsApi.md#getTransform) | **GET** /transforms/v2/{transformId} | 
[**listTransforms**](TransformsApi.md#listTransforms) | **GET** /transforms/v2/ | 
[**syncTransform**](TransformsApi.md#syncTransform) | **POST** /transforms/v2/{transformId}/sync/{owner}/{filePath} | 


# **asyncTransform**
> \Agave\Client\Model\Transform asyncTransform($transform_id, $owner, $file_path, $body, $naked)



Transform a file and stage it to a specified location.

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

$apiInstance = new Agave\Client\Api\TransformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transform_id = "transform_id_example"; // string | The name of the transform to apply to the given file.
$owner = "owner_example"; // string | The name of the api user owning the file at the given path.
$file_path = "file_path_example"; // string | The path to the file to be transformed and staged
$body = new \Agave\Client\Model\TransformRequest(); // \Agave\Client\Model\TransformRequest | The transfer request details.
$naked = true; // bool | 

try {
    $result = $apiInstance->asyncTransform($transform_id, $owner, $file_path, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformsApi->asyncTransform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transform_id** | **string**| The name of the transform to apply to the given file. |
 **owner** | **string**| The name of the api user owning the file at the given path. |
 **file_path** | **string**| The path to the file to be transformed and staged |
 **body** | [**\Agave\Client\Model\TransformRequest**](../Model/TransformRequest.md)| The transfer request details. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Transform**](../Model/Transform.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransform**
> \Agave\Client\Model\Transform getTransform($transform_id, $naked)



Find the transform of the given uuid

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

$apiInstance = new Agave\Client\Api\TransformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transform_id = "transform_id_example"; // string | The name of the transform requested.
$naked = true; // bool | 

try {
    $result = $apiInstance->getTransform($transform_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformsApi->getTransform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transform_id** | **string**| The name of the transform requested. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Transform**](../Model/Transform.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTransforms**
> \Agave\Client\Model\Transform[] listTransforms($name, $version, $limit, $offset, $naked, $tags)



List and search for transforms

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

$apiInstance = new Agave\Client\Api\TransformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The name of the transform
$version = "version_example"; // string | The name of the transform
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query
$naked = true; // bool | 
$tags = "tags_example"; // string | One or more tags of the transform

try {
    $result = $apiInstance->listTransforms($name, $version, $limit, $offset, $naked, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformsApi->listTransforms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the transform | [optional]
 **version** | **string**| The name of the transform | [optional]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]
 **naked** | **bool**|  | [optional] [default to true]
 **tags** | **string**| One or more tags of the transform | [optional]

### Return type

[**\Agave\Client\Model\Transform[]**](../Model/Transform.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncTransform**
> syncTransform($transform_id, $owner, $file_path, $body, $naked)



Transform a file and download it directly.

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

$apiInstance = new Agave\Client\Api\TransformsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transform_id = "transform_id_example"; // string | The name of the transform to apply to the given file.
$owner = "owner_example"; // string | The name of the api user owning the file at the given path.
$file_path = "file_path_example"; // string | The path to the file to be transformed and downloaded.
$body = new \Agave\Client\Model\TransformRequest(); // \Agave\Client\Model\TransformRequest | The transfer request details.
$naked = true; // bool | 

try {
    $apiInstance->syncTransform($transform_id, $owner, $file_path, $body, $naked);
} catch (Exception $e) {
    echo 'Exception when calling TransformsApi->syncTransform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transform_id** | **string**| The name of the transform to apply to the given file. |
 **owner** | **string**| The name of the api user owning the file at the given path. |
 **file_path** | **string**| The path to the file to be transformed and downloaded. |
 **body** | [**\Agave\Client\Model\TransformRequest**](../Model/TransformRequest.md)| The transfer request details. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

