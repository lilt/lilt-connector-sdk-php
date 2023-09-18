# LiltConnectorSDK\SettingsApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesApiSettingsGetSettings()**](SettingsApi.md#servicesApiSettingsGetSettings) | **GET** /settings | Retrieve the settings. |
| [**servicesApiSettingsUpdateSettings()**](SettingsApi.md#servicesApiSettingsUpdateSettings) | **PUT** /settings | Update the settings. |


## `servicesApiSettingsGetSettings()`

```php
servicesApiSettingsGetSettings(): \LiltConnectorSDK\Model\SettingsResponse
```

Retrieve the settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->servicesApiSettingsGetSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->servicesApiSettingsGetSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LiltConnectorSDK\Model\SettingsResponse**](../Model/SettingsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiSettingsUpdateSettings()`

```php
servicesApiSettingsUpdateSettings($settings_response): \LiltConnectorSDK\Model\SettingsResponse
```

Update the settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settings_response = new \LiltConnectorSDK\Model\SettingsResponse(); // \LiltConnectorSDK\Model\SettingsResponse

try {
    $result = $apiInstance->servicesApiSettingsUpdateSettings($settings_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->servicesApiSettingsUpdateSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings_response** | [**\LiltConnectorSDK\Model\SettingsResponse**](../Model/SettingsResponse.md)|  | [optional] |

### Return type

[**\LiltConnectorSDK\Model\SettingsResponse**](../Model/SettingsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
