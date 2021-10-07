<?php
session_start();


$Geocoding = file_get_contents("http://www.mapquestapi.com/geocoding/v1/reverse?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&location=14.6554277,121.1105061&includeRoadMetadata=true&includeNearestIntersection=true");
$Geocoding2 = file_get_contents("https://us1.locationiq.com/v1/reverse.php?key=pk.afe673b433d0909e7601c9ea96162a9e&lat=14.6554277,121&lon=121.1105061&format=json");


   $geo = json_decode($Geocoding, TRUE);
   $geo1 = json_decode($Geocoding2, TRUE);
   echo '<pre>',print_r($geo),'</pre>';
   echo '<pre>',print_r($geo1),'</pre>';
   $street =  $geo['results'][0]['locations'][0]['street'];
   echo $place =  $geo1['display_name'];
  $_SESSION['lat'] =  $geo[0]['lat'];
  $_SESSION['lot'] =  $geo[0]['lon'];

?>