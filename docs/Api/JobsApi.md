# LiltConnectorSDK\JobsApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesApiJobsAddFile()**](JobsApi.md#servicesApiJobsAddFile) | **POST** /jobs/{id}/files | Add a file to a Job. |
| [**servicesApiJobsCreateJob()**](JobsApi.md#servicesApiJobsCreateJob) | **POST** /jobs | Create a Connector Job. |
| [**servicesApiJobsDeleteJobById()**](JobsApi.md#servicesApiJobsDeleteJobById) | **DELETE** /jobs/{id} | Delete a Connector Job. |
| [**servicesApiJobsGetJobById()**](JobsApi.md#servicesApiJobsGetJobById) | **GET** /jobs/{id} | Retrieve a Connector Job. |
| [**servicesApiJobsGetJobs()**](JobsApi.md#servicesApiJobsGetJobs) | **GET** /jobs | Retrieve a list of Connector Jobs. |
| [**servicesApiJobsStartJob()**](JobsApi.md#servicesApiJobsStartJob) | **POST** /jobs/{id}/start | Start a Job. |
| [**servicesApiJobsSyncJob()**](JobsApi.md#servicesApiJobsSyncJob) | **POST** /jobs/{id}/sync | Start a Sync. |
| [**servicesApiJobsUpdateJob()**](JobsApi.md#servicesApiJobsUpdateJob) | **PUT** /jobs/{id} | Update a Connector Job. |


## `servicesApiJobsAddFile()`

```php
servicesApiJobsAddFile($id, $name, $trglang, $srclang, $due, $body)
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
$trglang = array('trglang_example'); // string[] | The target language. Many target languages can be added to a source file. To add more than one target language pass in the trglang query parameter multiple times. For example: ?trglang=fr-FR&trglang=es-ES.
$srclang = 'en-US'; // string | The source language.
$due = 2022-05-20T04:09:39Z; // \DateTime | The due date for the file as an ISO-8601 string.
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->servicesApiJobsAddFile($id, $name, $trglang, $srclang, $due, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsAddFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Job ID. | |
| **name** | **string**| The file name. | |
| **trglang** | [**string[]**](../Model/string.md)| The target language. Many target languages can be added to a source file. To add more than one target language pass in the trglang query parameter multiple times. For example: ?trglang&#x3D;fr-FR&amp;trglang&#x3D;es-ES. | |
| **srclang** | **string**| The source language. | [optional] [default to &#39;en-US&#39;] |
| **due** | **\DateTime**| The due date for the file as an ISO-8601 string. | [optional] |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiJobsCreateJob()`

```php
servicesApiJobsCreateJob($new_job_options): \LiltConnectorSDK\Model\JobResponse
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
$new_job_options = new \LiltConnectorSDK\Model\NewJobOptions(); // \LiltConnectorSDK\Model\NewJobOptions

try {
    $result = $apiInstance->servicesApiJobsCreateJob($new_job_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsCreateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_job_options** | [**\LiltConnectorSDK\Model\NewJobOptions**](../Model/NewJobOptions.md)|  | [optional] |

### Return type

[**\LiltConnectorSDK\Model\JobResponse**](../Model/JobResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesApiJobsDeleteJobById()`

```php
servicesApiJobsDeleteJobById($id)
```

Delete a Connector Job.

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
    $apiInstance->servicesApiJobsDeleteJobById($id);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsDeleteJobById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Job ID. | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Job ID. | |

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
servicesApiJobsGetJobs($limit, $start, $order): \LiltConnectorSDK\Model\JobsResponse
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
$order = 'asc'; // string | how to order the returned results

try {
    $result = $apiInstance->servicesApiJobsGetJobs($limit, $start, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsGetJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| the query limit | [optional] [default to 25] |
| **start** | **int**| where to start | [optional] [default to 0] |
| **order** | **string**| how to order the returned results | [optional] [default to &#39;asc&#39;] |

### Return type

[**\LiltConnectorSDK\Model\JobsResponse**](../Model/JobsResponse.md)

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Job ID. | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Job ID. | |

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

## `servicesApiJobsUpdateJob()`

```php
servicesApiJobsUpdateJob($id, $update_job_options): \LiltConnectorSDK\Model\JobResponse
```

Update a Connector Job.

Update a job to change the status or error message.

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
$update_job_options = new \LiltConnectorSDK\Model\UpdateJobOptions(); // \LiltConnectorSDK\Model\UpdateJobOptions

try {
    $result = $apiInstance->servicesApiJobsUpdateJob($id, $update_job_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->servicesApiJobsUpdateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Job ID. | |
| **update_job_options** | [**\LiltConnectorSDK\Model\UpdateJobOptions**](../Model/UpdateJobOptions.md)|  | [optional] |

### Return type

[**\LiltConnectorSDK\Model\JobResponse**](../Model/JobResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
