# BatchQueue

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_directives** | **string** | Any custom directives that should be appended to scheduler directives. ex. #$ -A TG-12345 | 
**is_default** | **bool** | Is this the default queue for the system. | 
**max_jobs** | **int** | The maximum number of jobs that can be in queue at once. | 
**max_user_jobs** | **int** | The maximum number of jobs per user that can be in queue at once. | 
**max_nodes** | **string** | The max nodes available per node to jobs submitted to this queue. | 
**max_memory_per_node** | **string** | The max memory available per node to jobs submitted to this queue. | 
**max_processors_per_node** | **int** | The max processors per node available to jobs submitted to this queue. | 
**max_requested_time** | **string** | The max length of jobs submitted to this queue in hhh:mm:ss format. | 
**name** | **string** | The name of the batch queue. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


