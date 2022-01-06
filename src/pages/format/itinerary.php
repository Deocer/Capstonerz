<?php 

echo
'
<section class="container-fluid bg-light">
<div class ="row">

  <div class ="col-1">';
       include "../../Class/sidebar.php";
echo'
  </div>

  <div class ="col-8">
  <h4 class="text-center  p-2 sign">MY DESTINATION MAP</h4>
   <div id="map" class="" style="width: 100%; height: 550px; overflow: hidden;z-index: 1;"padding-top:50px;></div>
  </div>

  <div class ="col-3">
  <h4 class="text-center  p-2 sign">ITINERARY</h4>';

            $p = new ItemView();
            $p->Myitem($_SESSION['Id']);
            $p->mapper($_SESSION['lat'],$_SESSION['lot']);
echo'
  </div>
</div>


</section>

'
;




 ?>