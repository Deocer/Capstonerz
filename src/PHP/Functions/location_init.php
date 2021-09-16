<?php
include ('CreateRecList.php'); 

	$loc = array('Manila','Mandaluyong','Marikina','Pasig','Quezon_City','San_Juan','Malabon','Navotas','Valenzuela','Las_Pinas','Makati','Muntinlupa','Paranaque','Pasay','Pateros','Taguig');

for ($i=0; $i < 15; $i++) { 

	$Geocoding = file_get_contents("http://www.mapquestapi.com/geocoding/v1/address?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&location=".$loc[$i].",Philippines");

	$geo = json_decode($Geocoding, TRUE);


	$lat =  $geo['results']['0']['locations']['0']['latLng']['lat'];
	$lot =  $geo['results']['0']['locations']['0']['latLng']['lng'];

	$plc = new RecomendedP();

	$plc -> locations('popular_Restaurants_in_'.$loc[$i].'',$lat,$lot,$loc[$i]);
    $plc -> locations('popular_places_in_'.$loc[$i].'',$lat,$lot,$loc[$i]);
    $plc -> locations('popular_Historic_landmarks_in_'.$loc[$i].'',$lat,$lot,$loc[$i]);
    $plc -> locations('popular_Hotels_in_'.$loc[$i].'',$lat,$lot,$loc[$i]);	

  	$Geocoding = '';

	$geo = '';


	$lat =  '';
	$lot =  '';

}
 
	


 ?>