<?php 
session_start();
if (isset($_SESSION['UserName'])) {
$URL='user/user.php';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

}else{

}
if (isset($_GET['mail'])) {

	$dcrpt = base64_decode($_GET['mail']);
	$ciphering = "AES-128-CTR";
	$options = 0;
  


  $decryption_iv = '1234567891011121';
      
    
  $decryption_key = "When I set out to lead humanity along my Golden Path, I promised them a lesson their bones would remember. I know a profound pattern which humans deny with their words even while their actions affirm it. They say they seek security and quiet, the condition they call peace. Even as they speak, they create the seeds of turmoil and violence. If they find their quiet security, they squirm in it. How boring they find it. Look at them now. Look at what they do while I record these words. Hah! I give them enduring eons of enforced tranquility which plods on and on despite their every effort to escape into chaos. Believe me, the memory of Leto's peace shall abide with them forever. They will seek their quiet security thereafter only with extreme caution and steadfast preparation.";
      

  $decryption=openssl_decrypt ($dcrpt , $ciphering, 
            $decryption_key, $options, $decryption_iv);

}else{
$URL='user/user.php';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
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
                   $("#email").hide();
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
					<p class="text-center">Password Reset for : <?php echo $decryption; ?></p>
					<br>
					<form  method="post" class="container">
						<div class="mb-4" style="margin:auto;">
							<div class="input-group mb-3" style="">
								<div id="email" class="container-fluid">
								  <input type="password" class="form-control p-2" placeholder="Create new Password" aria-label="Username" aria-describedby="basic-addon1" name="resetmail">
								  <br>
								  <input type="password" class="form-control p-2" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1" name="resetmail">		
								</div>
							</div>
						</div>
						<button type="button" id="submit" class="btn btn-secondary w-100">Reset Password</button>
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