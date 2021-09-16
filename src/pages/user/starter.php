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

<div class="container-sm bg-light" style="width: 50%;">
  <form action="../../PHP/Functions/Geocoding.php" method="post" >
      <br>
      <label>Please Your Current City Location</label>
      <br>
      <select class="form-select" aria-label="Please Your Current City Location" name="loc">
        <option value="Manila">Manila</option>
        <option value="Mandaluyong">Mandaluyong</option>
        <option value="Marikina">Marikina</option>
        <option value="Pasig">Pasig</option>
        <option value="Quezon_City">Quezon City</option>
        <option value="San Juan">San Juan</option>
        <option value="Malabon">Malabon</option>
        <option value="Navotas">Navotas</option>
        <option value="Valenzuela">Valenzuela</option>
        <option value="Las_Pinas">Las Pinas</option>
        <option value="Makati">Makati</option>
        <option value="Muntinlupa">Muntinlupa</option>
        <option value="Paranaque">Paranaque</option>
        <option value="Pasay">Pasay City</option>
        <option value="Pateros">Pateros</option>
        <option value="Taguig">Taguig</option>
      </select>
     <br>
    <div>
      <label>Preferred Price Point For Destinations</label>
      <br>
      <select class="form-select" aria-label="Please Your Current City Location" name="prize">
        <option value="$">I prefer travel on a lower budget</option>
        <option value="$$">Average budget </option>
        <option value="$$$">I only travel on premium destinations</option>
      </select>
    </div>
    <br>
    <div>
     <label>What Kind of Destinations Do you Frequently Visit</label>
      <br>
      <select class="form-select" aria-label="Please Your Current City Location" name="prize">
        <option value="Restaurants">Restaurants</option>
        <option value="Park">Park</option>
        <option value="Art gallery">Art gallery</option>
        <option value="Hotels">Hotels</option>
        <option value="Spa">Spa</option>
        <option value="Tourist attraction">Tourist attraction</option>
      </select>
    </div>
    <br>
    <div style="color:white;margin: auto;text-align: center;">
       <button class="btn btn-outline-secondary btn-success " id="place-search-input" id="button-addon2" style="color:white;margin: auto;">Button</button>
    </div>
    <br>
 </form>
                     
</div>
<br><br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <script type="text/javascript">
    
    placeSearch({
    key: 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9',
    container: document.querySelector('#place-search-input')
  });

  </script>

</body>
</html>
