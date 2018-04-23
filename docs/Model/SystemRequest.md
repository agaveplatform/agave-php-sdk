# SystemRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Verbose description of this system. | [optional] 
**environment** | **string** | Environment variables to set upon login prior to job submission. | [optional] 
**execution_type** | [**\Agave\Client\Model\SystemExecutionType**](SystemExecutionType.md) |  | [optional] 
**id** | **string** | Unique identifier for this system. | 
**login** | [**\Agave\Client\Model\SystemLoginConfig**](SystemLoginConfig.md) |  | [optional] 
**max_system_jobs** | **int** | The maximum number of jobs that can be simultaneously run on the system across all queues. | [optional] 
**max_system_jobs_per_user** | **int** | The maximum number of jobs that can be simultaneously run on the system across all queues by a single user. | [optional] 
**name** | **string** | Common name for this system. | 
**queues** | [**\Agave\Client\Model\BatchQueue[]**](BatchQueue.md) | The execution paradigm used to run jobs on this system. | [optional] 
**scheduler** | [**\Agave\Client\Model\BatchSchedulerType**](BatchSchedulerType.md) |  | [optional] 
**scratch_dir** | **string** | The scratch directory where job execution directories will be created at runtime. The workDir is used if this is not specified. | [optional] 
**site** | **string** | The site associated with this system. | [optional] 
**startup_script** | **string** | Script to be run after login and prior to execution. | [optional] 
**status** | [**\Agave\Client\Model\SystemStatusType**](SystemStatusType.md) |  | 
**storage** | [**\Agave\Client\Model\SystemStorageConfig**](SystemStorageConfig.md) |  | 
**type** | [**\Agave\Client\Model\SystemType**](SystemType.md) |  | 
**work_dir** | **string** | The work directory where job execution directories will be created at runtime. This is used if scratchDir is not specified. If neither are specified, the job directory will be created in the system homeDir. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


