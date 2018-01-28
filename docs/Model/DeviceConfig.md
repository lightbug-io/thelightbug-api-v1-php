# DeviceConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_fw** | **string** | Current Firmware version | [optional] 
**ota_fw** | **string** | Pending Firmware version. If non null, the unit will be told to upgrade to this version when it next transmits in sleep mode. | [optional] 
**interval** | **float** | The wake mode interval in seconds. The unit will connect to the server this often when awake. | 
**sleep_interval** | **float** | Sleep mode interval in seconds. The unit will try to connect this often to the server when asleep | 
**check_in_interval** | **float** | Internal Use. A failsafe to ensure the unit connects to the server at least this often. | 
**packing** | **float** | The number of GPS points to send with each transmission. A packing setting of 3 with an &#39;interval&#39; of 60s will result in points recorded approximately every 20s, but they will only be sent together. This increases the time you have to wait for locations to come through to the server but improves battery life | 
**movement_sensitivity** | **float** | Deprecated. See debounce. | [optional] 
**debounce** | **float** | Movement sensitivity on a scale of 1 to 10, with 1 being the most sensitive. It is correlated to the number of consecutive milliseconds the acceleration needs to exceed the movementSensitivity threshold | [optional] 
**movement_sensitivity2** | **float** | A secondary debounce value. Typically this value is lower or equal to debounce, representing increased sensitivity to movement once the device is already moving. | [optional] 
**behavior** | **float** | Char Bitfield with various flags. Advanced use only.  DisableBluetooth:32 |  Encrypt:128 |  GsmOnWhenAwake:1 |  GsmOnWhenAsleep:2 |  GpsOnWhenAwake:4 |  DisableWifiAccuracyAssist:8 |  RepeatSleep:16 |  DisableWifi:64 | [optional] 
**mode_control** | **float** | Char Bitfield with various flags. Advanced use only.  StartStopOnly:1 |  LockAwakeOnAlert:2 |  SendSleepLocAfterBtDisconnect:4 | | [optional] 
**gps_timeout** | **float** | How long to let the GPS searches for a lock in seconds before giving up. Max 255s. | [optional] 
**transmit_timeout** | **float** | When the unit first wakes up from sleep, how long to wait before trying to transmit in multiples of 30 seconds. 0 &#x3D; instant, 1 &#x3D; 30s, 2 &#x3D; 60s...   Useful to avoid detection or draining battery inside shielded buildings. | [optional] 
**gps_stabilize** | **float** | How long to let the GPS stabilise in seconds once a lock is achieved before sending the position. Higher values may increase accuracy. | [optional] 
**gps_check_interval** | **float** | If a safe-zone is used, how often to check the wifi &amp; gps to see if its still inside it (only applies when motion is detected) | [optional] 
**stop_timeout** | **float** | The total amount of time in seconds the unit has to be stationary for before deeming the journey over and switching to sleep mode | [optional] 
**tolerance_percentage** | **float** | Reserved for internal use. | [optional] 
**reasons_to_wake** | **object[]** |  | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Set to any non null date to indicate the configuration should be pushed to the device when it next connects | [optional] 
**force_fw** | **bool** | Internal use.   Used with otaFW. Set to true to force the unit to upgrade on next connection (rather than waiting for a sleep connection | [optional] [default to false]
**received_at** | [**\DateTime**](\DateTime.md) | Indicates the last time the settings were sent to the device | [optional] 
**reset** | **float** | Non NULL values cause unit to restart on next connection   0 &#x3D; Normal reboot   1 &#x3D; Clear settings cache and restart   2 &#x3D; Clear cache and bluetooth connection data, then restart | [optional] 
**flash_try_count** | **float** | Internal use. Set to 0 when changing otaFW | [optional] 
**home_wifi_network** | **string** | WiFi network name to use as a Safe-zone. When this network is visible, stay asleep | [optional] 
**wake_action** | **string** | What to do when the unit wakes up (ie is moved and not in a safe-zone). Options are &#39;available&#39; (lost and found), and &#39;normal&#39; (tracking) | [default to 'normal']
**on_demand_time** | **float** | Deprecated | 
**alert_action** | **string** | What to do when the button is pressed or the unit is dropped. Options are &#39;available&#39; (stay registered on the mobile network), &#39;nothing&#39; (one transmission) and  &#39;lockOn&#39; (keep transmitting at &#39;interval&#39; until instructed otherwise | [default to 'nothing']
**id** | **float** |  | [optional] 
**device_id** | **float** |  | [optional] 
**safe_zone_id** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


