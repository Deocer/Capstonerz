<?php 

echo
'
<section class="container-fluid bg-light"  style="background-color: white;height: calc(100vh - 100px);overflow-y: auto;">
<div class="text-center p-1 sign" style="background-color:white;font-size:50px;"><img src="../../imgs/logo.png" style="height:100px;"></div>
<div class ="">

  <div class ="row">
  <h4 class="text-center  p-2 sign">MY DESTINATION MAP</h4>
   <div id="map" class="" style="width: 100%; height: 550px; overflow: hidden;z-index: 1;"padding-top:50px;></div>
  </div>
  <br>
  <div class ="row">
  <br>
  <br>
  <h4 class="text-center  p-2 sign">ITINERARY</h4>
  ';

            $p = new ItemView();
            $p->MyitemMobile2($_SESSION['Id']);
            $p->mapper($_SESSION['lat'],$_SESSION['lot']);
echo'
  </div>
</div>


</section>

'
;

include '../../Class/mobilenav.php';


 ?>