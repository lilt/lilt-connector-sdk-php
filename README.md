# lilt-connector-sdk-php

This document describes the Plugin API for Lilt's Connector platform. The
Plugin API is intented to be used by developers who wish to build
integrations into their desired systems. The purpose of this API is to
enable content transfer and status monitoring for localization projects.

- Read more about the concepts and workflows in the
  [user guide](/docs/api/v1.0).
- Test the API interactively via [Swagger UI](/api/v1.0/ui).



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/lilt-connector-sdk-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://connectors-admin.lilt.com/api/v1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CreditTransactionsApi* | [**servicesApiCreditTransactionCreateCreditTransaction**](docs/Api/CreditTransactionsApi.md#servicesapicredittransactioncreatecredittransaction) | **POST** /credit-transaction | Create a credit transaction. Request is expected to contain credits information encoded in jwt_token payload. Request encoded should have info for instant_translation_credits_change value, verified_translation_credits_change value, source_metadata which contains any identifying information to attach to the transaction, email for the user starting the transaction, and optionally lilt_token for the connector configuration.
*JobsApi* | [**servicesApiJobsAddFile**](docs/Api/JobsApi.md#servicesapijobsaddfile) | **POST** /jobs/{id}/files | Add a file to a Job.
*JobsApi* | [**servicesApiJobsCreateJob**](docs/Api/JobsApi.md#servicesapijobscreatejob) | **POST** /jobs | Create a Connector Job.
*JobsApi* | [**servicesApiJobsDeleteJobById**](docs/Api/JobsApi.md#servicesapijobsdeletejobbyid) | **DELETE** /jobs/{id} | Delete a Connector Job.
*JobsApi* | [**servicesApiJobsGetJobById**](docs/Api/JobsApi.md#servicesapijobsgetjobbyid) | **GET** /jobs/{id} | Retrieve a Connector Job.
*JobsApi* | [**servicesApiJobsGetJobs**](docs/Api/JobsApi.md#servicesapijobsgetjobs) | **GET** /jobs | Retrieve a list of Connector Jobs.
*JobsApi* | [**servicesApiJobsStartJob**](docs/Api/JobsApi.md#servicesapijobsstartjob) | **POST** /jobs/{id}/start | Start a Job.
*JobsApi* | [**servicesApiJobsSyncJob**](docs/Api/JobsApi.md#servicesapijobssyncjob) | **POST** /jobs/{id}/sync | Start a Sync.
*JobsApi* | [**servicesApiJobsUpdateJob**](docs/Api/JobsApi.md#servicesapijobsupdatejob) | **PUT** /jobs/{id} | Update a Connector Job.
*OrganizationApi* | [**servicesApiOrganizationGetOrganizationRecord**](docs/Api/OrganizationApi.md#servicesapiorganizationgetorganizationrecord) | **GET** /organization | Get information about the organization based on lilt_token
*RegistrationApi* | [**servicesApiRegistrationRegisterCreditsBasedOrganization**](docs/Api/RegistrationApi.md#servicesapiregistrationregistercreditsbasedorganization) | **POST** /register | Register a new Connectors Organization
*SettingsApi* | [**servicesApiSettingsGetSettings**](docs/Api/SettingsApi.md#servicesapisettingsgetsettings) | **GET** /settings | Retrieve the settings.
*SettingsApi* | [**servicesApiSettingsUpdateSettings**](docs/Api/SettingsApi.md#servicesapisettingsupdatesettings) | **PUT** /settings | Update the settings.
*TranslationsApi* | [**servicesApiDeliveriesCompleteDelivery**](docs/Api/TranslationsApi.md#servicesapideliveriescompletedelivery) | **POST** /translations/{id}/complete | Complete a Translation.
*TranslationsApi* | [**servicesApiDeliveriesDownloadDelivery**](docs/Api/TranslationsApi.md#servicesapideliveriesdownloaddelivery) | **GET** /translations/{id}/download | Download a Translation.
*TranslationsApi* | [**servicesApiDeliveriesDownloadDeliverySource**](docs/Api/TranslationsApi.md#servicesapideliveriesdownloaddeliverysource) | **GET** /translations/{id}/source | Download a Translation Source.
*TranslationsApi* | [**servicesApiDeliveriesGetDeliveriesByJobId**](docs/Api/TranslationsApi.md#servicesapideliveriesgetdeliveriesbyjobid) | **GET** /translations | Retrieve a list of Translations.
*TranslationsApi* | [**servicesApiDeliveriesGetDeliveryById**](docs/Api/TranslationsApi.md#servicesapideliveriesgetdeliverybyid) | **GET** /translations/{id} | Retrieve a Translation.
*TranslationsApi* | [**servicesApiDeliveriesUpdateDelivery**](docs/Api/TranslationsApi.md#servicesapideliveriesupdatedelivery) | **PUT** /translations/{id} | Update a Translation.

## Models

- [ErrorResponse](docs/Model/ErrorResponse.md)
- [JobResponse](docs/Model/JobResponse.md)
- [JobsResponse](docs/Model/JobsResponse.md)
- [NewJobOptions](docs/Model/NewJobOptions.md)
- [NewOrganizationOptions](docs/Model/NewOrganizationOptions.md)
- [OrganizationResponse](docs/Model/OrganizationResponse.md)
- [ServicesApiCreditTransactionCreateCreditTransactionRequest](docs/Model/ServicesApiCreditTransactionCreateCreditTransactionRequest.md)
- [SettingsResponse](docs/Model/SettingsResponse.md)
- [TranslationResponse](docs/Model/TranslationResponse.md)
- [TranslationsResponse](docs/Model/TranslationsResponse.md)
- [UpdateDeliveryOptions](docs/Model/UpdateDeliveryOptions.md)
- [UpdateJobOptions](docs/Model/UpdateJobOptions.md)

## Authorization

Authentication schemes defined for the API:
### BearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
