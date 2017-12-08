<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 08/12/2017
 * Time: 11:01
 */

namespace Swagger\Client;


class constants
{
    const MODE_WAKE = 0;
    const MODE_SLEEP = 1;
    const MODE_AVAILABLE = 2;


    const NOTIFICATION_TYPE_ALL_NEW_POINTS = 'newLoc';
    const NOTIFICATION_TYPE_WAKE_POINTS_ONLY = 'newWakeLoc'; // note this includes "available" locations

}