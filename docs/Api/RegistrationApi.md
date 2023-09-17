# LiltConnectorSDK\RegistrationApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesApiRegistrationRegisterCreditsBasedOrganization()**](RegistrationApi.md#servicesApiRegistrationRegisterCreditsBasedOrganization) | **POST** /register | Register a new Connectors Organization |


## `servicesApiRegistrationRegisterCreditsBasedOrganization()`

```php
servicesApiRegistrationRegisterCreditsBasedOrganization($new_organization_options)
```

Register a new Connectors Organization

This endpoint is used to register a connector organization in preparation to handle credits management.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new LiltConnectorSDK\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$new_organization_options = new \LiltConnectorSDK\Model\NewOrganizationOptions(); // \LiltConnectorSDK\Model\NewOrganizationOptions

try {
    $apiInstance->servicesApiRegistrationRegisterCreditsBasedOrganization($new_organization_options);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->servicesApiRegistrationRegisterCreditsBasedOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_organization_options** | [**\LiltConnectorSDK\Model\NewOrganizationOptions**](../Model/NewOrganizationOptions.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
