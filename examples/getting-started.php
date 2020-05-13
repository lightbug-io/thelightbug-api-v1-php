<?php

//Imports
use Swagger\Client\Helpers;
require_once(__DIR__ . '/../vendor/autoload.php');

// Enter login details here
const USERNAME = '';
const PASSWORD = '';

// Use details to login
$token = Helpers::login(USERNAME, PASSWORD);// we can also reuse an application wide token, default ttl is 2 weeks
$userId = $token->getUserId();  // store user ID

// Create our authenticated api clients
$user_api = new Swagger\Client\Api\UserApi(new \GuzzleHttp\Client(["headers" => ["Authorization" => $token->getId()]]));
$device_api = new Swagger\Client\Api\DeviceApi(new \GuzzleHttp\Client(["headers" => ["Authorization" => $token->getId()]]));

//Get devices on the account:
$devices = [];
try {
    $devices = $user_api->userPrototypeGetDevices($userId);
} catch (Exception $e) {
    echo 'Failed to get devices ', $e->getMessage(), PHP_EOL;
    die();
}

// Setup the time period we are interested in (last 7 days)
date_default_timezone_set('America/Los_Angeles');
$earliestTime = new DateTime();
$earliestTime->sub(new DateInterval('P7D'));
$latestTime = new DateTime();//now

// we could also set the earliest and latest times to be relative to current time
//$earliestTime = (new DateTime())->sub(new DateInterval("P2D")); - substract 2 days (P2D) from the current time
//$latestTime = new DateTime(); // NOW


// Set up the filter for the points we want
$point_filter = (object)[
    "where" => [
        "and" => [ // get last 2 days of data. note timestamp is Unix timestamp in milliseconds
            ["timestamp" => ["gt" => $earliestTime->getTimestamp()*1000]], // from 2 days ago
            ["timestamp" => ["lt" => $latestTime->getTimestamp()*1000]] // to now
        ]
    ],
    "order" => "timestamp DESC", // order the points in reverse order (newest first)
    "limit" => 5 // limit to the last (newest) 5 points
];

// Get the points
foreach($devices as $device){
    try {
        $deviceConfig = $device_api->devicePrototypeGetConfig($device->getId()); // see configuration.php for how to change settings
        $points = $device_api->devicePrototypeGetPoints($device->getId(), json_encode($point_filter));
        echo '<h3>Points for device '. $device->getName().' (Battery: '.$device->getBatteryVoltage().'V, Firmware: '.$deviceConfig->getCurrentFw().') </h3>';
        foreach($points as $point){
            if($point->getLocationType() !== 'invalid' && $point->getLocation()) {
                $date = $point->getTimestamp();
                $date->setTimezone(new DateTimeZone("America/Los_Angeles")); // localise the timestamp
                echo '<b>'. $date->format('Y-m-d H:i:s') . ':</b> [' . $point->getLocation()->getLat() . ',' . $point->getLocation()->getLng() . ']';
                if ($point->getAddress()) echo ' - ' . $point->getAddress();
                // for all point properties see lib/Model/Datapoint.php
                // $point->getSpeed()
                // $point->getCourse()
                // $point->getBatteryVoltage() - batteryVoltage at time of transmission
                echo "<br>";
            }
        }
    } catch (Exception $e) {
        echo 'Failed to get points for device '. $device->getName(), $e->getMessage(), PHP_EOL;
    }
}


?>