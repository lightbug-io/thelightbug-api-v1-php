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

// Setup the time period we are interested in
$earliestTime = new DateTime( "2017-01-01 15:00:00", new DateTimeZone("America/Los_Angeles"));
$latestTime = new DateTime( "2018-01-01 15:00:00", new DateTimeZone("America/Los_Angeles"));

// we could also set the earliest and latest times to be relative to current time
//$earliestTime = (new DateTime())->sub(new DateInterval("P2D")); - substract 2 days (P2D) from the current time
//$latestTime = new DateTime(); // NOW


// Set up the filter for the points we want
$point_filter = (object)[
    "where" => [
//        "and" => [ // get last 2 days of data. note timestamp is Unix timestamp in milliseconds
//            ["timestamp" => ["gt" => $earliestTime->getTimestamp()*1000]], // from 2 days ago
//            ["timestamp" => ["lt" => $latestTime->getTimestamp()*1000]] // to now
//        ],
        "type" => "ultra" // only get fill level readings
    ],
    "order" => "timestamp DESC", // order the points in reverse order (newest first)
    //"limit" => 5 // limit to the last (newest) 5 points
];

// Get the points
foreach($devices as $device){
    try {
        $readings = $device_api->devicePrototypeGetReadings($device->getId(), $point_filter);
        if(count($readings)>0) {
            echo '<h3>Readings for device ' . $device->getName() . '</h3>';
            foreach ($readings as $reading) {
                $date = $reading->getTimestamp();
                //$date->setTimezone(new DateTimeZone("America/Los_Angeles")); // localise the timestamp

                $data = $reading->getValue();

                // To access the geo data, retrieve the datapoint by id
                // $reading->getDatapointId()

                // for type="ultra", the reading->value object has the following properties
                // - temp: temperature in C
                // - distance: main object distance in mm
                // - numObjects: the number of objects dectected
                // - objects: [ //an array of
                // ---- distance : the distance of this object
                // ---- time
                // ---- width
                // ---- amp
                // - ]

                $temp = $data['temp'] . 'C';
                $distance = $data['distance'] . 'mm';

                echo '<b>' . $date->format('Y-m-d H:i:s') . ':</b> ' . $temp . ', ' . $distance;
                echo "<br>";
            }
        }
    } catch (Exception $e) {
        echo 'Failed to get readings for device '. $device->getName(), $e->getMessage(), PHP_EOL;
    }
}


?>