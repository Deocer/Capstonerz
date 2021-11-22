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




		function DistanceSort($lat,$lot,$place,$type,$city)//By default when a user selects a type of destination. All places listed are sorted by Distance
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
			 @$sorted[$ctr] =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);

		 	}
		 	 asort($sorted, true);
			 $keys =  array_keys($sorted);

		 for ($c=0; $c < $i; $c++) {
		 		$img = str_replace("&","@",$res[$keys[$c]]['img']);  
				echo '
					  <div class="card placecard" style="width:420px;height:150px;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$keys[$c]]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$keys[$c]]['Pname'].'&lat='.$res[$keys[$c]]['Lat'].'&lot='.$res[$keys[$c]]['Lot'].'&desc='.$res[$keys[$c]]['Des'].'&img='.$img.'&class='.$res[$keys[$c]]['type'].'&rating='.$res[$keys[$c]]['Rating'].'&address='.$res[$keys[$c]]['address'].'&hours='.$res[$keys[$c]]['hours'].'&price='.$res[$keys[$c]]['price'].'&contact='.$res[$keys[$c]]['contact'].'&site='.$res[$keys[$c]]['site'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$keys[$c]]['Pname'].'</b></a></p>
					                    <p class="text-muted" style ="font-size:10px;"><span class="material-icons">place</span> <b>'.round($sorted[$keys[$c]]).' KM</b> From Your Location: <b>'.$city.'</b></p>
					                </div>
					            </div>
					        </div>
					  </div>						
  ';


		 	}


		}



		function PriceSort($lat,$lot,$place,$type,$price,$city)// Sorted by price by the sql query this only needs to be outputed.
		{
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this->SortbyPrice($place,$type,$price);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 @$sorted =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);
			 $img = str_replace("&","@",$res[$ctr]['img']); 

				echo '
					  <div class="card placecard" style="width:420px;height:150px;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$ctr]['Pname'].'</b></a></p>';
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
				 						<b>'.round($sorted).' KM</b> From Your Location: <b>'.$city.'</b></p>

					                </div>
					            </div>
					        </div>
					  </div>						
 			 ';

		 	}


		}


		function AscPriceSort($lat,$lot,$place,$type,$price,$city)// Sorted by price by the sql query this only needs to be outputed.
		{
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this->AscSortbyPrice($place,$type,$price);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 @$sorted =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);
			 $img = str_replace("&","@",$res[$ctr]['img']); 

				echo '
					  <div class="card placecard" style="width:420px;height:150px;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$ctr]['Pname'].'</b></a></p>';
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
				 						<b>'.round($sorted).' KM</b> From Your Location: <b>'.$city.'</b></p>

					                </div>
					            </div>
					        </div>
					  </div>						
 			 ';

		 	}


		}

		function DscPriceSort($lat,$lot,$place,$type,$price,$city)// Sorted by price by the sql query this only needs to be outputed.
		{
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this->DescSortbyPrice($place,$type,$price);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 @$sorted =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);
			 $img = str_replace("&","@",$res[$ctr]['img']); 

				echo '
					  <div class="card placecard" style="width:420px;height:150px;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$ctr]['Pname'].'</b></a></p>';
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
				 						<b>'.round($sorted).' KM</b> From Your Location: <b>'.$city.'</b></p>

					                </div>
					            </div>
					        </div>
					  </div>						
 			 ';

		 	}


		}

		function RatingSort($lat,$lot,$place,$type,$city)// Places outputed are based on user specifications. But are not sorted in any way
		{
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this->SortRating($place,$type);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 @$sorted =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);
			 $img = str_replace("&","@",$res[$ctr]['img']); 

				echo '
					  <div class="card placecard" style="width:420px;height:150px;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$ctr]['Pname'].'</b></a></p>				                         

				                          <p style="font-size:30px;">
				                           <span class="material-icons" style="font-size:25px;color:yellow;">star</span>
				                            '.$res[$ctr]['Rating'].'
				                          </p>

					                      <p class="text-muted" style ="font-size:12px;">('.$res[$ctr]['reviews'].') Reviews</p>
					                </div>
					            </div>
					        </div>
					  </div>						
 			 ';

		 	}


		}



		function Valueplace($lat,$lot,$place,$type,$price,$city)// Places outputed are based on user specifications. But are not sorted in any way
		{
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this->GetByValue($place,$type,$price);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 @$sorted =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);
			 $img = str_replace("&","@",$res[$ctr]['img']); 
				echo '
					  <div class="card placecard" style="width:420px;height:170px;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$ctr]['Pname'].'</b></a></p>';
					                    
					           		if ($res[$ctr]['price'] == 1) {
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons">paid</span>
					           			</p>';
					           		}elseif ($res[$ctr]['price'] == 2) {
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons">paid</span>
					           			<span class="material-icons">paid</span>
					           			</p>';
					           		}else{
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons">paid</span>
					           			<span class="material-icons">paid</span>
					           			<span class="material-icons">paid</span>
					           			</p>';					           			
					           		}

					echo               '<p class="text-muted lead" style ="font-size:12px;">'.$res[$ctr]['type'].'</p>					                    
					                    <p class="text-muted" style ="font-size:9px;"><span class="material-icons">place</span> <b>'.round($sorted).' KM</b> From Your Location</p>


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
			 @$sorted[$ctr] =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);

		 	}

		 	 asort($sorted, true);
			 $keys =  array_keys($sorted);
		 for ($c=0; $c < $i; $c++) {
		 		$img = str_replace("&","@",$res[$keys[$c]]['img']); 
				echo '
					  <div class="card placecard" style="width:420px;height:150px;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$keys[$c]]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$keys[$c]]['Pname'].'&lat='.$res[$keys[$c]]['Lat'].'&lot='.$res[$keys[$c]]['Lot'].'&desc='.$res[$keys[$c]]['Des'].'&img='.$img.'&class='.$res[$keys[$c]]['type'].'&rating='.$res[$keys[$c]]['Rating'].'&address='.$res[$keys[$c]]['address'].'&hours='.$res[$keys[$c]]['hours'].'&price='.$res[$keys[$c]]['price'].'&contact='.$res[$keys[$c]]['contact'].'&site='.$res[$keys[$c]]['site'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$keys[$c]]['Pname'].'</b></a></p>
					                    <p class="text-muted" style ="font-size:10px;"><span class="material-icons">place</span> <b>'.round($sorted[$keys[$c]]).' KM</b> From Your Location: <b>'.$place.'</b></p>
					                </div>
					            </div>
					        </div>
					  </div>						
  ';


		 	}


		}


		function Last2place($lat,$lot,$district,$district2,$type,$type2,$place)// Recommneded places are nearby places by default so they are also sorted with distance
		{
		 $p = new PlaceView();
		 $i = 0;
		 $sorted = array();
		 $keys = array();
		 $res =  $this->Itinerarylast($district,$district2,$type,$type2);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
			 @$sorted[$ctr] =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);

		 	}

		 	 asort($sorted, true);
			 $keys =  array_keys($sorted);
		 for ($c=0; $c < $i; $c++) {
		 		$img = str_replace("&","@",$res[$keys[$c]]['img']); 
				echo '
					  <div class="card placecard" style="width:420px;height:150px;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$keys[$c]]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$keys[$c]]['Pname'].'&lat='.$res[$keys[$c]]['Lat'].'&lot='.$res[$keys[$c]]['Lot'].'&desc='.$res[$keys[$c]]['Des'].'&img='.$img.'&class='.$res[$keys[$c]]['type'].'&rating='.$res[$keys[$c]]['Rating'].'&address='.$res[$keys[$c]]['address'].'&hours='.$res[$keys[$c]]['hours'].'&price='.$res[$keys[$c]]['price'].'&contact='.$res[$keys[$c]]['contact'].'&site='.$res[$keys[$c]]['site'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$keys[$c]]['Pname'].'</b></a></p>
					                    <p class="text-muted" style ="font-size:10px;"><span class="material-icons">place</span> <b>'.round($sorted[$keys[$c]]).' KM</b> From Your Location: <b>'.$place.'</b></p>
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

	function Search($name,$lat,$lot){
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this-> SearchName($name);
		  foreach($res as $r ){
		 	$i++;
		 }

		  for ($ctr=0; $ctr < $i; $ctr++) { 
		  		@$sorted =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);
		  		$img = str_replace("&","@",$res[$ctr]['img']); 
				echo '
					  <div class="card placecard">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:200px;height:120px;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="h6"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" ><b>'.$res[$ctr]['Pname'].'</b></a></p>
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

	function PlaceTypes($place,$type){
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this->GetByType($place,$type);
		  foreach($res as $r ){
		 	$i++;
		 }

		 echo $i;

		 return $i;

	}

	function AllPlaces(){
		 $i = 0;
		 $res =  $this->Getplaces();
		  foreach($res as $r ){
		 	$i++;
		 }
		  for ($ctr=0; $ctr < $i; $ctr++) { 

    			echo '
					<tr class ="placerow" 
					onclick="populate(';
					echo "'".$res[$ctr]['PlaceID']."',";
					echo "'".addslashes($res[$ctr]['Pname'])."',";
					echo "'".addslashes($res[$ctr]['Des'])."',";
					echo "'".$res[$ctr]['type']."',";
					echo "'".$res[$ctr]['Lat']."',";
					echo "'".$res[$ctr]['Lot']."',";
					echo "'".$res[$ctr]['District']."',";
					echo "'".addslashes($res[$ctr]['address'])."',";
					echo "'".$res[$ctr]['Rating']."',";
					echo "'".$res[$ctr]['reviews']."',";
					echo "'".$res[$ctr]['price']."',";
					echo "'".$res[$ctr]['hours']."',";
					echo "'".$res[$ctr]['contact']."',";
					echo "'".$res[$ctr]['site']."',";
					echo "'".$res[$ctr]['img']."'";

				echo')">
		 		    <th scope="row">'.$res[$ctr]['PlaceID'].'</th>
				    <td>'.$res[$ctr]['Pname'].'</td>
				    <td>'.$res[$ctr]['type'].'</td>
				    <td>'.$res[$ctr]['District'].'</td>
				    </tr>

				    ';

		 	}
	}

}
$d = new PlaceView();

if (isset($_POST['default'])){
echo $d->DistanceSort($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['default'],$_POST['city']);
}

if (isset($_POST['reco'])){
echo $d->Valueplace($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['type'],$_POST['price'],$_POST['city'] );

}

if (isset($_POST['distance'])){
echo $d->DistanceSort($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['type'],$_POST['city'] );

}

if (isset($_POST['prize'])){
echo $d->PriceSort($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['type'],$_POST['price'],$_POST['city'] );
}

if (isset($_POST['popularity'])){
echo $d->RatingSort($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['type'],$_POST['city'] );

}

if (isset($_POST['rec'])){
echo $d->Recplace($_POST['lat'],$_POST['lot'],$_POST['nm'],$_POST['class']);
}

if (isset($_POST['asc'])){
echo $d->AscPriceSort($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['type'],$_POST['price'],$_POST['city'] );
}

if (isset($_POST['dsc'])){
echo $d->DscPriceSort($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['type'],$_POST['price'],$_POST['city'] );
}

if (isset($_POST['showall'])){
echo $d->AllPlaces();
}

if (isset($_POST['lst2'])){
	echo $d->Last2place($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['district2'],$_POST['type'],$_POST['type2'],$_POST['city']);
}

 ?>

