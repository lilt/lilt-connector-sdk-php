# LiltConnectorSDK\TranslationsApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesApiDeliveriesCompleteDelivery()**](TranslationsApi.md#servicesApiDeliveriesCompleteDelivery) | **POST** /translations/{id}/complete | Complete a Translation. |
| [**servicesApiDeliveriesDownloadDelivery()**](TranslationsApi.md#servicesApiDeliveriesDownloadDelivery) | **GET** /translations/{id}/download | Download a Translation. |
| [**servicesApiDeliveriesDownloadDeliverySource()**](TranslationsApi.md#servicesApiDeliveriesDownloadDeliverySource) | **GET** /translations/{id}/source | Download a Translation Source. |
| [**servicesApiDeliveriesGetDeliveriesByJobId()**](TranslationsApi.md#servicesApiDeliveriesGetDeliveriesByJobId) | **GET** /translations | Retrieve a list of Translations. |
| [**servicesApiDeliveriesGetDeliveryById()**](TranslationsApi.md#servicesApiDeliveriesGetDeliveryById) | **GET** /translations/{id} | Retrieve a Translation. |
| [**servicesApiDeliveriesUpdateDelivery()**](TranslationsApi.md#servicesApiDeliveriesUpdateDelivery) | **PUT** /translations/{id} | Update a Translation. |


## `servicesApiDeliveriesCompleteDelivery()`

```php
servicesApiDeliveriesCompleteDelivery($id)
```

Complete a Translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // int | The ID.

try {
    $apiInstance->servicesApiDeliveriesCompleteDelivery($id);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->servicesApiDeliveriesCompleteDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID. | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiDeliveriesDownloadDelivery()`

```php
servicesApiDeliveriesDownloadDelivery($id): string
```

Download a Translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // int | The ID.

try {
    $result = $apiInstance->servicesApiDeliveriesDownloadDelivery($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->servicesApiDeliveriesDownloadDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID. | |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiDeliveriesDownloadDeliverySource()`

```php
servicesApiDeliveriesDownloadDeliverySource($id): string
```

Download a Translation Source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // int | The ID.

try {
    $result = $apiInstance->servicesApiDeliveriesDownloadDeliverySource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->servicesApiDeliveriesDownloadDeliverySource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID. | |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiDeliveriesGetDeliveriesByJobId()`

```php
servicesApiDeliveriesGetDeliveriesByJobId($limit, $start, $job_id): \LiltConnectorSDK\Model\TranslationsResponse
```

Retrieve a list of Translations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | the query limit
$start = 0; // int | where to start
$job_id = 12345; // int | The Job ID.

try {
    $result = $apiInstance->servicesApiDeliveriesGetDeliveriesByJobId($limit, $start, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->servicesApiDeliveriesGetDeliveriesByJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| the query limit | [optional] [default to 25] |
| **start** | **int**| where to start | [optional] [default to 0] |
| **job_id** | **int**| The Job ID. | [optional] |

### Return type

[**\LiltConnectorSDK\Model\TranslationsResponse**](../Model/TranslationsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiDeliveriesGetDeliveryById()`

```php
servicesApiDeliveriesGetDeliveryById($id): \LiltConnectorSDK\Model\TranslationResponse
```

Retrieve a Translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // int | The ID.

try {
    $result = $apiInstance->servicesApiDeliveriesGetDeliveryById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->servicesApiDeliveriesGetDeliveryById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID. | |

### Return type

[**\LiltConnectorSDK\Model\TranslationResponse**](../Model/TranslationResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiDeliveriesUpdateDelivery()`

```php
servicesApiDeliveriesUpdateDelivery($id, $update_delivery_options): \LiltConnectorSDK\Model\TranslationResponse
```

Update a Translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // int | The ID.
$update_delivery_options = new \LiltConnectorSDK\Model\UpdateDeliveryOptions(); // \LiltConnectorSDK\Model\UpdateDeliveryOptions

try {
    $result = $apiInstance->servicesApiDeliveriesUpdateDelivery($id, $update_delivery_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->servicesApiDeliveriesUpdateDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID. | |
| **update_delivery_options** | [**\LiltConnectorSDK\Model\UpdateDeliveryOptions**](../Model/UpdateDeliveryOptions.md)|  | [optional] |

### Return type

[**\LiltConnectorSDK\Model\TranslationResponse**](../Model/TranslationResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
