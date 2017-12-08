<?php

require_once(__DIR__ . '/../autoload.php');
use Swagger\Client\constants;

$device_api= new Swagger\Client\Api\DeviceApi();

const USERNAME = '';
const PASSWORD = '';

//Get the incoming data
$postBody = file_get_contents('php://input');
// and decode it
$incoming = json_decode($postBody);

/* Debug logging to file */
$my_file = 'pushlog.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);

// We could log the whole request
//$data = date('Y-m-d G:i:s') . ': ' .$postBody."\r\n";
//fwrite($handle, $data);

// Todo - message authentication & validation

// Firstly handle confirmation requests: the system requires confirmation from all new endpoints before
// notifications are sent to it. This only happens once.
// Note that this needs to be present in all of your endpoints
if($incoming->Type == "SubscriptionConfirmation"){
    file_get_contents($incoming->SubscribeURL);// that's all we need to do
}

//Once confirmed, we'll now received all notifications, as set up in register_push.php
else if($incoming->Type == "Notification"){

    $notification = json_decode($incoming->Message);

    //Optional, check if we've already processed this message..
    // if ( $notification->MessageId == ....

    // Get the datapoint
    $datapoint =  $notification->datapoint;
    // And get the device info
    $device = $notification->device;


    // Example: log entries
    $log_entry = 'Device id: '.$device->id.' (IMEI: '. $device->imei. ') has a new point: ';
    $log_entry .= $datapoint->location->lat . ',' . $datapoint->location->lng . ' - ' . $datapoint->address;
    // also available $datapoint->speed $datapoint->course...


    // Check if device is waiting for instructions
    if($device->currentMode == constants::MODE_AVAILABLE){

        // We need to authenticate before sending instructions
        $token = \Swagger\Client\Helpers::login(USERNAME, PASSWORD);// we can also reuse an application wide token
        $device_api->getApiClient()->getConfig()->addDefaultHeader("Authorization", $token->getId());

        // Now take action: wake up device
        $device_api->devicePrototypeWakeUp($device->id);
        // or go to sleep
        //$device_api->devicePrototypeSleep($device->getId());
    }


    fwrite($handle, "Log: ".$log_entry .PHP_EOL);
    fwrite($handle, "Message was: ".json_encode($notification).PHP_EOL);

}

// NOTE - If this script returns anything other than a 2XX (HTTP OK) code, the notification will be retried



?>