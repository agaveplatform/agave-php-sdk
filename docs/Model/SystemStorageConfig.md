# SystemStorageConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auth** | [**\Agave\Client\Model\SystemAuthConfig**](SystemAuthConfig.md) |  | 
**container_name** | **string** | The name of the bucket to interact with when using an object store. | [optional] 
**home_dir** | **string** | The path on the remote system to use as the home directory for all API requests. For cases where the home directory should be dynamically defined, the ${USERNAME} token can be included in the homeDir value to represent the username of the authenticated user. ex. /home/${USERNAME}. | [optional] [default to '/']
**host** | **string** | The hostname or ip address of the storage server | 
**port** | **int** | The port number of the storage server. | 
**mirror** | **bool** | Whether the permissions set on the server should be pushed to the storage system itself. This only applies to IRODS and AWS systems. | [optional] [default to false]
**protocol** | [**\Agave\Client\Model\SystemStorageProtocolType**](SystemStorageProtocolType.md) |  | 
**public_apps_dir** | **string** | The path on the remote system where apps will be stored if this is set as the default public storage system. | [optional] 
**resource** | **string** | The name of the target resource when defining an IRODS system. | [optional] 
**root_dir** | **string** | The path on the remote system to use as the root for all API requests. | [optional] [default to '/']
**zone** | **string** | The name of the zone when defining an IRODS system. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


