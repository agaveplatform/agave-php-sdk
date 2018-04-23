# SystemCredential

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credential** | **string** | The credential used to authenticate to the remote system. Depending on the authentication protocol of the remote system, this could be an OAuth Token, X.509 certificate, Kerberose token, or an private key.. | 
**expiration_date** | [**\DateTime**](\DateTime.md) | The date the credential expires in ISO 8601 format. | 
**internal_username** | **string** | The username of the internal user associated with this credential. | 
**is_default** | **bool** | Is this the default credential for this internal user of this type on this system? | 
**parent_type** | [**\Agave\Client\Model\SystemType**](SystemType.md) |  | 
**password** | **string** | The password on the remote system used to authenticate. | 
**public_key** | **string** | The public ssh key used to authenticate to the remote system. | 
**private_key** | **string** | The public ssh key used to authenticate to the remote system.. | 
**server** | [**\Agave\Client\Model\SystemAuthConfigServerProtocolType**](SystemAuthConfigServerProtocolType.md) |  | 
**type** | [**\Agave\Client\Model\AuthenticationType**](AuthenticationType.md) |  | 
**username** | **string** | The local username on the remote system used to authenticate. | 
**valid** | **bool** | Is the credential still valid or has it expired?. | 
**ca_certs** | **string** | A public URL to the location of the trusted CA certs to use with this credential. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


