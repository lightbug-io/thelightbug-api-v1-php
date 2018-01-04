# Tracking-client-php
API for retrieving tracking data and changing settings on LightBug & RemoteThings tracking devices

- API version: 1.1.0

## Requirements

PHP 5.4.0 and later

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/tracking-api-php/autoload.php');
```

## Getting Started

See examples/getting-started.php

To register for HTTP push, see register_push.php and push_receiver.php
 - push_receiver.php needs to be uploaded to a publicly accessible URL
 - edit PUSH_ENDPOINT in register_push to match the URL, and enter login details for the account
 - run php register_push.php once to register your endpoint for push notifications

?>

## Documentation for API Endpoints

All URIs are relative to *https://cp.remotethings.co.uk/api*

For extended method documentation, see *http://cp.remotethings.co.uk/docs/*



## Documentation For Models

 - [AccessToken](docs/Model/AccessToken.md)
 - [Credentials](docs/Model/Credentials.md)
 - [Datapoint](docs/Model/Datapoint.md)
 - [Device](docs/Model/Device.md)
 - [DeviceConfig](docs/Model/DeviceConfig.md)
 - [GeoPoint](docs/Model/GeoPoint.md)
 - [NotificationTrigger](docs/Model/NotificationTrigger.md)


## Documentation For Authorization

Enter username and password in the examples. Login helper function is included in Helpers::login. See usage in gettings tarted

## Author




