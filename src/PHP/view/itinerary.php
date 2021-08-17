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

					<div class="card mx-auto bg-light" style="width: 300px;">
					    <img src="'.$res[$ctr]['img'].'"  style="height: 150px; lass="card-img-top" alt="NOT AVAILABLE">
					    <div class="card-body mx-auto">
					      <p class="card-title text-center"><b>'.$res[$ctr]['PlaceName'].'</b></p>
					      <p class="card-text">'.$res[$ctr]['Des'].'</p>
					      <a href="../../pages/user/place.php?nm='.$res[$ctr]['PlaceName'].'&lat='.$res[$ctr]['lat'].'&lot='.$res[$ctr]['lot'].'&desc='.$res[$ctr]['Des'].'&img='.$res[$ctr]['img'].'" class="btn btn-primary " type="button" >CHECK OUT</a>
					    </div>
					  </div>


						';
		 	}
		}




}


 ?>