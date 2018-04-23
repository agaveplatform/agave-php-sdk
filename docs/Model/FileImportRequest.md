# FileImportRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_type** | **string** | The file format this file is in. Defaults to raw. This will be used in file transform operations. | [optional] 
**notifications** | [**\Agave\Client\Model\NotificationRequest[]**](NotificationRequest.md) | Notifications to set with the successful acceptance of this upload request | [optional] 
**file_name** | **string** | The name to give the upload file. If unset, takes the original file name. | [optional] 
**append** | **bool** | Boolean flag indicating this file should be appended to the target file | [optional] [default to false]
**url_to_import** | **string** | The URL to import the file from. This parameter is used if not file is uploaded with this post. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


