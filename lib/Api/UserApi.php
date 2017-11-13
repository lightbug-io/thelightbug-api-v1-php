<?php
/**
 * UserApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TrackingAPI
 *
 * API for retrieving tracking data and changing settings on LightBug & RemoteThings tracking devices
 *
 * OpenAPI spec version: 1.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * UserApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return UserApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation userLogin
     *
     * Login a user with username/email and password.
     *
     * @param \Swagger\Client\Model\Credentials $credentials Body (JSON) (required)
     * @param string $include Related objects to include in the response. See the description of return value for more details. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\AccessToken
     */
    public function userLogin($credentials, $include = null)
    {
        list($response) = $this->userLoginWithHttpInfo($credentials, $include);
        return $response;
    }

    /**
     * Operation userLoginWithHttpInfo
     *
     * Login a user with username/email and password.
     *
     * @param \Swagger\Client\Model\Credentials $credentials Body (JSON) (required)
     * @param string $include Related objects to include in the response. See the description of return value for more details. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\AccessToken, HTTP status code, HTTP response headers (array of strings)
     */
    public function userLoginWithHttpInfo($credentials, $include = null)
    {
        // verify the required parameter 'credentials' is set
        if ($credentials === null) {
            throw new \InvalidArgumentException('Missing the required parameter $credentials when calling userLogin');
        }
        // parse inputs
        $resourcePath = "/users/login";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/x-www-form-urlencoded', 'application/xml', 'text/xml']);

        // query params
        if ($include !== null) {
            $queryParams['include'] = $this->apiClient->getSerializer()->toQueryValue($include);
        }
        // body params
        $_tempBody = null;
        if (isset($credentials)) {
            $_tempBody = $credentials;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\AccessToken',
                '/users/login'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\AccessToken', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\AccessToken', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation userPrototypeGetDevices
     *
     * Queries devices of user.
     *
     * @param string $id user id (required)
     * @param string $filter JSON Filter object (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Device[]
     */
    public function userPrototypeGetDevices($id, $filter = null)
    {
        list($response) = $this->userPrototypeGetDevicesWithHttpInfo($id, $filter);
        return $response;
    }

    /**
     * Operation userPrototypeGetDevicesWithHttpInfo
     *
     * Queries devices of user.
     *
     * @param string $id user id (required)
     * @param string $filter JSON Filter object (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Device[], HTTP status code, HTTP response headers (array of strings)
     */
    public function userPrototypeGetDevicesWithHttpInfo($id, $filter = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling userPrototypeGetDevices');
        }
        // parse inputs
        $resourcePath = "/users/{id}/devices";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/x-www-form-urlencoded', 'application/xml', 'text/xml']);

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Device[]',
                '/users/{id}/devices'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Device[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Device[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
