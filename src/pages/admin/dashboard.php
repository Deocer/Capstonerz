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
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="report-tab" data-bs-toggle="tab" data-bs-target="#report" type="button" role="tab" aria-controls="report" aria-selected="false">Report</button>
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
	   <div class="tab-pane" id="report" role="tabpanel" aria-labelledby="report-tab">
	   		<div class="container">
			<table class="table">
			  <thead>
			    <tr class="table-dark">
						<th scope="col">District</th>
					  <th scope="col">Historical landmark</th>
					  <th scope="col">Church</th>
					  <th scope="col">Shopping</th>
					  <th scope="col">Park</th>
					  <th scope="col">Restaurant</th>
					  <th scope="col">Tourist attraction</th>
					  <th scope="col">Total</th>
			    </tr>
			  </thead>
			  <tbody>
					  <tr>
					    <th scope="row">Tondo</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Tondo','Café');
					    			$te  = $plc->PlaceTypes('Tondo','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Tondo','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Tondo','Bar'); 
					    			$tr  = $plc->PlaceTypes('Tondo','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Tondo','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Tondo','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Tondo','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Tondo','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Tondo','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>

					  <tr>
					    <th scope="row">San Nicolas</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('San Nicolas','Café');
					    			$te  = $plc->PlaceTypes('San Nicolas','Eatery'); 
					    			$tf  = $plc->PlaceTypes('San Nicolas','FastFood'); 
					    			$tb  = $plc->PlaceTypes('San Nicolas','Bar'); 
					    			$tr  = $plc->PlaceTypes('San Nicolas','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('San Nicolas','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('San Nicolas','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('San Nicolas','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('San Nicolas','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('San Nicolas','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Binondo</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Binondo','Café');
					    			$te  = $plc->PlaceTypes('Binondo','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Binondo','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Binondo','Bar'); 
					    			$tr  = $plc->PlaceTypes('Binondo','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Binondo','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Binondo','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Binondo','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Binondo','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Binondo','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Port Area</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Port Area','Café');
					    			$te  = $plc->PlaceTypes('Port Area','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Port Area','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Port Area','Bar'); 
					    			$tr  = $plc->PlaceTypes('Port Area','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Port Area','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Port Area','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Port Area','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Port Area','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Port Area','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Ermita</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Ermita','Café');
					    			$te  = $plc->PlaceTypes('Ermita','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Ermita','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Ermita','Bar'); 
					    			$tr  = $plc->PlaceTypes('Ermita','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Ermita','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Ermita','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Ermita','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Ermita','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Ermita','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Malate</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Malate','Café');
					    			$te  = $plc->PlaceTypes('Malate','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Malate','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Malate','Bar'); 
					    			$tr  = $plc->PlaceTypes('Malate','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Malate','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Malate','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Malate','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Malate','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Malate','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">San Andres</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('San Andres','Café');
					    			$te  = $plc->PlaceTypes('San Andres','Eatery'); 
					    			$tf  = $plc->PlaceTypes('San Andres','FastFood'); 
					    			$tb  = $plc->PlaceTypes('San Andres','Bar'); 
					    			$tr  = $plc->PlaceTypes('San Andres','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('San Andres','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('San Andres','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('San Andres','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('San Andres','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('San Andres','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Santa Ana</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Santa Ana','Café');
					    			$te  = $plc->PlaceTypes('Santa Ana','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Santa Ana','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Santa Ana','Bar'); 
					    			$tr  = $plc->PlaceTypes('Santa Ana','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Santa Ana','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Santa Ana','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Santa Ana','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Santa Ana','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Santa Ana','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Sta. Mesa</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Sta. Mesa','Café');
					    			$te  = $plc->PlaceTypes('Sta. Mesa','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Sta. Mesa','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Sta. Mesa','Bar'); 
					    			$tr  = $plc->PlaceTypes('Sta. Mesa','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Sta. Mesa','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Sta. Mesa','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Sta. Mesa','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Sta. Mesa','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Sta. Mesa','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Sampaloc</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Sampaloc','Café');
					    			$te  = $plc->PlaceTypes('Sampaloc','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Sampaloc','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Sampaloc','Bar'); 
					    			$tr  = $plc->PlaceTypes('Sampaloc','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Sampaloc','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Sampaloc','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Sampaloc','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Sampaloc','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Sampaloc','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Quiapo</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Quiapo','Café');
					    			$te  = $plc->PlaceTypes('Quiapo','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Quiapo','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Quiapo','Bar'); 
					    			$tr  = $plc->PlaceTypes('Quiapo','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Quiapo','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Quiapo','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Quiapo','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Quiapo','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Quiapo','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Sta Cruz</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Sta Cruz','Café');
					    			$te  = $plc->PlaceTypes('Sta Cruz','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Sta Cruz','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Sta Cruz','Bar'); 
					    			$tr  = $plc->PlaceTypes('Sta Cruz','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Sta Cruz','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Sta Cruz','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Sta Cruz','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Sta Cruz','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Sta Cruz','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">San Miguel</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('San Miguel','Café');
					    			$te  = $plc->PlaceTypes('San Miguel','Eatery'); 
					    			$tf  = $plc->PlaceTypes('San Miguel','FastFood'); 
					    			$tb  = $plc->PlaceTypes('San Miguel','Bar'); 
					    			$tr  = $plc->PlaceTypes('San Miguel','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('San Miguel','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('San Miguel','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('San Miguel','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('San Miguel','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('San Miguel','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Intramuros</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Intramuros','Café');
					    			$te  = $plc->PlaceTypes('Intramuros','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Intramuros','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Intramuros','Bar'); 
					    			$tr  = $plc->PlaceTypes('Intramuros','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Intramuros','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Intramuros','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Intramuros','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Intramuros','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Intramuros','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Paco</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Paco','Café');
					    			$te  = $plc->PlaceTypes('Paco','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Paco','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Paco','Bar'); 
					    			$tr  = $plc->PlaceTypes('Paco','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Paco','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Paco','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Paco','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Paco','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Paco','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
					  <tr>
					    <th scope="row">Pandacan</th>
					    <div style="display:none">
					    		<?php 
					    			$tc  = $plc->PlaceTypes('Pandacan','Café');
					    			$te  = $plc->PlaceTypes('Pandacan','Eatery'); 
					    			$tf  = $plc->PlaceTypes('Pandacan','FastFood'); 
					    			$tb  = $plc->PlaceTypes('Pandacan','Bar'); 
					    			$tr  = $plc->PlaceTypes('Pandacan','Restaurant');
					    			$td = $tc + $te + $tf + $tb + $tr;  
					    		?>
					    </div>

					    <td><?php $th = $plc->PlaceTypes('Pandacan','Historical landmark'); ?></td>
					    <td><?php $tch = $plc->PlaceTypes('Pandacan','Church'); ?></td>
					    <td><?php $tsh  = $plc->PlaceTypes('Pandacan','Store'); ?></td>
					    <td><?php $tp  = $plc->PlaceTypes('Pandacan','Park'); ?></td>
					    <td><?php echo $td ?> </td>
					    <td><?php $tta  = $plc->PlaceTypes('Pandacan','Tourist attraction'); ?></td>
					    <?php $total = $th + $tch + $tsh + $tp + $td + $tta; ?>
					    <td><?php echo $total;  ?></td>
					  </tr>
			  </tbody>
			</table>

				<table class="table">
			  <thead>
			    <tr class="table-dark">
			      <th scope="col">User</th>
						<th scope="col">Normal</th>
						<th scope="col">Flagged</th>
						<th scope="col">Total Users</th>

			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">*</th>
						<td><?php $n = $users->Normals(); ?></td>
						<td><?php $f = $users->Flagged(); $t = $n + $f ?></td>
						<td><?php echo $t; ?></td>
			    </tr>
			  </tbody>
			</table>

				<table class="table">
			  <thead>
			    <tr class="table-dark">
			      <th scope="col">Post</th>
						<th scope="col">Active</th>
						<th scope="col">Archived</th>
						<th scope="col">Deleted</th>
						<th scope="col">Total</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">*</th>
						<td><?php $ac = $p->ActivePost(); ?></td>
						<td><?php $ar = $p->ArchivePost(); ?></td>
						<td><?php $dl = $p->DeletedPost(); $t = $ac + $ar +$dl ?></td>
						<td><?php echo $t; ?></td>
			    </tr>
			  </tbody>
			</table>

	   		</div>
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
