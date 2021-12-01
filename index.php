<?php 
session_start();
if (isset($_SESSION['UserName'])) {
$URL='src/pages/user/user.php';
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>WANDER | Travel Website</title>
</head>
<style type="text/css">
body{
  background-image: url(src/imgs/background.jpg);
  background-position: center center;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  opacity: 1;
}    

</style>
<body>
    <!-- Navbar -->
</div>
  <nav class="navbar navbar-expand-lg bg-light navbar-dark navbar-fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand" id="WANDER">
                <img src="src/imgs/logo.png" class="img rounded-pill" style="width:100%;height: 50px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#5E06AC; font-size:28px;"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="Home.html" class="nav-link" style="color: plum;"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="#About" class="nav-link" style="color: plum;"><b>About Us</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="src/pages/Login.php" class="nav-link" style="color: plum;"><b>Log In</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="src/pages/Signup.php" class="nav-link" style="color: plum;"><b>Sign Up</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<section id="">

<!-- Main content -->
    <div class="container" >
        <div class="row vh-100 align-items-center justify-content-center" >
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p class="h1 text-light border border-5 font-weight-bold w-90 p-4 d-inline-block p-4 mx-auto">WE CAN SHOW YOU THE WAY</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <p class="h3 text-light">LOOK. CHECK-OUT. TRAVEL.</p>
                </figcaption>
                <a href="src/pages/Signup.php"><button type="button" class="btn btn-light mt-5 p-2" id="button">Get Started</button></a>
            </figure>
        </div>
    </div>   


</section>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>