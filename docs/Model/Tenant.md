# Tenant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | uuid of the tenant | [optional] 
**name** | **string** | human readable name of the tenant organization | [optional] 
**base_url** | **string** | The base url for all tenant requests. This should always be SSL enabled. | [optional] 
**code** | **string** | The code by which this tenant is known, eg. agave.prod | [optional] 
**created** | [**\DateTime**](\DateTime.md) | When the tenant was created in ISO8601 format | [optional] 
**last_updated** | [**\DateTime**](\DateTime.md) | When the tenant was last updated in ISO8601 format | [optional] 
**contact** | [**\Agave\Client\Model\TenantContact**](TenantContact.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


