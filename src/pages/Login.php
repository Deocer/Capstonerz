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
                        <a href="Signup.php" class="nav-link" style="color: plum;"><b>Sign Up</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	<div class="container">
		<div class="row vh-100 align-items-center justify-content-center">
			<div class="d-sm-flex justify-content-center">
				<!--Login Form-->
				<img src="../imgs/background.jpg" class=" w-50 d-none d-sm-block" width="">
				<div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
					<div class="row justify-content-center mb-2">
						<img src="../imgs/logo.png" /class="w-50 rounded-pill">
					</div>
					<p class="h4 text-center">Log-in Page</p>
					<form action=" ../../src/PHP/controller/user.php" method="post">
						<div class="mb-4">
							<label for="email" class="form-label">Username</label>
							<input type="text" class="form-control" id="text" name ="Username" aria-describedby="emailHelp">
							<div id="emailHelp" class="form-text">We'll never share your email.</div>
						</div>
						<div class="mb-4">
							<label for="password" class="form-label">Password</label>
							<input type="password"  name="Password" class="form-control" id="password">
							<p class="mb-0"><a href="forgetpw.php">Forgot Password?</a></p>
						</div>
						<button type="submit" class="btn btn-secondary w-100">Login</button>
					</form>
					<p class="mb-0 text-center">Not registered yet? <a href="Signup.php">Sign-Up Here.</a></p>
				</div>
				
			</div>			
		</div>
	</div>	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<?php 

if (isset($_GET["error"])) {

		if ($_GET["error"] == "Wrong") {
				echo 
				"
				 <script type='text/javascript'>
				   function error() {
				  Swal.fire({
				      title: 'Oops..',
				      text: 'Wrong UserName or Password!',
				      icon: 'error'
					})
				}
				error();
				 </script>


				";
			}
}


 ?>
</body>
</html>