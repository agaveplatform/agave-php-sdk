# Application

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **string** | Whether the application is available. | 
**checkpointable** | **string** | Whether the application supports checkpointing. | 
**default_max_run_time** | **string** | The max execution time that should be used if none is given in a job description. Ignore if the system does not support schedulers. | 
**default_memory_per_node** | **string** | The default memory in GB to pass to the scheduler if none is given in the job description. This must be less than the max memory parameter in the target queue definition. | 
**default_node_count** | **string** | The number of nodes that should be used if none is given in a job description. Ignore if the system does not support schedulers. | 
**default_processors_per_node** | **string** | The number of processors to pass to the scheduler if none are given in the job description. This must be 1 if the app is serial. | 
**default_queue** | **string** | The queue on the execution system that should be used if none is given in a job description. Ignore if the system does not support schedulers. | 
**deployment_path** | **string** | The location in default storage system containing the application wrapper and dependencies of the user | 
**deployment_system** | **string** | The system id of the storage system where this app should run. | 
**execution_system** | **string** | The system id of the execution system where this app should run. | 
**execution_type** | **string** | The execution type of the application. If you&#39;re unsure, it&#39;s probably HPC. | 
**help_uri** | **string** | The URL where users can go for more information about the app. | 
**id** | **string** | Unique id of this app. Comprised of the app name-version. | 
**icon** | **string** | The icon to associate with this app. | 
**inputs** | **string** | The inputs files for this application. | 
**label** | **string** | The label to use when generating forms. | 
**last_modified** | **string** | The date this application was last modified in ISO 8601 format. | 
**long_description** | **string** | The full text description of this input to use when generating forms. | 
**modules** | **string** | An array of modules to load prior to the execution of the application. | 
**name** | **string** | The name of the application. The name does not have to be unique, but the combination of name and version does. | 
**ontology** | **string** | An array of ontology values describing this application. | 
**outputs** | **string** | The outputs files for this application. | 
**parallelism** | **string** | The parallelism type of the application. If you&#39;re unsure, it&#39;s probably SERIAL. | 
**parameters** | **string** | The inputs parameters for this application. | 
**is_public** | **string** | Whether the application is public or private. | 
**revision** | **string** | The number of times this application has been revised. | 
**short_description** | **string** | The short description of this application. | 
**tags** | **string** | An array of tags related to this application. | 
**template_path** | **string** | The path to the wrapper script relative to the deploymentPath. | 
**test_path** | **string** | The path to the test script relative to the deploymentPath. | 
**uuid** | **string** | The UUID of this application. UUID are 36 alphanumeric string. | 
**version** | **string** | The version of the application in #.#.# format. While the version does not need to be unique, the combination of name and version does have to be unique. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


