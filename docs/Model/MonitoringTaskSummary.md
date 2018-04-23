# MonitoringTaskSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether this monitor is currently active. | [default to true]
**frequency** | **int** | The interval in minutes on which this monitor will run. Minimum is 5. Default is 720. | 
**internal_username** | **string** | Internal user account used to perform the check. | [optional] 
**target** | **string** | The id of the sytem to be monitored. This must be an active system registered with the Systems service. | 
**update_system_status** | **bool** | Whether this Monitor should update the system status when the results change. You must have the ADMIN role on the target system to use this feature. | [default to false]
**id** | **string** | The unique id of the monitor | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


