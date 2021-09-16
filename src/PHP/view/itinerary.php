<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/itinerary.php');
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/place.php');
class ItemView extends ItemControl
	{
		 public $lat = array();
		 public $lot = array();
		 public $name = array();

		function haversine($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
		{
		  // convert from degrees to radians
		  $earthRadius = 6371000;
		  $latFrom = deg2rad($latitudeFrom);
		  $lonFrom = deg2rad($longitudeFrom);
		  $latTo = deg2rad($latitudeTo);
		  $lonTo = deg2rad($longitudeTo);

		  $latDelta = $latTo - $latFrom;
		  $lonDelta = $lonTo - $lonFrom;

		  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
		    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
		  return $angle * $earthRadius;
		}
		
		function Myitem($id)
		{
		 $i = 0;
		 $s = new PlaceControl();
		 $res =  $this->GetItem($id);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		 $place = $s->GetVname($res[$ctr]['Pname']);		 		 

		 		echo '
					<div class="card" style="width:180px;margin:auto;">
					<br>
					  <img src="'.$place[0]['img'].'" class="mx-auto" alt="..." style="width:100px; height:100px; margin:auto;">
					  <div class="card-body">
					        <p class="card-title"><a href="../../pages/user/place.php?nm='.$place[0]['Pname'].'&lat='.$place[0]['Lat'].'&lot='.$place[0]['Lot'].'&desc='.$place[0]['Des'].'&img='.$place[0]['img'].'&class='.$place[0]['type'].'&rating='.$place[0]['Rating'].'&address='.$place[0]['address'].'&hours='.$place[0]['hours'].'&price='.$place[0]['price'].'" class="text-body"  style="text-decoration: none" ><b><small class="text-muted">'.$place[0]['Pname'].'</small></b></a></p>
					        <br>
					        <p class=""><small class="text-muted"><span class="fa fa-star star"></span>'.$place[0]['Rating'].'</small></p>
					  </div>
					</div>
						';
		 	$this->lat[$ctr] = $place[0]['Lat'];
		  $this->lot[$ctr] = $place[0]['Lot'];
		  $this->name[$ctr] = $place[0]['Pname'];

		 	}
}

		function mapper(){
			$p = new ItemView();
			$sorted = array();
			$ctr = count($this->lat)-1;
             echo '<pre>',print_r($this->name),'</pre>';
             echo $this->name[0];
             echo '<pre>',print_r( array_reverse($this->name)),'</pre>';
             $this->name = array_reverse($this->name);
             echo $this->name[0];
             
			 for ($c=1; $c < count($this->lat); $c++) { 
					 echo "<br>";
					 echo  $this->name[$c];
					 echo "<br>";
					 echo $sorted[$p-> haversine($this->lat[0],$this->lot[0],$this->lat[$c],$this->lot[$c])] =  $c;
					 ;
			 }
			 ksort($sorted);
			 echo '<pre>',print_r($sorted),'</pre>';
			 foreach($sorted as $f){
			 	echo $f;
			 }

				echo '
				      <script type="text/javascript">
				      window.onload = function() {
				        L.mapquest.key = "UBI3Wc0udk0csdys2DFuAJAdhxdX00E9";

				        var map = L.mapquest.map("map", {
				          center: ['.$this->lat[0].','.$this->lot[0].'],
				          layers: L.mapquest.tileLayer("map"),
				          zoom:15
				        });

				';
				for ($i=0; $i < count($this->lat); $i++) { 
					$nm = strval($this->name[$i]);
					echo '
				         L.marker(['.$this->lat[$i].','.$this->lot[$i].'], {
				          icon: L.mapquest.icons.marker(),
				          draggable: false
				        }).bindPopup("'.$nm.'").addTo(map);
					';
				}



				echo  '
				        L.mapquest.directions().route({
				          start: "'.$this->lat[0].','.$this->lot[0].'",
				          waypoints: [
				          ';
				          	foreach($sorted as $f){
							 	echo '"'.$this->lat[$f].','.$this->lot[$f].'",';
							 }
				echo     ']
				        });
				      }
				    </script>
				';
		}

}





 ?>