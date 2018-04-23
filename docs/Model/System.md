# System

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Verbose description of this system. | 
**environment** | **string** | Environment variables to set upon login prior to job submission. | [optional] 
**id** | **string** | Unique identifier for this system. | 
**is_default** | **bool** | Is the system the default for the authenticated user? | [default to false]
**is_public** | **bool** | Is the system publicly available? | [default to false]
**last_modified** | [**\DateTime**](\DateTime.md) | The date this system was last modified in ISO 8601 format. | 
**name** | **string** | Common name for this system. | 
**revision** | **int** | The number of times this app has been updated. | [default to 1]
**scratch_dir** | **string** | The scratch directory where job execution directories will be created at runtime. The workDir is used if this is not specified. | [optional] 
**site** | **string** | The site associated with this system. | [optional] 
**status** | [**\Agave\Client\Model\SystemStatusType**](SystemStatusType.md) |  | [optional] 
**storage** | [**\Agave\Client\Model\SystemStorageConfig**](SystemStorageConfig.md) |  | 
**type** | [**\Agave\Client\Model\SystemType**](SystemType.md) |  | 
**uuid** | **string** | The uuid of this system. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


