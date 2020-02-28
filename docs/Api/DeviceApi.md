# Swagger\Client\DeviceApi

All URIs are relative to *https://api.thelightbug.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deviceFindById**](DeviceApi.md#deviceFindById) | **GET** /devices/{id} | Find a model instance by {{id}} from the data source.
[**devicePrototypeCreateNotificationTriggers**](DeviceApi.md#devicePrototypeCreateNotificationTriggers) | **POST** /devices/{id}/notificationTriggers | Create alert/notification trigger for device
[**devicePrototypeDeleteNotificationTriggers**](DeviceApi.md#devicePrototypeDeleteNotificationTriggers) | **DELETE** /devices/{id}/notificationTriggers | Remove all alert/notification trigger for device
[**devicePrototypeDestroyByIdNotificationTriggers**](DeviceApi.md#devicePrototypeDestroyByIdNotificationTriggers) | **DELETE** /devices/{id}/notificationTriggers/{fk} | Remove alert/notification trigger by id {fk} for device
[**devicePrototypeDestroyByIdPoints**](DeviceApi.md#devicePrototypeDestroyByIdPoints) | **DELETE** /devices/{id}/points/{fk} | Delete a specific point for a device
[**devicePrototypeDestroyByIdTransients**](DeviceApi.md#devicePrototypeDestroyByIdTransients) | **DELETE** /devices/{id}/transients/{fk} | Delete a related item by id for transients.
[**devicePrototypeFindByIdNotificationTriggers**](DeviceApi.md#devicePrototypeFindByIdNotificationTriggers) | **GET** /devices/{id}/notificationTriggers/{fk} | Find a related item by id for notificationTriggers.
[**devicePrototypeFindByIdPoints**](DeviceApi.md#devicePrototypeFindByIdPoints) | **GET** /devices/{id}/points/{fk} | Retrieve a specific point for a device
[**devicePrototypeFindByIdReadings**](DeviceApi.md#devicePrototypeFindByIdReadings) | **GET** /devices/{id}/readings/{fk} | Retrieve a specific reading for a device
[**devicePrototypeFindByIdTransients**](DeviceApi.md#devicePrototypeFindByIdTransients) | **GET** /devices/{id}/transients/{fk} | Find a related item by id for transients.
[**devicePrototypeFlightMode**](DeviceApi.md#devicePrototypeFlightMode) | **GET** /devices/{id}/flightMode | 
[**devicePrototypeGetConfig**](DeviceApi.md#devicePrototypeGetConfig) | **GET** /devices/{id}/config | Retrieve configuration for a device
[**devicePrototypeGetNotificationTriggers**](DeviceApi.md#devicePrototypeGetNotificationTriggers) | **GET** /devices/{id}/notificationTriggers | Get alerts for device
[**devicePrototypeGetPoints**](DeviceApi.md#devicePrototypeGetPoints) | **GET** /devices/{id}/points | Retrieve points for a device
[**devicePrototypeGetReadings**](DeviceApi.md#devicePrototypeGetReadings) | **GET** /devices/{id}/readings | Retrieve readings for a device
[**devicePrototypeGetSafeZone**](DeviceApi.md#devicePrototypeGetSafeZone) | **GET** /devices/{id}/getSafeZone | Get safe-zone for device
[**devicePrototypeGetTransients**](DeviceApi.md#devicePrototypeGetTransients) | **GET** /devices/{id}/transients | Queries transients of device.
[**devicePrototypeSetSafeZone**](DeviceApi.md#devicePrototypeSetSafeZone) | **POST** /devices/{id}/setSafeZone | Update safe-zone for device
[**devicePrototypeUpdateByIdNotificationTriggers**](DeviceApi.md#devicePrototypeUpdateByIdNotificationTriggers) | **PUT** /devices/{id}/notificationTriggers/{fk} | Update an alert/notification trigger by id {fk} for device
[**devicePrototypeUpdateByIdTransients**](DeviceApi.md#devicePrototypeUpdateByIdTransients) | **PUT** /devices/{id}/transients/{fk} | Update a related item by id for transients.
[**devicePrototypeUpdateConfig**](DeviceApi.md#devicePrototypeUpdateConfig) | **PUT** /devices/{id}/config | Update configuration for a device


# **deviceFindById**
> \Swagger\Client\Model\Device deviceFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->deviceFindById($id, $filter);
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

# **devicePrototypeCreateNotificationTriggers**
> \Swagger\Client\Model\NotificationTrigger devicePrototypeCreateNotificationTriggers($id, $data)

Create alert/notification trigger for device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$data = new \Swagger\Client\Model\NotificationTrigger(); // \Swagger\Client\Model\NotificationTrigger | Body (JSON)

try {
    $result = $apiInstance->devicePrototypeCreateNotificationTriggers($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeCreateNotificationTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **data** | [**\Swagger\Client\Model\NotificationTrigger**](../Model/NotificationTrigger.md)| Body (JSON) | [optional]

### Return type

[**\Swagger\Client\Model\NotificationTrigger**](../Model/NotificationTrigger.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeDeleteNotificationTriggers**
> devicePrototypeDeleteNotificationTriggers($id)

Remove all alert/notification trigger for device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id

try {
    $apiInstance->devicePrototypeDeleteNotificationTriggers($id);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeDeleteNotificationTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeDestroyByIdNotificationTriggers**
> devicePrototypeDestroyByIdNotificationTriggers($id, $fk)

Remove alert/notification trigger by id {fk} for device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$fk = 8.14; // float | Foreign key for notificationTriggers

try {
    $apiInstance->devicePrototypeDestroyByIdNotificationTriggers($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeDestroyByIdNotificationTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **fk** | **float**| Foreign key for notificationTriggers |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeDestroyByIdPoints**
> devicePrototypeDestroyByIdPoints($id, $fk)

Delete a specific point for a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$fk = 8.14; // float | Foreign key for points

try {
    $apiInstance->devicePrototypeDestroyByIdPoints($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeDestroyByIdPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **fk** | **float**| Foreign key for points |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeDestroyByIdTransients**
> devicePrototypeDestroyByIdTransients($id, $fk)

Delete a related item by id for transients.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$fk = 8.14; // float | Foreign key for transients

try {
    $apiInstance->devicePrototypeDestroyByIdTransients($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeDestroyByIdTransients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **fk** | **float**| Foreign key for transients |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeFindByIdNotificationTriggers**
> \Swagger\Client\Model\NotificationTrigger devicePrototypeFindByIdNotificationTriggers($id, $fk)

Find a related item by id for notificationTriggers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$fk = 8.14; // float | Foreign key for notificationTriggers

try {
    $result = $apiInstance->devicePrototypeFindByIdNotificationTriggers($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeFindByIdNotificationTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **fk** | **float**| Foreign key for notificationTriggers |

### Return type

[**\Swagger\Client\Model\NotificationTrigger**](../Model/NotificationTrigger.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeFindByIdPoints**
> \Swagger\Client\Model\Datapoint devicePrototypeFindByIdPoints($id, $fk)

Retrieve a specific point for a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$fk = 8.14; // float | Foreign key for points

try {
    $result = $apiInstance->devicePrototypeFindByIdPoints($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeFindByIdPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **fk** | **float**| Foreign key for points |

### Return type

[**\Swagger\Client\Model\Datapoint**](../Model/Datapoint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeFindByIdReadings**
> \Swagger\Client\Model\SensorReading devicePrototypeFindByIdReadings($id, $fk)

Retrieve a specific reading for a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$fk = 8.14; // float | Foreign key for readings

try {
    $result = $apiInstance->devicePrototypeFindByIdReadings($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeFindByIdReadings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **fk** | **float**| Foreign key for readings |

### Return type

[**\Swagger\Client\Model\SensorReading**](../Model/SensorReading.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeFindByIdTransients**
> \Swagger\Client\Model\DeviceTransient devicePrototypeFindByIdTransients($id, $fk)

Find a related item by id for transients.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$fk = 8.14; // float | Foreign key for transients

try {
    $result = $apiInstance->devicePrototypeFindByIdTransients($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeFindByIdTransients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **fk** | **float**| Foreign key for transients |

### Return type

[**\Swagger\Client\Model\DeviceTransient**](../Model/DeviceTransient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeFlightMode**
> object devicePrototypeFlightMode($id, $duration)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$duration = 8.14; // float | How long to go into flightMode, in minutes

try {
    $result = $apiInstance->devicePrototypeFlightMode($id, $duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeFlightMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **duration** | **float**| How long to go into flightMode, in minutes |

### Return type

**object**

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

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$refresh = true; // bool | unused

try {
    $result = $apiInstance->devicePrototypeGetConfig($id, $refresh);
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

# **devicePrototypeGetNotificationTriggers**
> \Swagger\Client\Model\NotificationTrigger[] devicePrototypeGetNotificationTriggers($id, $filter)

Get alerts for device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$filter = "filter_example"; // string | JSON Filter object

try {
    $result = $apiInstance->devicePrototypeGetNotificationTriggers($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeGetNotificationTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **filter** | **string**| JSON Filter object | [optional]

### Return type

[**\Swagger\Client\Model\NotificationTrigger[]**](../Model/NotificationTrigger.md)

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

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$filter = "filter_example"; // string | JSON Filter object

try {
    $result = $apiInstance->devicePrototypeGetPoints($id, $filter);
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

# **devicePrototypeGetReadings**
> \Swagger\Client\Model\SensorReading[] devicePrototypeGetReadings($id, $filter)

Retrieve readings for a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$filter = "filter_example"; // string | JSON Filter object

try {
    $result = $apiInstance->devicePrototypeGetReadings($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeGetReadings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **filter** | **string**| JSON Filter object | [optional]

### Return type

[**\Swagger\Client\Model\SensorReading[]**](../Model/SensorReading.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeGetSafeZone**
> \Swagger\Client\Model\Geofence devicePrototypeGetSafeZone($id)

Get safe-zone for device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id

try {
    $result = $apiInstance->devicePrototypeGetSafeZone($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeGetSafeZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |

### Return type

[**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeGetTransients**
> \Swagger\Client\Model\DeviceTransient[] devicePrototypeGetTransients($id, $filter)

Queries transients of device.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$filter = "filter_example"; // string | JSON Filter object

try {
    $result = $apiInstance->devicePrototypeGetTransients($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeGetTransients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **filter** | **string**| JSON Filter object | [optional]

### Return type

[**\Swagger\Client\Model\DeviceTransient[]**](../Model/DeviceTransient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeSetSafeZone**
> \Swagger\Client\Model\Geofence devicePrototypeSetSafeZone($id, $data)

Update safe-zone for device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$data = array(new \Swagger\Client\Model\GeoPoint()); // \Swagger\Client\Model\GeoPoint[] | Array of {lat:x,lng:y} points denoting the vertices of the safe-zone

try {
    $result = $apiInstance->devicePrototypeSetSafeZone($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeSetSafeZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **data** | [**\Swagger\Client\Model\GeoPoint[]**](../Model/GeoPoint.md)| Array of {lat:x,lng:y} points denoting the vertices of the safe-zone |

### Return type

[**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeUpdateByIdNotificationTriggers**
> \Swagger\Client\Model\NotificationTrigger devicePrototypeUpdateByIdNotificationTriggers($id, $fk, $data)

Update an alert/notification trigger by id {fk} for device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$fk = 8.14; // float | Foreign key for notificationTriggers
$data = new \Swagger\Client\Model\NotificationTrigger(); // \Swagger\Client\Model\NotificationTrigger | Body (JSON)

try {
    $result = $apiInstance->devicePrototypeUpdateByIdNotificationTriggers($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeUpdateByIdNotificationTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **fk** | **float**| Foreign key for notificationTriggers |
 **data** | [**\Swagger\Client\Model\NotificationTrigger**](../Model/NotificationTrigger.md)| Body (JSON) | [optional]

### Return type

[**\Swagger\Client\Model\NotificationTrigger**](../Model/NotificationTrigger.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicePrototypeUpdateByIdTransients**
> \Swagger\Client\Model\DeviceTransient devicePrototypeUpdateByIdTransients($id, $fk, $data)

Update a related item by id for transients.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$fk = 8.14; // float | Foreign key for transients
$data = new \Swagger\Client\Model\DeviceTransient(); // \Swagger\Client\Model\DeviceTransient | Body (JSON)

try {
    $result = $apiInstance->devicePrototypeUpdateByIdTransients($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicePrototypeUpdateByIdTransients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**| device id |
 **fk** | **float**| Foreign key for transients |
 **data** | [**\Swagger\Client\Model\DeviceTransient**](../Model/DeviceTransient.md)| Body (JSON) | [optional]

### Return type

[**\Swagger\Client\Model\DeviceTransient**](../Model/DeviceTransient.md)

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

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 8.14; // float | device id
$data = new \Swagger\Client\Model\DeviceConfig(); // \Swagger\Client\Model\DeviceConfig | Body (JSON)

try {
    $result = $apiInstance->devicePrototypeUpdateConfig($id, $data);
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

