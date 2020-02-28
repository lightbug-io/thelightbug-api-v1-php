<?php

require_once(__DIR__ . '/../vendor/autoload.php');
use Swagger\Client\constants;

const USERNAME = '';
const PASSWORD = '';

//Get the incoming data
$postBody = file_get_contents('php://input');
// and decode it
$incoming = json_decode($postBody);

/* Debug logging to file */
$my_file = 'reading_pushlog.txt';
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

    // Get the sensor reading
    $reading =  $notification->reading; // SensorReading type
    // And get the device info
    $device = $notification->device;


    // Example: log entries
    $log_entry = 'Device id: '.$device->id.' (IMEI: '. $device->imei. ') has a new point: ';

    // Example log of level measurement
    if($reading->type == "ultra"){
        $log_entry .= $reading->timestamp . ':' . $reading->value->distance;
        // the reading->value object has the following properties
        // - temp: temperature in C
        // - distance: main object distance in mm
        // - numObjects: the number of objects dectected
        // - objects: [ //an array of
        // ---- distance : the distance of this object
        // ---- time
        // ---- width
        // ---- amp
        // - ]
    }

    fwrite($handle, "Log: ".$log_entry .PHP_EOL);
    fwrite($handle, "Message was: ".json_encode($notification).PHP_EOL);

}

// NOTE - If this script returns anything other than a 2XX (HTTP OK) code, the notification will be retried



?>