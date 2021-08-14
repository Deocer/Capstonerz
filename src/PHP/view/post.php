<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/post.php');

class PostView extends database
	{
		
		function ShowPost()
		{
		 $i = 0;
		 $res =  $this->fetchPost();
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		echo '

					<div class="card mb-3 pt-2" style="width: 100%;">
								  <div class="row g-0">
								    <div class="col-md-4">
								      <img src="../../imgs/background.jpg" style="height: 100%;" class="img-fluid rounded-start" alt="...">
								    </div>
								    <div class="col-md-8">
								      <div class="card-body">
								        <h5 class="card-title">'.$res[$ctr]['PostTitle'].'</h5>
								        <p class="card-text">'.$res[$ctr]['Cont'].'</p>
								        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								      </div>
								    </div>
								  </div>
								</div>


						';
		 }
		}
	}

echo 'here'



 ?>