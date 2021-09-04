<?php
$lat = '14.6507';
$lot = '121.1029';

$loc = 'Marikina';

$MapquestData = file_get_contents('http://www.mapquestapi.com/search/v2/radius?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&maxMatches=10&origin='.$lat.','.$lot.'');

$near = json_decode($MapquestData, TRUE);

$Geocoding = file_get_contents("http://www.mapquestapi.com/geocoding/v1/address?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&location=".$loc."");
   


$geo = json_decode($Geocoding, TRUE);


//echo $geo['results']['0']['locations']['0']['latLng']['lat'];
//echo $geo['results']['0']['locations']['0']['latLng']['lng'];    

//echo '<pre>',print_r($geo),'</pre>';


//https://places.ls.hereapi.com/places/v1/categories/places?at=41.8369%2C-87.684&apiKey=H6XyiCT0w1t9GgTjqhRXxDMrVj9h78ya3NuxlwM7XUs
$hereData = file_get_contents('https://places.demo.api.here.com/places/v1/discover/here?at='.$lat.','.$lot.'&app_id=devportal-demo-20180625&app_code=9v2BkviRwi9Ot26kp2IysQ&cat=restaurant&pretty');


// Echo out a sample image 
$near3 = json_decode($hereData, TRUE);


$places = array();
$places2 = array();

$i=0;


//echo '<h1> Number of Near Landmarks : '.$near['resultsCount'].'</h1><br><br>';

//echo '<pre>',print_r($near),'</pre>';
//echo '<pre>',print_r($near3),'</pre>';
//MapQuest API Nearby Locations Output Name

foreach ($near['searchResults'] as $result) {


    foreach ($result['fields'] as $elements) {
        

    }
    $name =  $result['fields']['name'];
    $places[$i]= $name;
    $i ++;
}
    foreach ($places as $near) {
        //echo "<br>";
        //echo "<li>".$near."<li>";

    }

//HERE API Nearby Locations Output Name

$ctr = 0;
foreach ($near3['results'] as $result ) {

      foreach ($result[$ctr] as $res) {
         $name =  $result[$ctr]['title'];
        $places2[$ctr]= $name;
          $ctr++;
      }
}
//echo "<br>";
//echo '<h1> Number of Near Landmarks : '.$ctr.'</h1><br><br>';
    foreach ($places2 as $n) {
        //echo "<br>";
        //echo "<li>".$n."<li>";

    }



class Intro{

function __construct(){


}




}


$s = new Intro();


?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="sweetalert2.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>



<body>

<button id="swal" onClick="swal()">B3</button>
    

<script src="sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
<script type="text/javascript">
   function swal()
  {
  Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})
  } 
 
</script>
</body>
</html>


Welcome!, I'm your Presentor Paul, and Welcome to WANDER!.
Wander is a Travelling Blog and Itinerary Website. Our goal is to help you plan your next trip and leave post and reviews for other users to see!. 
To get started we must first create an account. Creating an account on wander is extremely easy! Just enter your chosen name and password, and your in!. 

After creating an account we'll ask you to enter your current city location in order to help you see all the wonderous places you can visit!

Afterwards you'll be redirected at your main panel. Here you can see post made by other users either post about a place or general post! Here you can also see nearby place recommended by the system. You can also compose your very own post here! Lastly you can then select a recommended place to inspect it further.

Clicking a place brings you to its page. Here you can see it on a map. You can even see other nearby places recommended by the system! You can also see reviews left by other users and can even leave a review to the place yourself. Lastly if you like the place then you can add it to your own very personal travel itinerary!

Here at your itinerary you can see all the places on your list marked on the map. You can also see them listed on the left side of the pages!

That's it!, with the nearby place recommendation, reviews and info about the place. We hope we can help you plan your next trip! Thank you and Have a nice day!. 