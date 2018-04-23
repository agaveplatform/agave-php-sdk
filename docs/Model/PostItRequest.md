# PostItRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The url that will be invoked when the PostIt is redeemed. | 
**internal_username** | **string** | The username of the internal user attached to this PostIt. | 
**method** | [**\Agave\Client\Model\PostItRequestMethod**](PostItRequestMethod.md) |  | 
**lifetime** | **int** | The maximum lifetime in seconds of this PostIt on this token. Defaults to 2592000 (30 days) | 
**max_uses** | **int** | The maximum number of invocations remaining on this PostIt. Defaults to no limit | 
**noauth** | **bool** | If true, the provided url will be called without authentication. Default is false | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


