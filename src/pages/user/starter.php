<?php   
session_start();
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

  <div class="container">
    <div class="row vh-100 align-items-center justify-content-center">
      <div class="d-sm-flex justify-content-center">
        <!--Login Form-->
        <div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
        <h3 style="margin: auto; text-align: center; font-weight: bold;">Getting Started:</h3>
        <p style="margin: auto; text-align: center; font-weight: bold;"><strong>Almost there! Please the district in Manila you cuurently reside on or the district you want to visit.</strong></p>
        <br>
          <form action="../../PHP/Functions/Geocoding.php" method="post" class="container" style="margin: auto;">
            <div>
              <label>Preferred Price Point For Destinations</label>
              <br>
              <br>
              <select class="form-select" aria-label="Please Your Current City Location" name="prize">
                <option value="1">I prefer travel on a lower budget</option>
                <option value="2">Average budget </option>
                <option value="3">I only travel on premium destinations</option>
              </select>
            </div>
            <br>
            <div>
             <label>Which district in Manila City do you want to visit?</label>
              <br>
              <br>
              <select class="form-select"  aria-label="Please Your Current City Location" name="district">
                <option value="Tondo">Tondo</option>
                <option value="Binondo">Binondo</option>
                <option value="Port Area">Port Area</option>
                <option value="Ermita">Ermita</option>
                <option value="Malate">Malate</option>
                <option value="Santa Ana">Santa Ana</option>
                <option value="Sta. Mesa">Sta. Mesa</option>
                <option value="Sampaloc">Sampaloc</option>
                <option value="Sta Cruz">Sta Cruz</option>
                <option value="Quiapo">Quiapo</option>
                <option value="San Miguel">San Miguel</option>
                <option value="Intramuros">Intramuros</option>
                <option value="Paco">Paco</option>
                <option value="Pandacan">Pandacan</option>
                <option value="San Andres">San Andres</option>
                <option value="San Nicolas">San Nicolas</option>
              </select>
            </div>
            <br>
            <br>
            <div>
             <label>What Kind of Destinations Do you Frequently Visit:</label>
              <br>
              <br>
              <select class="form-select" aria-label="Please Your Current City Location" name="type">
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
        
        <img src="../../imgs/background.jpg" class=" w-50 d-none d-sm-block" width="">
      </div>      
    </div>
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
