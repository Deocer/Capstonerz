<?php
include 'PHP/CreateRecList.php';


$lat = '14.5995';
$lot = '120.9842';


?>

<!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 <section class="container-fluid p-0 m-0" height='100px';>
 	<div class="row">

 		<div class="bg-dark p-5 col-2 text-center">
 			<h2 class="p-0 m-0 ">WANDER</h2>
 			<br>
 			<img src="img.jpg" width="100%" height="150px">
 			<br>
 			<br>
 			<h4 class="mx-auto">Name</h4>
 			<br>
		 	 <nav class="nav flex-column">
			  <a class="nav-link active" href="#">Active</a>
			  <a class="nav-link" href="#">Link</a>
			  <a class="nav-link" href="#">Link</a>
			  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			</nav>
		</div>


 	
		<div class="col-7">
			<h3 class="mb-3 mb-md-0 text-light bg-dark text-center text-sm-start p-3">TRAVEL FEED</h3>
		 	
		</div>



		 <div class="col-3 bg-dark mx-auto">
		 	<h3 class="mb-3 mb-md-0 text-light bg-dark text-center text-sm-start p-3">Recomended Places</h3>
		 		<?php 
				 $des = new RecomendedP($lat,$lot);
		 		 ?>
				 </div>
		 </div>

	</div>
 	



 </section>
	
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
 </html>