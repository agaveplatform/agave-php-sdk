# PostIt

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | [**\DateTime**](\DateTime.md) | The creation date in ISO 8601 format. | 
**creator** | **string** | The api user who made the PostIt creation request. | 
**expires** | [**\DateTime**](\DateTime.md) | The expiration date in ISO 8601 format. | 
**internal_username** | **string** | The username of the internal user attached to this PostIt. | 
**method** | **string** | The url that will be invoked when the PostIt is redeemed. | 
**postit** | **string** | The PostIt nonce. | 
**remaining_uses** | **int** | The number of invocations remaining on this token. | 
**url** | **string** | The url that will be invoked when the PostIt is redeemed. | 
**noauth** | **bool** | If true, the provided url will be called without authentication. Default is false | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


