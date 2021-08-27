<?php 
session_start();
if (isset($_SESSION['Id']) == false) {
$URL=($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/index.php');
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}

include '../../PHP/Functions/CreateRecList.php';
include '../../PHP/view/place.php';
$id = $_SESSION['Id'];
if (isset($_GET['lat']) && isset($_GET['lot']) && isset($_GET['nm']) && isset($_GET['desc']) && isset($_GET['img']) && isset($_GET['class']) && isset($_GET['rating']) ){
$lat = $_GET['lat'];
$lot = $_GET['lot'];
$nm = $_GET['nm'];
$desc = $_GET['desc'];
$img = $_GET['img'];
$class = $_GET['class'];
$rating = $_GET['rating'];
$s = new PlaceControl();
$s->AddItem($id,$_GET['nm'],$_GET['desc'],$_GET['lat'],$_GET['lot'],$_GET['img'],$_GET['rating'],$_GET['class']);
}


$MapquestData = file_get_contents('http://www.mapquestapi.com/search/v2/radius?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&maxMatches=10&origin=14.5995,120.9842');


// Echo out a sample image 
$near = json_decode($MapquestData, TRUE);

$id = $_SESSION['Id'];

$plc = new PlaceView();
 ?>

<!DOCTYPE html>
 <html>
 <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>
  <title></title>
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
 <body>

<section class="container-fluid">


  <div class="row p-0 m-0">


    <div class="col-2" style="height: 3180px;">
      <aside class="p-0 bg-dark " style="height: 100%;">
          <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
            <div class="text-center p-3">
              <a href="#" class="navbar-brand" id="WANDER">
                <img src="../../imgs/wander logo.png" class="img-fluid rounded-pill navbar-brand">
              </a>
              <img src="../../imgs/logo.jpg" alt="profile picture" width="50%" height="60%" class=" rounded-circle my-4 p-1 d-none d-md-block shadow  mx-auto"/>
             <a href="#" class="navbar-brand mx-0 font-weight-bold  text-nowrap"><?php echo $_SESSION['UserName']; ?></a>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                  <span class="navbar-toggler-icon"></span>
                </button>
            
            <div class="collapse navbar-collapse order-last" id="nav">
              <ul class="navbar-nav flex-column w-100 justify-content-center">
              <li class="nav-item">
                <a href="user.php" class="nav-link active">Home</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">My Travels</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Settings</a>
              </li>
              <li class="nav-item">
                <a href="../../PHP/Functions/Log_out.php" class="nav-link">Logout</a>
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
      <br>
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="btn btn-outline-primary" aria-current="page" href="#">Show Directions</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-primary" aria-current="page" href="../../PHP/controller/itinerary.php?nm=<?php echo $nm; ?>&desc=<?php echo $desc; ?>&lat=<?php echo $lat; ?>&lot=<?php echo $lot; ?>&img=<?php echo $img;?>&id=<?php echo $id;?>">Add To Itinerary</a>
        </li>
      </ul>

      <br><br><br>
    </div>

    <div class="col-3 text-center mx-auto bg-light" style="overflow: hidden;">
      <h4 class="text-light bg-dark text-center  p-3">Recommended Places</h4>
      <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#places" type="button" role="tab" aria-controls="home" aria-selected="true"><span class="material-icons">map</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="place-tab" data-bs-toggle="tab" data-bs-target="#landmark" type="button" role="tab" aria-controls="place" aria-selected="true"><span class="material-icons">place</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#restaurants" type="button" role="tab" aria-controls="profile" aria-selected="false"><span class="material-icons">restaurant</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#tourist" type="button" role="tab" aria-controls="messages" aria-selected="false"><span class="material-icons">festival</span></button>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="places" role="tabpanel" aria-labelledby="home-tab">
                  <?php 
                  $plc->Recplace();
                  ?>

          </div>
          <div class="tab-pane " id="landmark" role="tabpanel" aria-labelledby="place-tab">
                  <?php 
                  $des = new NearbyP($nm,'landmark',$lat,$lot);
                  ?>

          </div>
          <div class="tab-pane" id="restaurants" role="tabpanel" aria-labelledby="messages-tab">
                  <?php 
                  $des = new NearbyP($nm,'restaurants',$lat,$lot);
                  ?>
          </div>
           <div class="tab-pane" id="tourist" role="tabpanel" aria-labelledby="messages-tab">
                  <?php 
                  $des = new NearbyP($nm,'tourist',$lat,$lot);
                  ?>

          </div>
        </div>

        <script>
          var firstTabEl = document.querySelector('#myTab li:last-child a')
          var firstTab = new bootstrap.Tab(firstTabEl)

          firstTab.show()
        </script>

    </div>


  </div>

  
</section>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 </body>

 </html>