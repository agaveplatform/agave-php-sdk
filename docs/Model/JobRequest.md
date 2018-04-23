# JobRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **string** | The unique name of the application being run by this job. This must be a valid application that the calling user has permission to run. | 
**archive** | **bool** | Whether the output from this job should be archived. If true, all new files created by this application&#39;s execution will be archived to the archivePath in the user&#39;s default storage system. | [default to true]
**archive_path** | **string** | The path of the archive folder for this job on default storage sytem of the user | [optional] 
**archive_system** | **string** | The unique id of the storage system on which this job output will be staged. | [optional] 
**batch_queue** | **string** | The queue to which this job should be submitted. This is optional and only applies when the execution system has a batch scheduler. | [optional] 
**inputs** | **object** | The application specific input files needed for this job. These vary from application to application and should be entered as multiple individual parameters in the form. Inputs may be given as relative paths in the user&#39;s default storage system or as URI. If a URI is given, the data will be staged in by the IO service and made avaialble to the application at run time. | [optional] 
**memory_per_node** | **int** | The requested memory for this application to run given in GB. | [optional] 
**name** | **string** | The name of the job. | 
**node_count** | **int** | The number of processors this application should utilize while running. If the application is not of executionType PARALLEL, this should be 1. | [optional] 
**notifications** | [**\Agave\Client\Model\Notification[]**](Notification.md) | An array of notifications you wish to receive. | 
**parameters** | **object** | The application specific parameters needed for this job. These vary from application to application and should be entered as multiple individual parameters in the form. The actual dataType will be determined by the application description. | [optional] 
**processors_per_node** | **int** | The number of processors this application should utilize while running. If the application is not of executionType PARALLEL, this should be 1. | [optional] 
**max_run_time** | **string** | The requested compute time needed for this application to complete given in HH:mm:ss format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


