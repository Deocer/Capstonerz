<?php 

echo
'
<section class="container-fluid" style="background-color: white;height: calc(100vh - 100px);overflow-y: auto;">
  <div class="row bg-light">
<h1 class="text-center p-1 sign" style="font-family: Caveat; font-weight: bolder; font-size:50px;"><img src="../../imgs/logo.png" style="height:100px;"></h1>
    <div class="col mx-auto bg-light">
 

        <div class="col" style="margin:auto;text-align:center;width:90%">
          <h1 class="text-center p-1 sign" style="font-family: Caveat; font-weight: bolder; font-size:50px;">DESTINATION MAP</h1>
          <div>
            <div id="map" class="" style="width: 100%; height: 750px; overflow: hidden;z-index: 1;"></div>
          </div>
        </div>';  

      echo '<div class="porfolio">';
            $p = new ItemView();
            $p->MyitemMobile($_SESSION['Id']);
      echo '</div>';
            $p->mapper($_SESSION['lat'],$_SESSION['lot']);

echo'     
    </div>

</div>

</section>

'
;


include '../../Class/mobilenav.php';

 ?>