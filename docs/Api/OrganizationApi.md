# LiltConnectorSDK\OrganizationApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesApiOrganizationGetOrganizationRecord()**](OrganizationApi.md#servicesApiOrganizationGetOrganizationRecord) | **GET** /organization | Get information about the organization based on lilt_token |


## `servicesApiOrganizationGetOrganizationRecord()`

```php
servicesApiOrganizationGetOrganizationRecord(): \LiltConnectorSDK\Model\OrganizationResponse
```

Get information about the organization based on lilt_token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->servicesApiOrganizationGetOrganizationRecord();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->servicesApiOrganizationGetOrganizationRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LiltConnectorSDK\Model\OrganizationResponse**](../Model/OrganizationResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
