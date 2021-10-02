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
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/user.php');
$place = array();
$users = new UserView();
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 	<title></title>
 </head>
 <body>

<section class="container-fluid">


  <div class="row p-0 m-0">


    <div class="col-1" style="height: 3180px;">
      <aside class="p-0 bg-dark " style="height: 100%;">
          <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
          <br>
          <span class="material-icons text-light">account_circle</span>
            <br>
            <div class="collapse navbar-collapse order-last" id="nav">
              <ul class="navbar-nav flex-column w-100 justify-content-center">
              <li class="nav-item">
                <a href="#" class="nav-link active"><span class="material-icons">home</span></a>
                <br>
              </li>
              <li class="nav-item">
                <a href="itinerary.php" class="nav-link"><span class="material-icons">travel_explore</span></a>
                <br>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><span class="material-icons">settings</span></a>
                <br>
              </li>
              <li class="nav-item">
                <a href="../../PHP/Functions/Log_out.php" class="nav-link"><span class="material-icons">logout</span></a>
                <br>
              </li>
            </ul>
            </div>      
          </nav>   
        </aside>
    </div>

    <div class="col mx-auto bg-light">

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
			<table class="table">
			  <thead>
			    <tr class="table-dark">
			      <th scope="col">Post ID</th>
						<th scope="col">Post Title</th>
						<th scope="col">Content</th>
						<th scope="col">Images</th>
						<th scope="col">Flags</th>
						<th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
				 <?php 
						$p = new PostView();
						$p->AdminPost();
					?>
			  </tbody>
			</table>	
			<script type="text/javascript">

		    function deleteP(id) {
				    Swal.fire({
				      title: 'Do you want to delete this post?',
				      showCancelButton: true,
				      confirmButtonText: 'Delete Post',
				      confirmButtonColor: '#8CD4F5',
				    }).then((result) => {
				      if (result.isConfirmed) {
				        window.location.href = "../../PHP/controller/post.php?nm="+id;
				      } 
				    });
		  }

     </script>
	  </div>
	  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="messages-tab">
			<table class="table">
			  <thead>
			    <tr class="table-dark">
				    <th scope="col">User ID</th>
				    <th scope="col">User Name</th>
				    <th scope="col">Post</th>
				    <th scope="col">Flagged</th>
				    <th scope="col">User Status</th>
			    </tr>
			  </thead>
			  <tbody>
				 <?php 
						$users->AdminUsers();
					?>
			  </tbody>
			</table>	
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
 </html>

 
