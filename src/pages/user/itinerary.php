<?php 
session_start();
if (isset($_SESSION['UserName']) & isset($_SESSION['Id'])  == false) {
$URL='../../../index.php';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/itinerary.php');

//$MapquestData = file_get_contents('http://www.mapquestapi.com/search/v2/radius?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&maxMatches=20');



// Echo out a sample image /
//$near = json_decode($MapquestData, TRUE);

 ?>


<!DOCTYPE html>
 <html>
 <head>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
 	<title>My Travel Itinerary</title>

 </head>
 <body>

<section class="container-fluid">
  <div class="row">
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


    <div class="col mx-auto bg-light">
    	<h4 class=" text-light bg-dark text-center  p-3">MY DESTINATION MAP</h4>
      <div id="map" class="mx-auto" style="width: 100%; height: 400px; overflow: hidden;"></div>
      <h5 class=" text-dark text-center">MY DESTINATIONS</h5>
      <?php  
          $p = new ItemView();
         ?>
      <div class="row g-0 container-fluid" style="width: 80%; text-align: center;margin: auto;">
       <?php  
          $p->Myitem($_SESSION['Id']);
        ?> 
      </div>
      <?php 
          $p->mapper($_SESSION['lat'],$_SESSION['lot']);
       ?>
     
    </div>

</div>

</section>


	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 </body>
 </html>