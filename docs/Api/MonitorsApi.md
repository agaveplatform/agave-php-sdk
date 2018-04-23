# Agave\Client\MonitorsApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMonitoringTasks**](MonitorsApi.md#addMonitoringTasks) | **POST** /monitors/v2/ | 
[**deleteMonitoringTask**](MonitorsApi.md#deleteMonitoringTask) | **DELETE** /monitors/v2/{monitorId} | 
[**forceMonitoringTaskCheck**](MonitorsApi.md#forceMonitoringTaskCheck) | **POST** /monitors/v2/{monitorId}/checks | 
[**getMonitoringTask**](MonitorsApi.md#getMonitoringTask) | **GET** /monitors/v2/{monitorId} | 
[**getMonitoringTaskCheck**](MonitorsApi.md#getMonitoringTaskCheck) | **GET** /monitors/v2/{monitorId}/checks/{checkId} | 
[**listMonitoringTaskChecks**](MonitorsApi.md#listMonitoringTaskChecks) | **GET** /monitors/v2/{monitorId}/checks | 
[**listMonitoringTasks**](MonitorsApi.md#listMonitoringTasks) | **GET** /monitors/v2/ | 
[**updateMonitoringTask**](MonitorsApi.md#updateMonitoringTask) | **POST** /monitors/v2/{monitorId} | 


# **addMonitoringTasks**
> \Agave\Client\Model\MonitoringTaskDetails addMonitoringTasks($body, $naked)



Add a new monitoring task

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

$apiInstance = new Agave\Client\Api\MonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\MonitoringTaskSummary(); // \Agave\Client\Model\MonitoringTaskSummary | The description of the monitoring task to run
$naked = true; // bool | 

try {
    $result = $apiInstance->addMonitoringTasks($body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorsApi->addMonitoringTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\MonitoringTaskSummary**](../Model/MonitoringTaskSummary.md)| The description of the monitoring task to run |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\MonitoringTaskDetails**](../Model/MonitoringTaskDetails.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMonitoringTask**
> deleteMonitoringTask($monitor_id, $naked)



Deletes a monitor.

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

$apiInstance = new Agave\Client\Api\MonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitor_id = "monitor_id_example"; // string | The id of the monitor to delete
$naked = true; // bool | 

try {
    $apiInstance->deleteMonitoringTask($monitor_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling MonitorsApi->deleteMonitoringTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitor_id** | **string**| The id of the monitor to delete |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forceMonitoringTaskCheck**
> \Agave\Client\Model\MonitoringTaskDetails forceMonitoringTaskCheck($monitor_id, $naked)



Forces a monitor check to run.

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

$apiInstance = new Agave\Client\Api\MonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitor_id = "monitor_id_example"; // string | The id of the monitor
$naked = true; // bool | 

try {
    $result = $apiInstance->forceMonitoringTaskCheck($monitor_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorsApi->forceMonitoringTaskCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitor_id** | **string**| The id of the monitor |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\MonitoringTaskDetails**](../Model/MonitoringTaskDetails.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMonitoringTask**
> \Agave\Client\Model\MonitoringTaskDetails getMonitoringTask($monitor_id, $naked)



Retrieve a specific monitor.

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

$apiInstance = new Agave\Client\Api\MonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitor_id = "monitor_id_example"; // string | The id of the monitor
$naked = true; // bool | 

try {
    $result = $apiInstance->getMonitoringTask($monitor_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorsApi->getMonitoringTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitor_id** | **string**| The id of the monitor |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\MonitoringTaskDetails**](../Model/MonitoringTaskDetails.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMonitoringTaskCheck**
> \Agave\Client\Model\MonitoringTaskCheck getMonitoringTaskCheck($monitor_id, $check_id, $naked)



Retrieve a specific monitor check

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

$apiInstance = new Agave\Client\Api\MonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitor_id = "monitor_id_example"; // string | The id of the monitor
$check_id = "check_id_example"; // string | The id of the monitor check
$naked = true; // bool | 

try {
    $result = $apiInstance->getMonitoringTaskCheck($monitor_id, $check_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorsApi->getMonitoringTaskCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitor_id** | **string**| The id of the monitor |
 **check_id** | **string**| The id of the monitor check |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\MonitoringTaskCheck**](../Model/MonitoringTaskCheck.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMonitoringTaskChecks**
> \Agave\Client\Model\MonitoringTaskCheck[] listMonitoringTaskChecks($monitor_id, $start_date, $end_date, $result, $limit, $offset, $naked)



Retrieve checks for a specific monitor

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

$apiInstance = new Agave\Client\Api\MonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitor_id = "monitor_id_example"; // string | The id of the monitor
$start_date = "start_date_example"; // string | A timestamp indicating the earliest time of the first monitor check in ISO 8601 format
$end_date = "end_date_example"; // string | A timestamp indicating the latest time of the first monitor check in ISO 8601 format
$result = "result_example"; // string | A timestamp indicating the latest time of the first monitor check in ISO 8601 format
$limit = 250; // int | The max number of results.
$offset = 0; // int | The number of records to when returning the results. When paginating results, the page number = ceil(offset/limit)
$naked = true; // bool | 

try {
    $result = $apiInstance->listMonitoringTaskChecks($monitor_id, $start_date, $end_date, $result, $limit, $offset, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorsApi->listMonitoringTaskChecks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitor_id** | **string**| The id of the monitor |
 **start_date** | **string**| A timestamp indicating the earliest time of the first monitor check in ISO 8601 format | [optional]
 **end_date** | **string**| A timestamp indicating the latest time of the first monitor check in ISO 8601 format | [optional]
 **result** | **string**| A timestamp indicating the latest time of the first monitor check in ISO 8601 format | [optional]
 **limit** | **int**| The max number of results. | [optional] [default to 250]
 **offset** | **int**| The number of records to when returning the results. When paginating results, the page number &#x3D; ceil(offset/limit) | [optional] [default to 0]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\MonitoringTaskCheck[]**](../Model/MonitoringTaskCheck.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMonitoringTasks**
> \Agave\Client\Model\MonitoringTaskSummary[] listMonitoringTasks($target, $active, $naked, $limit, $offset)



Retrieve Monitor for a specific resource.

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

$apiInstance = new Agave\Client\Api\MonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target = "target_example"; // string | The target system to search for.
$active = "true"; // string | Filter by monitors that are active or inactive.
$naked = true; // bool | 
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listMonitoringTasks($target, $active, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorsApi->listMonitoringTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target** | **string**| The target system to search for. | [optional]
 **active** | **string**| Filter by monitors that are active or inactive. | [optional] [default to true]
 **naked** | **bool**|  | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\MonitoringTaskSummary[]**](../Model/MonitoringTaskSummary.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMonitoringTask**
> \Agave\Client\Model\MonitoringTaskDetails updateMonitoringTask($body, $monitor_id, $naked)



Updates an existing monitor.

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

$apiInstance = new Agave\Client\Api\MonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\MonitoringTaskSummary(); // \Agave\Client\Model\MonitoringTaskSummary | The description of the app to add or update. This can be either a file upload or json posted to the request body.
$monitor_id = "monitor_id_example"; // string | The id of the monitor to update
$naked = true; // bool | 

try {
    $result = $apiInstance->updateMonitoringTask($body, $monitor_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorsApi->updateMonitoringTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\MonitoringTaskSummary**](../Model/MonitoringTaskSummary.md)| The description of the app to add or update. This can be either a file upload or json posted to the request body. |
 **monitor_id** | **string**| The id of the monitor to update |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\MonitoringTaskDetails**](../Model/MonitoringTaskDetails.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

