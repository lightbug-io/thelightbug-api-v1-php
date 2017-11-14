<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 13/11/2017
 * Time: 09:18
 */

require_once(__DIR__ . '/../autoload.php');

$user_api = new Swagger\Client\Api\UserApi();
$device_api= new Swagger\Client\Api\DeviceApi();
$credentials = new \Swagger\Client\Model\Credentials([
    "username"=>"", //enter username here
    "password"=>"" // enter password
]);

$token = null; // the access token, default ttl is 2 weeks
$userId = null;

// Login
try {
    $result = $user_api->userLogin($credentials);
    $token = $result->getId(); // store the token
    //use the token for all further requests
    $user_api->getApiClient()->getConfig()->addDefaultHeader("Authorization", $token);
    $userId = $result->getUserId(); // store the users id

} catch (Exception $e) {
    echo 'Problem logging in ', $e->getMessage(), PHP_EOL;
    die();
}

//Get devices on the account:
$devices = [];
try {
    $devices = $user_api->userPrototypeGetDevices($userId);
} catch (Exception $e) {
    echo 'Failed to get devices ', $e->getMessage(), PHP_EOL;
    die();
}

//Change the settings for the first device
$config = $device_api->devicePrototypeGetConfig($devices[0]->getId());

var_dump($config); //print current config

// Now lets update some values.
$config->setInterval(300);// Set wake mode interval to 5 minutes ( 5 * 60 s)
$config->setSleepInterval(7200);// Set wake mode interval to 2 hours ( 2 * 60 * 60)

// Send 5 points per transmission
// In this case: record a GPS point every 1 minute. You will get a point every 1 minute on the map,
// but it will only be updated every 5 minutes
$config->setPacking(5);

$config->setReasonsToWake([[ //this is an array of objects
    "move" => true, // motion check = true - this should very rarely be set to false
    "bluetooth" => false, // ignore bluetooth disconnection
    "geofence" => true, // Check if outside geofence before waking up
    // The above equates to : if moving outside of the geofence: wake up

    "drop" => true // Drop/Fall detection will generate an alert
]]);

// if button is pressed or fall is detected, transmit the alert and go back to normal mode
// (sleep if not moving or inside the safe-zone, wake if outside and moving)
$config->setAlertAction("normal");

// alternatively, if button is pressed or drop/fall is detected, the device can stay in wake mode
// until manually instructed to go back to sleep (see the mode_control.php example for sleep instruction)
// $config->setAlertAction("lockOn");


// If button is pressed / fall detected / device is woken, set the device to transmit
// as quickly as possible, sending an approximate location first if required
// (a more accurate GPS location will follow if it becomes available)
$config->setTransmitTimeout(0);
//$config->setTransmitTimeout(1); wait up to 30s for a gps fix before transmitting

//set wifi safe-zone
$config->setHomeWifiNetwork("HomeNet");

//optional - set modified time
// this field gets set to null when the device receives the settings,
// So setting this value will give you an indication whether configuration on device is stale
$config->setModified(new DateTime());

// Set the new settings
try {
    $result = $device_api->devicePrototypeUpdateConfig($devices[0]->getId(), $config);
    echo "config updated to";
    var_dump($result);
} catch (Exception $e) {
    echo 'Failed to update config ', $e->getMessage(), PHP_EOL;
}

//Get device safezone if it exists
try {
    $result = $device_api->devicePrototypeGetSafeZone($devices[0]->getId());
    echo "Device safezone is";
    var_dump($result);
} catch (Exception $e) {
    echo 'No safe zone set / Failed to get safezone ', $e->getMessage(), PHP_EOL;
}
// Set device safezone:
try {
    $result = $device_api->devicePrototypeSetSafeZone([
        ["lat"=> 51.344338, "lng" => -5.42724],
        ["lat"=> 53.278353, "lng" => 1.77978],
        ["lat"=> 50.625073, "lng" => 3.09814],
        ["lat"=> 49.4395569, "lng" => -5.29541]
    ], $devices[0]->getId());
    echo "Device safezone set";
    var_dump($result);
} catch (Exception $e) {
    echo 'Failed to set safezone ', $e->getMessage(), PHP_EOL;
}


?>