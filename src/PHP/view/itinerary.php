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

				  <div class="card mb-1" style="width:100%;">
					  <div class="row g-0">
					    <div class="col">
					      <div class="card-body">

					        <p class="card-title"><a href="../../pages/user/place.php?nm='.$res[$ctr]['Pname'].'&lat='.$res[$ctr]['lat'].'&lot='.$res[$ctr]['lot'].'&desc='.$res[$ctr]['Des'].'&img='.$res[$ctr]['img'].'" class="text-body"  style="text-decoration: none" ><b><small class="text-muted">'.$res[$ctr]['Pname'].'</small></b></a></p>
					        <p class=""><small class="text-muted"><span class="fa fa-star"></span> </small></p>
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




}


 ?>