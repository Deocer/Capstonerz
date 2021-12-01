<?php 

echo
'
<section class="container-fluid">
  <div class="row">
    <div class="col-1" style="height: 600px;padding: 0;margin: 0;border: 0;">';
          include '../../Class/sidebar.php';
echo '</div>


    <div class="col mx-auto bg-light">
      <div class="row">


        <div class="col">
          <h4 class="text-center  p-2 sign">MY DESTINATION MAP</h4>
          <div id="map" class="" style="width: 100%; height: 550px; overflow: hidden;z-index: 1;"></div>
        </div>



        <div class="col-3  mx-auto" style="height: 650px; overflow: auto;">
         <h5 class=" text-center  p-2 sign">Destination List</h5>
         <div class="" style="width: 80%; text-align: center;margin: auto;">';
 
            $p = new ItemView();
            $p->Myitem($_SESSION['Id']);
            $p->mapper($_SESSION['lat'],$_SESSION['lot']);

echo'
         </div>        
        </div>




      </div>

      

     
    </div>

</div>

</section>

'
;




 ?>