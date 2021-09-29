<?php
session_start();
echo $_SESSION['lat'];
$Geocoding = file_get_contents("https://us1.locationiq.com/v1/search.php?key=pk.afe673b433d0909e7601c9ea96162a9e&lat=".
    $_SESSION['lat']."&lon=".$_SESSION['lot']."&format=json");


   $geo = json_decode($Geocoding, TRUE);
   echo '<pre>',print_r($geo),'</pre>';
  $_SESSION['lat'] =  $geo[0]['lat'];
  $_SESSION['lot'] =  $geo[0]['lon'];



?>