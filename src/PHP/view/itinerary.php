<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/itinerary.php');
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/place.php');
class ItemView extends ItemControl
	{
		
		function Myitem($id)
		{
		 $i = 0;
		 $lat = array();
		 $lot = array();
		 $name = array();
		 $s = new PlaceControl();
		 $res =  $this->GetItem($id);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		 $place = $s->GetVname($res[$ctr]['Pname']);
		 		 

		 		echo '

					  <div class="card mb-1" style="width:100%;">
					  <div class="row g-0">
					    <div class="col">
					      <div class="card-body">

					          <p class="card-title"><a href="../../pages/user/place.php?nm='.$place[0]['Pname'].'&lat='.$place[0]['Lat'].'&lot='.$place[0]['Lot'].'&desc='.$place[0]['Des'].'&img='.$place[0]['img'].'&class='.$place[0]['type'].'&rating='.$place[0]['Rating'].'&address='.$place[0]['address'].'&hours='.$place[0]['hours'].'&price='.$place[0]['price'].'" class="text-body"  style="text-decoration: none" ><b><small class="text-muted">'.$place[0]['Pname'].'</small></b></a></p>
					        <p class=""><small class="text-muted"><span class="fa fa-star star"></span>'.$place[0]['Rating'].'</small></p>
					        <p class=""><sub class="text-muted"></sub></p>
					        <p class=""><sub class="text-muted"></sub></p>

					      </div>
					    </div>
					    <div class="col mx-auto" style="margin:auto;">
					      <img src="'.$place[0]['img'].'" class="" alt="..." style="width:80%; height:100px;">
					    </div>
					  </div>
					</div>

						';
		 	$lat[$ctr] = $place[0]['Lat'];
		 	$lot[$ctr] = $place[0]['Lot'];
		 	$name[$ctr] = $place[0]['Pname'];

		 	}


echo '
      <script type="text/javascript">
      window.onload = function() {
        L.mapquest.key = "lYrP4vF3Uk5zgTiGGuEzQGwGIVDGuy24";

        var map = L.mapquest.map("map", {
          center: [14.5995,120.9842],
          layers: L.mapquest.tileLayer("map"),
          zoom:12
        });

';
for ($i=0; $i < count($lat); $i++) { 
	$nm = strval($name[$i]);
	echo '
         L.marker(['.$lat[$i].','.$lot[$i].'], {
          icon: L.mapquest.icons.marker(),
          draggable: false
        }).bindPopup("'.$nm.'").addTo(map);
	';
}

echo  '
      }
    </script>




';
}




}


 ?>