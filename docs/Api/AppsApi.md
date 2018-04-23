# Agave\Client\AppsApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addApp**](AppsApi.md#addApp) | **POST** /apps/v2/ | 
[**addAppPermission**](AppsApi.md#addAppPermission) | **POST** /apps/v2/{appId}/pems | 
[**clearAppPermissions**](AppsApi.md#clearAppPermissions) | **DELETE** /apps/v2/{appId}/pems | 
[**deleteApp**](AppsApi.md#deleteApp) | **DELETE** /apps/v2/{appId} | 
[**deleteAppPermission**](AppsApi.md#deleteAppPermission) | **DELETE** /apps/v2/{appId}/pems/{username} | 
[**getAppDetails**](AppsApi.md#getAppDetails) | **GET** /apps/v2/{appId} | 
[**getAppPermission**](AppsApi.md#getAppPermission) | **GET** /apps/v2/{appId}/pems/{username} | 
[**getAppSubmissionForm**](AppsApi.md#getAppSubmissionForm) | **GET** /apps/v2/{appId}/form | 
[**invokeAppAction**](AppsApi.md#invokeAppAction) | **PUT** /apps/v2/{appId} | 
[**listAppHistory**](AppsApi.md#listAppHistory) | **GET** /apps/v2/{appId}/history | 
[**listAppPermissions**](AppsApi.md#listAppPermissions) | **GET** /apps/v2/{appId}/pems | 
[**listApps**](AppsApi.md#listApps) | **GET** /apps/v2/ | List apps
[**updateApp**](AppsApi.md#updateApp) | **POST** /apps/v2/{appId} | 
[**updateAppPermission**](AppsApi.md#updateAppPermission) | **POST** /apps/v2/{appId}/pems/{username} | 


# **addApp**
> \Agave\Client\Model\Application addApp($body, $naked)



Register and update new applications.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\Application(); // \Agave\Client\Model\Application | The description of the app to add or update.
$naked = true; // bool | 

try {
    $result = $apiInstance->addApp($body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->addApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\Application**](../Model/Application.md)| The description of the app to add or update. | [optional]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Application**](../Model/Application.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addAppPermission**
> \Agave\Client\Model\Permission addAppPermission($app_id, $body, $naked)



Grant a user permission for an application.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the application. The application id is made up of the name and version separated by a dash.
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | The permission add or update.
$naked = true; // bool | 

try {
    $result = $apiInstance->addAppPermission($app_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->addAppPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the application. The application id is made up of the name and version separated by a dash. |
 **body** | [**\Agave\Client\Model\Permission**](../Model/Permission.md)| The permission add or update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearAppPermissions**
> clearAppPermissions($app_id, $naked)



Deletes all permissions on an application.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the application. The application id is made up of the name and version separated by a dash.
$naked = true; // bool | 

try {
    $apiInstance->clearAppPermissions($app_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->clearAppPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the application. The application id is made up of the name and version separated by a dash. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteApp**
> deleteApp($app_id, $naked)



Deletes an application.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the application. The application id is made up of the name and version separated by a dash.
$naked = true; // bool | 

try {
    $apiInstance->deleteApp($app_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->deleteApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the application. The application id is made up of the name and version separated by a dash. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAppPermission**
> deleteAppPermission($app_id, $username, $naked)



Deletes all permissions for the given user on an application.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the application. The application id is made up of the name and version separated by a dash.
$username = "username_example"; // string | The username of the api user associated with the permission
$naked = true; // bool | 

try {
    $apiInstance->deleteAppPermission($app_id, $username, $naked);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->deleteAppPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the application. The application id is made up of the name and version separated by a dash. |
 **username** | **string**| The username of the api user associated with the permission |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppDetails**
> \Agave\Client\Model\Application getAppDetails($app_id, $naked)



Get details of an application by its unique id.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the application. The application id is made up of the name and version separated by a dash.
$naked = true; // bool | 

try {
    $result = $apiInstance->getAppDetails($app_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getAppDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the application. The application id is made up of the name and version separated by a dash. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Application**](../Model/Application.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppPermission**
> \Agave\Client\Model\Permission getAppPermission($app_id, $username, $filter, $naked)



Get a specific user permission for an application.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the application. The application id is made up of the name and version separated by a dash.
$username = "username_example"; // string | The username of the api user associated with the permission.
$filter = "*"; // string | A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects
$naked = "true"; // string | If true, the response wrapper is stripped and the raw object is returned

try {
    $result = $apiInstance->getAppPermission($app_id, $username, $filter, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getAppPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the application. The application id is made up of the name and version separated by a dash. |
 **username** | **string**| The username of the api user associated with the permission. |
 **filter** | **string**| A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects | [optional] [default to *]
 **naked** | **string**| If true, the response wrapper is stripped and the raw object is returned | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppSubmissionForm**
> string getAppSubmissionForm($app_id, $naked)



Get a submission form for the named application.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app for which to create the form
$naked = "true"; // string | If true, the response wrapper is stripped and the raw object is returned

try {
    $result = $apiInstance->getAppSubmissionForm($app_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getAppSubmissionForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app for which to create the form |
 **naked** | **string**| If true, the response wrapper is stripped and the raw object is returned | [optional] [default to true]

### Return type

**string**

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invokeAppAction**
> \Agave\Client\Model\Application invokeAppAction($app_id, $body, $naked)



Edit an application.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the application. The application id is made up of the name and version separated by a dash.
$body = new \Agave\Client\Model\ApplicationAction(); // \Agave\Client\Model\ApplicationAction | The operation to perform.
$naked = true; // bool | 

try {
    $result = $apiInstance->invokeAppAction($app_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->invokeAppAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the application. The application id is made up of the name and version separated by a dash. |
 **body** | [**\Agave\Client\Model\ApplicationAction**](../Model/ApplicationAction.md)| The operation to perform. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Application**](../Model/Application.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAppHistory**
> \Agave\Client\Model\HistoryEvent listAppHistory($app_id, $status, $created, $limit, $offset, $naked)



List the event history of this app

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the app for which the history will be returned
$status = "status_example"; // string | The event status
$created = "created_example"; // string | The date the event occurred
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query
$naked = true; // bool | 

try {
    $result = $apiInstance->listAppHistory($app_id, $status, $created, $limit, $offset, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->listAppHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the app for which the history will be returned |
 **status** | **string**| The event status | [optional]
 **created** | **string**| The date the event occurred | [optional]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\HistoryEvent**](../Model/HistoryEvent.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAppPermissions**
> \Agave\Client\Model\Permission[] listAppPermissions($app_id, $filter, $naked, $limit, $offset)



Get the permission for this application.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the application. The application id is made up of the name and version separated by a dash.
$filter = "*"; // string | A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects
$naked = "true"; // string | If true, the response wrapper is stripped and the raw object is returned
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listAppPermissions($app_id, $filter, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->listAppPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the application. The application id is made up of the name and version separated by a dash. |
 **filter** | **string**| A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects | [optional] [default to *]
 **naked** | **string**| If true, the response wrapper is stripped and the raw object is returned | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\Permission[]**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listApps**
> \Agave\Client\Model\ApplicationSummary[] listApps($public, $name, $execution_system, $tags, $filter, $naked, $limit, $offset)

List apps

Get a list of available applications.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public = true; // bool | Whether to return only public apps. (Acceptable values are: \"true\", \"false\")
$name = "name_example"; // string | The name of the app
$execution_system = "execution_system_example"; // string | The execution system of the system
$tags = "tags_example"; // string | A free text tag associated with an app
$filter = "*"; // string | A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects
$naked = "true"; // string | If true, the response wrapper is stripped and the raw object is returned
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listApps($public, $name, $execution_system, $tags, $filter, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->listApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public** | **bool**| Whether to return only public apps. (Acceptable values are: \&quot;true\&quot;, \&quot;false\&quot;) | [optional]
 **name** | **string**| The name of the app | [optional]
 **execution_system** | **string**| The execution system of the system | [optional]
 **tags** | **string**| A free text tag associated with an app | [optional]
 **filter** | **string**| A comma-separated list of fields in the response objects to return. This allows developers to create their own response objects | [optional] [default to *]
 **naked** | **string**| If true, the response wrapper is stripped and the raw object is returned | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\ApplicationSummary[]**](../Model/ApplicationSummary.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApp**
> \Agave\Client\Model\Application updateApp($app_id, $body, $naked)



Update an application.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the application. The application id is made up of the name and version separated by a dash.
$body = new \Agave\Client\Model\Application(); // \Agave\Client\Model\Application | The description of the app to add or update.
$naked = true; // bool | 

try {
    $result = $apiInstance->updateApp($app_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->updateApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the application. The application id is made up of the name and version separated by a dash. |
 **body** | [**\Agave\Client\Model\Application**](../Model/Application.md)| The description of the app to add or update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Application**](../Model/Application.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppPermission**
> \Agave\Client\Model\Permission updateAppPermission($app_id, $username, $body, $naked)



Add or update a user permission for an application.

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

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the application. The application id is made up of the name and version separated by a dash.
$username = "username_example"; // string | The username of the api user associated with the permission
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | The permission add or update.
$naked = true; // bool | 

try {
    $result = $apiInstance->updateAppPermission($app_id, $username, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->updateAppPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the application. The application id is made up of the name and version separated by a dash. |
 **username** | **string**| The username of the api user associated with the permission |
 **body** | [**\Agave\Client\Model\Permission**](../Model/Permission.md)| The permission add or update. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

