# Swagger\Client\UserApi

All URIs are relative to *https://cp.remotethings.co.uk/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userLogin**](UserApi.md#userLogin) | **POST** /users/login | Login a user with username/email and password.
[**userPrototypeGetDevices**](UserApi.md#userPrototypeGetDevices) | **GET** /users/{id}/devices | Queries devices of user.


# **userLogin**
> \Swagger\Client\Model\AccessToken userLogin($credentials, $include)

Login a user with username/email and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$credentials = new \Swagger\Client\Model\Credentials(); // \Swagger\Client\Model\Credentials | Body (JSON)
$include = "include_example"; // string | Related objects to include in the response. See the description of return value for more details.

try {
    $result = $api_instance->userLogin($credentials, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | [**\Swagger\Client\Model\Credentials**](../Model/Credentials.md)| Body (JSON) |
 **include** | **string**| Related objects to include in the response. See the description of return value for more details. | [optional]

### Return type

[**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeGetDevices**
> \Swagger\Client\Model\Device[] userPrototypeGetDevices($id, $filter)

Queries devices of user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$id = "id_example"; // string | user id
$filter = "filter_example"; // string | JSON Filter object

try {
    $result = $api_instance->userPrototypeGetDevices($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeGetDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| user id |
 **filter** | **string**| JSON Filter object | [optional]

### Return type

[**\Swagger\Client\Model\Device[]**](../Model/Device.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

