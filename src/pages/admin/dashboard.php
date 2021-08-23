<?php
session_start();
if (isset($_SESSION['UserName']) && strcmp($_SESSION['UserName'], 'admin123') == 0) {

}else{
$URL='../../../index.php';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
$id = $_SESSION['Id'];
include '../../PHP/Functions/CreateRecList.php';
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/post.php');
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/place.php');
$place = array();
$des = new RecomendedP();
$plc = new PlaceView();
?>

<!DOCTYPE html>
 <html>
 <head>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 	<title></title>
 </head>
 <body>

<section class="container-fluid">


  <div class="row p-0 m-0">


    <div class="col-2" style="height: 3180px;">
      <aside class="p-0 bg-dark " style="height: 100%;">
	        <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
	          <div class="text-center p-3">
	            <a href="#" class="navbar-brand" id="WANDER">
	              <img src="../../imgs/wander logo.png" class="img-fluid rounded-pill navbar-brand">
	            </a>
	            <img src="../../imgs/logo.jpg" alt="profile picture" width="50%" height="60%" class=" rounded-circle my-4 p-1 d-none d-md-block shadow  mx-auto"/>
	           <a href="#" class="navbar-brand mx-0 font-weight-bold  text-nowrap"><?php echo $_SESSION['UserName']; ?></a>
	          </div>
	              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
	                <span class="navbar-toggler-icon"></span>
	              </button>
	          
	          <div class="collapse navbar-collapse order-last" id="nav">
	            <ul class="navbar-nav flex-column w-100 justify-content-center">
	            <li class="nav-item">
	              <a href="#" class="nav-link active">Home</a>
	            </li>
	            <li class="nav-item">
	              <a href="itinerary.php" class="nav-link">My Travels</a>
	            </li>
	            <li class="nav-item">
	              <a href="#" class="nav-link">Settings</a>
	            </li>
	            <li class="nav-item">
	              <a href="../../PHP/Functions/Log_out.php" class="nav-link">Logout</a>
	            </li>
	          </ul>
	          </div>      
	        </nav>   
	      </aside>
    </div>

    <div class="col-6 mx-auto bg-light">

    	<h4 class=" text-light bg-dark text-center  p-3">TRAVEL FEED</h4>

	<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
	  <li class="nav-item" role="presentation">
	    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Latest Feed</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">My Reccomended Feed</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">My Post</button>
	  </li>
	</ul>

	<div class="tab-content">
	  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  				<?php 
						$p = new PostView();
						$p->AdminPost();
						?>	

	  </div>
	  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="messages-tab">
	  </div>
	   <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
	  	  		<?php 
						
						?>

	  </div>
	</div>

	<script>
	  var firstTabEl = document.querySelector('#myTab li:last-child a')
	  var firstTab = new bootstrap.Tab(firstTabEl)

	  firstTab.show()
	</script>			

    </div>



  </div>

  
</section>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 </body>
<script type="text/javascript">
  function reply_click(obj)
  {
  		 var modal = document.getElementById("myModal");
  		 var span = document.getElementsByClassName("close")[0];

       modal.style.display = "block";
       document.getElementById("modalpic").src = obj.src;


			window.onclick = function(event) {
			  if (event.target == modal) {
			    modal.style.display = "none";
			  }
			}


  }
</script>

 </html>

 
