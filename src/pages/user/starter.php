<?php   
include '../../PHP/Functions/Geocoding.php';
 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <script src="https://api.mqcdn.com/sdk/place-search-js/v1.0.0/place-search.js"></script>
  <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/place-search-js/v1.0.0/place-search.css"/>
	<title></title>
</head>

<body>

<h3 style="margin: auto; text-align: center; font-weight: bolder; color: white;" class="bg-dark">GETTING STARTED</h3>
<br>
<h5 style="margin: auto; text-align: center; font-weight: bold; color: white;">Almost there! Please Enter your current City State so that we may fetch you some nearby travelling spots!</h5>
<br>
<div id="carouselExampleCaptions" class="carousel slide mx-auto" data-bs-ride="carousel" style="width:60%; height: 40%; margin: auto;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../imgs/1.jpg" class="d-block w-100" alt="..." style="width:60%; height: 400px; margin: auto;">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../imgs/2.jpg" class="d-block w-100" alt="..." style="width:60%; height: 400px; margin: auto;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../imgs/3.jpg" class="d-block w-100" alt="..." style="width:60%; height: 400px; margin: auto;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br>
<div class="container mx-auto text-center" style="margin: auto;opacity: 1;">
   <form action="../../PHP/Functions/Geocoding.php" method="post" class="form" style="width:40%; margin: auto;">
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Please Your Current City Location" name="loc">
    <button class="btn btn-outline-secondary btn-success " id="place-search-input" id="button-addon2" style="color:white;">Button</button>
  </form> 
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <script type="text/javascript">
    
    placeSearch({
    key: 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9',
    container: document.querySelector('#place-search-input')
  });

  </script>

</body>
</html>