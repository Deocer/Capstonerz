<?php



$loc = 'Binondo,Manila';

  //$Geocoding = file_get_contents("http://www.mapquestapi.com/geocoding/v1/address?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&location=".$loc.",Philippines");
$Geocoding2 = file_get_contents("https://us1.locationiq.com/v1/search.php?key=pk.afe673b433d0909e7601c9ea96162a9e&q=".$loc."&format=json");
     

  $geo = json_decode($Geocoding2, TRUE);


  //echo $lat =  $geo['results']['0']['locations']['0']['latLng']['lat'];
  //echo $lot =  $geo['results']['0']['locations']['0']['latLng']['lng'];

//echo '<pre>',print_r($geo),'</pre>';
//echo $geo[0]['lat'];
//echo $geo[0]['lon'];
session_start();  
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/place.php');
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/post.php');
$plc = new PlaceView();
?>
<html>
  <head>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.0/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.0/mapquest.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
 <style type="text/css">
 .con {
  width: 800px;
  height: 420px; /* height given for illustration */
  display: flex;
  flex-flow: row wrap;
  position: relative;
  margin: auto;
  text-align: center;
  overflow: auto;
}

.post{
  overflow: auto;
  height: 420px;
  margin: auto;

}

.item {
  margin: 2px;
  height: 200px;
  flex: 0 1 calc(20% - 8px);
  position: relative;
  text-align: center;
  margin: auto;
  color: white;
  margin-bottom: 5px;
  margin-top: 5px;
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}
</style>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="../../imgs/logo.png" alt="" width="240" height="50" class="d-inline-block align-text-top">
    </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto px-5" >
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <?php echo $_SESSION['UserName']; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </div>
    </div>
  </div>
</nav>

<section style="height: 600px;overflow: hidden;">
 

    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" ><span class="material-icons">map</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="place-tab" data-bs-toggle="tab" data-bs-target="#post" type="button" role="tab" aria-controls="place" aria-selected="true"><span class="material-icons">place</span></button>
          </li>
        </ul>
    <div class="tab-content">


      <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <div class="container bg-dark mx-auto py-2" style="overflow: hidden;">
          <div class="row mx-auto" style="overflow: hidden;margin: auto;">
            <div class="col" style="overflow: hidden;margin: auto;text-align: center;">


              <div class="card mx-auto" style="width: 30rem;height: 70%;">
                <img src="https://youimg1.tripcdn.com/target/100b1f000001gspscDB29.jpg?proc=source%2Ftrip" class="card-img-top" alt="..." style="height:200px;">
                <div class="card-body">
                  <h5 class="card-title" style="font-family: Caveat;font-size:20px; font-weight: bolder;"><?php echo $_SESSION['City'];  ?></h5>
                  <p class="card-text" style="font-size:13px">Manila, capital and chief city of the Philippines. The city is the centre of the country's economic, political, social, and cultural activity. It is located on the island of Luzon and spreads along the eastern shore of Manila Bay at the mouth of the Pasig River.</p>

                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

            </div>
            <div class="col" style="overflow: hidden;">

              <img 
                src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Ph_fil_manila_districts.png"
                width="500" 
                height="450"

               >
            </div>
          </div>
        </div>      

      </div>


      <div class="tab-pane" id="post" role="tabpanel" aria-labelledby="place-tab" >

         <div class="row align-items-start p-5 text-light" style="background-image: url('https://media.gettyimages.com/photos/industrial-cargo-cranes-in-manila-bay-philippines-picture-id923013404');">

          <div class="col-4 bg-dark" style="height:466px;">
           <br><br>
            <h2><?php echo $_SESSION['City'];  ?></h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident
            </p>
            <br>
            <button class="btn" style="background-color:#a300bb;">
              SEE MORE DESTINATIONS
            </button>
          </div>
          <div class="col-8 bg-light py-3" style="margin:auto;">
            <div class="post text-dark" style="overflow:auto">
                <?php 
                $p = new PostView();
                $p->ShowPost();
                ?>    

            </div>
          </div>
        </div>  

      </div>



  </div>


</section>



<br><br><br><br>



<section 
      style="
      background: linear-gradient(180deg,  #9570DD 50%, white 50%);

      ">
  <br>
  <h1 style="margin: auto; text-align: center;font-family: Caveat; font-weight: bolder; word-spacing: 2px;">POPULAR DESTINATIONS IN <?php echo $_SESSION['City'];  ?></h1>
  <br>
  <div class="container bg-light w-90" style="overflow: hidden;margin: auto;text-align: center;">
    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#places" type="button" role="tab" aria-controls="home" aria-selected="true" ><span class="material-icons">map</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="place-tab" data-bs-toggle="tab" data-bs-target="#landmark" type="button" role="tab" aria-controls="place" aria-selected="true"><span class="material-icons">place</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#restaurants" type="button" role="tab" aria-controls="profile" aria-selected="false"><span class="material-icons">restaurant</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#tourist" type="button" role="tab" aria-controls="messages" aria-selected="false"><span class="material-icons">festival</span></button>
          </li>
        </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="places" role="tabpanel" aria-labelledby="home-tab">

        <div class="row align-items-start p-5 text-light">
          <div class="col bg-dark" style="height:466px;">
            <br><br>
            <h2 style="font-family: Caveat; font-weight: bolder;"><?php echo $_SESSION['City'];  ?></h2>
            <p style="font-size: 13px;">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident
            </p>
            <br>
            <button class="btn btn-info">
              SEE MORE DESTINATIONS
            </button>

          </div>

          <div class="col bg-dark" >
            <h2>MUSEUMS</h2>

              <div class="con bg-dark">
                <?php 
                    $plc-> Caroplace($_SESSION['lat'],$_SESSION['lot'],$_SESSION['City'],'Tourist attraction');
                ?>              
              </div>
     
          </div>
        </div>      

    </div>
    <div class="tab-pane" id="landmark" role="tabpanel" aria-labelledby="place-tab">

        <div class="row align-items-start p-5 text-light">
          <div class="col bg-dark" style="height:466px;">
            <br><br>
            <h2 style="font-family: Caveat; font-weight: bolder;"><?php echo $_SESSION['City'];  ?></h2>
            <p style="font-size: 13px;">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident
            </p>
            <br>
            <button class="btn btn-info">
              SEE MORE DESTINATIONS
            </button>

          </div>
          <div class="col bg-dark" >
            <h2>MUSEUMS</h2>

              <div class="con bg-dark">
                <?php 
                    $plc-> Caroplace($_SESSION['lat'],$_SESSION['lot'],$_SESSION['City'],'Historical landmark');
                ?>              
              </div>
     
          </div>
      </div> 

    </div>
    <div class="tab-pane" id="restaurants" role="tabpanel" aria-labelledby="messages-tab">


        <div class="row align-items-start p-5 text-light">
          <div class="col bg-dark" style="height:466px;">
            <br><br>
            <h2 style="font-family: Caveat; font-weight: bolder;"><?php echo $_SESSION['City'];  ?></h2>
            <p style="font-size: 13px;">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident
            </p>
            <br>
            <button class="btn btn-info">
              SEE MORE DESTINATIONS
            </button>

          </div>
          <div class="col bg-dark" >
            <h2>MUSEUMS</h2>

              <div class="con bg-dark">
                <?php 
                    $plc-> Caroplace($_SESSION['lat'],$_SESSION['lot'],$_SESSION['City'],'Restaurant');
                ?>              
              </div>
     
          </div>
      </div> 
 
    </div>
    <div class="tab-pane" id="tourist" role="tabpanel" aria-labelledby="messages-tab">


        <div class="row align-items-start p-5 text-light">
          <div class="col bg-dark" style="height:466px;">
            <br><br>
            <h2 style="font-family: Caveat; font-weight: bolder;"><?php echo $_SESSION['City'];  ?></h2>
            <p style="font-size: 13px;">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident
            </p>
            <br>
            <button class="btn btn-info">
              SEE MORE DESTINATIONS
            </button>

          </div>
          <div class="col bg-dark" >
            <h2>MUSEUMS</h2>

              <div class="con bg-dark">                <?php 
                    $plc-> Caroplace($_SESSION['lat'],$_SESSION['lot'],$_SESSION['City'],'Tourist attraction');
                    $plc-> Caroplace($_SESSION['lat'],$_SESSION['lot'],$_SESSION['City'],'Park');
                ?>              
              </div>
          </div>
      </div> 
    </div>


  </div>



  </section>


  </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script type="text/javascript">
  function reply_click(obj)
  {
       var modal = document.getElementById("myModal");
       var span = document.getElementsByClassName("close")[0];

       modal.style.display = "block";
       document.getElementById("modalpic").src = obj.src;


      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }


  }
</script>
</html>

