<?php
/**
 * OrganizationApi
 * PHP version 7.4
 *
 * @category Class
 * @package  LiltConnectorSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lilt Connector Plugin API
 *
 * This document describes the Plugin API for Lilt's Connector platform. The Plugin API is intented to be used by developers who wish to build integrations into their desired systems. The purpose of this API is to enable content transfer and status monitoring for localization projects.  - Read more about the concepts and workflows in the   [user guide](/docs/api/v1.0). - Test the API interactively via [Swagger UI](/api/v1.0/ui).
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LiltConnectorSDK\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use LiltConnectorSDK\ApiException;
use LiltConnectorSDK\Configuration;
use LiltConnectorSDK\HeaderSelector;
use LiltConnectorSDK\ObjectSerializer;

/**
 * OrganizationApi Class Doc Comment
 *
 * @category Class
 * @package  LiltConnectorSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrganizationApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'servicesApiOrganizationGetOrganizationRecord' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation servicesApiOrganizationGetOrganizationRecord
     *
     * Get information about the organization based on lilt_token
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['servicesApiOrganizationGetOrganizationRecord'] to see the possible values for this operation
     *
     * @throws \LiltConnectorSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \LiltConnectorSDK\Model\OrganizationResponse|\LiltConnectorSDK\Model\ErrorResponse|\LiltConnectorSDK\Model\ErrorResponse|\LiltConnectorSDK\Model\ErrorResponse|\LiltConnectorSDK\Model\ErrorResponse
     */
    public function servicesApiOrganizationGetOrganizationRecord(string $contentType = self::contentTypes['servicesApiOrganizationGetOrganizationRecord'][0])
    {
        list($response) = $this->servicesApiOrganizationGetOrganizationRecordWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation servicesApiOrganizationGetOrganizationRecordWithHttpInfo
     *
     * Get information about the organization based on lilt_token
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['servicesApiOrganizationGetOrganizationRecord'] to see the possible values for this operation
     *
     * @throws \LiltConnectorSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \LiltConnectorSDK\Model\OrganizationResponse|\LiltConnectorSDK\Model\ErrorResponse|\LiltConnectorSDK\Model\ErrorResponse|\LiltConnectorSDK\Model\ErrorResponse|\LiltConnectorSDK\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function servicesApiOrganizationGetOrganizationRecordWithHttpInfo(string $contentType = self::contentTypes['servicesApiOrganizationGetOrganizationRecord'][0])
    {
        $request = $this->servicesApiOrganizationGetOrganizationRecordRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\LiltConnectorSDK\Model\OrganizationResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\LiltConnectorSDK\Model\OrganizationResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\LiltConnectorSDK\Model\OrganizationResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\LiltConnectorSDK\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\LiltConnectorSDK\Model\ErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\LiltConnectorSDK\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\LiltConnectorSDK\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\LiltConnectorSDK\Model\ErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\LiltConnectorSDK\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\LiltConnectorSDK\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\LiltConnectorSDK\Model\ErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\LiltConnectorSDK\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\LiltConnectorSDK\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\LiltConnectorSDK\Model\ErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\LiltConnectorSDK\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\LiltConnectorSDK\Model\OrganizationResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\LiltConnectorSDK\Model\OrganizationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\LiltConnectorSDK\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\LiltConnectorSDK\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\LiltConnectorSDK\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\LiltConnectorSDK\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation servicesApiOrganizationGetOrganizationRecordAsync
     *
     * Get information about the organization based on lilt_token
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['servicesApiOrganizationGetOrganizationRecord'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function servicesApiOrganizationGetOrganizationRecordAsync(string $contentType = self::contentTypes['servicesApiOrganizationGetOrganizationRecord'][0])
    {
        return $this->servicesApiOrganizationGetOrganizationRecordAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation servicesApiOrganizationGetOrganizationRecordAsyncWithHttpInfo
     *
     * Get information about the organization based on lilt_token
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['servicesApiOrganizationGetOrganizationRecord'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function servicesApiOrganizationGetOrganizationRecordAsyncWithHttpInfo(string $contentType = self::contentTypes['servicesApiOrganizationGetOrganizationRecord'][0])
    {
        $returnType = '\LiltConnectorSDK\Model\OrganizationResponse';
        $request = $this->servicesApiOrganizationGetOrganizationRecordRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'servicesApiOrganizationGetOrganizationRecord'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['servicesApiOrganizationGetOrganizationRecord'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function servicesApiOrganizationGetOrganizationRecordRequest(string $contentType = self::contentTypes['servicesApiOrganizationGetOrganizationRecord'][0])
    {


        $resourcePath = '/organization';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
