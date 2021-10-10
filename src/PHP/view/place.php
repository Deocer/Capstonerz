<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/place.php');

class PlaceView extends PlaceControl
	{

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



		function Allplace($lat,$lot,$place)
		{
		 $p = new PlaceView();
		 $i = 0;
		 $sorted = array();
		 $keys = array();
		 $res =  $this->Getplaces();
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 $sorted[$ctr] =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);

		 	}

		 	 asort($sorted, true);
			 $keys =  array_keys($sorted);

		 foreach($keys as $k ){
				echo '
					  <div class="card mb-1" style="width:100%;height:">
					  <div class="row g-0">
					    <div class="col">
					      <div class="card-body">
					        <p class="card-title"><a href="../../pages/user/place.php?nm='.$res[$k]['Pname'].'&lat='.$res[$k]['Lat'].'&lot='.$res[$k]['Lot'].'&desc='.$res[$k]['Des'].'&img='.$res[$k]['img'].'&class='.$res[$k]['type'].'&rating='.$res[$k]['Rating'].'&address='.$res[$k]['address'].'&hours='.$res[$k]['hours'].'&price='.$res[$k]['price'].'" class="text-body"  style="text-decoration: none" ><b><small class="text-muted">'.$res[$k]['Pname'].'</small></b></a></p>

					        <p class=""><small class="text-muted">Google Reviews :<span class="fa fa-star star"></span>'.$res[$k]['Rating'].'</small></p>

					        <p class=""><small class="text-muted">Google Reviews :<span class="fa fa-star star"></span>'.$res[$k]['reviews'].'</small></p>

					        <p class=""><small class="text-muted">Price Point :'.$res[$k]['price'].'</small></p>
					        <p class=""><sub class="text-muted">'.$res[$k]['hours'].'</sub></p>
					        <p class="text-muted" style ="font-size:10px;">'.$res[$k]['address'].'</p>
					        <br>
 							<p class="text-muted" style ="font-size:12px;"><span class="material-icons">place</span> <b>'.round($sorted[$k]).' KM</b> From Your Location: <b>'.$place.'</b></p>
					      </div>
					    </div>
					    <div class="col mx-auto" style="margin:auto;">
					      <img src="'.$res[$k]['img'].'" class="" alt="..." style="width:80%; height:100px;">
					    </div>
					  </div>
					</div>

						';

		 }


		}

		function Typeplace($lat,$lot,$place,$type)
		{
		 $p = new PlaceView();
		 $i = 0;
		 $sorted = array();
		 $keys = array();
		 $res =  $this->GetByType($place,$type);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 $sorted[$ctr] =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);

		 	}

		 	 asort($sorted, true);
			 $keys =  array_keys($sorted);

		 foreach($keys as $k ){
				echo '
					  <div class="card placecard">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$k]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$k]['Pname'].'&lat='.$res[$k]['Lat'].'&lot='.$res[$k]['Lot'].'&desc='.$res[$k]['Des'].'&img='.$res[$k]['img'].'&class='.$res[$k]['type'].'&rating='.$res[$k]['Rating'].'&address='.$res[$k]['address'].'&hours='.$res[$k]['hours'].'&price='.$res[$k]['price'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$k]['Pname'].'</b></a></p>
					                    <p class="text-muted" style ="font-size:12px;"><span class="material-icons">place</span> <b>'.round($sorted[$k]).' KM</b> From Your Location: <b>'.$_SESSION['City'].'</b></p>
					                    <p class="text-muted" style ="font-size:9px;"><small>'.$res[$k]['type'].'</small></p>

					                </div>
					            </div>
					        </div>
					  </div>						
  ';

		 }


		}

		function Distanceplace($lat,$lot,$place)
		{
		 $p = new PlaceView();
		 $i = 0;
		 $sorted = array();
		 $keys = array();
		 $res =  $this->GetByType($place,$type);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 $sorted[$ctr] =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);

		 	}

		 	 asort($sorted, true);
			 $keys =  array_keys($sorted);

		 foreach($keys as $k ){
				echo '
					  <div class="card placecard">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$k]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$k]['Pname'].'&lat='.$res[$k]['Lat'].'&lot='.$res[$k]['Lot'].'&desc='.$res[$k]['Des'].'&img='.$res[$k]['img'].'&class='.$res[$k]['type'].'&rating='.$res[$k]['Rating'].'&address='.$res[$k]['address'].'&hours='.$res[$k]['hours'].'&price='.$res[$k]['price'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$k]['Pname'].'</b></a></p>
					                    <p class="text-muted" style ="font-size:12px;"><span class="material-icons">place</span> <b>'.round($sorted[$k]).' KM</b> From Your Location: <b>'.$_SESSION['City'].'</b></p>
					                    <p class="text-muted" style ="font-size:9px;"><small>'.$res[$k]['type'].'</small></p>

					                </div>
					            </div>
					        </div>
					  </div>						
  ';

		 }


		}


		function Valueplace($lat,$lot,$place,$type,$price)
		{
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this->GetByValue($place,$type,$price);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 $sorted =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);

				echo '
					  <div class="card placecard">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$res[$ctr]['img'].'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$ctr]['Pname'].'</b></a></p>
					                    <p class="text-muted" style ="font-size:12px;"><span class="material-icons">place</span> <b>'.round($sorted).' KM</b> From Your Location: <b>'.$_SESSION['City'].'</b></p>
					                    <p class="text-muted" style ="font-size:12px;"><small>'.$res[$ctr]['price'].'</small></p>
					                    <p class="text-muted" style ="font-size:9px;"><small>'.$res[$ctr]['type'].'</small></p>

					                </div>
					            </div>
					        </div>
					  </div>						
 			 ';

		 	}


		}

		function Caroplace($lat,$lot,$place,$type)
		{
		 $p = new PlaceView();
		 $i = 0;
		 $sorted = array();
		 $keys = array();
		 $res =  $this->GetByType($type);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 $sorted[$ctr] =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);

		 	}

		 	 asort($sorted, true);
			 $keys =  array_keys($sorted);

		 foreach($keys as $k ){
				echo '
					    <div class="item">
					      <img src="'.$res[$k]['img'].'" style="width:250px;height:200px;margin:auto;">
							<div class="bottom-left ">
								<a href="../../pages/user/place.php?nm='.$res[$k]['Pname'].'&lat='.$res[$k]['Lat'].'&lot='.$res[$k]['Lot'].'&desc='.$res[$k]['Des'].'&img='.$res[$k]['img'].'&class='.$res[$k]['type'].'&rating='.$res[$k]['Rating'].'&address='.$res[$k]['address'].'&hours='.$res[$k]['hours'].'&price='.$res[$k]['price'].'" class="text-body text-light"  style="text-decoration: none" ><p class="card-title text-light">'.$res[$k]['Pname'].'<span class="material-icons">place</span>'.round($sorted[$k]).' KM</p></a>
							</div>
					    </div>
						';

		 }


		}



		function Recplace($lat,$lot,$place,$type)
		{
		 $p = new PlaceView();
		 $i = 0;
		 $sorted = array();
		 $keys = array();
		 $res =  $this->GetRecommended($place,$type);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 $sorted[$ctr] =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);

		 	}

		 	 asort($sorted, true);
			 $keys =  array_keys($sorted);

		 foreach($keys as $k ){
				echo '
					  <div class="card placecard">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$k]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$k]['Pname'].'&lat='.$res[$k]['Lat'].'&lot='.$res[$k]['Lot'].'&desc='.$res[$k]['Des'].'&img='.$res[$k]['img'].'&class='.$res[$k]['type'].'&rating='.$res[$k]['Rating'].'&address='.$res[$k]['address'].'&hours='.$res[$k]['hours'].'&price='.$res[$k]['price'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$k]['Pname'].'</b></a></p>
					                    <p class="text-muted" style ="font-size:12px;"><span class="material-icons">place</span> <b>'.round($sorted[$k]).' KM</b> From Your Location: <b>'.$place.'</b></p>
					                    <p class="text-muted" style ="font-size:9px;"><small>'.$res[$k]['type'].'</small></p>

					                </div>
					            </div>
					        </div>
					  </div>	

						';

		 }


		}


	function Places(){
		 $i = 0;
		 $res =  $this->GetName();
		  foreach($res as $r ){
		 	$i++;
		 }
		 echo "<select name='tag' style='width:60%;'>";
		 	echo "<option value=''> </option>";
		  for ($ctr=0; $ctr < $i; $ctr++) { 

    			echo "<option value='".$res[$ctr]['Pname']."'>".$res[$ctr]['Pname']."</option>";

		 	}
		 echo "</select>";
	}
}
 ?>