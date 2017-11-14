# Geofence

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**outline** | **object[]** | Array of {lat:x,lng:y} objects representing the vertices of the polygon | [optional] 
**type** | **string** | &#39;inside&#39;, &#39;outside&#39; or &#39;cross&#39;. For device safe-zone the value is ignored (always &#39;outside&#39;) | [optional] 
**was_inside** | **bool** | If the last point received was inside the geofence. Only updated for notifications (not the safe-zone as that is evaluated on the device) | [optional] [default to false]
**last_checked** | [**\DateTime**](\DateTime.md) | When the geofence was last evaluated. Only updated for notifications (not the safe-zone as that is evaluated on the device) | [optional] 
**modified** | **bool** |  | [optional] [default to false]
**id** | **float** |  | [optional] 
**device_id** | **float** |  | [optional] 
**config_id** | **float** |  | [optional] 
**user_id** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


