# Swagger\Client\DeviceApi

All URIs are relative to *https://cp.remotethings.co.uk/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deviceFindById**](DeviceApi.md#deviceFindById) | **GET** /devices/{id} | Find a model instance by {{id}} from the data source.
[**devicePrototypeDestroyByIdPoints**](DeviceApi.md#devicePrototypeDestroyByIdPoints) | **DELETE** /devices/{id}/points/{fk} | Delete a specific point for a device
[**devicePrototypeFindByIdPoints**](DeviceApi.md#devicePrototypeFindByIdPoints) | **GET** /devices/{id}/points/{fk} | Retrieve a specific point for a device
[**devicePrototypeGetConfig**](DeviceApi.md#devicePrototypeGetConfig) | **GET** /devices/{id}/config | Retrieve configuration for a device
[**devicePrototypeGetPoints**](DeviceApi.md#devicePrototypeGetPoints) | **GET** /devices/{id}/points | Retrieve points for a device
[**devicePrototypeUpdateConfig**](DeviceApi.md#devicePrototypeUpdateConfig) | **PUT** /devices/{id}/config | Update configuration for a device


# **deviceFindById**
> \Swagger\Client\Model\Device deviceFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DeviceApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->deviceFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->deviceFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeDestroyByIdPoints**
> devicePrototypeDestroyByIdPoints($fk, $id)

Delete a specific point for a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DeviceApi();
$fk = 3.4; // float | Foreign key for points
$id = 3.4; // float | device id

try {
    $api_instance->devicePrototypeDestroyByIdPoints($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeDestroyByIdPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **float**| Foreign key for points |
 **id** | **float**| device id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeFindByIdPoints**
> \Swagger\Client\Model\Datapoint devicePrototypeFindByIdPoints($fk, $id)

Retrieve a specific point for a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DeviceApi();
$fk = 3.4; // float | Foreign key for points
$id = 3.4; // float | device id

try {
    $result = $api_instance->devicePrototypeFindByIdPoints($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeFindByIdPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **float**| Foreign key for points |
 **id** | **float**| device id |

### Return type

[**\Swagger\Client\Model\Datapoint**](../Model/Datapoint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeGetConfig**
> \Swagger\Client\Model\DeviceConfig devicePrototypeGetConfig($id, $refresh)

Retrieve configuration for a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DeviceApi();
$id = 3.4; // float | device id
$refresh = true; // bool | unused

try {
    $result = $api_instance->devicePrototypeGetConfig($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeGetConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **refresh** | **bool**| unused | [optional]

### Return type

[**\Swagger\Client\Model\DeviceConfig**](../Model/DeviceConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeGetPoints**
> \Swagger\Client\Model\Datapoint[] devicePrototypeGetPoints($id, $filter)

Retrieve points for a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DeviceApi();
$id = 3.4; // float | device id
$filter = "filter_example"; // string | JSON Filter object

try {
    $result = $api_instance->devicePrototypeGetPoints($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeGetPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **filter** | **string**| JSON Filter object | [optional]

### Return type

[**\Swagger\Client\Model\Datapoint[]**](../Model/Datapoint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeUpdateConfig**
> \Swagger\Client\Model\DeviceConfig devicePrototypeUpdateConfig($id, $data)

Update configuration for a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DeviceApi();
$id = 3.4; // float | device id
$data = new \Swagger\Client\Model\DeviceConfig(); // \Swagger\Client\Model\DeviceConfig | Body (JSON)

try {
    $result = $api_instance->devicePrototypeUpdateConfig($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeUpdateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **data** | [**\Swagger\Client\Model\DeviceConfig**](../Model/DeviceConfig.md)| Body (JSON) | [optional]

### Return type

[**\Swagger\Client\Model\DeviceConfig**](../Model/DeviceConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

