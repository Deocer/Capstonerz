<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/post.php');

class PostView extends PostControl
	{
		
		function ShowPost()
		{
		 $i = 0;
		 $res =  $this->GetPost();
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		$pic = 0;
		 		$img =  $this->Pic($res[$ctr]['PostID']);


		 		echo '
<div class="card" style="width:100%;height:90%;">
  <h5 class="card-header"></h5>
  <div class="card-body">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-1 px-2">
         <img src="../../imgs/wander logo.png"  class="d-block" alt="..." style="width:50px; height: 50px; border: solid white; border-radius: 50px;">
        </div>
        <div class="col-6 py-2">
          <h5 class="card-title">'.$res[$ctr]['UserName'].'</h5>
        </div>
      </div>
    <p class="card-text"'.$res[$ctr]['PostTitle'].'</p>
    <p>'.$res[$ctr]['Cont'].'</p>
    <div id="carouselExampleIndicators" class="carousel slide" style="height: 50%;"data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">';

			 	echo '
				 	<div class="carousel-item active">
				 		<img src="'.$img[0]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" alt="../../imgs/background.jpg">
				 	</div>';

  
				foreach($img as $im ){

				 	echo '
				 	<div class="carousel-item">
				 		<img src="'.$im['datum'].'" style="height: 100%;" class="img-fluid rounded-start" alt="../../imgs/background.jpg">
				 	</div>';

				 }


echo'
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   <p class="card-title"><sub>'.$res[$ctr]['Tag'].'t</sub></p> '.$res[$ctr]['Rating'].'<span class="fa fa-star"></span>
  </div>
</div>

</div>';
		 	}
		}


		function UsPost($id)
		{
		 $i = 0;
		 $res =  $this->UserPost($id);
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
								     	<h5 class="card-title">'.$res[$ctr]['UserName'].'</h5>
								        <p class="card-title"><b>'.$res[$ctr]['PostTitle'].'</b></p>
								        <p class="card-text">'.$res[$ctr]['Cont'].'</p>
								        <p class="card-text"><small class="text-muted">'.$res[$ctr]['Tag'].'</small></p>
								      </div>
								    </div>
								  </div>
								</div>


						';
		 	}
		}




		function TgPost($tag)
		{
		 $i = 0;
		 $res =  $this->TagPost($tag);
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
								     	<h5 class="card-title">'.$res[$ctr]['Username'].'</h5>
								        <p class="card-title"><b>'.$res[$ctr]['PostTitle'].'</b></p>
								        <p class="card-text">'.$res[$ctr]['Cont'].'</p>
								        <p class="card-text"><small class="text-muted">'.$res[$ctr]['Tag'].'</small></p>
								      </div>
								    </div>
								  </div>
								</div>


						';
		 	}
		}






}


 ?>