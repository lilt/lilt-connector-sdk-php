# LiltConnectorSDK\LogsApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesApiLogsCreateLogEntry()**](LogsApi.md#servicesApiLogsCreateLogEntry) | **POST** /logs | Create a log entry for monitoring and debugging. |


## `servicesApiLogsCreateLogEntry()`

```php
servicesApiLogsCreateLogEntry($services_api_logs_create_log_entry_request)
```

Create a log entry for monitoring and debugging.

This endpoint is used to push log entries to a central system (such as DataDog) for real-time monitoring, debugging, and alerting.  It is called at the end of each script execution (upload or download) and upon completion of any critical operation.  Requires authentication via Bearer token to identify the connector.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$services_api_logs_create_log_entry_request = new \LiltConnectorSDK\Model\ServicesApiLogsCreateLogEntryRequest(); // \LiltConnectorSDK\Model\ServicesApiLogsCreateLogEntryRequest

try {
    $apiInstance->servicesApiLogsCreateLogEntry($services_api_logs_create_log_entry_request);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->servicesApiLogsCreateLogEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **services_api_logs_create_log_entry_request** | [**\LiltConnectorSDK\Model\ServicesApiLogsCreateLogEntryRequest**](../Model/ServicesApiLogsCreateLogEntryRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
