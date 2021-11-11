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
 <script type="text/javascript">
 	  $(document).ready(function(){
 	  	$("#btnedit").hide();
 	  	$("#btndelete").hide();
 	  	$("#cancel").hide();

    $("#btnsubmit").click(function(event){
    			event.preventDefault();
		    	var dname = $("#name").val();
		    	var ddesc = $("#desc").val();
		    	var dtype = $("#type option:selected").text();
		    	var dlat = $("#lat").val();
		    	var dlot = $("#lot").val();
		    	var ddistrict = $("#district option:selected").text();
		    	var daddress = $("#address").val();
		    	var drating = $("#rating").val();
		    	var dreviews = $("#rev").val();
		    	var dprice = $("#price").val();
		    	var dhours = $("#hours").val();
		    	var dcontact = $("#contact").val();
		    	var dsite = $("#site").val();
		    	var dimage = $("#img").val();
          $.ajax({
              url: '../../PHP/controller/place.php',
              type:'POST',
              data: {
              				add : "add",
                      name: dname,
                      desc: ddesc,
                      type: dtype,
                      lat: dlat,
                      lot:  dlot,
                      district: ddistrict,
                      address: daddress,
                      rating:  drating,
                      reviews: dreviews,
											price: dprice,
											hours: dhours,
											contact:dcontact,
											site:dsite,
											image:dimage,
                      
            },
              success:function(result){
						    $("#id").val("");
					    	$("#name").val("");
					    	$("#desc").val("");
					    	$('select[id=type]  > option:first-child').text(" ");
					    	$("#type").prop('selectedIndex',0);
					    	$("#lat").val("");
					    	$("#lot").val("");
					    	$('select[id=district]  > option:first-child').text(" ");
					    	$("#district").prop('selectedIndex',0);
					    	$("#address").val("");
					    	$("#rating").val("");
					    	$("#rev").val("");
					    	$("#price").val("");
					    	$("#contact").val("");
					      $("#site").val("");
					    	$("#img").val("");
			          $.ajax({
			              url: '../../PHP/view/place.php',
			              type:'POST',
			              data: {
			              				showall : "add"
			            },
			              success:function(res){
								    	$("#pltab").html(res);
			              }
			          });
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#btnedit").click(function(event){
    			event.preventDefault();
    			var pid = $("#id").val();
		    	var dname = $("#name").val();
		    	var ddesc = $("#desc").val();
		    	var dtype = $("#type option:selected").text();
		    	var dlat = $("#lat").val();
		    	var dlot = $("#lot").val();
		    	var ddistrict = $("#district option:selected").text();
		    	var daddress = $("#address").val();
		    	var drating = $("#rating").val();
		    	var dreviews = $("#rev").val();
		    	var dprice = $("#price").val();
		    	var dhours = $("#hours").val();
		    	var dcontact = $("#contact").val();
		    	var dsite = $("#site").val();
		    	var dimage = $("#img").val();
          $.ajax({
              url: '../../PHP/controller/place.php',
              type:'post',
              data: {
              				update:"update",
              				id : pid,
                      name: dname,
                      desc: ddesc,
                      type: dtype,
                      lat: dlat,
                      lot:  dlot,
                      district: ddistrict,
                      address: daddress,
                      rating:  drating,
                      reviews: dreviews,
											price: dprice,
											hours: dhours,
											contact:dcontact,
											site:dsite,
											image:dimage,
                      
            },
              success:function(result){
						    $("#id").val("");
					    	$("#name").val("");
					    	$("#desc").val("");
					    	$('select[id=type]  > option:first-child').text(" ");
					    	$("#type").prop('selectedIndex',0);
					    	$("#lat").val("");
					    	$("#lot").val("");
					    	$('select[id=district]  > option:first-child').text(" ");
					    	$("#district").prop('selectedIndex',0);
					    	$("#address").val("");
					    	$("#rating").val("");
					    	$("#rev").val("");
					    	$("#price").val("");
					    	$("#contact").val("");
					      $("#site").val("");
					    	$("#img").val("");
			          $.ajax({
			              url: '../../PHP/view/place.php',
			              type:'POST',
			              data: {
			              				showall : "add"
			            },
			              success:function(res){
								    	$("#pltab").html(res);
			              }
			          });
              },
            error: function(){
                console.log("error")
            }
          });
    });


 $("#btndelete").click(function(event){
    			event.preventDefault();
    			var pid = $("#id").val();
          $.ajax({
              url: '../../PHP/controller/place.php',
              type:'post',
              data: {
              				delete:"delete",
              				id : pid,
                      
            },
              success:function(result){
						    $("#id").val("");
					    	$("#name").val("");
					    	$("#desc").val("");
					    	$('select[id=type]  > option:first-child').text(" ");
					    	$("#type").prop('selectedIndex',0);
					    	$("#lat").val("");
					    	$("#lot").val("");
					    	$('select[id=district]  > option:first-child').text(" ");
					    	$("#district").prop('selectedIndex',0);
					    	$("#address").val("");
					    	$("#rating").val("");
					    	$("#rev").val("");
					    	$("#price").val("");
					    	$("#contact").val("");
					      $("#site").val("");
					    	$("#img").val("");
			          $.ajax({
			              url: '../../PHP/view/place.php',
			              type:'POST',
			              data: {
			              				showall : ""
			            },
			              success:function(res){
								    	$("#pltab").html(res);
			              }
			          });
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#cancel").click(function(event){
    			event.preventDefault();
			    $("#id").val("");
		    	$("#name").val("");
		    	$("#desc").val("");
					$('select[id=type]  > option:first-child').text(" ");
					$("#type").prop('selectedIndex',0);
					$("#lat").val("");
					$("#lot").val("");
					$('select[id=district]  > option:first-child').text(" ");
					$("#district").prop('selectedIndex',0);
		    	$("#address").val("");
		    	$("#rating").val("");
		    	$("#rev").val("");
		    	$("#price").val("");
		    	$("#contact").val("");
		      $("#site").val("");
		    	$("#img").val("");
 	  			$("#btnsubmit").show();
 	  			$("#btnedit").hide();
 	  			$("#btndelete").hide();
 	  			$("#cancel").hide();
    });

 	  });

		function populate(id,name,desc,type,lat,lot,district,address,rating,review,price,hours,contact,site,image) {
			    $("#id").val(id);
		    	$("#name").val(name.replace("/", "'"));
		    	$("#desc").val(desc.replace("/", " "));
		    	$('select[id=type]  > option:first-child').text("Current type : " +type);
		    	$("#lat").val(lat);
		    	$("#lot").val(lot);
		    	$('select[id=district]  > option:first-child').text(district);
		    	$("#address").val(address.replace("/", " "));
		    	$("#rating").val(rating);
		    	$("#rev").val(review);
		    	$("#price").val(price);
		    	$("#hours").val(hours);
		    	$("#contact").val(contact);
		      $("#site").val(site);
		    	$("#img").val(image);
 	  			$("#btnsubmit").hide();
 	  			$("#btnedit").show();
 	  			$("#btndelete").show();
 	  			$("#cancel").show();
     }
 </script>
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

    	<h4 class=" text-light text-center bg-dark p-3">PLACE PANEL</h4>
    	<div class="row" style="font-size:12px;">
    		<div class="col-4" style="height: 900px;">
				<form class="form" id="myform" action="../../PHP/controller/place.php" method="post" >


				  <div class="row">
							 <div class="col-sm-4">
									<label for="inputEmail4" class="form-label">ID</label>
									<input id="id" type="text" name="placename" class="form-control form-control-sm" id="inputEmail4" readonly>
						  </div>
						  <div class="col-sm-8">
							    <label for="inputCity" class="form-label"><strong>Type*</strong></label>
							    <select class="form-select form-select-sm" name="type" id="type" aria-label="Default select example">
									  <option id="type2 selected>"></option>
									  <option value="1">Historical Landmark</option>
									  <option value="2">Church</option>
									  <option value="3">Shopping</option>
									  <option value="1">Park</option>
									  <option value="2">Restaurant</option>
									  <option value="3">Café</option>
									  <option value="1">Fast Food</option>
									  <option value="2">Eatery</option>
									  <option value="3">Bar</option>
									  <option value="1">Tourist Attraction</option>
									</select>
						  </div>		  	
				  </div>


				  <div class="">
				    <label for="inputEmail4" class="form-label"><strong>Place Name*</strong></label>
				    <input id="name" type="text" name="name" class="form-control form-control-sm" id="inputEmail4" required>
				  </div>
				  <div class="">
				    <label for="inputPassword4" class="form-label">Description</label>
				    <textarea id="desc" class="form-control form-control-sm" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>

				  <div class="row">
							  <div class="col-sm-4">
						    <label for="inputZip" class="form-label"><strong>Latitude*</strong></label>
						    <input id="lat" type="text" name="lat" class="form-control form-control-sm" required>
						  </div>
						  <div class="col-sm-4">
						    <label for="inputZip" class="form-label"><strong>Longtitude*</strong></label>
						    <input id="lot" type="text" name="lot" class="form-control form-control-sm" required>
						  </div>
						  <div class="col-sm-4">
				    		<label for="inputAddress" class="form-label"><strong>District*</strong></label>
				    		<select class="form-select form-select-sm" name="type" id="district" aria-label="Default select example">
									  <option id=""></option>
		                <option value="Tondo">Tondo</option>
		                <option value="Binondo">Binondo</option>
		                <option value="Port Area">Port Area</option>
		                <option value="Ermita">Ermita</option>
		                <option value="Malate">Malate</option>
		                <option value="Santa Ana">Santa Ana</option>
		                <option value="Sta. Mesa">Sta. Mesa</option>
		                <option value="Sampaloc">Sampaloc</option>
		                <option value="Sta Cruz">Sta Cruz</option>
		                <option value="Quiapo">Quiapo</option>
		                <option value="San Miguel">San Miguel</option>
		                <option value="Intramuros">Intramuros</option>
		                <option value="Paco">Paco</option>
		                <option value="Pandacan">Pandacan</option>
		                <option value="San Andres">San Andres</option>
		                <option value="San Nicolas">San Nicolas</option>
								</select>
				  		</div>			  	
				  </div>

				  <div class="col-12">
				    <label for="inputAddress2" class="form-label"><strong>Address*</strong></label>
				    <input id="address" type="text" name="address" class="form-control form-control-sm" id="inputAddress2" placeholder="" required>
				  </div>

				  <div class="row">
					  <div class="col-3">
					    <label for="inputAddress2" class="form-label">Rating</label>
					    <input id="rating" type="text" name="rating" class="form-control form-control-sm" id="inputAddress2" placeholder="">
					  </div>
					  <div class="col-3">
					    <label for="inputAddress2" class="form-label"><strong>Price*</strong></label>
					    <input id="price" type="text" name="price" class="form-control form-control-sm" id="inputAddress2" placeholder="" required>
					  </div>
					  <div class="col-3">
					    <label for="inputAddress2" class="form-label">Reviews</label>
					    <input id="rev" type="text" name="reviews" class="form-control form-control-sm" placeholder="">
					  </div>

				  	<div class="col-3">
					    <label for="inputAddress2" class="form-label">Hours</label>
					    <input id="hours" type="text" name="hours" class="form-control form-control-sm" id="inputAddress2" placeholder="">
					  </div>				  	
				  </div>

				  <div class="row">

				  	
					  <div class="col-4">
					    <label for="inputAddress2" class="form-label"><strong>Contact</strong></label>
					    <input id="contact" type="text" name="contact" class="form-control form-control-sm" id="inputAddress2" placeholder="">
					  </div>
					  <div class="col-8">
					    <label for="inputAddress2" class="form-label"><strong>Site</strong> </label>
					    <input id="site" type="text" name="site" class="form-control form-control-sm" id="inputAddress2" placeholder="">
					  </div>

				  </div>


				  <div class="col-12">
				    <label for="inputAddress2" class="form-label"><strong>Image*</strong></label>
						<input id="img" type="text" name="img" class="form-control form-control-sm" id="inputAddress2" placeholder="">
				  </div>

				  <br><br>
				  <div class="col-12">
				    <button id="btnedit" type="button"  class="btn btn-success">Update</button>
				    <button id="btndelete" type="button"  class="btn btn-danger">Delete</button>
				    <button id="cancel" type="button"  class="btn btn-warning">Cancel</button>'
				    <button id="btnsubmit" type="button" class="btn btn-primary">Add</button>
				  </div>
				</form>
    		</div>
    	<div class="col table-responsive-sm" style="width: 500px;height: 900px; overflow: auto;font-size: 10px;">
						<table class="table table-hover" style="padding:0;">
						  <thead>
						    <tr class="table-dark">
						      <th scope="col">ID</th>
									<th scope="col-sm">Name</th>
									<th scope="col">Type</th>
									<th scope="col">District</th>
						    </tr>
						  </thead>
						  <tbody id="pltab">
								<?php 

								$plc->AllPlaces();

								 ?>
						  </tbody>
						</table>

    		</div>

    	</div>
		

    </div>




  </div>

  
</section>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 </body>
 </html>
