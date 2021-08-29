<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/review.php');

class ReviewView extends ReviewControl
	{
		
		function ShowPost($nm)
		{
		 $i = 0;
		 $pic = 0;
		 $res =  $this->GetReview($nm);
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		echo '
					<div class="card w-100">
					  <div class="card-body">
					    <p class="card-title">'.$res[$ctr]['UserName'].'</p>
					    <p class="card-text">'.$res[$ctr]['Cont'].'</p>
						<p class=""><small class="text-muted">Rating :<span class="fa fa-star star"></span>'.$res[$ctr]['Rating'].'</small></p>
					  </div>
					</div>';
		 	}
		}



}


 ?>