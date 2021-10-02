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
					         <img src="../../imgs/logo.png"  class="d-block" alt="..." style="width:50px; height: 50px; border: solid white; border-radius: 50px;">
					        </div>
					        <div class="col-7 py-2">
					          <h5 class="card-title" style ="font-size:14px;">'.$res[$ctr]['UserName'].'</h5>
					        </div>
					        <div class="col py-2 text-end">
						         <a type="button" onClick="flagP('.$res[$ctr]['PostID'].','.$_SESSION['Id'].')" ><span class="material-icons text-danger">report_problem</span>
						         </a>

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
		 		$f= 0;
		 		$pic = 0;
		 		$img =  $this->Pic($res[$ctr]['PostID']);
		 		$flag =  $this->fetchPlag($res[$ctr]['PostID']);
		 		foreach($flag as $flg ){
		 		$f++;
		 		}

		 		echo '
		 		  <tr>
		 		    <th scope="row">'.$res[$ctr]['PostID'].'</th>
				    <td>'.$res[$ctr]['PostTitle'].'</td>
				    <td>'.$res[$ctr]['Cont'].'</td>
				    <td>
					    ';

		 	foreach($img as $im ){
		 		  $pic++;
				 }

				if ($pic > 0) {
					switch ($pic) {
				  case $pic == 1 :
				   echo '
				 		<img src="'.$img[0]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)"  alt="../../imgs/background.jpg"></br>';
				    break;
				  case $pic == 2:
				    echo '<div class="container">
								  <div class="row g-1">
								    <div class="col p-0">
								     <img src="'.$img[0]['datum'].'" style="height: 20px;width: 20px;"  value="'.$img[0]['datum'].'"  class="img-fluid" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								    <div class="col">
								     <img src="'.$img[1]['datum'].'" style="height: 20px;width: 20px;"   value="'.$img[1]['datum'].'"class="img-fluid" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								</div>';
				    break;
					case $pic == 3:
				    echo '<div class="container">
								  <div class="row g-1 gx-1">
								    <div class="col">
								     <img src="'.$img[0]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								    <div class="col">
								     <img src="'.$img[1]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								  <div class="row g-1">
								    <div class="col">
								     <img src="'.$img[2]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								</div>';
				    break;
				  case $pic == 4:
				    echo '<div class="container">
								  <div class="row g-1">
								    <div class="col mt-1">
								     <img src="'.$img[0]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								    <div class="col mt-1">
								     <img src="'.$img[1]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								  <div class="row g-1 mt-1">
								    <div class="col mt-1">
								     <img src="'.$img[2]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								     <div class="col mt-1">
								     <img src="'.$img[3]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start"onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								</div>';
				    break;
				 	  case  $pic > 4:
				    echo '<div class="container">
								  <div class="row g-1 gx-1">
								    <div class="col">
								     <img src="'.$img[0]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								    <div class="col">
								     <img src="'.$img[1]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								  <div class="row g-1">
								    <div class="col">
								     <img src="'.$img[2]['datum'].'"style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								     <div class="col">
								     <p>'.$pic.'</p>
								     <img src="'.$img[3]['datum'].'" style="height: 20px;width: 20px;" class="img-fluid rounded-start" onClick="reply_click(this)" alt="../../imgs/background.jpg">
								    </div>
								  </div>
								</div>';
				    break;
				  default:
				    echo "";
				}
		}


echo'
					</td>
				    <td>'.$f.'</td>
				    <td>
						<button type="button" class="btn btn-danger" onClick="deleteP('.$res[$ctr]['PostID'].')">Delete Post</button>
				    </td>
		 		  </tr>

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