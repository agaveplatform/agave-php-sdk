# JobSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **string** | The unique name of the application being run by this job. This must be a valid application that the calling user has permission to run. | 
**end_time** | [**\DateTime**](\DateTime.md) | The date the job ended in ISO 8601 format. | 
**execution_system** | **string** | The system id of the execution system. | 
**id** | **int** | The unique id of the job. | 
**name** | **string** | The name of the job. | 
**owner** | **string** | The job owner. | 
**start_time** | [**\DateTime**](\DateTime.md) | The date the job started in ISO 8601 format. | 
**status** | **string** | The status of the job. Possible values are: PENDING, STAGING_INPUTS, CLEANING_UP, ARCHIVING, STAGING_JOB, FINISHED, KILLED, FAILED, STOPPED, RUNNING, PAUSED, QUEUED, SUBMITTING, STAGED, PROCESSING_INPUTS, ARCHIVING_FINISHED, ARCHIVING_FAILED | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


