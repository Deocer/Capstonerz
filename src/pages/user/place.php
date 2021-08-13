<?php 
include '../../PHP/Functions/CreateRecList.php';
if (isset($_GET['lat'])){
$lat = $_GET['lat'];
}

if (isset($_GET['lot'])){
$lot = $_GET['lot'];
}

if (isset($_GET['nm'])){
  $nm = $_GET['nm'];
}

if (isset($_GET['desc'])){
  $desc = $_GET['desc'];
}


$MapquestData = file_get_contents('http://www.mapquestapi.com/search/v2/radius?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&maxMatches=10&origin='.$lat.','.$lot.'');


// Echo out a sample image 
$near = json_decode($MapquestData, TRUE);

 ?>

<html>
  <head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <meta charset="utf-8">
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>

    <script type="text/javascript">
      window.onload = function() {
        L.mapquest.key = 'lYrP4vF3Uk5zgTiGGuEzQGwGIVDGuy24';

        var map = L.mapquest.map('map', {
          center: [<?php echo $lat; ?>, <?php echo $lot; ?>],
          layers: L.mapquest.tileLayer('map'),
          zoom:18
        });

         L.marker([<?php echo $lat; ?>, <?php echo $lot; ?>], {
          icon: L.mapquest.icons.marker(),
          draggable: false
        }).bindPopup('<?php echo $nm;?>').addTo(map);

        map.addControl(L.mapquest.control());
      }
    </script>
  </head>

  <body style="border: 0; margin: 0;">
<section class="container-fluid">
  <div class="row">
    <div class="col-2">
      <aside class="p-0 bg-dark ">
          <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
            <div class="text-center p-3">
              <a href="#" class="navbar-brand" id="WANDER">
                <img src="../../imgs/wander logo.png" class="img-fluid rounded-pill">
              </a>
              <img src="../../imgs/logo.jpg" alt="profile picture" width="50%" height="60%" class=" rounded-circle my-4 p-1 d-none d-md-block shadow  mx-auto"/>
             <a href="#" class="navbar-brand mx-0 font-weight-bold  text-nowrap">User#222121</a>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                  <span class="navbar-toggler-icon"></span>
                </button>
            
            <div class="collapse navbar-collapse order-last" id="nav">
              <ul class="navbar-nav flex-column w-100 justify-content-center">
              <li class="nav-item">
                <a href="#" class="nav-link active">Home</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">My Travels</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">My Reviews</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Settings</a>
              </li>
              <li class="nav-item">
                <a href="index.html" class="nav-link">Logout</a>
              </li>
            </ul>
            </div>      
          </nav>   
        </aside>
    </div>

    <div class="col-6 mx-auto bg-light">
      <h4 class=" text-light bg-dark text-center  p-3"><?php echo $nm; ?></h4>
      <div id="map" class="mx-auto" style="width: 100%; height: 300px;"></div>
      <br>
      <p><?php echo $desc; ?></p>
    </div>

    <div class="col-3 text-center mx-auto bg-light">
      <h4 class="text-light bg-dark text-center  p-3">Recomended Places</h4>
        <?php 
         $des = new RecomendedP($lat,$lot);
         ?>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>