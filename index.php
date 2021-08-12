<<<<<<< HEAD
<?php

class recommendeds{






}

$lat = '14.6507';
$lot = '121.1029';

$MapquestData = file_get_contents('http://www.mapquestapi.com/search/v2/radius?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&maxMatches=10&origin='.$lat.','.$lot.'');


// Echo out a sample image 
$near = json_decode($MapquestData, TRUE);


//https://places.ls.hereapi.com/places/v1/categories/places?at=41.8369%2C-87.684&apiKey=H6XyiCT0w1t9GgTjqhRXxDMrVj9h78ya3NuxlwM7XUs
$hereData = file_get_contents('https://places.demo.api.here.com/places/v1/discover/here?at='.$lat.','.$lot.'&app_id=devportal-demo-20180625&app_code=9v2BkviRwi9Ot26kp2IysQ&cat=restaurant&pretty');


// Echo out a sample image 
$near3 = json_decode($hereData, TRUE);


$places = array();
$places2 = array();

$i=0;


echo '<h1> Number of Near Landmarks : '.$near['resultsCount'].'</h1><br><br>';

echo '<pre>',print_r($near),'</pre>';
echo '<pre>',print_r($near3),'</pre>';
//MapQuest API Nearby Locations Output Name

foreach ($near['searchResults'] as $result) {


    foreach ($result['fields'] as $elements) {
        

    }
    $name =  $result['fields']['name'];
    $places[$i]= $name;
    $i ++;
}
    foreach ($places as $near) {
        echo "<br>";
        echo "<li>".$near."<li>";

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
echo "<br>";
echo '<h1> Number of Near Landmarks : '.$ctr.'</h1><br><br>';
    foreach ($places2 as $n) {
        echo "<br>";
        echo "<li>".$n."<li>";

    }


?>
=======
<?php

class recommendeds{






}

$lat = '14.6507';
$lot = '121.1029';

$MapquestData = file_get_contents('http://www.mapquestapi.com/search/v2/radius?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&maxMatches=10&origin='.$lat.','.$lot.'');


// Echo out a sample image 
$near = json_decode($MapquestData, TRUE);


//https://places.ls.hereapi.com/places/v1/categories/places?at=41.8369%2C-87.684&apiKey=H6XyiCT0w1t9GgTjqhRXxDMrVj9h78ya3NuxlwM7XUs
$hereData = file_get_contents('https://places.demo.api.here.com/places/v1/discover/here?at='.$lat.','.$lot.'&app_id=devportal-demo-20180625&app_code=9v2BkviRwi9Ot26kp2IysQ&cat=restaurant&pretty');


// Echo out a sample image 
$near3 = json_decode($hereData, TRUE);


$places = array();
$places2 = array();

$i=0;


echo '<h1> Number of Near Landmarks : '.$near['resultsCount'].'</h1><br><br>';

echo '<pre>',print_r($near),'</pre>';
echo '<pre>',print_r($near3),'</pre>';
//MapQuest API Nearby Locations Output Name

foreach ($near['searchResults'] as $result) {


    foreach ($result['fields'] as $elements) {
        

    }
    $name =  $result['fields']['name'];
    $places[$i]= $name;
    $i ++;
}
    foreach ($places as $near) {
        echo "<br>";
        echo "<li>".$near."<li>";

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
echo "<br>";
echo '<h1> Number of Near Landmarks : '.$ctr.'</h1><br><br>';
    foreach ($places2 as $n) {
        echo "<br>";
        echo "<li>".$n."<li>";

    }


?>
>>>>>>> c4a0a598708132d0d4e9d9cdb5e0fda015cef18a
