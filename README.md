# Agave PHP Client SDK
Power your digital lab and reduce the time from theory to discovery using the Agave Science-as-a-Service API Platform. Agave provides hosted services that allow researchers to manage data, conduct experiments, and publish and share results from anywhere at any time.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.2.15
- Package version: 0.2.0

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/agaveplatform/php-sdk.git"
    }
  ],
  "require": {
    "agaveplatform/agave-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/agave-php-sdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization
$config = Agave\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Agave\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$naked = true; // bool |
$body = new \Agave\Client\Model\Application(); // \Agave\Client\Model\Application | The description of the app to add or update.

try {
    $result = $apiInstance->addApp($naked, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->addApp: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints  

All URIs are relative to *https://public.agaveapi.co*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppsApi* | [**addApp**](docs/Api/AppsApi.md#addapp) | **POST** /apps/v2/ |
*AppsApi* | [**addAppPermission**](docs/Api/AppsApi.md#addapppermission) | **POST** /apps/v2/{appId}/pems |
*AppsApi* | [**clearAppPermissions**](docs/Api/AppsApi.md#clearapppermissions) | **DELETE** /apps/v2/{appId}/pems |
*AppsApi* | [**deleteApp**](docs/Api/AppsApi.md#deleteapp) | **DELETE** /apps/v2/{appId} |
*AppsApi* | [**deleteAppPermission**](docs/Api/AppsApi.md#deleteapppermission) | **DELETE** /apps/v2/{appId}/pems/{username} |
*AppsApi* | [**getAppDetails**](docs/Api/AppsApi.md#getappdetails) | **GET** /apps/v2/{appId} |
*AppsApi* | [**getAppPermission**](docs/Api/AppsApi.md#getapppermission) | **GET** /apps/v2/{appId}/pems/{username} |
*AppsApi* | [**getAppSubmissionForm**](docs/Api/AppsApi.md#getappsubmissionform) | **GET** /apps/v2/{appId}/form |
*AppsApi* | [**invokeAppAction**](docs/Api/AppsApi.md#invokeappaction) | **PUT** /apps/v2/{appId} |
*AppsApi* | [**listAppHistory**](docs/Api/AppsApi.md#listapphistory) | **GET** /apps/v2/{appId}/history |
*AppsApi* | [**listAppPermissions**](docs/Api/AppsApi.md#listapppermissions) | **GET** /apps/v2/{appId}/pems |
*AppsApi* | [**listApps**](docs/Api/AppsApi.md#listapps) | **GET** /apps/v2/ | List apps
*AppsApi* | [**updateApp**](docs/Api/AppsApi.md#updateapp) | **POST** /apps/v2/{appId} |
*AppsApi* | [**updateAppPermission**](docs/Api/AppsApi.md#updateapppermission) | **POST** /apps/v2/{appId}/pems/{username} |
*ClientsApi* | [**addClient**](docs/Api/ClientsApi.md#addclient) | **POST** /clients/v2/ |
*ClientsApi* | [**addClientAPISubscription**](docs/Api/ClientsApi.md#addclientapisubscription) | **POST** /clients/v2/{clientName}/subscriptions |
*ClientsApi* | [**clearClientAPISubscriptions**](docs/Api/ClientsApi.md#clearclientapisubscriptions) | **DELETE** /clients/v2/{clientName}/subscriptions |
*ClientsApi* | [**deleteClient**](docs/Api/ClientsApi.md#deleteclient) | **DELETE** /clients/v2/{clientName} |
*ClientsApi* | [**getClient**](docs/Api/ClientsApi.md#getclient) | **GET** /clients/v2/{clientName} |
*ClientsApi* | [**listClientApiSubscriptions**](docs/Api/ClientsApi.md#listclientapisubscriptions) | **GET** /clients/v2/{clientName}/subscriptions |
*ClientsApi* | [**listClients**](docs/Api/ClientsApi.md#listclients) | **GET** /clients/v2/ |
*FilesApi* | [**clearFileItemPermissions**](docs/Api/FilesApi.md#clearfileitempermissions) | **DELETE** /files/v2/pems/system/{systemId}/{filePath} |
*FilesApi* | [**deleteFileItem**](docs/Api/FilesApi.md#deletefileitem) | **DELETE** /files/v2/media/system/{systemId}/{filePath} |
*FilesApi* | [**deleteFileItemOnDefaultSystem**](docs/Api/FilesApi.md#deletefileitemondefaultsystem) | **DELETE** /files/v2/media/{filePath} |
*FilesApi* | [**downloadFileItem**](docs/Api/FilesApi.md#downloadfileitem) | **GET** /files/v2/media/system/{systemId}/{filePath} |
*FilesApi* | [**downloadFileItemOnDefaultSystem**](docs/Api/FilesApi.md#downloadfileitemondefaultsystem) | **GET** /files/v2/media/{filePath} |
*FilesApi* | [**importFileItem**](docs/Api/FilesApi.md#importfileitem) | **POST** /files/v2/media/system/{systemId}/{filePath} |
*FilesApi* | [**importFileItemToDefaultSystem**](docs/Api/FilesApi.md#importfileitemtodefaultsystem) | **POST** /files/v2/media/{filePath} |
*FilesApi* | [**invokeFileActionOnDefaultSystem**](docs/Api/FilesApi.md#invokefileactionondefaultsystem) | **PUT** /files/v2/media/{filePath} |
*FilesApi* | [**invokeFileItemAction**](docs/Api/FilesApi.md#invokefileitemaction) | **PUT** /files/v2/media/system/{systemId}/{filePath} |
*FilesApi* | [**listFileItemHistory**](docs/Api/FilesApi.md#listfileitemhistory) | **GET** /files/v2/history/system/{systemId}/{filePath} |
*FilesApi* | [**listFileItemHistoryOnDefaultSystem**](docs/Api/FilesApi.md#listfileitemhistoryondefaultsystem) | **GET** /files/v2/history/{filePath} |
*FilesApi* | [**listFileItemPermissions**](docs/Api/FilesApi.md#listfileitempermissions) | **GET** /files/v2/pems/system/{systemId}/{filePath} |
*FilesApi* | [**listFileItemPermissionsOnDefaultSystem**](docs/Api/FilesApi.md#listfileitempermissionsondefaultsystem) | **GET** /files/v2/pems/{filePath} |
*FilesApi* | [**listFileItems**](docs/Api/FilesApi.md#listfileitems) | **GET** /files/v2/listings/system/{systemId}/{filePath} |
*FilesApi* | [**listFileItemsOnDefaultSystem**](docs/Api/FilesApi.md#listfileitemsondefaultsystem) | **GET** /files/v2/listings/{filepath} |
*FilesApi* | [**updateFileItemPermission**](docs/Api/FilesApi.md#updatefileitempermission) | **POST** /files/v2/pems/system/{systemId}/{filePath} |
*FilesApi* | [**updateFileItemPermissionsOnDefaultSystem**](docs/Api/FilesApi.md#updatefileitempermissionsondefaultsystem) | **POST** /files/v2/pems/{filePath} |
*JobsApi* | [**addJobPermission**](docs/Api/JobsApi.md#addjobpermission) | **POST** /jobs/v2/{jobId}/pems |
*JobsApi* | [**clearJobPermissions**](docs/Api/JobsApi.md#clearjobpermissions) | **DELETE** /jobs/v2/{jobId}/pems |
*JobsApi* | [**deleteJob**](docs/Api/JobsApi.md#deletejob) | **DELETE** /jobs/v2/{jobId} |
*JobsApi* | [**deleteJobPermission**](docs/Api/JobsApi.md#deletejobpermission) | **DELETE** /jobs/v2/{jobId}/pems/{username} |
*JobsApi* | [**downloadJobOutput**](docs/Api/JobsApi.md#downloadjoboutput) | **GET** /jobs/v2/{jobId}/outputs/media/{filePath} |
*JobsApi* | [**getJobDetails**](docs/Api/JobsApi.md#getjobdetails) | **GET** /jobs/v2/{jobId} |
*JobsApi* | [**getJobHistory**](docs/Api/JobsApi.md#getjobhistory) | **GET** /jobs/v2/{jobId}/history |
*JobsApi* | [**getJobPermission**](docs/Api/JobsApi.md#getjobpermission) | **GET** /jobs/v2/{jobId}/pems/{username} |
*JobsApi* | [**getJobStatus**](docs/Api/JobsApi.md#getjobstatus) | **GET** /jobs/v2/{jobId}/status |
*JobsApi* | [**listJobOutputs**](docs/Api/JobsApi.md#listjoboutputs) | **GET** /jobs/v2/{jobId}/outputs/listings/{filePath} |
*JobsApi* | [**listJobPermissions**](docs/Api/JobsApi.md#listjobpermissions) | **GET** /jobs/v2/{jobId}/pems |
*JobsApi* | [**listJobs**](docs/Api/JobsApi.md#listjobs) | **GET** /jobs/v2/ |
*JobsApi* | [**resubmitJob**](docs/Api/JobsApi.md#resubmitjob) | **POST** /jobs/v2/{jobId} |
*JobsApi* | [**submitJob**](docs/Api/JobsApi.md#submitjob) | **POST** /jobs/v2/ |
*JobsApi* | [**updateJobPermission**](docs/Api/JobsApi.md#updatejobpermission) | **POST** /jobs/v2/{jobId}/pems/{username} |
*MetaApi* | [**addMetadata**](docs/Api/MetaApi.md#addmetadata) | **POST** /meta/v2/data |
*MetaApi* | [**addMetadataPermission**](docs/Api/MetaApi.md#addmetadatapermission) | **POST** /meta/v2/data/{uuid}/pems |
*MetaApi* | [**addMetadataSchema**](docs/Api/MetaApi.md#addmetadataschema) | **POST** /meta/v2/schemas |
*MetaApi* | [**addMetadataSchemaPermission**](docs/Api/MetaApi.md#addmetadataschemapermission) | **POST** /meta/v2/schemas/{uuid}/pems |
*MetaApi* | [**clearMetadataPermissions**](docs/Api/MetaApi.md#clearmetadatapermissions) | **DELETE** /meta/v2/data/{uuid}/pems |
*MetaApi* | [**clearMetadataSchemaPermissions**](docs/Api/MetaApi.md#clearmetadataschemapermissions) | **DELETE** /meta/v2/schemas/{uuid}/pems |
*MetaApi* | [**deleteMetadata**](docs/Api/MetaApi.md#deletemetadata) | **DELETE** /meta/v2/data/{uuid} |
*MetaApi* | [**deleteMetadataPermission**](docs/Api/MetaApi.md#deletemetadatapermission) | **DELETE** /meta/v2/data/{uuid}/pems/{username} |
*MetaApi* | [**deleteMetadataSchema**](docs/Api/MetaApi.md#deletemetadataschema) | **DELETE** /meta/v2/schemas/{uuid} |
*MetaApi* | [**deleteSchemaPermission**](docs/Api/MetaApi.md#deleteschemapermission) | **DELETE** /meta/v2/schemas/{uuid}/pems/{username} |
*MetaApi* | [**getMetadata**](docs/Api/MetaApi.md#getmetadata) | **GET** /meta/v2/data/{uuid} |
*MetaApi* | [**getMetadataPermission**](docs/Api/MetaApi.md#getmetadatapermission) | **GET** /meta/v2/data/{uuid}/pems/{username} |
*MetaApi* | [**getMetadataSchema**](docs/Api/MetaApi.md#getmetadataschema) | **GET** /meta/v2/schemas/{uuid} |
*MetaApi* | [**getMetadataSchemaPermission**](docs/Api/MetaApi.md#getmetadataschemapermission) | **GET** /meta/v2/schemas/{uuid}/pems/{username} |
*MetaApi* | [**listMetadata**](docs/Api/MetaApi.md#listmetadata) | **GET** /meta/v2/data |
*MetaApi* | [**listMetadataPermissions**](docs/Api/MetaApi.md#listmetadatapermissions) | **GET** /meta/v2/data/{uuid}/pems |
*MetaApi* | [**listMetadataSchema**](docs/Api/MetaApi.md#listmetadataschema) | **GET** /meta/v2/schemas |
*MetaApi* | [**listMetadataSchemaPermissions**](docs/Api/MetaApi.md#listmetadataschemapermissions) | **GET** /meta/v2/schemas/{uuid}/pems |
*MetaApi* | [**updateMetadata**](docs/Api/MetaApi.md#updatemetadata) | **POST** /meta/v2/data/{uuid} |
*MetaApi* | [**updateMetadataPermission**](docs/Api/MetaApi.md#updatemetadatapermission) | **POST** /meta/v2/data/{uuid}/pems/{username} |
*MetaApi* | [**updateMetadataSchema**](docs/Api/MetaApi.md#updatemetadataschema) | **POST** /meta/v2/schemas/{uuid} |
*MetaApi* | [**updateMetadataSchemaPermission**](docs/Api/MetaApi.md#updatemetadataschemapermission) | **POST** /meta/v2/schemas/{uuid}/pems/{username} |
*MonitorsApi* | [**addMonitoringTasks**](docs/Api/MonitorsApi.md#addmonitoringtasks) | **POST** /monitors/v2/ |
*MonitorsApi* | [**deleteMonitoringTask**](docs/Api/MonitorsApi.md#deletemonitoringtask) | **DELETE** /monitors/v2/{monitorId} |
*MonitorsApi* | [**forceMonitoringTaskCheck**](docs/Api/MonitorsApi.md#forcemonitoringtaskcheck) | **POST** /monitors/v2/{monitorId}/checks |
*MonitorsApi* | [**getMonitoringTask**](docs/Api/MonitorsApi.md#getmonitoringtask) | **GET** /monitors/v2/{monitorId} |
*MonitorsApi* | [**getMonitoringTaskCheck**](docs/Api/MonitorsApi.md#getmonitoringtaskcheck) | **GET** /monitors/v2/{monitorId}/checks/{checkId} |
*MonitorsApi* | [**listMonitoringTaskChecks**](docs/Api/MonitorsApi.md#listmonitoringtaskchecks) | **GET** /monitors/v2/{monitorId}/checks |
*MonitorsApi* | [**listMonitoringTasks**](docs/Api/MonitorsApi.md#listmonitoringtasks) | **GET** /monitors/v2/ |
*MonitorsApi* | [**updateMonitoringTask**](docs/Api/MonitorsApi.md#updatemonitoringtask) | **POST** /monitors/v2/{monitorId} |
*NotificationsApi* | [**addNotification**](docs/Api/NotificationsApi.md#addnotification) | **POST** /notifications/v2/ |
*NotificationsApi* | [**deleteNotification**](docs/Api/NotificationsApi.md#deletenotification) | **DELETE** /notifications/v2/{uuid} |
*NotificationsApi* | [**getNotification**](docs/Api/NotificationsApi.md#getnotification) | **GET** /notifications/v2/{uuid} |
*NotificationsApi* | [**listNotifications**](docs/Api/NotificationsApi.md#listnotifications) | **GET** /notifications/v2/ |
*NotificationsApi* | [**updateNotification**](docs/Api/NotificationsApi.md#updatenotification) | **POST** /notifications/v2/{uuid} |
*PostitsApi* | [**addPostit**](docs/Api/PostitsApi.md#addpostit) | **POST** /postits/v2/ |
*PostitsApi* | [**deletePostit**](docs/Api/PostitsApi.md#deletepostit) | **DELETE** /postits/v2/{nonce} |
*PostitsApi* | [**listPostits**](docs/Api/PostitsApi.md#listpostits) | **GET** /postits/v2/ |
*ProfilesApi* | [**addInternalUser**](docs/Api/ProfilesApi.md#addinternaluser) | **POST** /profiles/v2/{apiUsername}/users |
*ProfilesApi* | [**addProfile**](docs/Api/ProfilesApi.md#addprofile) | **POST** /profiles/v2 |
*ProfilesApi* | [**clearInternalUsers**](docs/Api/ProfilesApi.md#clearinternalusers) | **DELETE** /profiles/v2/{apiUsername}/users |
*ProfilesApi* | [**deleteInternalUser**](docs/Api/ProfilesApi.md#deleteinternaluser) | **DELETE** /profiles/v2/{apiUsername}/users/{internalUsername} |
*ProfilesApi* | [**deleteProfile**](docs/Api/ProfilesApi.md#deleteprofile) | **DELETE** /profiles/v2/{apiUsername} |
*ProfilesApi* | [**getInternalUser**](docs/Api/ProfilesApi.md#getinternaluser) | **GET** /profiles/v2/{apiUsername}/users/{internalUsername} |
*ProfilesApi* | [**getProfile**](docs/Api/ProfilesApi.md#getprofile) | **GET** /profiles/v2/{apiUsername} |
*ProfilesApi* | [**listInternalUsers**](docs/Api/ProfilesApi.md#listinternalusers) | **GET** /profiles/v2/{apiUsername}/users |
*ProfilesApi* | [**listProfiles**](docs/Api/ProfilesApi.md#listprofiles) | **GET** /profiles/v2 |
*ProfilesApi* | [**updateInternalUser**](docs/Api/ProfilesApi.md#updateinternaluser) | **POST** /profiles/v2/{apiUsername}/users/{internalUsername} |
*ProfilesApi* | [**updateProfile**](docs/Api/ProfilesApi.md#updateprofile) | **POST** /profiles/v2/{apiUsername} |
*SystemsApi* | [**addExecutionSystem**](docs/Api/SystemsApi.md#addexecutionsystem) | **POST** /systems/v2/ |
*SystemsApi* | [**addStorageSystem**](docs/Api/SystemsApi.md#addstoragesystem) | **POST** /systems/v2 |
*SystemsApi* | [**addSystemCredential**](docs/Api/SystemsApi.md#addsystemcredential) | **POST** /systems/v2/{systemId}/credentials |
*SystemsApi* | [**addSystemRole**](docs/Api/SystemsApi.md#addsystemrole) | **POST** /systems/{systemId}/roles |
*SystemsApi* | [**clearSystemAuthCredentials**](docs/Api/SystemsApi.md#clearsystemauthcredentials) | **DELETE** /systems/v2/{systemId}/credentials |
*SystemsApi* | [**clearSystemAuthCredentialsForInternalUser**](docs/Api/SystemsApi.md#clearsystemauthcredentialsforinternaluser) | **DELETE** /systems/v2/{systemId}/credentials/{internalUsername} |
*SystemsApi* | [**clearSystemRoles**](docs/Api/SystemsApi.md#clearsystemroles) | **DELETE** /systems/v2/{systemId}/roles |
*SystemsApi* | [**deleteSystem**](docs/Api/SystemsApi.md#deletesystem) | **DELETE** /systems/v2/{systemId} |
*SystemsApi* | [**deleteSystemAuthCredentialForInternalUser**](docs/Api/SystemsApi.md#deletesystemauthcredentialforinternaluser) | **DELETE** /systems/v2/{systemId}/credentials/{internalUsername}/{credentialType} |
*SystemsApi* | [**deleteSystemRole**](docs/Api/SystemsApi.md#deletesystemrole) | **DELETE** /systems/v2/{systemId}/roles/{username} |
*SystemsApi* | [**getSystemCredential**](docs/Api/SystemsApi.md#getsystemcredential) | **GET** /systems/v2/{systemId}/credentials/{internalUsername}/{credentialType} |
*SystemsApi* | [**getSystemDetails**](docs/Api/SystemsApi.md#getsystemdetails) | **GET** /systems/v2/{systemId} |
*SystemsApi* | [**getSystemRole**](docs/Api/SystemsApi.md#getsystemrole) | **GET** /systems/v2/{systemId}/roles/{username} |
*SystemsApi* | [**invokeSystemAction**](docs/Api/SystemsApi.md#invokesystemaction) | **PUT** /systems/v2/{systemId} |
*SystemsApi* | [**listCredentialsForInternalUser**](docs/Api/SystemsApi.md#listcredentialsforinternaluser) | **GET** /systems/v2/{systemId}/credentials/{internalUsername} |
*SystemsApi* | [**listSystemCredentials**](docs/Api/SystemsApi.md#listsystemcredentials) | **GET** /systems/v2/{systemId}/credentials |
*SystemsApi* | [**listSystemRoles**](docs/Api/SystemsApi.md#listsystemroles) | **GET** /systems/v2/{systemId}/roles |
*SystemsApi* | [**listSystems**](docs/Api/SystemsApi.md#listsystems) | **GET** /systems/v2/ |
*SystemsApi* | [**updateSystem**](docs/Api/SystemsApi.md#updatesystem) | **POST** /systems/v2/{systemId} |
*SystemsApi* | [**updateSystemCredential**](docs/Api/SystemsApi.md#updatesystemcredential) | **POST** /systems/v2/{systemId}/credentials/{internalUsername} |
*SystemsApi* | [**updateSystemCredentialOfType**](docs/Api/SystemsApi.md#updatesystemcredentialoftype) | **POST** /systems/v2/{systemId}/credentials/{internalUsername}/{credentialType} |
*SystemsApi* | [**updateSystemRole**](docs/Api/SystemsApi.md#updatesystemrole) | **POST** /systems/v2/{systemId}/roles/{username} |
*TagApi* | [**addTag**](docs/Api/TagApi.md#addtag) | **POST** /tags/v2 | Creat a new tag
*TagApi* | [**addTagResource**](docs/Api/TagApi.md#addtagresource) | **POST** /tags/v2/{tagId}/resources | Add resources to tag
*TagApi* | [**clearTagPermissions**](docs/Api/TagApi.md#cleartagpermissions) | **DELETE** /tags/v2/{tagId}/pems | Clear tag permissions
*TagApi* | [**clearTagResources**](docs/Api/TagApi.md#cleartagresources) | **DELETE** /tags/v2/{tagId}/resources | Clear all tagged resources
*TagApi* | [**deleteTag**](docs/Api/TagApi.md#deletetag) | **DELETE** /tags/v2/{tagId} | Delete tag
*TagApi* | [**deleteTagPermissionForUser**](docs/Api/TagApi.md#deletetagpermissionforuser) | **DELETE** /tags/v2/{tagId}/pems/{username} | Remove user tag permission
*TagApi* | [**getTagDetails**](docs/Api/TagApi.md#gettagdetails) | **GET** /tags/v2/{tagId} | Tag Details
*TagApi* | [**getTagPermissionForUser**](docs/Api/TagApi.md#gettagpermissionforuser) | **GET** /tags/v2/{tagId}/pems/{username} | List tag permissions for a user
*TagApi* | [**getTaggedResource**](docs/Api/TagApi.md#gettaggedresource) | **GET** /tags/v2/{tagId}/resources/{uuid} | Get tagged item details
*TagApi* | [**listTagHistory**](docs/Api/TagApi.md#listtaghistory) | **GET** /tags/v2/{tagId}/history | Tag history
*TagApi* | [**listTagPermissions**](docs/Api/TagApi.md#listtagpermissions) | **GET** /tags/v2/{tagId}/pems | List permissionss set for a given tag id
*TagApi* | [**listTagResources**](docs/Api/TagApi.md#listtagresources) | **GET** /tags/v2/{tagId}/resources | Tagged items
*TagApi* | [**listTags**](docs/Api/TagApi.md#listtags) | **GET** /tags/v2 | Available tags
*TagApi* | [**removeTagResource**](docs/Api/TagApi.md#removetagresource) | **DELETE** /tags/v2/{tagId}/resources/{uuid} | Remove resource from tag
*TagApi* | [**updateTag**](docs/Api/TagApi.md#updatetag) | **PUT** /tags/v2/{tagId} | Update tag
*TagApi* | [**updateTagPermission**](docs/Api/TagApi.md#updatetagpermission) | **POST** /tags/v2/{tagId}/pems | Grant permission
*TagApi* | [**updateTagPermissionForUser**](docs/Api/TagApi.md#updatetagpermissionforuser) | **POST** /tags/v2/{tagId}/pems/{username} | Update user permission on tag
*TagApi* | [**updateTagResource**](docs/Api/TagApi.md#updatetagresource) | **PUT** /tags/v2/{tagId}/resources/{uuid} | Add resource to tag
*TenantsApi* | [**getTenantDetails**](docs/Api/TenantsApi.md#gettenantdetails) | **GET** /tenants/v2/{codeOrUuid} | Resolve Tenant details
*TenantsApi* | [**listTenants**](docs/Api/TenantsApi.md#listtenants) | **GET** /tenants/v2 | List all active tenants
*TransformsApi* | [**asyncTransform**](docs/Api/TransformsApi.md#asynctransform) | **POST** /transforms/v2/{transformId}/async/{owner}/{filePath} |
*TransformsApi* | [**getTransform**](docs/Api/TransformsApi.md#gettransform) | **GET** /transforms/v2/{transformId} |
*TransformsApi* | [**listTransforms**](docs/Api/TransformsApi.md#listtransforms) | **GET** /transforms/v2/ |
*TransformsApi* | [**syncTransform**](docs/Api/TransformsApi.md#synctransform) | **POST** /transforms/v2/{transformId}/sync/{owner}/{filePath} |
*UuidsApi* | [**createUuid**](docs/Api/UuidsApi.md#createuuid) | **POST** /uuids/v2/ |
*UuidsApi* | [**resolveUuid**](docs/Api/UuidsApi.md#resolveuuid) | **GET** /uuids/v2/{uuid} |
*UuidsApi* | [**resolveUuids**](docs/Api/UuidsApi.md#resolveuuids) | **GET** /uuids/v2/ |


## Documentation For Models

 - [ACL](docs/Model/ACL.md)
 - [AbstractApplicationParameterValue](docs/Model/AbstractApplicationParameterValue.md)
 - [AgaveResponse](docs/Model/AgaveResponse.md)
 - [Application](docs/Model/Application.md)
 - [ApplicationAction](docs/Model/ApplicationAction.md)
 - [ApplicationActionType](docs/Model/ApplicationActionType.md)
 - [ApplicationArgument](docs/Model/ApplicationArgument.md)
 - [ApplicationArgumentDetails](docs/Model/ApplicationArgumentDetails.md)
 - [ApplicationArgumentSemantics](docs/Model/ApplicationArgumentSemantics.md)
 - [ApplicationArgumentValue](docs/Model/ApplicationArgumentValue.md)
 - [ApplicationExecutionType](docs/Model/ApplicationExecutionType.md)
 - [ApplicationParallelism](docs/Model/ApplicationParallelism.md)
 - [ApplicationParameterEnumValueItem](docs/Model/ApplicationParameterEnumValueItem.md)
 - [ApplicationParameterType](docs/Model/ApplicationParameterType.md)
 - [ApplicationSummary](docs/Model/ApplicationSummary.md)
 - [AuthenticationType](docs/Model/AuthenticationType.md)
 - [BatchQueue](docs/Model/BatchQueue.md)
 - [BatchSchedulerType](docs/Model/BatchSchedulerType.md)
 - [Client](docs/Model/Client.md)
 - [ClientAPISubscription](docs/Model/ClientAPISubscription.md)
 - [ClientAPISubscriptionStatusType](docs/Model/ClientAPISubscriptionStatusType.md)
 - [ClientRequest](docs/Model/ClientRequest.md)
 - [ClientSubscriptionRequest](docs/Model/ClientSubscriptionRequest.md)
 - [ClientSubscriptionTier](docs/Model/ClientSubscriptionTier.md)
 - [EmptyApplicationResponse](docs/Model/EmptyApplicationResponse.md)
 - [EmptyClientResponse](docs/Model/EmptyClientResponse.md)
 - [EmptyRemoteFileResponse](docs/Model/EmptyRemoteFileResponse.md)
 - [EmptySubscriptionResponse](docs/Model/EmptySubscriptionResponse.md)
 - [EmptySystemResponse](docs/Model/EmptySystemResponse.md)
 - [FileAction](docs/Model/FileAction.md)
 - [FileImportRequest](docs/Model/FileImportRequest.md)
 - [FileInfo](docs/Model/FileInfo.md)
 - [FileManagementActionType](docs/Model/FileManagementActionType.md)
 - [FileType](docs/Model/FileType.md)
 - [FilesStatusType](docs/Model/FilesStatusType.md)
 - [Gender](docs/Model/Gender.md)
 - [HistoryEvent](docs/Model/HistoryEvent.md)
 - [Job](docs/Model/Job.md)
 - [JobAction](docs/Model/JobAction.md)
 - [JobActionType](docs/Model/JobActionType.md)
 - [JobHistory](docs/Model/JobHistory.md)
 - [JobInputs](docs/Model/JobInputs.md)
 - [JobParameters](docs/Model/JobParameters.md)
 - [JobRequest](docs/Model/JobRequest.md)
 - [JobStatusSummary](docs/Model/JobStatusSummary.md)
 - [JobStatusType](docs/Model/JobStatusType.md)
 - [JobSubmission](docs/Model/JobSubmission.md)
 - [JobSummary](docs/Model/JobSummary.md)
 - [Metadata](docs/Model/Metadata.md)
 - [MetadataSchema](docs/Model/MetadataSchema.md)
 - [MonitorCheckResultType](docs/Model/MonitorCheckResultType.md)
 - [MonitoringTaskCheck](docs/Model/MonitoringTaskCheck.md)
 - [MonitoringTaskSummary](docs/Model/MonitoringTaskSummary.md)
 - [MultipleApplicationResponse](docs/Model/MultipleApplicationResponse.md)
 - [MultipleClientResponse](docs/Model/MultipleClientResponse.md)
 - [MultiplePermissionResponse](docs/Model/MultiplePermissionResponse.md)
 - [MultipleRemoteFileResponse](docs/Model/MultipleRemoteFileResponse.md)
 - [MultipleSubscriptionResponse](docs/Model/MultipleSubscriptionResponse.md)
 - [MultipleSystemResponse](docs/Model/MultipleSystemResponse.md)
 - [MultipleSystemRoleResponse](docs/Model/MultipleSystemRoleResponse.md)
 - [MultipleTransformResponse](docs/Model/MultipleTransformResponse.md)
 - [Notification](docs/Model/Notification.md)
 - [NotificationRequest](docs/Model/NotificationRequest.md)
 - [NotificationResponse](docs/Model/NotificationResponse.md)
 - [Permission](docs/Model/Permission.md)
 - [PermissionRequest](docs/Model/PermissionRequest.md)
 - [PermissionStanza](docs/Model/PermissionStanza.md)
 - [PermissionType](docs/Model/PermissionType.md)
 - [PostIt](docs/Model/PostIt.md)
 - [PostItRequest](docs/Model/PostItRequest.md)
 - [PostItRequestMethod](docs/Model/PostItRequestMethod.md)
 - [Profile](docs/Model/Profile.md)
 - [ProfileRequest](docs/Model/ProfileRequest.md)
 - [SingleClientResponse](docs/Model/SingleClientResponse.md)
 - [SingleInternalUserResponse](docs/Model/SingleInternalUserResponse.md)
 - [SinglePostItResponse](docs/Model/SinglePostItResponse.md)
 - [SingleProfileResponse](docs/Model/SingleProfileResponse.md)
 - [SingleRemoteFileResponse](docs/Model/SingleRemoteFileResponse.md)
 - [SingleSubscriptionResponse](docs/Model/SingleSubscriptionResponse.md)
 - [SingleSystemResponse](docs/Model/SingleSystemResponse.md)
 - [SingleTransformResponse](docs/Model/SingleTransformResponse.md)
 - [System](docs/Model/System.md)
 - [SystemAction](docs/Model/SystemAction.md)
 - [SystemActionType](docs/Model/SystemActionType.md)
 - [SystemAuthConfig](docs/Model/SystemAuthConfig.md)
 - [SystemAuthConfigServer](docs/Model/SystemAuthConfigServer.md)
 - [SystemAuthConfigServerProtocolType](docs/Model/SystemAuthConfigServerProtocolType.md)
 - [SystemCredential](docs/Model/SystemCredential.md)
 - [SystemCredentialType](docs/Model/SystemCredentialType.md)
 - [SystemCredentialsResponse](docs/Model/SystemCredentialsResponse.md)
 - [SystemExecutionType](docs/Model/SystemExecutionType.md)
 - [SystemLoginAuthenticationType](docs/Model/SystemLoginAuthenticationType.md)
 - [SystemLoginConfig](docs/Model/SystemLoginConfig.md)
 - [SystemLoginProtocolType](docs/Model/SystemLoginProtocolType.md)
 - [SystemRequest](docs/Model/SystemRequest.md)
 - [SystemRole](docs/Model/SystemRole.md)
 - [SystemRoleRequest](docs/Model/SystemRoleRequest.md)
 - [SystemRoleType](docs/Model/SystemRoleType.md)
 - [SystemStatusType](docs/Model/SystemStatusType.md)
 - [SystemStorageConfig](docs/Model/SystemStorageConfig.md)
 - [SystemStorageProtocolType](docs/Model/SystemStorageProtocolType.md)
 - [SystemSummary](docs/Model/SystemSummary.md)
 - [SystemType](docs/Model/SystemType.md)
 - [Tag](docs/Model/Tag.md)
 - [TagHistory](docs/Model/TagHistory.md)
 - [TagResource](docs/Model/TagResource.md)
 - [TagSummary](docs/Model/TagSummary.md)
 - [Tenant](docs/Model/Tenant.md)
 - [TenantContact](docs/Model/TenantContact.md)
 - [Term](docs/Model/Term.md)
 - [Term3](docs/Model/Term3.md)
 - [TransferTaskProgressSummary](docs/Model/TransferTaskProgressSummary.md)
 - [Transform](docs/Model/Transform.md)
 - [TransformDecoder](docs/Model/TransformDecoder.md)
 - [TransformEncoder](docs/Model/TransformEncoder.md)
 - [TransformRequest](docs/Model/TransformRequest.md)
 - [UUIDRequest](docs/Model/UUIDRequest.md)
 - [UUIDResolution](docs/Model/UUIDResolution.md)
 - [UUIDSummary](docs/Model/UUIDSummary.md)
 - [AgaveNullResponse](docs/Model/AgaveNullResponse.md)
 - [ApplicationArgumentDataSemantics](docs/Model/ApplicationArgumentDataSemantics.md)
 - [ApplicationCloneAction](docs/Model/ApplicationCloneAction.md)
 - [ApplicationDisableAction](docs/Model/ApplicationDisableAction.md)
 - [ApplicationEnableAction](docs/Model/ApplicationEnableAction.md)
 - [ApplicationInput](docs/Model/ApplicationInput.md)
 - [ApplicationOutput](docs/Model/ApplicationOutput.md)
 - [ApplicationParameter](docs/Model/ApplicationParameter.md)
 - [ApplicationParameterBooleanValue](docs/Model/ApplicationParameterBooleanValue.md)
 - [ApplicationParameterFlagValue](docs/Model/ApplicationParameterFlagValue.md)
 - [ApplicationParameterNumericValue](docs/Model/ApplicationParameterNumericValue.md)
 - [ApplicationParameterStringValue](docs/Model/ApplicationParameterStringValue.md)
 - [ApplicationPublishAction](docs/Model/ApplicationPublishAction.md)
 - [ApplicationUnpublishAction](docs/Model/ApplicationUnpublishAction.md)
 - [ExecutionSystem](docs/Model/ExecutionSystem.md)
 - [FileCopyAction](docs/Model/FileCopyAction.md)
 - [FileHistoryResponse](docs/Model/FileHistoryResponse.md)
 - [FileMkdirAction](docs/Model/FileMkdirAction.md)
 - [FileMoveAction](docs/Model/FileMoveAction.md)
 - [FilePermission](docs/Model/FilePermission.md)
 - [FilePermissionRequest](docs/Model/FilePermissionRequest.md)
 - [FilePermissionStanza](docs/Model/FilePermissionStanza.md)
 - [FileRenameAction](docs/Model/FileRenameAction.md)
 - [InternalUser](docs/Model/InternalUser.md)
 - [JobResubmitAction](docs/Model/JobResubmitAction.md)
 - [JobStopAction](docs/Model/JobStopAction.md)
 - [MonitoringTaskDetails](docs/Model/MonitoringTaskDetails.md)
 - [StorageSystem](docs/Model/StorageSystem.md)
 - [SystemCloneAction](docs/Model/SystemCloneAction.md)
 - [SystemPublishAction](docs/Model/SystemPublishAction.md)


## Documentation For Authorization


## agaveApplication

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**:
- **Scopes**:
 - **PRODUCTION**: catchall scope for all core apis

## agaveBasic

- **Type**: HTTP basic authentication

## agaveImplicit

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://public.agaveapi.co/authorization
- **Scopes**:
 - **PRODUCTION**: catchall scope for all core apis

## agavePassword

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**:
- **Scopes**:
 - **PRODUCTION**: catchall scope for all core apis


## Author