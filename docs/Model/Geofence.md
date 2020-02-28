# Geofence

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**outline** | **object[]** | Array of {lat:x,lng:y} objects representing the vertices of the polygon. Do not use with center and radius. | [optional] 
**center** | [**\Swagger\Client\Model\GeoPoint**](GeoPoint.md) | For circular geofences, the center. Property is ignored if outline !&#x3D; null. | [optional] 
**radius** | **float** | For circular geofences, the radius of the circle in meters. Property is ignored if outline !&#x3D; null. | [optional] 
**type** | **string** | Grouping value | [optional] 
**name** | **string** |  | [optional] 
**was_inside** | **bool** | If the last point received was inside the geofence. Only updated for notifications (not the safe-zone as that is evaluated on the device) | [optional] [default to false]
**last_checked** | [**\DateTime**](\DateTime.md) | When the geofence was last evaluated. Only updated for notifications (not the safe-zone as that is evaluated on the device) | [optional] 
**modified** | **bool** |  | [optional] [default to false]
**id** | **float** |  | [optional] 
**device_id** | **float** |  | [optional] 
**config_id** | **float** |  | [optional] 
**user_id** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


