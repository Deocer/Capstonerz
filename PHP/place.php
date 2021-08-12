<?php 
include 'CreateRecList.php';
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
 <section class="container-fluid p-0 m-0" height='100px';>
  <div class="row">

    <div class="bg-dark p-5 col-2 text-center">
      <h2 class="p-0 m-0 ">WANDER</h2>
      <br>
      <img src="../img.jpg" width="100%" height="150px">
      <br>
      <br>
      <h4 class="mx-auto">Name</h4>
      <br>
       <nav class="nav flex-column">
        <a class="nav-link active" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </nav>
    </div>


  
    <div class="col-7">
      <h3 class="mb-3 mb-md-0 text-light bg-dark text-center text-sm-start p-3"><?php echo $nm; ?></h3>
      <div id="map" class="mx-auto" style="width: 100%; height: 300px;"></div>
      <br>
      <p><?php echo $desc; ?></p>
    </div>



     <div class="col-3 bg-dark mx-auto">
      <h3 class="mb-3 mb-md-0 text-light bg-dark text-center text-sm-start p-3">Recomended Places</h3>
        <?php 
         $des = new RecomendedP($lat,$lot);
         ?>
         </div>
     </div>

  </div>

 </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>