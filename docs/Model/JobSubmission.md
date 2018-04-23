# JobSubmission

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**archive** | **bool** | Whether the output from this job should be archived. If true, all new files created by this application&#39;s execution will be archived to the archivePath in the user&#39;s default storage system. | 
**archive_path** | **string** | The path of the archive folder for this job on the archiveSystem. Defaults to default storage system of the user | 
**archive_system** | **string** | The system on which the job data will be archived | 
**inputs** | **string** | The application specific input files needed for this job. These vary from application to application and should be entered as multiple individual parameters in the form. Inputs may be given as relative paths in the user&#39;s default storage system or as URI. If a URI is given, the data will be staged in by the IO service and made avaialble to the application at run time. | 
**name** | **string** | The name of the job. | 
**max_memory** | **string** | The maximum amount of memory needed for this application to run given in GB. | 
**node_count** | **int** | The number of nodes this application should utilize while running. If the application is not of executionType PARALLEL, this should be 1. | 
**notifications** | [**\Agave\Client\Model\Notification[]**](Notification.md) | An array of notifications you wish to receive. | 
**parameters** | **object** | The application specific parameters needed for this job. These vary from application to application and should be entered as multiple individual parameters in the form. The actual dataType will be determined by the application description. | 
**processors_per_node** | **int** | The number of processors this application should utilize while running. | 
**batch_queue** | **string** | The queue to which this job should be submitted. This is optional and only applies when the execution system has a batch scheduler. | 
**max_run_time** | **string** | The estimated compute time needed for this application to complete given in hh:mm:ss format. | 
**app_id** | **string** | The unique name of the application being run by this job. This must be a valid application that the calling user has permission to run. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


