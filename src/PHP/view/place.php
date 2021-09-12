<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/place.php');

class PlaceView extends PlaceControl
	{
		
		function Myitem($lat,$Lot)
		{
		 $i = 0;
		 $res =  $this->GetItem($lat,$lot);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		echo '
					  <div class="card mb-1" style="width:100%;">
					  <div class="row g-0">
					    <div class="col">
					      <div class="card-body">

					        <p class="card-title"><a href="../../pages/user/place.php??nm='.$res[$ctr]['PlaceName'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$res[$ctr]['img'].'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'"&class='.$type.'&rating='.$rating.'" class="text-body"  style="text-decoration: none" ><b><small class="text-muted">'.$res[$ctr]['Pname'].'</small></b></a></p>
					        <p class=""><small class="text-muted"><span class="fa fa-star star"></span> </small></p>
					        <p class=""><sub class="text-muted"></sub></p>
					        <p class=""><sub class="text-muted"></sub></p>

					      </div>
					    </div>
					    <div class="col mx-auto" style="margin:auto;">
					      <img src="'.$res[$ctr]['img'].'" class="" alt="..." style="width:80%; height:100px;">
					    </div>
					  </div>
					</div>
						';
		 	}
		}

		function Recplace()
		{
		 $i = 0;
		 $res =  $this->select();
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		echo '
					  <div class="card mb-1" style="width:100%;">
					  <div class="row g-0">
					    <div class="col">
					      <div class="card-body">
					        <p class="card-title"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$res[$ctr]['img'].'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'" class="text-body"  style="text-decoration: none" ><b><small class="text-muted">'.$res[$ctr]['Pname'].'</small></b></a></p>
					        <p class=""><small class="text-muted">Google Reviews :<span class="fa fa-star star"></span>'.$res[$ctr]['Rating'].'</small></p>
					        <p class=""><small class="text-muted">Price Point :'.$res[$ctr]['price'].'</small></p>
					        <p class=""><sub class="text-muted">'.$res[$ctr]['hours'].'</sub></p>
					        <p class=""><sub class="text-muted" style ="font-size:10px;">'.$res[$ctr]['address'].'</sub></p>

					      </div>
					    </div>
					    <div class="col mx-auto" style="margin:auto;">
					      <img src="'.$res[$ctr]['img'].'" class="" alt="..." style="width:80%; height:100px;">
					    </div>
					  </div>
					</div>

						';
		 	}
		}

		function Nearplace($type,$city)
		{
		 $i = 0;
		 $res =  $this->GetNear($type,$city);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		echo '
					  <div class="card mb-1" style="width:100%;height:">
					  <div class="row g-0">
					    <div class="col">
					      <div class="card-body">
					        <p class="card-title"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['Lat'].'&lot='.$res[$ctr]['Lot'].'&desc='.$res[$ctr]['Des'].'&img='.$res[$ctr]['img'].'&class='.$res[$ctr]['type'].'&rating='.$res[$ctr]['Rating'].'&address='.$res[$ctr]['address'].'&hours='.$res[$ctr]['hours'].'&price='.$res[$ctr]['price'].'" class="text-body"  style="text-decoration: none" ><b><small class="text-muted">'.$res[$ctr]['Pname'].'</small></b></a></p>
					        <p class=""><small class="text-muted">Google Reviews :<span class="fa fa-star star"></span>'.$res[$ctr]['Rating'].'</small></p>
					        <p class=""><small class="text-muted">Google Reviews :<span class="fa fa-star star"></span>'.$res[$ctr]['reviews'].'</small></p>
					        <p class=""><small class="text-muted">Price Point :'.$res[$ctr]['price'].'</small></p>
					        <p class=""><sub class="text-muted">'.$res[$ctr]['hours'].'</sub></p>
					        <p class="text-muted" style ="font-size:10px;">'.$res[$ctr]['address'].'</p>

					      </div>
					    </div>
					    <div class="col mx-auto" style="margin:auto;">
					      <img src="'.$res[$ctr]['img'].'" class="" alt="..." style="width:80%; height:100px;">
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
		 echo "<select name='tag'>";
		 	echo "<option value=''> </option>";
		  for ($ctr=0; $ctr < $i; $ctr++) { 

    			echo "<option value='".$res[$ctr]['Pname']."'>".$res[$ctr]['Pname']."</option>";

		 	}
		 echo "</select>";
	}
}
 ?>