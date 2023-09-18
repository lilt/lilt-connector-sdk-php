# LiltConnectorSDK\CreditTransactionsApi

All URIs are relative to https://connectors-admin.lilt.com/api/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesApiCreditTransactionCreateCreditTransaction()**](CreditTransactionsApi.md#servicesApiCreditTransactionCreateCreditTransaction) | **POST** /credit-transaction | Create a credit transaction. Request is expected to contain credits information encoded in jwt_token payload. Request encoded should have info for instant_translation_credits_change value, verified_translation_credits_change value, source_metadata which contains any identifying information to attach to the transaction, email for the user starting the transaction, and optionally lilt_token for the connector configuration. |


## `servicesApiCreditTransactionCreateCreditTransaction()`

```php
servicesApiCreditTransactionCreateCreditTransaction($services_api_credit_transaction_create_credit_transaction_request)
```

Create a credit transaction. Request is expected to contain credits information encoded in jwt_token payload. Request encoded should have info for instant_translation_credits_change value, verified_translation_credits_change value, source_metadata which contains any identifying information to attach to the transaction, email for the user starting the transaction, and optionally lilt_token for the connector configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new LiltConnectorSDK\Api\CreditTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$services_api_credit_transaction_create_credit_transaction_request = new \LiltConnectorSDK\Model\ServicesApiCreditTransactionCreateCreditTransactionRequest(); // \LiltConnectorSDK\Model\ServicesApiCreditTransactionCreateCreditTransactionRequest

try {
    $apiInstance->servicesApiCreditTransactionCreateCreditTransaction($services_api_credit_transaction_create_credit_transaction_request);
} catch (Exception $e) {
    echo 'Exception when calling CreditTransactionsApi->servicesApiCreditTransactionCreateCreditTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **services_api_credit_transaction_create_credit_transaction_request** | [**\LiltConnectorSDK\Model\ServicesApiCreditTransactionCreateCreditTransactionRequest**](../Model/ServicesApiCreditTransactionCreateCreditTransactionRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
