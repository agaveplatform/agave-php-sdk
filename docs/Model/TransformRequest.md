# TransformRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**native_format** | **string** | The original file type of the file. If not given, the file type is assumed to be raw. | 
**url** | **string** | The uri to which the transformed file will be staged. | 
**callback_url** | **string** | The URI to notify when the transfer is complete. This can be an email address or http URL. If a URL is given, a GET will be made to this address. URL templating is supported. Valid template values are: ${NAME}, ${SOURCE_FORMAT}, ${DEST_FORMAT}, ${STATUS} | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


