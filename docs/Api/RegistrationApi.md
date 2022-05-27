# LiltConnectorSDK\RegistrationApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**servicesApiRegistrationRegister()**](RegistrationApi.md#servicesApiRegistrationRegister) | **POST** /register | Register a new connector installation.


## `servicesApiRegistrationRegister()`

```php
servicesApiRegistrationRegister($registration_request): \LiltConnectorSDK\Model\RegistrationResponse
```

Register a new connector installation.

This endpoint is used to register a new connector installation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new LiltConnectorSDK\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_request = new \LiltConnectorSDK\Model\RegistrationRequest(); // \LiltConnectorSDK\Model\RegistrationRequest

try {
    $result = $apiInstance->servicesApiRegistrationRegister($registration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->servicesApiRegistrationRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_request** | [**\LiltConnectorSDK\Model\RegistrationRequest**](../Model/RegistrationRequest.md)|  | [optional]

### Return type

[**\LiltConnectorSDK\Model\RegistrationResponse**](../Model/RegistrationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
