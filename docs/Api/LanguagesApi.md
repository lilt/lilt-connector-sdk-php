# LiltConnectorSDK\LanguagesApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesApiLanguagesGetLanguages()**](LanguagesApi.md#servicesApiLanguagesGetLanguages) | **GET** /languages | Retrieve supported language and locale codes. |


## `servicesApiLanguagesGetLanguages()`

```php
servicesApiLanguagesGetLanguages(): \LiltConnectorSDK\Model\LanguagesResponse
```

Retrieve supported language and locale codes.

Returns a comprehensive list of supported language codes and locale codes with their display names for use in localization projects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->servicesApiLanguagesGetLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->servicesApiLanguagesGetLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LiltConnectorSDK\Model\LanguagesResponse**](../Model/LanguagesResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
