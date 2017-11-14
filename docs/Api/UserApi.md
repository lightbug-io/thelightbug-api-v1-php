# Swagger\Client\UserApi

All URIs are relative to *https://cp.remotethings.co.uk/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userLogin**](UserApi.md#userLogin) | **POST** /users/login | Login a user with username/email and password.
[**userPrototypeCreateGeofences**](UserApi.md#userPrototypeCreateGeofences) | **POST** /users/{id}/geofences | Creates a new instance in geofences of this model.
[**userPrototypeDeleteGeofences**](UserApi.md#userPrototypeDeleteGeofences) | **DELETE** /users/{id}/geofences | Deletes all geofences of this model.
[**userPrototypeDestroyByIdGeofences**](UserApi.md#userPrototypeDestroyByIdGeofences) | **DELETE** /users/{id}/geofences/{fk} | Delete a related item by id for geofences.
[**userPrototypeFindByIdGeofences**](UserApi.md#userPrototypeFindByIdGeofences) | **GET** /users/{id}/geofences/{fk} | Find a related item by id for geofences.
[**userPrototypeGetDevices**](UserApi.md#userPrototypeGetDevices) | **GET** /users/{id}/devices | Queries devices of user.
[**userPrototypeGetGeofences**](UserApi.md#userPrototypeGetGeofences) | **GET** /users/{id}/geofences | Queries geofences of user.
[**userPrototypeUpdateByIdGeofences**](UserApi.md#userPrototypeUpdateByIdGeofences) | **PUT** /users/{id}/geofences/{fk} | Update a related item by id for geofences.


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

# **userPrototypeCreateGeofences**
> \Swagger\Client\Model\Geofence userPrototypeCreateGeofences($id, $data)

Creates a new instance in geofences of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$id = "id_example"; // string | user id
$data = new \Swagger\Client\Model\Geofence(); // \Swagger\Client\Model\Geofence | Body (JSON)

try {
    $result = $api_instance->userPrototypeCreateGeofences($id, $data);
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

$api_instance = new Swagger\Client\Api\UserApi();
$id = "id_example"; // string | user id

try {
    $api_instance->userPrototypeDeleteGeofences($id);
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
> userPrototypeDestroyByIdGeofences($fk, $id)

Delete a related item by id for geofences.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$fk = 3.4; // float | Foreign key for geofences
$id = "id_example"; // string | user id

try {
    $api_instance->userPrototypeDestroyByIdGeofences($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeDestroyByIdGeofences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **float**| Foreign key for geofences |
 **id** | **string**| user id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeFindByIdGeofences**
> \Swagger\Client\Model\Geofence userPrototypeFindByIdGeofences($fk, $id)

Find a related item by id for geofences.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$fk = 3.4; // float | Foreign key for geofences
$id = "id_example"; // string | user id

try {
    $result = $api_instance->userPrototypeFindByIdGeofences($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeFindByIdGeofences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **float**| Foreign key for geofences |
 **id** | **string**| user id |

### Return type

[**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)

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

# **userPrototypeGetGeofences**
> \Swagger\Client\Model\Geofence[] userPrototypeGetGeofences($id, $filter)

Queries geofences of user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$id = "id_example"; // string | user id
$filter = "filter_example"; // string | JSON Filter object

try {
    $result = $api_instance->userPrototypeGetGeofences($id, $filter);
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

# **userPrototypeUpdateByIdGeofences**
> \Swagger\Client\Model\Geofence userPrototypeUpdateByIdGeofences($fk, $id, $data)

Update a related item by id for geofences.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$fk = 3.4; // float | Foreign key for geofences
$id = "id_example"; // string | user id
$data = new \Swagger\Client\Model\Geofence(); // \Swagger\Client\Model\Geofence | Body (JSON)

try {
    $result = $api_instance->userPrototypeUpdateByIdGeofences($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeUpdateByIdGeofences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **float**| Foreign key for geofences |
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

