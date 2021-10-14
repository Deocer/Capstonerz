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
              <br> <span class="material-icons text-light fs-1 text py-1">account_circle</span>
              <p class="text-light">
                <?php echo $_SESSION['UserName']; ?>
              </p>
              <br>
              <div class="collapse navbar-collapse order-last" id="nav">
                <ul  style="display:block;margin: 0;padding: 0;">
                  <li><span class="material-icons p-3 text-light">home</span><a href="../user/user.php"><i class="fw-bold text-light">Home</i></a></li>
                  <br>
                  <?php 

                        if ($_SESSION['Auth'] == 'Admin') {
                          echo '
                              <li><span class="material-icons p-3 text-light">dashboard</span><a href="../admin/dashboard.php"><i class="fw-bold text-light">Dashboard</i></a></li>
                          ';
                        }
                   ?>
                    <li><span class="material-icons p-3 text-light">travel_explore</span><a href="../itinerary/itinerary.php"><i class="fw-bold text-light">Itinerary</i></a></li>
                    <br>
                    <li><span class="material-icons p-3 text-light">logout</span><a href="../../Log_out.php"><i class="fw-bold text-light">Log Out</i></a></li>
                </ul>
              </div>
            </nav>
          </aside>
    </div>

    <div class="col mx-auto bg-light">

    	<h4 class=" text-light bg-dark text-center  p-3">TRAVEL FEED</h4>

	<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
	  <li class="nav-item" role="presentation">
	    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Active Post</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Archived Post</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">User Control</button>
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
						<th scope="col">Status</th>
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
				      title: 'Do you want to Remove this post?',
				      showCancelButton: true,
				      confirmButtonText: 'Remove Post',
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
			      <th scope="col">Post ID</th>
						<th scope="col">Post Title</th>
						<th scope="col">Content</th>
						<th scope="col">Images</th>
						<th scope="col">Flags</th>
						<th scope="col">Status</th>
						<th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
				 <?php 
						$c = new PostView();
						$c->AdminArchive();
					?>
			  </tbody>
			</table>	
			<script type="text/javascript">

		    function restoreP(id) {
				    Swal.fire({
				      title: 'Do you want to Restore this post?',
				      showCancelButton: true,
				      confirmButtonText: 'Restore Post',
				      confirmButtonColor: '#8CD4F5',
				    }).then((result) => {
				      if (result.isConfirmed) {
				        window.location.href = "../../PHP/controller/post.php?res="+id;
				      } 
				    });
		  }

     </script>		

	  </div>
	   <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
				<table class="table">
				  <thead>
				    <tr class="table-dark">
					    <th scope="col">User ID</th>
					    <th scope="col">User Name</th>
					    <th scope="col">Post</th>
					    <th scope="col">Flagged Post</th>
					    <th scope="col">User Status</th>
					    <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
					 <?php 
							$users->AdminUsers();
						?>
				  </tbody>
				</table>
				<script type="text/javascript">

			   function FlagU(id) {
					    Swal.fire({
					      title: 'Flagging this User may restrict His/Her access. Do you want to continue?',
					      showCancelButton: true,
					      confirmButtonText: 'Flag User',
					      confirmButtonColor: '#8CD4F5',
					    }).then((result) => {
					      if (result.isConfirmed) {
					        window.location.href = "../../PHP/controller/user.php?Status="+id;
					      } 
					    });
			  }

			  function Unflag(id) {
					    Swal.fire({
					      title: 'Unflagging a User gives them all previous access. Do you want to continue?',
					      showCancelButton: true,
					      confirmButtonText: 'Unflag User',
					      confirmButtonColor: '#8CD4F5',
					    }).then((result) => {
					      if (result.isConfirmed) {
					        window.location.href = "../../PHP/controller/user.php?Unstat="+id;
					      } 
					    });
			  }

	     </script>	
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

 
*/

Please take a note of the details below these are needed to access your account.
Your account is now active.

Control panel username:	b22_29994007
Control panel password:	**********
Control panel URL:	cpanel.byethost22.com
MySQL username	b22_29994007
MySQL password:	**********
MySQL hostname:	sql202.byethost22.com
FTP username:	b22_29994007
FTP password:	**********
FTP host name:	ftp.byethost22.com
Your Website URL:	http://wander.byethost22.com
 	 
Thank you for choosing us to host your websites!

byethost22.com hosting services 2021


*/
