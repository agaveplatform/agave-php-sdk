# Agave\Client\UuidsApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUuid**](UuidsApi.md#createUuid) | **POST** /uuids/v2/ | 
[**resolveUuid**](UuidsApi.md#resolveUuid) | **GET** /uuids/v2/{uuid} | 
[**resolveUuids**](UuidsApi.md#resolveUuids) | **GET** /uuids/v2/ | 


# **createUuid**
> \Agave\Client\Model\UUIDResolution[] createUuid($body, $naked)



Generate a new UUID for a given resource type

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

$apiInstance = new Agave\Client\Api\UuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\UUIDRequest(); // \Agave\Client\Model\UUIDRequest | The type of resource for which the UUID should be generated.
$naked = true; // bool | 

try {
    $result = $apiInstance->createUuid($body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UuidsApi->createUuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\UUIDRequest**](../Model/UUIDRequest.md)| The type of resource for which the UUID should be generated. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\UUIDResolution[]**](../Model/UUIDResolution.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveUuid**
> \Agave\Client\Model\UUIDResolution[] resolveUuid($uuid, $naked, $expand)



Resolve one or more UUID to their resource URL and type

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

$apiInstance = new Agave\Client\Api\UuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | A valid Agave UUID to resolve
$naked = true; // bool | 
$expand = false; // bool | If true, the summary object will be expanded to the full resource representation.

try {
    $result = $apiInstance->resolveUuid($uuid, $naked, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UuidsApi->resolveUuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| A valid Agave UUID to resolve |
 **naked** | **bool**|  | [optional] [default to true]
 **expand** | **bool**| If true, the summary object will be expanded to the full resource representation. | [optional] [default to false]

### Return type

[**\Agave\Client\Model\UUIDResolution[]**](../Model/UUIDResolution.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveUuids**
> \Agave\Client\Model\UUIDSummary[] resolveUuids($uuids, $limit, $offset, $naked, $expand)



Resolve one or more UUID to their resource URL and type

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

$apiInstance = new Agave\Client\Api\UuidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuids = "uuids_example"; // string | A comma-separated list of UUID to resolve
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query
$naked = true; // bool | 
$expand = false; // bool | If true, the summary object will be expanded to the full resource representation.

try {
    $result = $apiInstance->resolveUuids($uuids, $limit, $offset, $naked, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UuidsApi->resolveUuids: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuids** | **string**| A comma-separated list of UUID to resolve | [optional]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]
 **naked** | **bool**|  | [optional] [default to true]
 **expand** | **bool**| If true, the summary object will be expanded to the full resource representation. | [optional] [default to false]

### Return type

[**\Agave\Client\Model\UUIDSummary[]**](../Model/UUIDSummary.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

