<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/itinerary.php');
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/place.php');
//echo "<br>"; 
//echo "Step 1 : Show All Items in Itinerary";
//echo "<br>";
//echo "<br>"; 
//echo "<br>"; 
//echo "Step 2 : Sort the items and use store in another array using their counter key as their array key";
//echo "<br>"; 

//			 echo '<pre>',print_r($sorted),'</pre>';
//echo "<br>"; 
//echo "<br>"; 
//echo "Step 3 : Sort Then Place the Array keys in another array to have access to the original items in the itinerary";
//echo "<br>"; 

//			 echo '<pre>',print_r($s),'</pre>';
class ItemView extends ItemControl
	{
		 public $lat = array();
		 public $lot = array();
		 public $name = array();
		 public $place = array();

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



		function MyitemMobile2($id)
		{
		 $i = 0;
		 $place = array();
		 $s = new PlaceControl();
		 $res =  $this->GetItem($id);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		 $place = $s->GetVname($res[$ctr]['Pname']);		 		 

				$pstring = '
				<div class="card mb-3" style="width:100%;padding:0;padding-top:10px;">
				  <div class="row g-0">
				    <div class="col-md-4" style="margin:auto;">
				 				<a href="../../pages/user/place.php?nm='.$place[0]['Pname'].'&lat='.$place[0]['Lat'].'&lot='.$place[0]['Lot'].'&desc='.$place[0]['Des'].'&img='.$place[0]['img'].'&class='.$place[0]['type'].'&rating='.$place[0]['Rating'].'&address='.$place[0]['address'].'&hours='.$place[0]['hours'].'&price='.$place[0]['price'].'&contact='.$place[0]['contact'].'&site='.$place[0]['site'].'" class="text-body"  style="text-decoration: none;" >

										<img src="'.$place[0]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:15rem;height:10rem;">

								</a>
				    </div>
				    <div class="col-md-6 mx-auto" style="margin:auto;">
				      <div class="card-body">
				        <p class="card-title" style="font-size:1.5vh;"><b>'.$place[0]['Pname'].'</b></p>
				        <p class="card-title" style="font-size:1em;">'.$place[0]['type'].'</p>
				        <p class="card-title" style="font-size:1em;">Located at :'.$place[0]['address'].'</p>
				      </div>
				    </div>
				    <div class="col-2 text-light" style="margin:auto; height:100%;text-align:center;margin:auto;">
								<a type="button" class="btn" aria-current="page"  style="font-size:1.5em;height:30%;width:150px;background-color:#f8481c;text-align:center;margin:auto;padding:10px;color:white;" href="../../PHP/controller/itinerary.php?delete='.$res[$ctr]['PlcID'].'">
										<strong>
										<b>
                    Remove
                    </b>
										</strong>
								</a>
				    </div>
				  </div>
				</div>';
		  $this->lat[$ctr] = $place[0]['Lat'];
		  $this->lot[$ctr] = $place[0]['Lot'];
		  $this->name[$ctr] = $place[0]['Pname'];
		  $this->place[$ctr] = $pstring;
		 	}
		}

					
		function Myitem($id)
		{
		 $i = 0;
		 $place = array();
		 $s = new PlaceControl();
		 $res =  $this->GetItem($id);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		 $place = $s->GetVname($res[$ctr]['Pname']);		 		 

				$pstring = '
				<div class="card mb-3" style="">
				  <div class="row g-0">
				    <div class="col-md-4" style="margin:auto;">
				 				<a href="../../pages/user/place.php?nm='.$place[0]['Pname'].'&lat='.$place[0]['Lat'].'&lot='.$place[0]['Lot'].'&desc='.$place[0]['Des'].'&img='.$place[0]['img'].'&class='.$place[0]['type'].'&rating='.$place[0]['Rating'].'&address='.$place[0]['address'].'&hours='.$place[0]['hours'].'&price='.$place[0]['price'].'&contact='.$place[0]['contact'].'&site='.$place[0]['site'].'" class="text-body"  style="text-decoration: none;" >

										<img src="'.$place[0]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:70px;height:80px;">

								</a>
				    </div>
				    <div class="col-md-6 mx-auto" style="margin:auto;">
				      <div class="card-body">
				        <p class="card-title"><b>'.$place[0]['Pname'].'</b></p>
				        <p class="text-muted">'.$place[0]['type'].'</p>
				      </div>
				    </div>
				    <div class="col-2 text-light" style="margin:auto; height:100%;text-align:center;margin:auto;">
								<a type="button" class="btn" aria-current="page"  style="height:100%;width:50px;background-color:#f8481c;text-align:center;margin:auto;" href="../../PHP/controller/itinerary.php?delete='.$res[$ctr]['PlcID'].'">
										<strong>
                    <span 
                      class="material-icons text-light"
                      style="font-size:15px;"
                      >
                      remove_circle_outline
                      </span>
										</strong>
								</a>
				    </div>
				  </div>
				</div>';
		  $this->lat[$ctr] = $place[0]['Lat'];
		  $this->lot[$ctr] = $place[0]['Lot'];
		  $this->name[$ctr] = $place[0]['Pname'];
		  $this->place[$ctr] = $pstring;
		 	}
		}


		function mapper($lat,$lot){
			$p = new ItemView();
			$sorted = array();
			$ctr = count($this->lat)-1;
     
			 for ($c=0; $c < count($this->lat); $c++) { 
					 $this->name[$c];
					 $sorted[$c] =  $p-> haversine($lat,$lot,$this->lat[$c],$this->lot[$c]);
					 ;
			 }
			 asort($sorted);
			 $s = array_keys($sorted);
				echo '
			<div class="row">
			    <div class="col"><p class="sign">DESTINATION #1</p>	</div>
			    <div class="col">
							<button type="button" id="directions" class="btn btn-primary" style="font-size:1.5vh;"><b>Show Directions</b></button>
					    <button type="button" id="nodirections" class="btn btn-primary" style="font-size:1.5vh;"><b>Remove Directions</b></button>
			    </div>
			</div>
			<div class="card mb-3" style="width:100%;padding:0;padding-top:10px;">
				  <div class="row g-0">
				    <div class="col-md-4" style="margin:auto;">
										<img src="https://previews.123rf.com/images/brokenhill/brokenhill1801/brokenhill180100075/93279098-location-icon-flat-with-house-on-white-background-vector-illustration-.jpg" alt=""style="width:70px;height:80px;" />
				    </div>
				    <div class="col-md-6 mx-auto" style="margin:auto;">
				      <div class="card-body">
				        <p class="card-title" style="font-size:1.5vh;"><b>CURRENT LOCATION</b></p>
				      </div>
				    </div>
				    <div class="col-2 text-light" style="margin:auto; height:100%;text-align:center;margin:auto;">
				    </div>
				  </div>
				</div>
           ';
		$limit = count($s) -1;
		for ($i=0; $i <= $limit; $i++) {
			 $ald = $i +2;
       echo '<p class="sign" >DESTINATION #'.$ald.'</p>';
			 echo $this->place[$s[$i]];
		}


		if ($ctr == -1) {
				echo '
						      <script type="text/javascript">
						      window.onload = function() {
						        L.mapquest.key = "UBI3Wc0udk0csdys2DFuAJAdhxdX00E9";

						        var map = L.mapquest.map("map", {
						          center: ['.$lat.','.$lot.'],
						          layers: L.mapquest.tileLayer("map"),
						          zoom: 15
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
		      window.onload = function() {
		        L.mapquest.key = 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9';
		        var directions = L.mapquest.directions();
		        directions.route({
		        locations: [".'"'.$lat.','.$lot.'"'.",";
		             for ($ctr=0; $ctr < count($sorted); $ctr++) { 
		                        echo '"'.$this->lat[$s[$ctr]].','.$this->lot[$s[$ctr]].'",';
		                     
		             }

		 echo  "]
		      }, createMap);
		    function createMap(error, response) {
		          var map = L.mapquest.map('map', {
		            center: [0,0],
		            layers: L.mapquest.tileLayer('map'),
		            zoom: 0
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
		            compactResults: true,
		            interactive: true,
		            position : 'bottomright',
		            className: 'nav'
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
$s = new ItemView();
$res = $s->MyItem(61);
echo '<pre>'; print_r($res); echo '</pre>';
?>