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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	<title>My Travel Itinerary</title>

 </head>
 <style type="text/css">
 .nav{
    display: block;
    font-size: 9px;
  } 

 </style>
 <body>

<section class="container-fluid">
  <div class="row">
    <div class="col-1" style="height: 600px;padding: 0;margin: 0;border: 0;">
          <aside class="p-0 bg-dark " style="height: 650px;">
            <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
              <br> <span class="material-icons text-light fs-1 text py-1">account_circle</span>
              <p class="text-light">
                <?php echo $_SESSION['UserName']; ?>
              </p>
              <br>
              <div class="collapse navbar-collapse order-last" id="nav">
                <ul style="display:block;margin: 0;padding: 0;">
                  <li><span class="material-icons p-3 text-light">home</span><a href="user.php"><i class="fw-bold text-light">Home</i></a></li>
                  <br>
                  <?php 

                        if ($_SESSION['Auth'] == 'Admin') {
                          echo '
                              <li><span class="material-icons p-3 text-light">dashboard</span><a href="../admin/dashboard.php"><i class="fw-bold text-light">Dashboard</i></a></li>
                          ';
                        }
                   ?>
                    <li><span class="material-icons p-3 text-light">travel_explore</span><a href="itinerary.php"><i class="fw-bold text-light">Itinerary</i></a></li>
                    <br>
                    <li><span class="material-icons p-3 text-light">logout</span><a href="../../PHP/Functions/Log_out.php"><i class="fw-bold text-light">Log Out</i></a></li>
                </ul>
              </div>
            </nav>
          </aside>
    </div>


    <div class="col mx-auto bg-light">
      <div class="row">


        <div class="col">
          <h4 class=" text-light bg-dark text-center  p-3">MY DESTINATION MAP</h4>
          <div id="map" class="" style="width: 100%; height: 550px; overflow: hidden;"></div>
        </div>



        <div class="col-3  mx-auto" style="height: 650px; overflow: auto;">
         <h5 class=" text-light bg-dark text-center  p-3">Destination List</h5>
         <div class="" style="width: 80%; text-align: center;margin: auto;">
        <?php  
            $p = new ItemView();
            $p->Myitem($_SESSION['Id']);
            $p->mapper($_SESSION['lat'],$_SESSION['lot']);
           ?>

         </div>        
        </div>




      </div>

      

     
    </div>

</div>

</section>


<script type="text/javascript">
var clone = $(".nav").clone(); // making zeh' clones!
$("#map").append(clone);  


    $( "#nodirections" ).click(function(){
      $(".nav").hide();
    });

    $( "#directions" ).click(function(){
      $(".nav").show(); 
    });    
</script>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 </body>
 </html>