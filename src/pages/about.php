<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<title>About Us</title>
</head>
<script type="text/javascript">

function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

  $(document).ready(function(){
    $("#msg").hide();
    $("#back").hide();

    $("#submit").click(function(){
    var femail = $("#email").val();
    console.log(validateEmail(femail));
     if ($("#email").val().length == 0 || validateEmail(femail) === false) {
            alert("Please fill the field with your account's email");
      } 
      else 
      {
           var fname = $("#name").val();
            var fsubject = $("#subject").val();
            var fmesg = $("#mesg").val(); 
              $.ajax({
                  url: '../../src/PHP/Functions/help.php',
                  type:'post',
                  data: {
                        name : fname,
                        email : femail,
                        subject : fsubject,
                        mesg : fmesg
                  } ,
                  success:function(result){
                        $("#email").val("");
                        $("#name").val("");
                        $("#subject").val("");
                        $("#mesg").val("");
                      alert("Message Sent! Thank you!");
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
<style type="text/css">
body {
  background:gainsboro;
}


.about{
	cursor: pointer;
	background-color: #9205f0;
	color: #FFFFFF;
	padding-top: 20px;
	padding-bottom: 30px;
}
.about h1 {
	padding: 10px 0;
	margin-bottom: 20px;
}
.about h2 {
	opacity: .8;
}
.about span {
	display: block;
	width: 100px;
	height: 100px;
	line-height: 100px;
	margin:auto;
	border-radius:50%;  
	font-size: 40px;
	color: #FFFFFF;
	opacity: 0.7;
	background-color: #4C0822;
	border: 2px solid #4C0822;

	webkit-transition:all .5s ease;
 	moz-transition:all .5s ease;
 	os-transition:all .5s ease;
 	transition:all .5s ease;

}
.about-item:hover span{
	opacity: 1;	
	border: 2px solid white;
	font-size: 42px;
	-webkit-transform: scale(1.1,1.1) rotate(360deg) ;
	-moz-transform: scale(1.1,1.1) rotate(360deg) ;
	-o-transform: scale(1.1,1.1) rotate(360deg) ;
	transform: scale(1.1,1.1) rotate(360deg) ;
}
.about-item:hover h2{
	opacity: 1;
	-webkit-transform: scale(1.1,1.1)  ;
	-moz-transform: scale(1.1,1.1)  ;
	-o-transform: scale(1.1,1.1)  ;
	transform: scale(1.1,1.1) ;
}
.about .lead{
	color: floralwhite;
	font-size: 16px;
	font-weight: bold;
}	
</style>
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
                    <li class="nav-item">
                        <a href="Signup.php" class="nav-link" style="color: plum;"><b>Sign Up</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 <section class="text-center about" style="margin: auto; text-align: center;">
      <h1>About Us</h1>
      <br>
      <div class="container" style="max-width: 600px;">


          <div class="about-item wow lightSpeedIn" data-wow-offset="200" >
            <span class="fa fa-group"></span>
 			<br>
            <p class="lead">Wander is a travel website that enable travelers to create their own travel itinerary and post blogs and reviews for the places they have visited. Wander sorts the landmarks and destinations in Manila City according to traveler’s preference in price, distance and rating of the place to helping users plan their trips to Manila.</p>
          </div>
          
 
        
      </div>
    </section>
<section class="container mt-5">

      <!--Grid column-->
      <div class="container" style="max-width:600px;">
         <!--Form with header-->
         <div class="card  rounded-0" style="border-color: #9205f0;">
            <div class="card-header p-0">
               <div class="text-white text-center py-2" style="background: #9205f0;">
                  <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                  <p class="m-0">We’ll write rarely, but only the best content.</p>
               </div>
            </div>
            <div class="card-body p-3" id="femail">               
                  <div class="form-group">
                  <label> Your name </label>
                  <div class="input-group">
                     <input value="" type="text" id="name" class="form-control" id="inlineFormInputGroupUsername" placeholder="Your name" required>
                  </div>
                </div>
                  <div class="form-group">
                     <label>Your email</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="email" value="" id="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Subject</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="text" id="subject" class="form-control" id="inlineFormInputGroupUsername" placeholder="Subject" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Message</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="textbox" class="form-control" id="mesg">
                     </div>
                  </div>
                  <br><br>
                  <div class="text-center">
                     <input type="submit" id="submit" value="Submit" class="btn btn-block text-light rounded-0 py-2" style="background: #9205f0;">
                  </div>
			 </div>
				  
            </div>
         </div>
      <br><br>
	    </div>
</section>
</body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>