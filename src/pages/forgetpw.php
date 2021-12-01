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
	 if ($("#email").val().length == 0) {
	 		alert("Please fill the field with your account's email");
	    $("#submit").attr("disabled", true);
	  } 
	  else 
	  {
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
	          })
	  }
});

});	

$(document).keypress(function(e){
    if (e.which == 13){
        $("#submit").click();
    }
});
</script>
<body>
	<div class="container w-60" style="max-height: 650px; max-width: 800px;">
		<div class="row vh-100 align-items-center justify-content-center">
			<div class="d-sm-flex justify-content-center">
				<div class="container bg-white rounded p-3 shadow">
					<div class="row justify-content-center mb-2">
						<img src="../imgs/logo.png" /class="w-50 rounded-pill">
					</div>
					<p class="text-center">Forgot your password? Please Enter your email address.</p>
					<br>
					<div class="container-fluid" style="padding:0;margin:0;">
						<div style="margin:auto;text-align: center;">
						<p id="msg" >A reset password message has been sent to the email.</p>	
						<br>					
						</div>
								
								<div id="femail" class="" style="width: 80%;margin:auto;text-align: center;">
								  <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="resetmail" id="email"  style="max-width: 900px;, min-width: 200px;" required>	
								  <div id="emailHelp" class="form-text">We'll never share your email.</div>
								  <br>
							</div>
						<div style="margin:auto;text-align: center;">
						<button type="button" id="submit" class="btn btn-secondary w-20" >Reset Password</button>
						<a href="Login.php"  id="back" class="btn btn-secondary w-20">Back to Log in</a>							
						</div>
					</div>
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