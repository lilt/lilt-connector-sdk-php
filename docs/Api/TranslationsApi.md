# LiltConnectorSDK\TranslationsApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**servicesApiDeliveriesDownloadDelivery()**](TranslationsApi.md#servicesApiDeliveriesDownloadDelivery) | **GET** /translations/{id}/download | Download a Translation.
[**servicesApiDeliveriesGetDeliveriesByJobId()**](TranslationsApi.md#servicesApiDeliveriesGetDeliveriesByJobId) | **GET** /translations | Retrieve a list of Translations.
[**servicesApiDeliveriesGetDeliveryById()**](TranslationsApi.md#servicesApiDeliveriesGetDeliveryById) | **GET** /translations/{id} | Retrieve a Translation.


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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID. |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiDeliveriesGetDeliveriesByJobId()`

```php
servicesApiDeliveriesGetDeliveriesByJobId($limit, $start, $job_id): \LiltConnectorSDK\Model\JobResponse1
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the query limit | [optional] [default to 25]
 **start** | **int**| where to start | [optional] [default to 0]
 **job_id** | **int**| The Job ID. | [optional]

### Return type

[**\LiltConnectorSDK\Model\JobResponse1**](../Model/JobResponse1.md)

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID. |

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
