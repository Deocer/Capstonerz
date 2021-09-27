<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/post.php');

class PostView extends PostControl
	{
		
		function ShowPost()
		{
		 $i = 0;
		 $pic = 0;
		 $res =  $this->GetPost();
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		$pic = 0;
		 		$img =  $this->Pic($res[$ctr]['PostID']);

		 		echo '
					<div class="card mx-auto" style="width:600px;">
					  <div class="card-body">
					    <div class="container">
					      <div class="row align-items-start">
					        <div class="col-1 px-2">
					         <img src="../../imgs/logo.jpg"  class="d-block" alt="..." style="width:50px; height: 50px; border: solid white; border-radius: 50px;">
					        </div>
					        <div class="col-6 py-2">
					          <h5 class="card-title" style ="font-size:14px;">'.$res[$ctr]['UserName'].'</h5>
					        </div>
					      </div>
					      <br>
					    <p class="card-text" style ="font-size:12px;">'.$res[$ctr]['PostTitle'].'</p>
					    <p style ="font-size:12px;">'.$res[$ctr]['Cont'].'</p>';

		 	foreach($img as $im ){
		 		  $pic++;
				 }

				if ($pic > 0) {
					switch ($pic) {
				  case $pic == 1 :
				   echo '
				 		<img src="'.$img[0]['datum'].'" style="height: 300px;" class="img-fluid rounded-start" onClick="reply_click(this)"  alt="../../imgs/wander logo.png"></br>';
				    break;
				  case $pic == 2:
				    echo '<div class="container">
								  <div class="row g-1">
								    <div class="col p-0">
								     <img src="'.$img[0]['datum'].'" style="height: 200px;" class="img-fluid rounded-start"  value="'.$img[0]['datum'].'"  class="img" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								    <div class="col">
								     <img src="'.$img[1]['datum'].'" style="height: 200px;"  class="img-fluid rounded-start"  value="'.$img[1]['datum'].'"class="img" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								  </div>
								</div>';
				    break;
					case $pic == 3:
				    echo '<div class="container">
								  <div class="row g-1 gx-1">
								    <div class="col">
								     <img src="'.$img[0]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								    <div class="col">
								     <img src="'.$img[1]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt=../../imgs/wander logo.png">
								    </div>
								  </div>
								  <div class="row g-1">
								    <div class="col">
								     <img src="'.$img[2]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								  </div>
								</div>';
				    break;
				  case $pic == 4:
				    echo '<div class="container">
								  <div class="row g-1">
								    <div class="col mt-1">
								     <img src="'.$img[0]['datum'].'" style="height: 200px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								    <div class="col mt-1">
								     <img src="'.$img[1]['datum'].'" style="height: 200px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								  </div>
								  <div class="row g-1 mt-1">
								    <div class="col mt-1">
								     <img src="'.$img[2]['datum'].'" style="height: 200px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								     <div class="col mt-1">
								     <img src="'.$img[3]['datum'].'" style="height: 200px;" class="img-fluid rounded-start"onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								  </div>
								</div>';
				    break;
				 	  case  $pic > 4:
				    echo '<div class="container">
								  <div class="row g-1 gx-1">
								    <div class="col">
								     <img src="'.$img[0]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								    <div class="col">
								     <img src="'.$img[1]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								  </div>
								  <div class="row g-1">
								    <div class="col">
								     <img src="'.$img[2]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								     <div class="col">
								     <p>'.$pic.'</p>
								     <img src="'.$img[3]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/wander logo.png">
								    </div>
								  </div>
								</div>';
				    break;
				  default:
				    echo "";
				}
		}

				

				echo '
					   <br><p class="card-title"><sub>'.$res[$ctr]['Tag'].'</sub></p> '.$res[$ctr]['Rating'].'<span class="fa fa-star"></span>
					  </div>
					</div>

					</div>';

echo'

		<div id="myModal" class="postmodal" style"display:none;">

				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				 <img src="" style="height: 500px; width:1200px;" id = "modalpic" class="img-fluid" alt="">
				</div>

		</div>';



		 	}
		}




		function AdminPost()
		{
		 $i = 0;
		 $pic = 0;
		 $res =  $this->GetPost();
		 foreach($res as $r ){
		 	$i++;
		 }

		 for ($ctr=0; $ctr < $i; $ctr++) { 
		 		$pic = 0;
		 		$img =  $this->Pic($res[$ctr]['PostID']);

		 		echo '
					<div class="card">
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
					      <br>
					    <p class="card-text">'.$res[$ctr]['PostTitle'].'</p>
					    <p>'.$res[$ctr]['Cont'].'</p>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal'.$res[$ctr]['PostID'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						        '.$res[$ctr]['PostTitle'].'
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						         <a href="../../PHP/controller/post.php?nm='.$res[$ctr]['PostID'].'" class="btn btn-primary " type="button" >Delete '.$res[$ctr]['PostID'].'</a>
						      </div>
						    </div>
						  </div>
						</div>


					    ';

		 	foreach($img as $im ){
		 		  $pic++;
				 }

				if ($pic > 0) {
					switch ($pic) {
				  case $pic == 1 :
				   echo '
				 		<img src="'.$img[0]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)"  alt="../../imgs/background.jpg"></br>';
				    break;
				  case $pic == 2:
				    echo '<div class="container">
								  <div class="row g-1">
								    <div class="col p-0">
								     <img src="'.$img[0]['datum'].'" style="height: 200px;width: 100%;"  value="'.$img[0]['datum'].'"  class="img-fluid" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								    <div class="col">
								     <img src="'.$img[1]['datum'].'" style="height: 200px;width: 100%;"   value="'.$img[1]['datum'].'"class="img-fluid" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								</div>';
				    break;
					case $pic == 3:
				    echo '<div class="container">
								  <div class="row g-1 gx-1">
								    <div class="col">
								     <img src="'.$img[0]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								    <div class="col">
								     <img src="'.$img[1]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								  <div class="row g-1">
								    <div class="col">
								     <img src="'.$img[2]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								</div>';
				    break;
				  case $pic == 4:
				    echo '<div class="container">
								  <div class="row g-1">
								    <div class="col mt-1">
								     <img src="'.$img[0]['datum'].'" style="height: 200px;width: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								    <div class="col mt-1">
								     <img src="'.$img[1]['datum'].'" style="height: 200px;width: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								  <div class="row g-1 mt-1">
								    <div class="col mt-1">
								     <img src="'.$img[2]['datum'].'" style="height: 200px;width: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								     <div class="col mt-1">
								     <img src="'.$img[3]['datum'].'" style="height: 200px;width: 100%;" class="img-fluid rounded-start"onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								</div>';
				    break;
				 	  case  $pic > 4:
				    echo '<div class="container">
								  <div class="row g-1 gx-1">
								    <div class="col">
								     <img src="'.$img[0]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								    <div class="col">
								     <img src="'.$img[1]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								  <div class="row g-1">
								    <div class="col">
								     <img src="'.$img[2]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								     <div class="col">
								     <p>'.$pic.'</p>
								     <img src="'.$img[3]['datum'].'" style="height: 100%;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								</div>';
				    break;
				  default:
				    echo "";
				}
		}


echo'
			 <br><p class="card-title"><sub>'.$res[$ctr]['Tag'].'</sub></p> '.$res[$ctr]['Rating'].'<span class="fa fa-star"></span>
			</div>
			'.$res[$ctr]['PostID'].'
		</div>
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal'.$res[$ctr]['PostID'].'">Delete Post</button>
	</div>

';


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