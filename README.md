# Tracking-client-php
API for retrieving tracking data and changing settings on LightBug & RemoteThings tracking devices

- API version: 1.1.0

## Requirements

PHP 5.6 and later

## Installation & Usage
### Composer

clone locally and run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/tracking-api-php/vendor/autoload.php');
```

## Getting Started

See examples/getting-started.php

To register for HTTP push, see register_push.php and push_receiver.php
 - push_receiver.php needs to be uploaded to a publicly accessible URL
 - edit PUSH_ENDPOINT in register_push to match the URL, and enter login details for the account
 - run php register_push.php once to register your endpoint for push notifications


## Documentation for API Endpoints

All URIs are relative to *https://api.thelightbug.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DeviceApi* | [**deviceFindById**](docs/Api/DeviceApi.md#devicefindbyid) | **GET** /devices/{id} | Find a model instance by {{id}} from the data source.
*DeviceApi* | [**devicePrototypeCreateNotificationTriggers**](docs/Api/DeviceApi.md#deviceprototypecreatenotificationtriggers) | **POST** /devices/{id}/notificationTriggers | Create alert/notification trigger for device
*DeviceApi* | [**devicePrototypeDeleteNotificationTriggers**](docs/Api/DeviceApi.md#deviceprototypedeletenotificationtriggers) | **DELETE** /devices/{id}/notificationTriggers | Remove all alert/notification trigger for device
*DeviceApi* | [**devicePrototypeDestroyByIdNotificationTriggers**](docs/Api/DeviceApi.md#deviceprototypedestroybyidnotificationtriggers) | **DELETE** /devices/{id}/notificationTriggers/{fk} | Remove alert/notification trigger by id {fk} for device
*DeviceApi* | [**devicePrototypeDestroyByIdPoints**](docs/Api/DeviceApi.md#deviceprototypedestroybyidpoints) | **DELETE** /devices/{id}/points/{fk} | Delete a specific point for a device
*DeviceApi* | [**devicePrototypeDestroyByIdTransients**](docs/Api/DeviceApi.md#deviceprototypedestroybyidtransients) | **DELETE** /devices/{id}/transients/{fk} | Delete a related item by id for transients.
*DeviceApi* | [**devicePrototypeFindByIdNotificationTriggers**](docs/Api/DeviceApi.md#deviceprototypefindbyidnotificationtriggers) | **GET** /devices/{id}/notificationTriggers/{fk} | Find a related item by id for notificationTriggers.
*DeviceApi* | [**devicePrototypeFindByIdPoints**](docs/Api/DeviceApi.md#deviceprototypefindbyidpoints) | **GET** /devices/{id}/points/{fk} | Retrieve a specific point for a device
*DeviceApi* | [**devicePrototypeFindByIdReadings**](docs/Api/DeviceApi.md#deviceprototypefindbyidreadings) | **GET** /devices/{id}/readings/{fk} | Retrieve a specific reading for a device
*DeviceApi* | [**devicePrototypeFindByIdTransients**](docs/Api/DeviceApi.md#deviceprototypefindbyidtransients) | **GET** /devices/{id}/transients/{fk} | Find a related item by id for transients.
*DeviceApi* | [**devicePrototypeFlightMode**](docs/Api/DeviceApi.md#deviceprototypeflightmode) | **GET** /devices/{id}/flightMode | 
*DeviceApi* | [**devicePrototypeGetConfig**](docs/Api/DeviceApi.md#deviceprototypegetconfig) | **GET** /devices/{id}/config | Retrieve configuration for a device
*DeviceApi* | [**devicePrototypeGetNotificationTriggers**](docs/Api/DeviceApi.md#deviceprototypegetnotificationtriggers) | **GET** /devices/{id}/notificationTriggers | Get alerts for device
*DeviceApi* | [**devicePrototypeGetPoints**](docs/Api/DeviceApi.md#deviceprototypegetpoints) | **GET** /devices/{id}/points | Retrieve points for a device
*DeviceApi* | [**devicePrototypeGetReadings**](docs/Api/DeviceApi.md#deviceprototypegetreadings) | **GET** /devices/{id}/readings | Retrieve readings for a device
*DeviceApi* | [**devicePrototypeGetSafeZone**](docs/Api/DeviceApi.md#deviceprototypegetsafezone) | **GET** /devices/{id}/getSafeZone | Get safe-zone for device
*DeviceApi* | [**devicePrototypeGetTransients**](docs/Api/DeviceApi.md#deviceprototypegettransients) | **GET** /devices/{id}/transients | Queries transients of device.
*DeviceApi* | [**devicePrototypeSetSafeZone**](docs/Api/DeviceApi.md#deviceprototypesetsafezone) | **POST** /devices/{id}/setSafeZone | Update safe-zone for device
*DeviceApi* | [**devicePrototypeUpdateByIdNotificationTriggers**](docs/Api/DeviceApi.md#deviceprototypeupdatebyidnotificationtriggers) | **PUT** /devices/{id}/notificationTriggers/{fk} | Update an alert/notification trigger by id {fk} for device
*DeviceApi* | [**devicePrototypeUpdateByIdTransients**](docs/Api/DeviceApi.md#deviceprototypeupdatebyidtransients) | **PUT** /devices/{id}/transients/{fk} | Update a related item by id for transients.
*DeviceApi* | [**devicePrototypeUpdateConfig**](docs/Api/DeviceApi.md#deviceprototypeupdateconfig) | **PUT** /devices/{id}/config | Update configuration for a device
*UserApi* | [**userLogin**](docs/Api/UserApi.md#userlogin) | **POST** /users/login | Login a user with username/email and password.
*UserApi* | [**userPrototypeCreateGeofences**](docs/Api/UserApi.md#userprototypecreategeofences) | **POST** /users/{id}/geofences | Creates a new instance in geofences of this model.
*UserApi* | [**userPrototypeDeleteGeofences**](docs/Api/UserApi.md#userprototypedeletegeofences) | **DELETE** /users/{id}/geofences | Deletes all geofences of this model.
*UserApi* | [**userPrototypeDestroyByIdGeofences**](docs/Api/UserApi.md#userprototypedestroybyidgeofences) | **DELETE** /users/{id}/geofences/{fk} | Delete a related item by id for geofences.
*UserApi* | [**userPrototypeFindByIdGeofences**](docs/Api/UserApi.md#userprototypefindbyidgeofences) | **GET** /users/{id}/geofences/{fk} | Find a related item by id for geofences.
*UserApi* | [**userPrototypeGetDeviceSummary**](docs/Api/UserApi.md#userprototypegetdevicesummary) | **GET** /users/{id}/getDeviceSummary | Retrieve a summary of all devices on this user account.
*UserApi* | [**userPrototypeGetDevices**](docs/Api/UserApi.md#userprototypegetdevices) | **GET** /users/{id}/devices | Queries devices of user.
*UserApi* | [**userPrototypeGetDevicesInZone**](docs/Api/UserApi.md#userprototypegetdevicesinzone) | **GET** /users/{id}/getDevicesInZone | Retrieve a list of devices in any given zone or group of zones.
*UserApi* | [**userPrototypeGetGeofences**](docs/Api/UserApi.md#userprototypegetgeofences) | **GET** /users/{id}/geofences | Queries geofences of user.
*UserApi* | [**userPrototypeGetMqttCredentials**](docs/Api/UserApi.md#userprototypegetmqttcredentials) | **GET** /users/{id}/getMqttCredentials | 
*UserApi* | [**userPrototypeUpdateByIdGeofences**](docs/Api/UserApi.md#userprototypeupdatebyidgeofences) | **PUT** /users/{id}/geofences/{fk} | Update a related item by id for geofences.


## Documentation For Models

 - [AccessToken](docs/Model/AccessToken.md)
 - [Credentials](docs/Model/Credentials.md)
 - [Datapoint](docs/Model/Datapoint.md)
 - [Device](docs/Model/Device.md)
 - [DeviceConfig](docs/Model/DeviceConfig.md)
 - [DeviceTransient](docs/Model/DeviceTransient.md)
 - [GeoPoint](docs/Model/GeoPoint.md)
 - [Geofence](docs/Model/Geofence.md)
 - [Notification](docs/Model/Notification.md)
 - [NotificationTrigger](docs/Model/NotificationTrigger.md)
 - [SensorReading](docs/Model/SensorReading.md)



## Documentation For Authorization

Enter username and password in the examples. Login helper function is included in Helpers::login. See usage in gettings tarted

## Author




