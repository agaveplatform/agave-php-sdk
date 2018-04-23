# Agave\Client\ClientsApi

All URIs are relative to *https://public.agaveapi.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addClient**](ClientsApi.md#addClient) | **POST** /clients/v2/ | 
[**addClientAPISubscription**](ClientsApi.md#addClientAPISubscription) | **POST** /clients/v2/{clientName}/subscriptions | 
[**clearClientAPISubscriptions**](ClientsApi.md#clearClientAPISubscriptions) | **DELETE** /clients/v2/{clientName}/subscriptions | 
[**deleteClient**](ClientsApi.md#deleteClient) | **DELETE** /clients/v2/{clientName} | 
[**getClient**](ClientsApi.md#getClient) | **GET** /clients/v2/{clientName} | 
[**listClientApiSubscriptions**](ClientsApi.md#listClientApiSubscriptions) | **GET** /clients/v2/{clientName}/subscriptions | 
[**listClients**](ClientsApi.md#listClients) | **GET** /clients/v2/ | 


# **addClient**
> \Agave\Client\Model\SingleClientResponse addClient($body)



Create a new client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: agaveBasic
$config = Agave\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Agave\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Agave\Client\Model\ClientRequest(); // \Agave\Client\Model\ClientRequest | The api client to create

try {
    $result = $apiInstance->addClient($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->addClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Agave\Client\Model\ClientRequest**](../Model/ClientRequest.md)| The api client to create |

### Return type

[**\Agave\Client\Model\SingleClientResponse**](../Model/SingleClientResponse.md)

### Authorization

[agaveBasic](../../README.md#agaveBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addClientAPISubscription**
> \Agave\Client\Model\SingleSubscriptionResponse addClientAPISubscription($client_name, $body)



Add a new API subscription to the given client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: agaveBasic
$config = Agave\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Agave\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_name = "client_name_example"; // string | The name of the client to be subscribe to this api
$body = new \Agave\Client\Model\ClientSubscriptionRequest(); // \Agave\Client\Model\ClientSubscriptionRequest | The api client to create

try {
    $result = $apiInstance->addClientAPISubscription($client_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->addClientAPISubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_name** | **string**| The name of the client to be subscribe to this api |
 **body** | [**\Agave\Client\Model\ClientSubscriptionRequest**](../Model/ClientSubscriptionRequest.md)| The api client to create |

### Return type

[**\Agave\Client\Model\SingleSubscriptionResponse**](../Model/SingleSubscriptionResponse.md)

### Authorization

[agaveBasic](../../README.md#agaveBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearClientAPISubscriptions**
> \Agave\Client\Model\EmptyClientResponse clearClientAPISubscriptions($client_name)



Unsubscribe the client from all APIs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: agaveBasic
$config = Agave\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Agave\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_name = "client_name_example"; // string | The name of the client to be deleted

try {
    $result = $apiInstance->clearClientAPISubscriptions($client_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clearClientAPISubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_name** | **string**| The name of the client to be deleted |

### Return type

[**\Agave\Client\Model\EmptyClientResponse**](../Model/EmptyClientResponse.md)

### Authorization

[agaveBasic](../../README.md#agaveBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClient**
> \Agave\Client\Model\EmptyClientResponse deleteClient($client_name)



Immediately deletes this client and renders the API keys useless.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: agaveBasic
$config = Agave\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Agave\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_name = "client_name_example"; // string | The name of the client to be deleted

try {
    $result = $apiInstance->deleteClient($client_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_name** | **string**| The name of the client to be deleted |

### Return type

[**\Agave\Client\Model\EmptyClientResponse**](../Model/EmptyClientResponse.md)

### Authorization

[agaveBasic](../../README.md#agaveBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClient**
> \Agave\Client\Model\MultipleClientResponse getClient($client_name)



Returns a detailed description of a named client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: agaveBasic
$config = Agave\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Agave\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_name = "client_name_example"; // string | The name of the client to be deleted

try {
    $result = $apiInstance->getClient($client_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->getClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_name** | **string**| The name of the client to be deleted |

### Return type

[**\Agave\Client\Model\MultipleClientResponse**](../Model/MultipleClientResponse.md)

### Authorization

[agaveBasic](../../README.md#agaveBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClientApiSubscriptions**
> \Agave\Client\Model\MultipleSubscriptionResponse listClientApiSubscriptions($client_name, $limit, $offset)



Lists all APIs to which the client is subscribed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: agaveBasic
$config = Agave\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Agave\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_name = "client_name_example"; // string | The name of the client to be deleted
$limit = 100; // int | The maximum number of results returned from this query
$offset = 0; // int | The number of results skipped in the result set returned from this query

try {
    $result = $apiInstance->listClientApiSubscriptions($client_name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->listClientApiSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_name** | **string**| The name of the client to be deleted |
 **limit** | **int**| The maximum number of results returned from this query | [optional] [default to 100]
 **offset** | **int**| The number of results skipped in the result set returned from this query | [optional] [default to 0]

### Return type

[**\Agave\Client\Model\MultipleSubscriptionResponse**](../Model/MultipleSubscriptionResponse.md)

### Authorization

[agaveBasic](../../README.md#agaveBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClients**
> \Agave\Client\Model\MultipleClientResponse listClients()



List existing clients

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: agaveBasic
$config = Agave\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Agave\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listClients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->listClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Agave\Client\Model\MultipleClientResponse**](../Model/MultipleClientResponse.md)

### Authorization

[agaveBasic](../../README.md#agaveBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

