# LiltConnectorSDK\JobsApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**servicesApiJobsAddFile()**](JobsApi.md#servicesApiJobsAddFile) | **POST** /jobs/{id}/files | Add a file to a Job.
[**servicesApiJobsCreateJob()**](JobsApi.md#servicesApiJobsCreateJob) | **POST** /jobs | Create a Connector Job.
[**servicesApiJobsGetJobById()**](JobsApi.md#servicesApiJobsGetJobById) | **GET** /jobs/{id} | Retrieve a Connector Job.
[**servicesApiJobsGetJobs()**](JobsApi.md#servicesApiJobsGetJobs) | **GET** /jobs | Retrieve a list of Connector Jobs.
[**servicesApiJobsStartJob()**](JobsApi.md#servicesApiJobsStartJob) | **POST** /jobs/{id}/start | Start a Job.
[**servicesApiJobsSyncJob()**](JobsApi.md#servicesApiJobsSyncJob) | **POST** /jobs/{id}/sync | Start a Sync.


## `servicesApiJobsAddFile()`

```php
servicesApiJobsAddFile($id, $name, $trglang, $body)
```

Add a file to a Job.

Add files to a job to submit them for translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // int | The Job ID.
$name = sample.txt; // string | The file name.
$trglang = array('trglang_example'); // string[] | The target language. Many target languages can be added to a source file.
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->servicesApiJobsAddFile($id, $name, $trglang, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsAddFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The Job ID. |
 **name** | **string**| The file name. |
 **trglang** | [**string[]**](../Model/string.md)| The target language. Many target languages can be added to a source file. | [optional]
 **body** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiJobsCreateJob()`

```php
servicesApiJobsCreateJob(): \LiltConnectorSDK\Model\JobResponse
```

Create a Connector Job.

The general workflow for a job is as follows.  1. Create a job. 1. Add files to a job. 1. Start the job. 1. Poll for translation completion. 1. Download the translated files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->servicesApiJobsCreateJob();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsCreateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LiltConnectorSDK\Model\JobResponse**](../Model/JobResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiJobsGetJobById()`

```php
servicesApiJobsGetJobById($id): \LiltConnectorSDK\Model\JobResponse
```

Retrieve a Connector Job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // int | The Job ID.

try {
    $result = $apiInstance->servicesApiJobsGetJobById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsGetJobById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The Job ID. |

### Return type

[**\LiltConnectorSDK\Model\JobResponse**](../Model/JobResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiJobsGetJobs()`

```php
servicesApiJobsGetJobs($limit, $start): \LiltConnectorSDK\Model\JobResponse
```

Retrieve a list of Connector Jobs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | the query limit
$start = 0; // int | where to start

try {
    $result = $apiInstance->servicesApiJobsGetJobs($limit, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsGetJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the query limit | [optional]
 **start** | **int**| where to start | [optional]

### Return type

[**\LiltConnectorSDK\Model\JobResponse**](../Model/JobResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiJobsStartJob()`

```php
servicesApiJobsStartJob($id)
```

Start a Job.

Start a job once all of the source files have been added. Use the Job ID to poll for completion to ensure everything has been well received by Lilt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // int | The Job ID.

try {
    $apiInstance->servicesApiJobsStartJob($id);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsStartJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The Job ID. |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiJobsSyncJob()`

```php
servicesApiJobsSyncJob($id)
```

Start a Sync.

Checks for updates to the translations. Use the Job ID to poll for successful completion of the sync. When the sync is complete the translations endpoint can be used to view the translation status for the job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = LiltConnectorSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LiltConnectorSDK\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // int | The Job ID.

try {
    $apiInstance->servicesApiJobsSyncJob($id);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsSyncJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The Job ID. |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
