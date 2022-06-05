<?php 
require("connect.php");
$tmpquery = "";
if(isset($_REQUEST['id']) &&  intval($_REQUEST['id']) > 0)
    $tmpquery .= " and id=".$_REQUEST['id'];
if(isset($_REQUEST['locality_id']) && intval($_REQUEST['locality_id']) > 0)
    $tmpquery .= " and locality_id=".$_REQUEST['locality_id'];


$result = mysqli_query($mysqli, "SELECT * FROM `attractioninfo` where is_suggest=0 ". $tmpquery);
$response["type"] = 'FeatureCollection';

/*
type: 'FeatureCollection',
features: [
    {
        type: 'Feature',
        geometry: {
            type: 'Point',
            coordinates: [-77.032, 38.913],
        },
        properties: {
            id:42,
            title: 'Название',
            description: 'Чота типо описания'
        }
    }
],
avg_location: [12, 12]
*/
$avgLocation = [0, 0];
while($row = mysqli_fetch_object($result)) {
    $tmpObject["type"] = 'Feature';
    $tmpObject["geometry"]['type'] = 'Point';
    $tmpObject["geometry"]['coordinates'] = array_map('floatval', explode(',', $row->coordinates));
    
    $avgLocation[0] += $tmpObject["geometry"]['coordinates'][0]; 
    $avgLocation[1] += $tmpObject["geometry"]['coordinates'][1]; 

    $tmpObject["properties"]["id"] = $row->id;
    $tmpObject["properties"]["title"] = $row->name;
    $tmpObject["properties"]["type"] = $row->type;
    $tmpObject["properties"]["category"] = $row->category;
    $tmpObject["properties"]["place"] =  $row->address.', '. $row->locality;
    $tmpObject["properties"]["date"] = $row->date;
    $response["features"][] = $tmpObject; 
}
$response["avg_location"] = [$avgLocation[0] / count($response["features"]), $avgLocation[1] / count($response["features"])]; 
header('Content-type: application/json');
echo json_encode( $response, JSON_UNESCAPED_UNICODE );
//print_r($response);
?>