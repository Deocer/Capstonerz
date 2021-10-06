<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/itinerary.php');
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/place.php');
class ItemView extends ItemControl
	{
		 public $lat = array();
		 public $lot = array();
		 public $name = array();

			function haversine(
			  $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371)
			{
			  // convert from degrees to radians
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
					        <a class="btn btn-danger" aria-current="page" href="../../PHP/controller/itinerary.php?delete='.$res[$ctr]['PlcID'].'">Remove from Itinerary</a>
					  </div>
					</div>
						';
		  $this->lat[$ctr] = $place[0]['Lat'];
		  $this->lot[$ctr] = $place[0]['Lot'];
		  $this->name[$ctr] = $place[0]['Pname'];

		 	}
		}

		function mapper($lat,$lot){
			$p = new ItemView();
			$sorted = array();
			$ctr = count($this->lat)-1;
echo "<br>"; 
echo "Step 1 : Show All Items in Itinerary";
echo "<br>";        
			 for ($c=0; $c < count($this->lat); $c++) { 
					 echo "<br>";
					 echo  $this->name[$c];
					 echo "<br>";
					 echo $c;
					 echo $sorted[$c] =  $p-> haversine($lat,$lot,$this->lat[$c],$this->lot[$c]);
					 ;
			 }
			 asort($sorted);
echo "<br>"; 
echo "<br>"; 
echo "Step 2 : Sort the items and use store in another array using their counter key as their array key";
echo "<br>"; 

			 echo '<pre>',print_r($sorted),'</pre>';


			 $s = array_keys($sorted);

echo "<br>"; 
echo "<br>"; 
echo "Step 3 : Sort Then Place the Array keys in another array to have access to the original items in the itinerary";
echo "<br>"; 

			 echo '<pre>',print_r($s),'</pre>';
if ($ctr == -1) {
		echo '
				      <script type="text/javascript">
				      window.onload = function() {
				        L.mapquest.key = "UBI3Wc0udk0csdys2DFuAJAdhxdX00E9";

				        var map = L.mapquest.map("map", {
				          center: ['.$lat.','.$lot.'],
				          layers: L.mapquest.tileLayer("map"),
				          zoom:15
				        });
				         L.marker(['.$lat.','.$lot.'], {
				          icon: L.mapquest.icons.marker(),
				          draggable: false
				        }).bindPopup("Current Location").addTo(map);
					}
					</script>';

}else{
echo "
   <script type='text/javascript'>
window.onload = function () {
    L.mapquest.key = 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9';

    addDirections();
    var directions;
    var directionsLayer; 

    function addDirections() {

      directions = L.mapquest.directions();
      directions.route({
        locations: [".'"'.$lat.','.$lot.'"'.",";
			 for ($ctr=0; $ctr < count($sorted); $ctr++) { 
						echo '"'.$this->lat[$s[$ctr]].','.$this->lot[$s[$ctr]].'",';
					 
			 }

 echo  "]
      }, createMap);
    }

    function createMap(err, response) {
      console.log(response);

      var map = L.mapquest.map('map', {
        center: L.mapquest.util.getCenterFromBoundingBox(response.route.boundingBox),
        layers: L.mapquest.tileLayer('map'),
        zoom: L.mapquest.util.getZoomFromBoundingBox(response.route.boundingBox) + 1
      });

      var DirectionsLayerWithCustomMarkers = L.mapquest.DirectionsLayer.extend({

        createStartMarker: function(location, stopNumber) {
          console.log(location);
          console.log(stopNumber);

                return L.mapquest.textMarker(location.latLng, {
                  text: 'Start',
                  type: 'marker',
                  icon: {
                    primaryColor: '#333333',
                    secondaryColor: '#333333',
                    size: 'sm',
                    symbol: stopNumber
                  }
                });

        },

        createWaypointMarker: function(location, stopNumber) {
         console.log(location);
         console.log(stopNumber);

                return L.mapquest.textMarker(location.latLng, {
                  text: stopNumber,
                  type: 'marker',
                  icon: {
                    primaryColor: '#333333',
                    secondaryColor: '#333333',
                    size: 'sm',
                    symbol: stopNumber
                  }
                });

        },

        createEndMarker: function(location, stopNumber) {
          console.log(location);
          console.log(stopNumber);

                return L.mapquest.textMarker(location.latLng, {
                  text: 'End',
                  type: 'marker',
                  icon: {
                    primaryColor: '#333333',
                    secondaryColor: '#333333',
                    size: 'sm',
                    symbol: stopNumber
                  }
                });

        }

      });

      directionsLayer = new DirectionsLayerWithCustomMarkers({
        directionsResponse: response
      }).addTo(map);

      var narrativeControl = L.mapquest.narrativeControl({
        directionsResponse: response,
        compactResults: false
      });

      narrativeControl.setDirectionsLayer(directionsLayer);
      narrativeControl.addTo(map);
    }
  }
    </script>


";

}


		}

}
?>