# LiltConnectorSDK\DomainsApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesApiDomainsGetDomains()**](DomainsApi.md#servicesApiDomainsGetDomains) | **GET** /domains | Retrieve a list of Connector Domains. |
| [**servicesApiDomainsGetDomainsLanguages()**](DomainsApi.md#servicesApiDomainsGetDomainsLanguages) | **GET** /domains/languages | Retrieve the domains languages. |


## `servicesApiDomainsGetDomains()`

```php
servicesApiDomainsGetDomains($include_details): \LiltConnectorSDK\Model\DomainsResponseInner[]
```

Retrieve a list of Connector Domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_details = false; // bool | Whether to include full domain details including models, filter configs, and metadata.

try {
    $result = $apiInstance->servicesApiDomainsGetDomains($include_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->servicesApiDomainsGetDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_details** | **bool**| Whether to include full domain details including models, filter configs, and metadata. | [optional] [default to false] |

### Return type

[**\LiltConnectorSDK\Model\DomainsResponseInner[]**](../Model/DomainsResponseInner.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiDomainsGetDomainsLanguages()`

```php
servicesApiDomainsGetDomainsLanguages(): \LiltConnectorSDK\Model\SettingsLanguagesResponseInner[]
```

Retrieve the domains languages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->servicesApiDomainsGetDomainsLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->servicesApiDomainsGetDomainsLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LiltConnectorSDK\Model\SettingsLanguagesResponseInner[]**](../Model/SettingsLanguagesResponseInner.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
