<?php
$lat = '14.6507';
$lot = '121.1029';

$loc = 'Marikina';

$MapquestData = file_get_contents('http://www.mapquestapi.com/search/v2/radius?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&maxMatches=10&origin='.$lat.','.$lot.'');

$near = json_decode($MapquestData, TRUE);

$Geocoding = file_get_contents("http://www.mapquestapi.com/geocoding/v1/address?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&location=".$loc."");
   


$geo = json_decode($Geocoding, TRUE);


echo $geo['results']['0']['locations']['0']['latLng']['lat'];
echo $geo['results']['0']['locations']['0']['latLng']['lng'];    

echo '<pre>',print_r($geo),'</pre>';


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



class Intro{

function __construct(){


$modal =  '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>';



echo '
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>';



}




}


$s = new Intro();


?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<body>


<div class="row">
  <div class="column">
    <img src="img_nature.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_snow.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_mountains.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_lights.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="img_nature_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <img src="img_snow_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <img src="img_mountains_wide.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <img src="img_lights_wide.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
</div>

<button id="1" onClick="reply_click(this.id)">B1</button>
<button id="2" onClick="reply_click(this.id)">B2</button>
<button id="3" onClick="reply_click(this.id)">B3</button>
    
<script type="text/javascript">
  function reply_click(clicked_id)
  {
      alert(clicked_id);
  }
</script>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>


