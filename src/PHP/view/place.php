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
				echo '<a href="../../pages/user/place.php?nm='.$res[$keys[$c]]['Pname'].'&lat='.$res[$keys[$c]]['Lat'].'&lot='.$res[$keys[$c]]['Lot'].'&desc='.$res[$keys[$c]]['Des'].'&img='.$img.'&class='.$res[$keys[$c]]['type'].'&rating='.$res[$keys[$c]]['Rating'].'&address='.$res[$keys[$c]]['address'].'&hours='.$res[$keys[$c]]['hours'].'&price='.$res[$keys[$c]]['price'].'&contact='.$res[$keys[$c]]['contact'].'&site='.$res[$keys[$c]]['site'].'" class="text-body"  style="text-decoration: none" >
					  <div class="card placecard" style="width:100%;height:15rem;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4">
					                <img src="'.$res[$keys[$c]]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:15rem;height:10rem;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="" style="font-size:1.3em;"><b>'.$res[$keys[$c]]['Pname'].'</b></p>
					                    <p class="text-muted" style="font-size:1em;"><span class="material-icons">place</span> <b>'.round($sorted[$keys[$c]]).' KM</b> From : <b>'.$city.'</b></p>
					                </div>
					            </div>
					        </div>
					  </div>
					  </a>						
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

				echo '<a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" >
					  <div class="card placecard" style="width:100%;height:15rem;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4" style="margin:auto;padding-top:5px;">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:15rem;height:10rem;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p  style="font-size:1.3em;"><b>'.$res[$ctr]['Pname'].'</b></p>';
					                    
					           		if ($res[$ctr]['price'] == 1) {
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';
					           		}elseif ($res[$ctr]['price'] == 2) {
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';
					           		}else{
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';					           			
					           		}

					echo               '<p class="text-muted lead"  style="font-size:0.9em;">'.$res[$ctr]['type'].'</p>					                    
					                    <p class="text-muted"  style="font-size:1em;"><span class="material-icons">place</span> <b>'.round($sorted).' KM</b> From '.$city.'</p>


					                </div>
					            </div>
					        </div>
					  </div>
					  </a>						
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

				echo '<a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" >
					  <div class="card placecard" style="width:100%;height:15rem;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4" style="margin:auto;padding-top:5px;">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:15rem;height:10rem;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p  style="font-size:1.3em;"><b>'.$res[$ctr]['Pname'].'</b></p>';
					                    
					           		if ($res[$ctr]['price'] == 1) {
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';
					           		}elseif ($res[$ctr]['price'] == 2) {
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';
					           		}else{
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';					           			
					           		}

					echo               '<p class="text-muted lead"  style="font-size:0.9em;">'.$res[$ctr]['type'].'</p>					                    
					                    <p class="text-muted"  style="font-size:1em;"><span class="material-icons">place</span> <b>'.round($sorted).' KM</b> From '.$city.'</p>


					                </div>
					            </div>
					        </div>
					  </div>
					  </a>						
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

				echo '<a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" >
					  <div class="card placecard" style="width:100%;height:15rem;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4" style="margin:auto;padding-top:5px;">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:15rem;height:10rem;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p  style="font-size:1.3em;"><b>'.$res[$ctr]['Pname'].'</b></p>';
					                    
					           		if ($res[$ctr]['price'] == 1) {
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';
					           		}elseif ($res[$ctr]['price'] == 2) {
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';
					           		}else{
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';					           			
					           		}

					echo               '<p class="text-muted lead"  style="font-size:0.9em;">'.$res[$ctr]['type'].'</p>					                    
					                    <p class="text-muted"  style="font-size:1em;"><span class="material-icons">place</span> <b>'.round($sorted).' KM</b> From '.$city.'</p>


					                </div>
					            </div>
					        </div>
					  </div>
					  </a>						
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

				echo '<a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" >
					  <div class="card placecard" style="width:100%;height:15rem;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4" style="margin:auto;padding-top:5px;">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:15rem;height:10rem;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p  style="font-size:1.3em;"><b>'.$res[$ctr]['Pname'].'</b></p>				                         

				                          <p style="font-size:30px;">
				                           <span class="material-icons" style="font-size:25px;color:yellow;">star</span>
				                            '.$res[$ctr]['Rating'].'
				                          </p>

					                      <p class="text-muted"  style="font-size:1em;">('.$res[$ctr]['reviews'].') Reviews</p>
					                      <p class="text-muted"  style="font-size:1em;"><span class="material-icons">place</span> <b>'.round($sorted).' KM</b> From '.$city.'</p>
					                </div>
					            </div>
					        </div>
					  </div>
					  </a>						
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
				echo '<a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" >
					  <div class="card placecard" style="width:100%;height:15rem;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4" style="margin:auto;padding-top:5px;">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:15rem;height:10rem;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p  style="font-size:1.1em;"><b>'.$res[$ctr]['Pname'].'</b></p>';
					                    
					           		if ($res[$ctr]['price'] == 1) {
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';
					           		}elseif ($res[$ctr]['price'] == 2) {
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';
					           		}else{
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';					           			
					           		}

					echo               '<p class="text-muted lead"  style="font-size:0.9em;">'.$res[$ctr]['type'].'</p>					                    
					                    <p class="text-muted"  style="font-size:0.9em;"><span class="material-icons">place</span> <b>'.round($sorted).' KM</b> From '.$city.'</p>


					                </div>
					            </div>
					        </div>
					  </div>
					  </a>						
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
				echo '<a href="../../pages/user/place.php?nm='.$res[$keys[$c]]['Pname'].'&lat='.$res[$keys[$c]]['Lat'].'&lot='.$res[$keys[$c]]['Lot'].'&desc='.$res[$keys[$c]]['Des'].'&img='.$img.'&class='.$res[$keys[$c]]['type'].'&rating='.$res[$keys[$c]]['Rating'].'&address='.$res[$keys[$c]]['address'].'&hours='.$res[$keys[$c]]['hours'].'&price='.$res[$keys[$c]]['price'].'&contact='.$res[$keys[$c]]['contact'].'&site='.$res[$keys[$c]]['site'].'" class="text-body"  style="text-decoration: none; font-size:1rem;" >
					  <div class="card placecard" style="width:100%;height:15rem;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4"  style="margin:auto;padding-top:5px;">
					                <img src="'.$res[$keys[$c]]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:18rem;height:12rem;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p class="" style="font-size:1.3em;"><b>'.$res[$keys[$c]]['Pname'].'</b></p>';

					           		if ($res[$keys[$c]]['price'] == 1) {
					           			echo ' <p class="text-muted" style ="font-size:3vh;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';
					           		}elseif ($res[$keys[$c]]['price'] == 2) {
					           			echo ' <p class="text-muted" style ="font-size:3vh;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';
					           		}else{
					           			echo ' <p class="text-muted" style ="font-size:15px;">
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			<span class="material-icons" style ="font-size:3vh;">paid</span>
					           			</p>';					           			
					           		}

					            echo' 
					                    <p class="text-muted lead"  style="font-size:0.9em;">'.$res[$keys[$c]]['type'].'</p>	       
					                    <p class="text-muted  style="font-size:0.5em;"><span class="material-icons">place</span> <b>'.round($sorted[$keys[$c]]).' KM</b> From <b>'.$place.'</b></p>
					                </div>
					            </div>
					        </div>
					  </div>
					  </a>						
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
				echo '<a href="../../pages/user/place.php?nm='.$res[$keys[$c]]['Pname'].'&lat='.$res[$keys[$c]]['Lat'].'&lot='.$res[$keys[$c]]['Lot'].'&desc='.$res[$keys[$c]]['Des'].'&img='.$img.'&class='.$res[$keys[$c]]['type'].'&rating='.$res[$keys[$c]]['Rating'].'&address='.$res[$keys[$c]]['address'].'&hours='.$res[$keys[$c]]['hours'].'&price='.$res[$keys[$c]]['price'].'&contact='.$res[$keys[$c]]['contact'].'&site='.$res[$keys[$c]]['site'].'" class="text-body"  style="text-decoration: none" >
					  <div class="card placecard" style="width:100%;height:15rem;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4"  style="margin:auto;padding-top:5px;">
					                <img src="'.$res[$keys[$c]]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:18rem;height:12rem;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p style="font-size:1.5em;"><b>'.$res[$keys[$c]]['Pname'].'</b></p>
					                    <p class="text-muted" style="font-size:1.5em;">'.$res[$keys[$c]]['Rating'].'<span class="material-icons">star</span></p>
					                    <p class="text-muted"  style="font-size:1em;"><span class="material-icons">place</span> <b>'.round($sorted[$keys[$c]]).' KM</b> From Your Location: <b>'.$place.'</b></p>
					                </div>
					            </div>
					        </div>
					  </div>
					  </a>						
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
				echo '<a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" class="text-body"  style="text-decoration: none" >
					  <div class="card placecard" style="width:100%;height:15.5rem;padding:0;padding-top:10px;">
					        <div class="row no-gutters">
					            <div class="col-4"  style="margin:auto;padding-top:5px;">
					                <img src="'.$res[$ctr]['img'].'" class="img-fluid rounded-circle m-1 "  alt="" style="width:15rem;height:10rem;">
					            </div>
					            <div class="col">
					                <div class="card-block px-2">
					                    <p style="font-size:1.5em;"><b>'.$res[$ctr]['Pname'].'</b></p>
					                    <p class="text-muted" style="font-size:1.5em;">'.$res[$ctr]['Rating'].'<span class="material-icons">star</span></p>
					                     <p class="text-muted" style="font-size:0.9em;"><span class="material-icons">place</span> <b>'.round($sorted).' KM</b> From Your Location: <b>'.$_SESSION['City'].'</b></p>

					                </div>
					            </div>
					        </div>
					  </div>
					  </a>						
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

// MOBILE STYLES //

		function Frontplace($lat,$lot,$place,$type,$price,$city)// Places outputed are based on user specifications. But are not sorted in any way
		{
		 $p = new PlaceView();
		 $i = 0;
		 $res =  $this->GetByValue($place,$type,$price);
		 foreach($res as $r ){
		 	$i++;
		 }
			echo
			'
			<style>
			* {
			  margin: 0;
			  padding: 0;
			}
			body {
			  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
			    Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
			}
			.portfolio {
			  width:100%;
			  display: flex;
			  flex-wrap: wrap;
			  min-width: 320px;
			  height:70vh;
			  overflow:auto;
			}

			.portfolio h2 {
			  flex-basis: 100%;
			  text-align: center;
			  margin: 50px auto 30px;
			  text-transform: uppercase;
			  font-size: 40px;
			  font-weight:bolder;
			  letter-spacing: 2px;
			  color: #111;
			}
			.card {
			  width: 33.3%;
			  overflow: hidden;
			  position: relative;
			}

			.card .image {
			  z-index: 0;
			  height: 15vh;
			}
			.card img {
			  height: 100%;
			  width: 100%;
			  transition: all 0.5s ease;
			  transform: scale(1.2);
			}

			.card:hover .image img {
			  transform: scale(1);
			}

			.card:active .image img {
			  transform: scale(1);
			}

			.info {
			  position: absolute;
			  bottom: 8px;
			  left: 16px;
			  color:white;
			  font-weight:bolder;
			  font-size:15px;
			}

			.marker {
			  position: absolute;
			  top: 8px;
			  right: 16px;
			  font-size:15px;
			  color:white;
			}

			@media screen and (max-width: 768px) {
			  .card {
			  width: 50%;
			  }
			  .card .content {
			    bottom: 0;
			  }
			}

			@media screen and (max-width: 480px) {
			  .card {
			  width: 100%;
			  }
			}


			</style>
			<div class="portfolio container-fluid">
			<h2 class="title">Destinations in '.$place.', Manila</h2>';
			for ($ctr=0; $ctr < $i; $ctr++) { 
				@$sorted =  $p-> haversine($lat,$lot,$res[$ctr]['Lat'],$res[$ctr]['Lot']);
				$img = str_replace("&","@",$res[$ctr]['img']);
				echo 
				'
			  

			  <div class="card">
			    <div class="image">
			    <a  href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$img.'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'&contact='.$res[$ctr]['contact'].'&site='.$res[$ctr]['site'].'" > 
			     <img src="'.$res[$ctr]['img'].'" alt="" />  
			    </a>
			    </div>
				<div class="marker">
				    	<p><span class="material-icons">place</span>'.round($sorted).'</p>
				</div>
			    <div style="background-color:grey;width:100%;">
				    <div class="info">
				    	<p>'.$res[$ctr]['Pname'].'</p>';


			echo'
				    </div>
				</div>
			  </div>

				'; 
			}




			echo'
			</div>
			';


		}

}

$d = new PlaceView();

if (isset($_POST['default'])){
echo $d->DistanceSort($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['default'],$_POST['city']);
}

if (isset($_POST['reco'])){
echo $d->Valueplace($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['type'],$_POST['price'],$_POST['city'] );

}


if (isset($_POST['preco'])){
echo $d->Frontplace($_POST['lat'],$_POST['lot'],$_POST['district'],$_POST['type'],$_POST['price'],$_POST['city'] );

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

