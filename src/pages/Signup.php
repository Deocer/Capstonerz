<?php 
session_start();
if (isset($_SESSION['UserName'])) {
$URL='user/user.php';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

}else{

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/log-in.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<title>WANDER | Travel Website</title>
</head>
<body>
 <nav class="navbar navbar-expand-lg bg-light navbar-dark navbar-fixed-top">
        <div class="container">
            <a href="../../index.php" class="navbar-brand" id="WANDER">
                <img src="../imgs/logo.png" class="img rounded-pill" style="width:100%;height: 50px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#5E06AC; font-size:28px;"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="../../index.php" class="nav-link" style="color: plum;"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="color: plum;"><b>About Us</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="Login.php" class="nav-link" style="color: plum;"><b>Log In</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
	<div class="container">
		<div class="row vh-100 align-items-center justify-content-center">
			<div class="d-sm-flex justify-content-center">
				<img src="../imgs/background.jpg" class="img-fluid w-50 d-none d-sm-block">
				
				<!-- Sign Up Form -->
				<div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
					<div class="row justify-content-center mb-2">
						<img src="../imgs/logo.png" /class="w-50 rounded-pill">
					</div>
					<p class="h4 text-center">Sign-Up Page</p>
					<form action=" ../../src/PHP/Functions/Sign_up.php" method="post">
						<div class="mb-4">
							<label for="name" class="form-label">Username</label>
							<input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
						</div>
						<div class="mb-4">
							<label for="name" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" name="email" aria-describedby="nameHelp">
						</div>
						<div class="mb-4">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp">
							<div id="passwordHelp" class="form-text">Password must be over 6 characters long.</div>
						</div>
						<p class="text-muted" style="font-size:10px;">By creating an account I choose to enable location access and must set the Allow all the time option in location permission while using the website.
						</p>
						
						<button type="submit" class="btn btn-secondary w-100">Sign up</button>
						<div style="text-align:center;margin: auto;"><a class="text-muted" style="font-size:10px; color: black;" href="terms.php"><strong>Terms and Conditions </strong></a></div>
						
					</form>
					<p class="mb-0 text-center">Already a member? <a href="Login.php">Log in Here.</a></p>
				</div>
			</div>			
		</div>
	</div>	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

<?php 


if (isset($_GET["error"])) {

		if ($_GET["error"] == "emptyinput") {
			echo 
				"
				 <script type='text/javascript'>
				   function error() {
				  Swal.fire({
				      title: 'Oops..',
				      text: 'Fill in all fields!',
				      icon: 'error'
					})
				}
				error();
				 </script>


				";

			}elseif ($_GET["error"] == "name") {
			echo 
				"
				 <script type='text/javascript'>
				   function error() {
				  Swal.fire({
				      title: 'Oops..',
				      text: 'Invalid Name!',
				      icon: 'error'
					})
				}
				error();
				 </script>


				";
			}elseif ($_GET["error"] == "Shortname") {
			echo 
				"
				 <script type='text/javascript'>
				   function error() {
				  Swal.fire({
				      title: 'Oops..',
				      text: 'Username Too Short!',
				      icon: 'error'
					})
				}
				error();
				 </script>


				";
			}elseif ($_GET["error"] == "Shortpass") {
			echo 
				"
				 <script type='text/javascript'>
				   function error() {
				  Swal.fire({
				      title: 'Oops..',
				      text: 'Password Too Short!',
				      icon: 'error'
					})
				}
				error();
				 </script>


				";
			}elseif ($_GET["error"] == "nameTaken") {
			echo 
				"
				 <script type='text/javascript'>
				   function error() {
				  Swal.fire({
				      title: 'Oops..',
				      text: 'Username Already Taken!',
				      icon: 'error'
					})
				}
				error();
				 </script>


				";
			}elseif ($_GET["error"] == "emailTaken") {
			echo 
				"
				 <script type='text/javascript'>
				   function error() {
				  Swal.fire({
				      title: 'Oops..',
				      text: 'Email Already Taken!',
				      icon: 'error'
					})
				}
				error();
				 </script>


				";
			}
}

 ?>
</html>