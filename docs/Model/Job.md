# Job

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **string** | The unique name of the application being run by this job. This must be a valid application that the calling user has permission to run. | 
**archive** | **bool** | Whether the output from this job should be archived. If true, all new files created by this application&#39;s execution will be archived to the archivePath in the user&#39;s default storage system. | 
**archive_path** | **string** | The path of the archive folder for this job on default storage sytem of the user | 
**archive_system** | **string** | The unique id of the storage system on which this job output will be staged. | 
**batch_queue** | **string** | The queue to which this job should be submitted. This is optional and only applies when the execution system has a batch scheduler. | 
**end_time** | [**\DateTime**](\DateTime.md) | The date the job stopped running due to termination, completion, or error in ISO 8601 format. | 
**execution_system** | **string** | The system id of the execution system. | 
**id** | **int** | The unique id of the job. | 
**inputs** | [**\Agave\Client\Model\JobInputs**](JobInputs.md) |  | 
**local_id** | **string** | The process or local job id of the job on the remote execution system. | 
**memory_per_node** | **string** | The requested memory for this application to run given in GB. | 
**message** | **string** | The error message incurred when the job failed. | 
**name** | **string** | The name of the job. | 
**node_count** | **int** | The number of processors this application should utilize while running. If the application is not of executionType PARALLEL, this should be 1. | 
**notifications** | [**\Agave\Client\Model\Notification[]**](Notification.md) | An array of notifications you wish to receive. | 
**output_path** | **string** | Relative path of the job output data. | 
**owner** | **string** | The job owner. | 
**parameters** | [**\Agave\Client\Model\JobParameters**](JobParameters.md) |  | 
**processors_per_node** | **int** | The number of processors this application should utilize while running. If the application is not of executionType PARALLEL, this should be 1. | 
**max_run_time** | **string** | The requested compute time needed for this application to complete given in HH:mm:ss format. | 
**retries** | **int** | The number of retires it took to submit this job. | 
**start_time** | [**\DateTime**](\DateTime.md) | The date the job started in ISO 8601 format. | 
**status** | **string** | The status of the job. Possible values are: PENDING, STAGING_INPUTS, CLEANING_UP, ARCHIVING, STAGING_JOB, FINISHED, KILLED, FAILED, STOPPED, RUNNING, PAUSED, QUEUED, SUBMITTING, STAGED, PROCESSING_INPUTS, ARCHIVING_FINISHED, ARCHIVING_FAILED | 
**submit_time** | [**\DateTime**](\DateTime.md) | The date the job was submitted in ISO 8601 format. | 
**work_path** | **string** | The directory on the remote execution system from which the job is running. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


