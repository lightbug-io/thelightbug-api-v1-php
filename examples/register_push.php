<?php

//Imports
use Swagger\Client\constants;
use Swagger\Client\Helpers;
use Swagger\Client\Model\NotificationTrigger;

require_once(__DIR__ . '/../vendor/autoload.php');

// Enter login details here
const USERNAME = '';
const PASSWORD = '';

//enter the location of your push receiver
const PUSH_ENDPOINT = 'https://example.com/push/examples/push_receiver.php';
const READING_PUSH_ENDPOINT = 'https://example.com/push/examples/reading_push_receiver.php';
// the email address to notify of new wake points
const EMAIL_NOTIFY = '';

// Use details to login
$token = Helpers::login(USERNAME, PASSWORD);// we can also reuse an application wide token, default ttl is 2 weeks
$userId = $token->getUserId();  // store user ID

// Create our authenticated api clients
$user_api = new Swagger\Client\Api\UserApi(new \GuzzleHttp\Client(["headers" => ["Authorization" => $token->getId()]]));
$device_api = new Swagger\Client\Api\DeviceApi(new \GuzzleHttp\Client(["headers" => ["Authorization" => $token->getId()]]));


// alternatively : store the Token as an application wide variable

//Get devices on the account:
$devices = [];
try {
    $devices = $user_api->userPrototypeGetDevices($token->getUserId());
} catch (Exception $e) {
    echo 'Failed to get devices ', $e->getMessage(), PHP_EOL;
    die();
}

//Lets use the first device as an example:
$device = $devices[0];

//Get all the alerts that have been setup for this device
$current_alerts = $device_api->devicePrototypeGetNotificationTriggers($device->getId());

$http_alert_name = "HTTP Alert 1";
$http_reading_push_name = "HTTP Reading Push";
$http_email_name = "EMAIL Alert 1";

// Check to see if the alerts have already been created
$http_alert_exists = false;
$email_alert_exists = false;
$http_reading_alert_exists = false;
foreach($current_alerts as $alert){
    if($alert->getName() == $http_alert_name) $http_alert_exists = true;
    else if($alert->getName() == $http_email_name) $email_alert_exists = true;
    else if($alert->getName() == $http_reading_push_name) $http_reading_alert_exists = true;
}

//Create the missing alerts if required
if(!$http_alert_exists) {
    $newAlert = new NotificationTrigger([
        "name" => $http_alert_name,
        "type" => constants::NOTIFICATION_TYPE_ALL_NEW_POINTS,
        "parameters" => ["endpoint" => PUSH_ENDPOINT],
        "delivery" => ["http" => true]
    ]);

    $res = $device_api->devicePrototypeCreateNotificationTriggers($device->getId(), $newAlert);
    echo "created http alert". PHP_EOL;
}

if(!$http_reading_alert_exists) {
    $newAlert = new NotificationTrigger([
        "name" => $http_reading_push_name,
        "type" => constants::NOTIFICATION_TYPE_ALL_NEW_READINGS,
        "parameters" => ["endpoint" => READING_PUSH_ENDPOINT],
        "delivery" => ["http" => true]
    ]);

    $res = $device_api->devicePrototypeCreateNotificationTriggers($device->getId(), $newAlert);
    echo "created reading alert". PHP_EOL;
}

if(!$email_alert_exists) {
    $newAlert = new NotificationTrigger([
        "name" =>  $http_email_name,
        "type" => constants::NOTIFICATION_TYPE_WAKE_POINTS_ONLY,
        "parameters" => ["email" => EMAIL_NOTIFY], //alternatively leave this blank to default to user's email address
        "delivery" => ["email" => true]
    ]);

    $res = $device_api->devicePrototypeCreateNotificationTriggers($device->getId(), $newAlert);

    echo "created email alert". PHP_EOL;
}

echo "done";


?>