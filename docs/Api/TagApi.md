# Agave\Client\TagApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTag**](TagApi.md#addTag) | **POST** /tags/v2 | Creat a new tag
[**addTagResource**](TagApi.md#addTagResource) | **POST** /tags/v2/{tagId}/resources | Add resources to tag
[**clearTagPermissions**](TagApi.md#clearTagPermissions) | **DELETE** /tags/v2/{tagId}/pems | Clear tag permissions
[**clearTagResources**](TagApi.md#clearTagResources) | **DELETE** /tags/v2/{tagId}/resources | Clear all tagged resources
[**deleteTag**](TagApi.md#deleteTag) | **DELETE** /tags/v2/{tagId} | Delete tag
[**deleteTagPermissionForUser**](TagApi.md#deleteTagPermissionForUser) | **DELETE** /tags/v2/{tagId}/pems/{username} | Remove user tag permission
[**getTagDetails**](TagApi.md#getTagDetails) | **GET** /tags/v2/{tagId} | Tag Details
[**getTagPermissionForUser**](TagApi.md#getTagPermissionForUser) | **GET** /tags/v2/{tagId}/pems/{username} | List tag permissions for a user
[**getTaggedResource**](TagApi.md#getTaggedResource) | **GET** /tags/v2/{tagId}/resources/{uuid} | Get tagged item details
[**listTagHistory**](TagApi.md#listTagHistory) | **GET** /tags/v2/{tagId}/history | Tag history
[**listTagPermissions**](TagApi.md#listTagPermissions) | **GET** /tags/v2/{tagId}/pems | List permissionss set for a given tag id
[**listTagResources**](TagApi.md#listTagResources) | **GET** /tags/v2/{tagId}/resources | Tagged items
[**listTags**](TagApi.md#listTags) | **GET** /tags/v2 | Available tags
[**removeTagResource**](TagApi.md#removeTagResource) | **DELETE** /tags/v2/{tagId}/resources/{uuid} | Remove resource from tag
[**updateTag**](TagApi.md#updateTag) | **PUT** /tags/v2/{tagId} | Update tag
[**updateTagPermission**](TagApi.md#updateTagPermission) | **POST** /tags/v2/{tagId}/pems | Grant permission
[**updateTagPermissionForUser**](TagApi.md#updateTagPermissionForUser) | **POST** /tags/v2/{tagId}/pems/{username} | Update user permission on tag
[**updateTagResource**](TagApi.md#updateTagResource) | **PUT** /tags/v2/{tagId}/resources/{uuid} | Add resource to tag


# **addTag**
> \Agave\Client\Model\Tag addTag($body, $naked)

Creat a new tag

Creates a new tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\Tag(); // \Agave\Client\Model\Tag | JSON Tag object
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $result = $apiInstance->addTag($body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\Tag**](../Model/Tag.md)| JSON Tag object |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTagResource**
> \Agave\Client\Model\Tag[] addTagResource($tag_id, $body, $naked)

Add resources to tag

Adds the list of resources to the given tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$body = new \Agave\Client\Model\TagResource(); // \Agave\Client\Model\TagResource | List of resource uuid to add
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $result = $apiInstance->addTagResource($tag_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->addTagResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **body** | [**\Agave\Client\Model\TagResource**](../Model/TagResource.md)| List of resource uuid to add |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearTagPermissions**
> clearTagPermissions($tag_id, $naked)

Clear tag permissions

Removes all permissions save ownership from the given tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $apiInstance->clearTagPermissions($tag_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->clearTagPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearTagResources**
> clearTagResources($tag_id, $naked)

Clear all tagged resources

Removes all resources from the given tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $apiInstance->clearTagResources($tag_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->clearTagResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTag**
> deleteTag($tag_id, $naked)

Delete tag

Deletes the tag and all permissions

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $apiInstance->deleteTag($tag_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTagPermissionForUser**
> deleteTagPermissionForUser($tag_id, $username, $naked)

Remove user tag permission

Removes permissions for the given user on the given tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$username = "username_example"; // string | Username to revoke permission
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $apiInstance->deleteTagPermissionForUser($tag_id, $username, $naked);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->deleteTagPermissionForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **username** | **string**| Username to revoke permission |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagDetails**
> \Agave\Client\Model\Tag getTagDetails($tag_id, $naked)

Tag Details

Returns detailed information about the named tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $result = $apiInstance->getTagDetails($tag_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTagDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagPermissionForUser**
> \Agave\Client\Model\Permission[] getTagPermissionForUser($tag_id, $username, $naked)

List tag permissions for a user

Returns the permission set on the given tag for a specific user.

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$username = "username_example"; // string | Valid username
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $result = $apiInstance->getTagPermissionForUser($tag_id, $username, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTagPermissionForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **username** | **string**| Valid username |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission[]**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaggedResource**
> \Agave\Client\Model\TagResource getTaggedResource($tag_id, $uuid, $naked)

Get tagged item details

Returns a list of items with the given tag.

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$uuid = "uuid_example"; // string | Unique id of a resource
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $result = $apiInstance->getTaggedResource($tag_id, $uuid, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTaggedResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **uuid** | **string**| Unique id of a resource |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

[**\Agave\Client\Model\TagResource**](../Model/TagResource.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTagHistory**
> \Agave\Client\Model\TagHistory[] listTagHistory($tag_id, $naked, $limit, $offset)

Tag history

Returns a list of items with the given tag.

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$naked = true; // bool | If true return only the payload, not the standard response wrapper
$limit = 100; // int | Maximum number of responses. Default 100
$offset = 0; // int | Number of results to skip by default

try {
    $result = $apiInstance->listTagHistory($tag_id, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->listTagHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]
 **limit** | **int**| Maximum number of responses. Default 100 | [optional] [default to 100]
 **offset** | **int**| Number of results to skip by default | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\TagHistory[]**](../Model/TagHistory.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTagPermissions**
> \Agave\Client\Model\Permission[] listTagPermissions($tag_id, $naked, $limit, $offset)

List permissionss set for a given tag id

Returns a list of permission objects set on this Tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the system
$naked = true; // bool | If true return only the payload, not the standard response wrapper
$limit = 100; // int | Maximum number of responses. Default 100
$offset = 0; // int | Number of results to skip by default

try {
    $result = $apiInstance->listTagPermissions($tag_id, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->listTagPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the system |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]
 **limit** | **int**| Maximum number of responses. Default 100 | [optional] [default to 100]
 **offset** | **int**| Number of results to skip by default | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\Permission[]**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTagResources**
> \Agave\Client\Model\TagResource[] listTagResources($tag_id, $naked, $limit, $offset)

Tagged items

Returns a list of items with the given tag.

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$naked = true; // bool | If true return only the payload, not the standard response wrapper
$limit = 100; // int | Maximum number of responses. Default 100
$offset = 0; // int | Number of results to skip by default

try {
    $result = $apiInstance->listTagResources($tag_id, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->listTagResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]
 **limit** | **int**| Maximum number of responses. Default 100 | [optional] [default to 100]
 **offset** | **int**| Number of results to skip by default | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\TagResource[]**](../Model/TagResource.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTags**
> \Agave\Client\Model\TagSummary[] listTags($name, $resource_type, $resource_id, $last_modified, $created, $naked, $limit, $offset)

Available tags

The Tags endpoint returns summary information about the available list of tags right now.

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of the tag for which to search
$resource_type = "resource_type_example"; // string | Search for tags associated with one or resources of named type
$resource_id = "resource_id_example"; // string | Id of tagged resource
$last_modified = "last_modified_example"; // string | Date at which tag was modified in ISO8601 format
$created = "created_example"; // string | Date at which tag was created in ISO8601 format
$naked = true; // bool | If true return only the payload, not the standard response wrapper
$limit = 100; // int | Maximum number of responses. Default 100
$offset = 0; // int | Number of results to skip by default

try {
    $result = $apiInstance->listTags($name, $resource_type, $resource_id, $last_modified, $created, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->listTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the tag for which to search | [optional]
 **resource_type** | **string**| Search for tags associated with one or resources of named type | [optional]
 **resource_id** | **string**| Id of tagged resource | [optional]
 **last_modified** | **string**| Date at which tag was modified in ISO8601 format | [optional]
 **created** | **string**| Date at which tag was created in ISO8601 format | [optional]
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]
 **limit** | **int**| Maximum number of responses. Default 100 | [optional] [default to 100]
 **offset** | **int**| Number of results to skip by default | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\TagSummary[]**](../Model/TagSummary.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTagResource**
> removeTagResource($tag_id, $uuid, $naked)

Remove resource from tag

Removes the given uuid from this tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$uuid = "uuid_example"; // string | UUID of the resource to delete
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $apiInstance->removeTagResource($tag_id, $uuid, $naked);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->removeTagResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **uuid** | **string**| UUID of the resource to delete |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTag**
> \Agave\Client\Model\Tag updateTag($tag_id, $body, $naked)

Update tag

Updates the given tag with the updated information

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$body = new \Agave\Client\Model\Tag(); // \Agave\Client\Model\Tag | JSON Tag object
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $result = $apiInstance->updateTag($tag_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->updateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **body** | [**\Agave\Client\Model\Tag**](../Model/Tag.md)| JSON Tag object |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTagPermission**
> \Agave\Client\Model\Permission updateTagPermission($tag_id, $body, $naked)

Grant permission

Adds a permission for a given user to a given tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | Unique id of a resource
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $result = $apiInstance->updateTagPermission($tag_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->updateTagPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **body** | [**\Agave\Client\Model\Permission**](../Model/Permission.md)| Unique id of a resource |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTagPermissionForUser**
> \Agave\Client\Model\Permission updateTagPermissionForUser($tag_id, $username, $body, $naked)

Update user permission on tag

Resets the user permission on the given tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$username = "username_example"; // string | Valid username
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | Valid permission value
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $result = $apiInstance->updateTagPermissionForUser($tag_id, $username, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->updateTagPermissionForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **username** | **string**| Valid username |
 **body** | [**\Agave\Client\Model\Permission**](../Model/Permission.md)| Valid permission value |
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTagResource**
> \Agave\Client\Model\TagResource updateTagResource($tag_id, $uuid, $body, $naked)

Add resource to tag

Adds the resource with the given uuid to the given tag

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

$apiInstance = new Agave\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Unique id of the tag
$uuid = "uuid_example"; // string | Unique id of a resource
$body = new \Agave\Client\Model\TagResource(); // \Agave\Client\Model\TagResource | empty body
$naked = true; // bool | If true return only the payload, not the standard response wrapper

try {
    $result = $apiInstance->updateTagResource($tag_id, $uuid, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->updateTagResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Unique id of the tag |
 **uuid** | **string**| Unique id of a resource |
 **body** | [**\Agave\Client\Model\TagResource**](../Model/TagResource.md)| empty body | [optional]
 **naked** | **bool**| If true return only the payload, not the standard response wrapper | [optional] [default to true]

### Return type

[**\Agave\Client\Model\TagResource**](../Model/TagResource.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

