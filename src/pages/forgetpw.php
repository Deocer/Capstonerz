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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>WANDER | Forget Password</title>
</head>
<script type="text/javascript">
  $(document).ready(function(){
    $("#msg").hide();
    $("#back").hide();
    $("#submit").click(function(){
    	var demail = $("#email").val();
          $.ajax({
              url: '../../src/PHP/controller/user.php',
              type:'post',
              data: {
              		reset : demail,
              } ,
              success:function(result){
                  console.log("set");
                   $("#msg").show();
                   $("#back").show();
                   $("#femail").hide();
                   $("#submit").hide();
              },
            error: function(){
                console.log("error")
            }
          });
    });	
});	
</script>
<body>
	<div class="container">
		<div class="row vh-100 align-items-center justify-content-center">
			<div class="d-sm-flex justify-content-center">
				<div class="container bg-white rounded p-4 shadow" style="width:40%;">
					<div class="row justify-content-center mb-2">
						<img src="../imgs/logo.png" /class="w-50 rounded-pill">
					</div>
					<p class="text-center">Forgot your password? Please Enter your email address.</p>
					<br>
					<form  method="post" class="container">
						<div class="mb-4" style="margin:auto;">
							<div class="input-group mb-3" style="">
								<p id="msg">A reset password message has been sent to the email.</p>
								<div id="femail" class="container-fluid">
									<span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-inbox" viewBox="0 0 16 16">
								  <path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z"/>
									</svg></span>
								  <input type="email" class="form-control p-2" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="resetmail" id="email">	
								  <div id="emailHelp" class="form-text">We'll never share your email.</div>
								</div>
							</div>
						</div>
						<button type="button" id="submit" class="btn btn-secondary w-100">Reset Password</button>
						<a href="Login.php"  id="back" class="btn btn-secondary w-100">Back to Log in</a>
					</form>
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