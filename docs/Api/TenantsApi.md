# Agave\Client\TenantsApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTenantDetails**](TenantsApi.md#getTenantDetails) | **GET** /tenants/v2/{codeOrUuid} | Resolve Tenant details
[**listTenants**](TenantsApi.md#listTenants) | **GET** /tenants/v2 | List all active tenants


# **getTenantDetails**
> \Agave\Client\Model\Tenant getTenantDetails($code_or_uuid, $filter, $naked)

Resolve Tenant details

Returns information about the tenant with the given code or id

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

$apiInstance = new Agave\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_or_uuid = "code_or_uuid_example"; // string | Unique tenant code or id of the tenant
$filter = "*"; // string | A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects
$naked = true; // bool | If true, the response wrapper is stripped and the raw object is returned.

try {
    $result = $apiInstance->getTenantDetails($code_or_uuid, $filter, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenantDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code_or_uuid** | **string**| Unique tenant code or id of the tenant |
 **filter** | **string**| A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects | [optional] [default to *]
 **naked** | **bool**| If true, the response wrapper is stripped and the raw object is returned. | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Tenant**](../Model/Tenant.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTenants**
> \Agave\Client\Model\Tenant[] listTenants($filter, $naked, $limit, $offset)

List all active tenants

Lists all active tenants publicly available

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

$apiInstance = new Agave\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "*"; // string | A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects
$naked = true; // bool | If true, the response wrapper is stripped and the raw object is returned.
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listTenants($filter, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->listTenants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects | [optional] [default to *]
 **naked** | **bool**| If true, the response wrapper is stripped and the raw object is returned. | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\Tenant[]**](../Model/Tenant.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

