# # RegistrationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email to use for registration. |
**kind** | **string** | The kind of connector that is being registered. This value should be a unique identifier for the system that is being connected to (e.g. \&quot;craftcms\&quot;). The plugin developer can decide what this value should be. This value should be set by the plugin itself, not by the user. |
**name** | **string** | The name of the connector installation. This value can be set by the user and should uniquely identify this installation (e.g. \&quot;example.com marketing website\&quot;). |
**api_key** | **string** | The Lilt API Key to use for registration. This value is optional. If an API Key value is not provided then a new one will be created in the background as part of registration. This value should be provided if the user already has an existing Lilt account they wish to associate this installation with. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
