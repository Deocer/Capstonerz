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




		function DistanceSort($lat,$lot,$place,$type)//By default when a user selects a type of destination. All places listed are sorted by Distance
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



		function PriceSort($lat,$lot,$place,$type,$price)// Sorted by price by the sql query this only needs to be outputed.
		{
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this->SortbyPrice($place,$type,$price);
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
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$res[$ctr]['img'].'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$ctr]['Pname'].'</b></a></p>';
					           		if ($res[$ctr]['price'] == 1) {
					           			echo ' <p class="text-muted" style ="font-size:12px;">
					           			<span class="material-icons">paid</span>
					           			</p>';
					           		}elseif ($res[$ctr]['price'] == 2) {
					           			echo ' <p class="text-muted" style ="font-size:12px;">
					           			<span class="material-icons">paid</span>
					           			<span class="material-icons">paid</span>
					           			</p>';
					           		}else{
					           			echo ' <p class="text-muted" style ="font-size:12px;">
					           			<span class="material-icons">paid</span>
					           			<span class="material-icons">paid</span>
					           			<span class="material-icons">paid</span>
					           			</p>';					           			
					           		}
					                   


				echo				' 	<p class="text-muted" style ="font-size:9px;">
										<span class="material-icons">place</span>
				 						<b>'.round($sorted).' KM</b> From Your Location: <b>'.$_SESSION['City'].'</b></p>

					                </div>
					            </div>
					        </div>
					  </div>						
 			 ';

		 	}


		}



		function RatingSort($lat,$lot,$place,$type)// Places outputed are based on user specifications. But are not sorted in any way
		{
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this->SortRating($place,$type);
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
					                    <p class="text-muted" style ="font-size:15px;"><span class="material-icons">star</span></p>
					                    <p class="text-muted" style ="font-size:12px;">'.$res[$ctr]['Rating'].'</p>
					                    <p class="text-muted" style ="font-size:12px;">'.$res[$ctr]['reviews'].'</p>
					                     <p class="text-muted" style ="font-size:9px;"><span class="material-icons">place</span> <b>'.round($sorted).' KM</b> From Your Location: <b>'.$_SESSION['City'].'</b></p>

					                </div>
					            </div>
					        </div>
					  </div>						
 			 ';

		 	}


		}



		function Valueplace($lat,$lot,$place,$type,$price)// Places outputed are based on user specifications. But are not sorted in any way
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




		function Recplace($lat,$lot,$place,$type)// Recommneded places are nearby places by default so they are also sorted with distance
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