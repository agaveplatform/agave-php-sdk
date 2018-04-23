# Agave\Client\JobsApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addJobPermission**](JobsApi.md#addJobPermission) | **POST** /jobs/v2/{jobId}/pems | 
[**clearJobPermissions**](JobsApi.md#clearJobPermissions) | **DELETE** /jobs/v2/{jobId}/pems | 
[**deleteJob**](JobsApi.md#deleteJob) | **DELETE** /jobs/v2/{jobId} | 
[**deleteJobPermission**](JobsApi.md#deleteJobPermission) | **DELETE** /jobs/v2/{jobId}/pems/{username} | 
[**downloadJobOutput**](JobsApi.md#downloadJobOutput) | **GET** /jobs/v2/{jobId}/outputs/media/{filePath} | 
[**getJobDetails**](JobsApi.md#getJobDetails) | **GET** /jobs/v2/{jobId} | 
[**getJobHistory**](JobsApi.md#getJobHistory) | **GET** /jobs/v2/{jobId}/history | 
[**getJobPermission**](JobsApi.md#getJobPermission) | **GET** /jobs/v2/{jobId}/pems/{username} | 
[**getJobStatus**](JobsApi.md#getJobStatus) | **GET** /jobs/v2/{jobId}/status | 
[**listJobOutputs**](JobsApi.md#listJobOutputs) | **GET** /jobs/v2/{jobId}/outputs/listings/{filePath} | 
[**listJobPermissions**](JobsApi.md#listJobPermissions) | **GET** /jobs/v2/{jobId}/pems | 
[**listJobs**](JobsApi.md#listJobs) | **GET** /jobs/v2/ | 
[**resubmitJob**](JobsApi.md#resubmitJob) | **POST** /jobs/v2/{jobId} | 
[**submitJob**](JobsApi.md#submitJob) | **POST** /jobs/v2/ | 
[**updateJobPermission**](JobsApi.md#updateJobPermission) | **POST** /jobs/v2/{jobId}/pems/{username} | 


# **addJobPermission**
> \Agave\Client\Model\Permission addJobPermission($job_id, $body, $naked)



Add a user permission for the given job.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job.
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | The permission add or update.
$naked = true; // bool | 

try {
    $result = $apiInstance->addJobPermission($job_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->addJobPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job. |
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

# **clearJobPermissions**
> clearJobPermissions($job_id, $naked)



Deletes all permissions on an job.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job.
$naked = true; // bool | 

try {
    $apiInstance->clearJobPermissions($job_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->clearJobPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJob**
> deleteJob($job_id, $naked)



Deletes a job from history of the user

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job.
$naked = true; // bool | 

try {
    $apiInstance->deleteJob($job_id, $naked);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->deleteJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobPermission**
> deleteJobPermission($job_id, $username, $naked)



Deletes all permissions for the given user on an job.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job for which to delete the user permissions.
$username = "username_example"; // string | The username for whom to delete permissions
$naked = true; // bool | 

try {
    $apiInstance->deleteJobPermission($job_id, $username, $naked);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->deleteJobPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job for which to delete the user permissions. |
 **username** | **string**| The username for whom to delete permissions |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadJobOutput**
> downloadJobOutput($job_id, $file_path, $force)



Download an output file from a specific job.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job.
$file_path = "file_path_example"; // string | The path to an output file relative to the job output directory.
$force = false; // bool | If true, the Content-Disposition header is set to force a file download from the browser.

try {
    $apiInstance->downloadJobOutput($job_id, $file_path, $force);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->downloadJobOutput: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job. |
 **file_path** | **string**| The path to an output file relative to the job output directory. |
 **force** | **bool**| If true, the Content-Disposition header is set to force a file download from the browser. | [default to false]

### Return type

void (empty response body)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobDetails**
> \Agave\Client\Model\Job getJobDetails($job_id, $naked)



Get details of the job with the specific job id.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 789; // int | The id of the job.
$naked = true; // bool | 

try {
    $result = $apiInstance->getJobDetails($job_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->getJobDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**| The id of the job. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Job**](../Model/Job.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobHistory**
> \Agave\Client\Model\JobHistory[] getJobHistory($job_id, $naked, $limit, $offset)



Get the history of this job.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job.
$naked = true; // bool | 
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->getJobHistory($job_id, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->getJobHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job. |
 **naked** | **bool**|  | [optional] [default to true]
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\JobHistory[]**](../Model/JobHistory.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobPermission**
> \Agave\Client\Model\Permission getJobPermission($job_id, $username, $naked)



Get a specific user permission for a job.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job.
$username = "username_example"; // string | The username of the api user associated with the permission.
$naked = true; // bool | 

try {
    $result = $apiInstance->getJobPermission($job_id, $username, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->getJobPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job. |
 **username** | **string**| The username of the api user associated with the permission. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobStatus**
> \Agave\Client\Model\JobStatusSummary getJobStatus($job_id, $naked)



Get the status of the job.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job.
$naked = true; // bool | 

try {
    $result = $apiInstance->getJobStatus($job_id, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->getJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\JobStatusSummary**](../Model/JobStatusSummary.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listJobOutputs**
> \Agave\Client\Model\FileInfo[] listJobOutputs($job_id, $file_path, $naked, $limit, $offset)



List the output folder for a job.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job.
$file_path = "file_path_example"; // string | The path to an output file or folder relative to the job output directory. This resource will follow data around as it moves from the execution system to archival storage.
$naked = true; // bool | 
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listJobOutputs($job_id, $file_path, $naked, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->listJobOutputs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job. |
 **file_path** | **string**| The path to an output file or folder relative to the job output directory. This resource will follow data around as it moves from the execution system to archival storage. |
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

# **listJobPermissions**
> \Agave\Client\Model\Permission[] listJobPermissions($job_id, $limit, $offset, $naked)



Get the permissions granted for this job.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job.
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results to skip in the result set for this query
$naked = true; // bool | 

try {
    $result = $apiInstance->listJobPermissions($job_id, $limit, $offset, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->listJobPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job. |
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results to skip in the result set for this query | [optional] [default to 0]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission[]**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listJobs**
> \Agave\Client\Model\Job[] listJobs($app_id, $archive, $archive_path, $archive_system, $batch_queue, $execution_system, $id, $inputs, $local_id, $max_runtime, $memory_per_node, $name, $node_count, $output_path, $parameters, $processors_per_node, $retries, $start_time, $status, $submit_time, $visible, $limit, $offset, $naked)



Get a list of jobs the authenticated user had submitted.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The id of the app run by the job.
$archive = "true"; // string | Boolean flag stating whether the job output was archived. (Acceptable values are: \"true\", \"false\")
$archive_path = "archive_path_example"; // string | Path on the archive system where the job output was archived if the archive flag was true.
$archive_system = "archive_system_example"; // string | The id of the system where the job output was archived if the archive flag was true.
$batch_queue = "batch_queue_example"; // string | The system queue in which the job ran.
$execution_system = "execution_system_example"; // string | The execution system where the job ran.
$id = "id_example"; // string | The id of the job.
$inputs = "inputs_example"; // string | The job inputs. Note, this is a partial text search.
$local_id = "local_id_example"; // string | The local job id of the job on the execution system.
$max_runtime = "max_runtime_example"; // string | The maximum run time of the job in HH:mm:ss format.
$memory_per_node = "memory_per_node_example"; // string | The memory requested by the job specified in GB.
$name = "name_example"; // string | The name of the job.
$node_count = 789; // int | The number of nodes requested for the job.
$output_path = "output_path_example"; // string | The remote work directory path of the job.
$parameters = "parameters_example"; // string | The job parameters. Note, this is a partial text search.
$processors_per_node = 789; // int | The number of processors per node requested by the job.
$retries = 789; // int | The number of retry attempts made on this job.
$start_time = "start_time_example"; // string | The date the job began running. Results are rounded by day. You may specify using YYYY-MM-DD format or free form timeframes such as 'yesterday' or '3 days ago'.
$status = "status_example"; // string | The job status.
$submit_time = "submit_time_example"; // string | The date the job was submitted to the remote execution system to run. Results are rounded by day. You may specify using YYYY-MM-DD format or free form timeframes such as 'yesterday' or '3 days ago'.
$visible = "true"; // string | Boolean flag indicating whether or not to show deleted jobs. Defaults to false. (Acceptable values are: \"true\", \"false\")
$limit = 789; // int | Boolean flag indicating whether or not to show deleted jobs. Defaults to false.
$offset = 789; // int | Boolean flag indicating whether or not to show deleted jobs. Defaults to false.
$naked = true; // bool | 

try {
    $result = $apiInstance->listJobs($app_id, $archive, $archive_path, $archive_system, $batch_queue, $execution_system, $id, $inputs, $local_id, $max_runtime, $memory_per_node, $name, $node_count, $output_path, $parameters, $processors_per_node, $retries, $start_time, $status, $submit_time, $visible, $limit, $offset, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->listJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The id of the app run by the job. | [optional]
 **archive** | **string**| Boolean flag stating whether the job output was archived. (Acceptable values are: \&quot;true\&quot;, \&quot;false\&quot;) | [optional] [default to true]
 **archive_path** | **string**| Path on the archive system where the job output was archived if the archive flag was true. | [optional]
 **archive_system** | **string**| The id of the system where the job output was archived if the archive flag was true. | [optional]
 **batch_queue** | **string**| The system queue in which the job ran. | [optional]
 **execution_system** | **string**| The execution system where the job ran. | [optional]
 **id** | **string**| The id of the job. | [optional]
 **inputs** | **string**| The job inputs. Note, this is a partial text search. | [optional]
 **local_id** | **string**| The local job id of the job on the execution system. | [optional]
 **max_runtime** | **string**| The maximum run time of the job in HH:mm:ss format. | [optional]
 **memory_per_node** | **string**| The memory requested by the job specified in GB. | [optional]
 **name** | **string**| The name of the job. | [optional]
 **node_count** | **int**| The number of nodes requested for the job. | [optional]
 **output_path** | **string**| The remote work directory path of the job. | [optional]
 **parameters** | **string**| The job parameters. Note, this is a partial text search. | [optional]
 **processors_per_node** | **int**| The number of processors per node requested by the job. | [optional]
 **retries** | **int**| The number of retry attempts made on this job. | [optional]
 **start_time** | **string**| The date the job began running. Results are rounded by day. You may specify using YYYY-MM-DD format or free form timeframes such as &#39;yesterday&#39; or &#39;3 days ago&#39;. | [optional]
 **status** | **string**| The job status. | [optional]
 **submit_time** | **string**| The date the job was submitted to the remote execution system to run. Results are rounded by day. You may specify using YYYY-MM-DD format or free form timeframes such as &#39;yesterday&#39; or &#39;3 days ago&#39;. | [optional]
 **visible** | **string**| Boolean flag indicating whether or not to show deleted jobs. Defaults to false. (Acceptable values are: \&quot;true\&quot;, \&quot;false\&quot;) | [optional] [default to true]
 **limit** | **int**| Boolean flag indicating whether or not to show deleted jobs. Defaults to false. | [optional]
 **offset** | **int**| Boolean flag indicating whether or not to show deleted jobs. Defaults to false. | [optional]
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Job[]**](../Model/Job.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resubmitJob**
> \Agave\Client\Model\Job resubmitJob($job_id, $body, $naked)



Resubmits the job with the given job id as a new job with a unique id.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job to resubmit
$body = new \Agave\Client\Model\JobResubmitAction(); // \Agave\Client\Model\JobResubmitAction | The resubmit action request
$naked = true; // bool | 

try {
    $result = $apiInstance->resubmitJob($job_id, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->resubmitJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job to resubmit |
 **body** | [**\Agave\Client\Model\JobResubmitAction**](../Model/JobResubmitAction.md)| The resubmit action request |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Job**](../Model/Job.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitJob**
> \Agave\Client\Model\Job submitJob($body, $naked)



Submit a new job request.

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\JobRequest(); // \Agave\Client\Model\JobRequest | The JSON description of the job to submit.
$naked = true; // bool | 

try {
    $result = $apiInstance->submitJob($body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->submitJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\JobRequest**](../Model/JobRequest.md)| The JSON description of the job to submit. |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Job**](../Model/Job.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJobPermission**
> \Agave\Client\Model\Permission updateJobPermission($job_id, $username, $body, $naked)



Update a user permission for the given job and username

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

$apiInstance = new Agave\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The id of the job for which the permissions will be updated
$username = "username_example"; // string | The user for whom the permission will be udpated
$body = new \Agave\Client\Model\Permission(); // \Agave\Client\Model\Permission | The permission to update
$naked = true; // bool | 

try {
    $result = $apiInstance->updateJobPermission($job_id, $username, $body, $naked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->updateJobPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The id of the job for which the permissions will be updated |
 **username** | **string**| The user for whom the permission will be udpated |
 **body** | [**\Agave\Client\Model\Permission**](../Model/Permission.md)| The permission to update |
 **naked** | **bool**|  | [optional] [default to true]

### Return type

[**\Agave\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[agaveApplication](../../README.md#agaveApplication), [agaveImplicit](../../README.md#agaveImplicit), [agavePassword](../../README.md#agavePassword)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

