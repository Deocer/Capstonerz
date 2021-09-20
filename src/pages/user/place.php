<?php 
session_start();
if (isset($_SESSION['Id'])) {

}else{
header("location:../../../index.php");
 exit();
}

include '../../PHP/Functions/CreateRecList.php';
include '../../PHP/view/review.php';
class Place extends PlaceView
  {

  }
$id = $_SESSION['Id'];
if (isset($_GET['lat']) && isset($_GET['lot']) && isset($_GET['nm']) && isset($_GET['desc']) && isset($_GET['img']) && isset($_GET['class']) && isset($_GET['rating'])  && isset($_GET['price'])  && isset($_GET['hours'])  && isset($_GET['address']) ){
$lat = $_GET['lat'];
$lot = $_GET['lot'];
$nm = $_GET['nm'];
$desc = $_GET['desc'];
$img = $_GET['img'];
$rating = $_GET['rating'];
$class = $_GET['class'];
$price = $_GET['price'];
$hour = $_GET['hours'];
$address = $_GET['address'];
}

$id = $_SESSION['Id'];

$plc = new Place();
$rev = new ReviewView();
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title><?php echo $nm; ?></title>
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

      }
    </script>
 </head>
 <body>

<section class="container-fluid">


  <div class="row p-0 m-0">


    <div class="col-2" style="height: 5180px;">
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
                <a href="itinerary.php" class="nav-link">My Travels</a>
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

    <div class="col-6 mx-auto" >
      <div class="container-fluid bg-light" style="height: 100%;">
        <h4 class=" text-light bg-dark text-center  p-3"><?php echo $nm; ?></h4>
        <div class="row">
          <div class="col-lg-8">
            <div id="map" class="mx-auto" style="width: 100%; height: 300px;"></div>
          </div>
          <div class="col-4">
            <div class="card mb-1" style="width:100%;">
                  <div class="card-body">
                    <p class="card-title"><b><small class="text-muted"></small></b></p>
                    <p class=""><small class="text-muted">Rating from Google Review : <span class="fa fa-star"><?php echo $rating ?></span></small></p>
                    <p class=""><sub class="text-muted"></sub><small>Price Point :<?php echo $price ?></small></p>
                    <p class=""><sub class="text-muted"></sub><small>Operating Hours :<?php echo $hour ?></small></p>
                  </div>
                <a class="btn btn-outline-primary" aria-current="page"  onclick="add()">Show Directions</a>
                <a class="btn btn-outline-primary" aria-current="page" onclick="add()">Add To Itinerary</a>
            </div>
          </div>
        </div>
        <reviews>
<br><br><br><br>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Reviews
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <form action="../../PHP/controller/review.php" method="post">
                   <div>
                       <input class="form-control" style="display: none;" name="place" value="<?php echo $nm ?>">
                       <input class="form-control" style="display: none;" name="id" value="<?php echo $_SESSION['Id'] ?>">
                       <input class="form-control" style="display: none;" name="name" value="<?php echo $_SESSION['UserName'] ?>">
                    </div>   
                    <div>
                       <textarea class="form-control" style="overflow:auto;resize:none" id="exampleFormControlTextarea1" name="cont" placeholder="Tell Us About Your Experience!" rows="3"  required></textarea>
                    </div>
                    <br>
                    <div class="container-fluid">

                       <div class="row">
                          <div class="col">
                              <label>Rating :</label>
                              <fieldset>
                              <span class="star-cb-group">
                              <input type="radio" id="rating-5" name="rating" value="5" />
                              <label for="rating-5">5</label>
                              <input type="radio" id="rating-4" name="rating" value="4" />
                              <label for="rating-4">4</label>
                              <input type="radio" id="rating-3" name="rating" value="3" />
                              <label for="rating-3">3</label>
                              <input type="radio" id="rating-2" name="rating" value="2" />
                              <label for="rating-2">2</label>
                              <input type="radio" id="rating-1" name="rating" value="1" />
                              <label for="rating-1">1</label>
                              <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" />
                              <label for="rating-0">0</label>
                              </span>
                              </fieldset>
                          </div>
                          <div class="col mx-auto text-center">
                          <button type="submit" class="btn btn-primary">Post</button>
                          </div>
                        </div>
                    </div>
                </form>
                <br><br>
                <h2><?php echo $nm; ?> Reviews:</h2>
                <?php 
                  $rev->ShowPost($nm);
                  ?>
                </div>
              </div>
            </div>
          </div>       
        </reviews>
      </div>
<br><br><br><br> 
    </div>

    <div class="col text-center mx-auto bg-light" style="overflow: hidden;">
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
                  $plc-> Recplace($lat,$lot,$nm,'Museum');
                  $plc-> Recplace($lat,$lot,$nm,'Sports complex');
                  $plc-> Recplace($lat,$lot,$nm,'Performing arts theater');
                  $plc-> Recplace($lat,$lot,$nm,'Sports complex');
                  $plc-> Recplace($lat,$lot,$nm,'Nature preserve');
                  $plc-> Recplace($lat,$lot,$nm,'Modern art museum');
                  $plc-> Recplace($lat,$lot,$nm,'Historical place');
                  $plc-> Recplace($lat,$lot,$nm,'Heritage museum');
                  $plc-> Recplace($lat,$lot,$nm,'Art center');
                  $plc-> Recplace($lat,$lot,$nm,'Local history museum');
                  $plc-> Recplace($lat,$lot,$nm,'Art gallery');
                  $plc-> Recplace($lat,$lot,$nm,'Motel');
                  $plc-> Recplace($lat,$lot,$nm,'Catholic cathedral');
                  $plc-> Recplace($lat,$lot,$nm,'Spa');
                  ?>

          </div>
          <div class="tab-pane " id="landmark" role="tabpanel" aria-labelledby="place-tab">
                  <?php 
                  $plc-> Recplace($lat,$lot,$nm,'Historical landmark');
                  $plc-> Recplace($lat,$lot,$nm,'Church');
                  $plc-> Recplace($lat,$lot,$nm,'Shopping Mall');
                  ?>

          </div>
          <div class="tab-pane" id="restaurants" role="tabpanel" aria-labelledby="messages-tab">
                  <?php 
                  $plc-> Recplace($lat,$lot,$nm,'Restaurant');
                  $plc-> Recplace($lat,$lot,$nm,'Western restaurant');   
                  $plc-> Recplace($lat,$lot,$nm,'Hotel');
                  $plc-> Recplace($lat,$lot,$nm,'Modern European restaurant');
                  $plc-> Recplace($lat,$lot,$nm,'Buffet restaurant');
                  $plc-> Recplace($lat,$lot,$nm,'Thai restaurant');
                  $plc-> Recplace($lat,$lot,$nm,'Mexican restaurant');
                  $plc-> Recplace($lat,$lot,$nm,'Fine dining restaurant');
                  $plc-> Recplace($lat,$lot,$nm,'Filipino restaurant');  
                  $plc-> Recplace($lat,$lot,$nm,'Italian restaurant'); 
                  $plc-> Recplace($lat,$lot,$nm,'Vegan restaurant'); 
                  $plc-> Recplace($lat,$lot,$nm,'Mediterranean restaurant');
                  $plc-> Recplace($lat,$lot,$nm,'Bar & grill');
                  ?>
          </div>
           <div class="tab-pane" id="tourist" role="tabpanel" aria-labelledby="messages-tab">
                  <?php 
                  $plc-> Recplace($lat,$lot,$nm,'Tourist attraction');
                  $plc-> Recplace($lat,$lot,$nm,'Park');
                  ?>

          </div>
        </div>

    </div>


  </div>

  
</section>
<section>
  <footer class="bg-dark">
    
  </footer>
</section>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 </body>
 <script type="text/javascript">
   function add() {
  Swal.fire({
      title: "Success!",
      text: "Redirecting in 2 seconds.",
      icon: "success",
}).then(function() {
     window.location.href = "../../PHP/controller/itinerary.php?nm=<?php echo $nm; ?>&id=<?php echo $id; ?>";
});
}
 </script>

 </html>