# Swagger\Client\UserApi

All URIs are relative to *https://api.thelightbug.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userLogin**](UserApi.md#userLogin) | **POST** /users/login | Login a user with username/email and password.
[**userPrototypeCreateGeofences**](UserApi.md#userPrototypeCreateGeofences) | **POST** /users/{id}/geofences | Creates a new instance in geofences of this model.
[**userPrototypeDeleteGeofences**](UserApi.md#userPrototypeDeleteGeofences) | **DELETE** /users/{id}/geofences | Deletes all geofences of this model.
[**userPrototypeDestroyByIdGeofences**](UserApi.md#userPrototypeDestroyByIdGeofences) | **DELETE** /users/{id}/geofences/{fk} | Delete a related item by id for geofences.
[**userPrototypeFindByIdGeofences**](UserApi.md#userPrototypeFindByIdGeofences) | **GET** /users/{id}/geofences/{fk} | Find a related item by id for geofences.
[**userPrototypeGetDeviceSummary**](UserApi.md#userPrototypeGetDeviceSummary) | **GET** /users/{id}/getDeviceSummary | Retrieve a summary of all devices on this user account.
[**userPrototypeGetDevices**](UserApi.md#userPrototypeGetDevices) | **GET** /users/{id}/devices | Queries devices of user.
[**userPrototypeGetDevicesInZone**](UserApi.md#userPrototypeGetDevicesInZone) | **GET** /users/{id}/getDevicesInZone | Retrieve a list of devices in any given zone or group of zones.
[**userPrototypeGetGeofences**](UserApi.md#userPrototypeGetGeofences) | **GET** /users/{id}/geofences | Queries geofences of user.
[**userPrototypeGetMqttCredentials**](UserApi.md#userPrototypeGetMqttCredentials) | **GET** /users/{id}/getMqttCredentials | 
[**userPrototypeUpdateByIdGeofences**](UserApi.md#userPrototypeUpdateByIdGeofences) | **PUT** /users/{id}/geofences/{fk} | Update a related item by id for geofences.


# **userLogin**
> \Swagger\Client\Model\AccessToken userLogin($credentials, $include)

Login a user with username/email and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$credentials = new \Swagger\Client\Model\Credentials(); // \Swagger\Client\Model\Credentials | Body (JSON)
$include = "include_example"; // string | Related objects to include in the response. See the description of return value for more details.

try {
    $result = $apiInstance->userLogin($credentials, $include);
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

# **userPrototypeCreateGeofences**
> \Swagger\Client\Model\Geofence userPrototypeCreateGeofences($id, $data)

Creates a new instance in geofences of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | user id
$data = new \Swagger\Client\Model\Geofence(); // \Swagger\Client\Model\Geofence | Body (JSON)

try {
    $result = $apiInstance->userPrototypeCreateGeofences($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeCreateGeofences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| user id |
 **data** | [**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)| Body (JSON) | [optional]

### Return type

[**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeDeleteGeofences**
> userPrototypeDeleteGeofences($id)

Deletes all geofences of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | user id

try {
    $apiInstance->userPrototypeDeleteGeofences($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeDeleteGeofences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| user id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeDestroyByIdGeofences**
> userPrototypeDestroyByIdGeofences($id, $fk)

Delete a related item by id for geofences.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | user id
$fk = 8.14; // float | Foreign key for geofences

try {
    $apiInstance->userPrototypeDestroyByIdGeofences($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeDestroyByIdGeofences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| user id |
 **fk** | **float**| Foreign key for geofences |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeFindByIdGeofences**
> \Swagger\Client\Model\Geofence userPrototypeFindByIdGeofences($id, $fk)

Find a related item by id for geofences.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | user id
$fk = 8.14; // float | Foreign key for geofences

try {
    $result = $apiInstance->userPrototypeFindByIdGeofences($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeFindByIdGeofences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| user id |
 **fk** | **float**| Foreign key for geofences |

### Return type

[**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeGetDeviceSummary**
> object[] userPrototypeGetDeviceSummary($id, $point_count, $date_range, $hide_approx)

Retrieve a summary of all devices on this user account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | user id
$point_count = "point_count_example"; // string | Maximum number of points to return per device. Default 5.
$date_range = "date_range_example"; // string | What date range to consider when retrieving recent points. Typical use is [TimeOfLastPointDownload, NOW]. Defaults to all time.
$hide_approx = "hide_approx_example"; // string | Don't include GSM / poor accuracy locations. Default to false.

try {
    $result = $apiInstance->userPrototypeGetDeviceSummary($id, $point_count, $date_range, $hide_approx);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeGetDeviceSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| user id |
 **point_count** | **string**| Maximum number of points to return per device. Default 5. | [optional]
 **date_range** | **string**| What date range to consider when retrieving recent points. Typical use is [TimeOfLastPointDownload, NOW]. Defaults to all time. | [optional]
 **hide_approx** | **string**| Don&#39;t include GSM / poor accuracy locations. Default to false. | [optional]

### Return type

**object[]**

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

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | user id
$filter = "filter_example"; // string | JSON Filter object

try {
    $result = $apiInstance->userPrototypeGetDevices($id, $filter);
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

# **userPrototypeGetDevicesInZone**
> object[] userPrototypeGetDevicesInZone($id, $zone_id, $zone_type, $include_approx)

Retrieve a list of devices in any given zone or group of zones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | user id
$zone_id = "zone_id_example"; // string | ID of geofence to search. zoneId or zoneType required.
$zone_type = "zone_type_example"; // string | Type of zones to search. Ignored if zoneId is specified. zoneId or zoneType required.
$include_approx = "include_approx_example"; // string | Include GSM / poor accuracy locations. Default to false.

try {
    $result = $apiInstance->userPrototypeGetDevicesInZone($id, $zone_id, $zone_type, $include_approx);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeGetDevicesInZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| user id |
 **zone_id** | **string**| ID of geofence to search. zoneId or zoneType required. | [optional]
 **zone_type** | **string**| Type of zones to search. Ignored if zoneId is specified. zoneId or zoneType required. | [optional]
 **include_approx** | **string**| Include GSM / poor accuracy locations. Default to false. | [optional]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeGetGeofences**
> \Swagger\Client\Model\Geofence[] userPrototypeGetGeofences($id, $filter)

Queries geofences of user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | user id
$filter = "filter_example"; // string | JSON Filter object

try {
    $result = $apiInstance->userPrototypeGetGeofences($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeGetGeofences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| user id |
 **filter** | **string**| JSON Filter object | [optional]

### Return type

[**\Swagger\Client\Model\Geofence[]**](../Model/Geofence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeGetMqttCredentials**
> \Swagger\Client\Model\InlineResponse200 userPrototypeGetMqttCredentials($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | user id

try {
    $result = $apiInstance->userPrototypeGetMqttCredentials($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeGetMqttCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| user id |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeUpdateByIdGeofences**
> \Swagger\Client\Model\Geofence userPrototypeUpdateByIdGeofences($id, $fk, $data)

Update a related item by id for geofences.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | user id
$fk = 8.14; // float | Foreign key for geofences
$data = new \Swagger\Client\Model\Geofence(); // \Swagger\Client\Model\Geofence | Body (JSON)

try {
    $result = $apiInstance->userPrototypeUpdateByIdGeofences($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeUpdateByIdGeofences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| user id |
 **fk** | **float**| Foreign key for geofences |
 **data** | [**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)| Body (JSON) | [optional]

### Return type

[**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

