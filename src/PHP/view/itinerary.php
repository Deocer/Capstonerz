<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/itinerary.php');

class ItemView extends ItemControl
	{
		
		function Myitem($id)
		{
		 $i = 0;
		 $res =  $this->GetItem($id);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		echo '

					<div class="card mb-3 pt-2" style="width: 100%;">
								  <div class="row g-0">
								    <div class="col-md-4">
								      <img src="'.$res[$ctr]['img'].'" style="height: 200px; width:100%;" class="img-fluid" alt="...">
								    </div>
								    <div class="col-md-8">
								      <div class="card-body">
								     	<h5 class="card-title">'.$res[$ctr]['PlaceName'].'</h5>
								        <p class="card-text">'.$res[$ctr]['Des'].'</p>
								       <a href="../../pages/user/place.php?nm='.$res[$ctr]['PlaceName'].'&lat='.$res[$ctr]['lat'].'&lot='.$res[$ctr]['lot'].'&desc='.$res[$ctr]['Des'].'&img='.$res[$ctr]['img'].'" class="btn btn-primary " type="button" >CHECK OUT</a>
								      </div>
								    </div>
								  </div>
								</div>

						';
		 	}
		}




}


 ?>