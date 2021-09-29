<?php
session_start();
if (isset($_SESSION['UserName']) & isset($_SESSION['Id'])  == false) {
$URL='../../../index.php';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
$id = $_SESSION['Id'];
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/post.php');
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/place.php');
$place = array();
$plc = new PlaceView();
$place = 'Binondo';
if (isset($_GET['place'])) {
$place = $_GET['place'];
$Geocoding = file_get_contents("https://us1.locationiq.com/v1/search.php?key=pk.afe673b433d0909e7601c9ea96162a9e&q=".$_SESSION['City'].",Manila&format=json");
     

  $geo = json_decode($Geocoding, TRUE);

}
if(isset($_GET['lat']) && isset($_GET['lot']) ){
  echo $_SESSION['lat'] = $_GET['lat'];
  echo $_SESSION['lot'] = $_GET['lot'];
  $Geocoding = file_get_contents("https://us1.locationiq.com/v1/reverse.php?key=pk.afe673b433d0909e7601c9ea96162a9e&lat=".
    $_SESSION['lat']."&lon=".$_SESSION['lot']."&format=json");


   $geo = json_decode($Geocoding, TRUE);
  $_SESSION['City'] = $geo['display_name'];
}




?>


<!DOCTYPE html>
 <html>
 <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title></title>
 </head>

 <body>
<section class="container-fluid">


  <div class="row p-0 gx-3">


    <div class="col-1" style="">
      <aside class="p-0 bg-dark " style="height: 100%;">
          <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
          <br>
          <span class="material-icons text-light">account_circle</span>
            <br>
            <div class="collapse navbar-collapse order-last" id="nav">
              <ul class="navbar-nav flex-column w-100 justify-content-center">
              <li class="nav-item">
                <a href="#" class="nav-link active"><span class="material-icons">home</span></a>
                <br>
              </li>
              <li class="nav-item">
                <a href="itinerary.php" class="nav-link"><span class="material-icons">travel_explore</span></a>
                <br>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><span class="material-icons">settings</span></a>
                <br>
              </li>
              <li class="nav-item">
                <a href="../../PHP/Functions/Log_out.php" class="nav-link"><span class="material-icons">logout</span></a>
                <br>
              </li>
            </ul>
            </div>      
          </nav>   
        </aside>
    </div>

<div class="col-7 mx-auto" style="overflow: auto;height:720px">

<div class="container bg-light">
  <h4 class=" text-light bg-dark text-center p-1" style="font-family: Caveat; font-weight: bolder;">TRAVEL FEED</h4>

    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Latest Feed</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">My Reccomended Feed</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">My Post</button>
      </li>
      <li class="nav-item" role="presentation">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">create</span></button>
      </li>
    </ul>

    <div class="tab-content bg-light" style="width:100%;height: 70%;">
      <div class="tab-pane active bg-light" id="home" role="tabpanel" aria-labelledby="home-tab">

        <div class="container bg-light mx-auto py-2" style="overflow: hidden;">
          <div class="row mx-auto" style="overflow: hidden;margin: auto;">
            <div class="col" style="overflow: hidden;margin: auto;text-align: center;">


              <div class="card mx-auto" style="width:100%;height: 70%;box-shadow: 5px 5px 10px 4px rgba(0,0,0,0.5);">
                <?php 
                    if ($place == 'Tondo') {
                    echo '<img src="https://fastly.4sqi.net/img/general/600x600/QtNf3HOZCw4GiJMk0IhT3OZFpYy1XVm1PJnI0zk4H8o.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'San Nicolas') {
                    echo '<img src="https://outoftownblog.com/wp-content/uploads/2008/10/Casa-Vizantina-in-Madrid-Street-700x508.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Binondo') {
                    echo '<img src="https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltd0e4036cee3390b0/5eb4be1655e75137dea93bd7/1._Chinese-Filipino_Friendship_Arch.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Port Area') {
                    echo '<img src="https://media.philstar.com/images/articles/gen17-manila-port-area-eddgumban_2018-08-17_22-04-28.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Ermita') {
                    echo '<img src="https://www.vigattintourism.com/assets/article_main_photos/optimize/1346054693SfB9lDHo.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Malate') {
                    echo '<img src="https://youimg1.tripcdn.com/target/100b1f000001gspscDB29.jpg?proc=source%2Ftrip" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'San Andres') {
                    echo '<img src="https://i.pinimg.com/originals/bf/ee/e8/bfeee8e46fa83afba4ebe803cd07ede8.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Santa Ana') {
                    echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Santa_Ana_Church_west_side.jpg/482px-Santa_Ana_Church_west_side.jpg">';
                    }



                    if ($place == 'Sta. Mesa') {
                    echo '<img src="https://lh5.googleusercontent.com/p/AF1QipNEac8SlyqKwFIPcMwlI43kFJbidXstknOXRP1h=w400-h300-k-no" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Sampaloc') {
                    echo '<img src="https://planetofhotels.com/guide/sites/default/files/styles/paragraph__hero_banner__hb_image__1880bp/public/hero_banner/Arch-of-the-Centuries.jpg" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Quiapo') {
                    echo '<img src="https://upload.wikimedia.org/wikipedia/commons/6/67/Allan_Jay_Quesada-_Quiapo_Church_DSC_0065_The_Minor_Basilica_of_the_Black_Nazarene_or_Quiapo_Church%2C_Manila.JPG" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Sta Cruz') {
                    echo '<img src="https://www.ssscongregatio.org/images/articles/News/Phil-Uga-U.S./Sta_Cruz_Church_Manila1.jpg" style="height:200px;">';
                    }


                    if ($place == 'San Miguel') {
                    echo '<img src="https://intrepidwanderer.com/wp-content/uploads/2013/05/Presidential-Museum-and-Library.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Intramuros') {
                    echo '<img src="https://a.cdn-hotels.com/gdcs/production16/d15/70589415-4617-4205-804f-210fbb296933.jpg" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Paco') {
                    echo '<img src="https://upload.wikimedia.org/wikipedia/commons/e/e2/View_from_the_pathway_at_Paco_Park.JPG" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Pandacan') {
                    echo '<img src="https://mapio.net/images-p/56251936.jpg" style="height:200px;">';
                    }                      


                 ?>
                <div class="card-body">
                  <h5 class="card-title" style="font-family: Caveat;font-size:20px; font-weight: bolder;"><?php echo $place  ?></h5>
                  <p class="card-text" style="font-size:13px">Manila, capital and chief city of the Philippines. The city is the centre of the country's economic, political, social, and cultural activity. It is located on the island of Luzon and spreads along the eastern shore of Manila Bay at the mouth of the Pasig River.</p>

                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col" style="width:100px;height: 70%;">

              <img src="../../imgs/map.png" usemap="#image-map">

              <map name="image-map">
                  <area target="" alt="Tondo" title="Tondo" href="?place=Tondo" coords="8,27,7,51,54,51,62,106,65,114,70,146,76,225,66,225,42,174,34,181,50,222,0,241,2,261,74,252,70,244,78,239,95,238,123,197,133,192,152,200,162,169,154,132,160,93,170,92,171,57,162,40,170,13,164,1,156,2,158,13,143,19,139,15,87,15,72,31,56,27" shape="poly">
                  <area target="" alt="San Nicolas" title="San Nicolas" href="?place=San Nicolas" coords="71,244,78,239,95,239,119,198,125,202,128,211,122,217,128,222,132,231,135,241,138,252,138,258,115,251,92,252,76,254" shape="poly">
                  <area target="" alt="Binondo" title="Binondo" href="?place=Binondo" coords="124,196,128,209,124,217,132,231,136,244,139,256,149,255,155,248,159,240,155,232,146,228,142,221,146,217,149,208,152,202,133,193" shape="poly">
                  <area target="" alt="Port Area" title="Port Area" href="?place=Port Area" coords="109,258,92,257,80,263,64,275,63,280,57,283,76,323,115,354,138,325" shape="poly">
                  <area target="" alt="Ermita" title="Ermita" href="?place=Ermita" coords="137,327,131,333,133,339,129,352,137,365,142,362,148,376,156,379,161,389,170,391,212,363,194,349,187,330,192,327,183,289,172,273,166,262,162,254,154,255,148,259,154,269,160,279,162,287,162,299,162,307,160,314,154,323,142,333" shape="poly">
                  <area target="" alt="Malate" title="Malate" href="?place=Malate" coords="160,390,180,457,182,471,153,495,188,481,228,466,228,451,228,421,232,404,236,383,226,376,224,381,214,363,169,391" shape="poly">
                  <area target="" alt="San Andres" title="San Andres" href="?place=San Andres" coords="238,383,241,376,246,372,251,362,257,360,257,353,268,350,284,369,287,380,229,467,228,421,233,405" shape="poly">
                  <area target="" alt="Santa Ana" title="Santa Ana" href="?place=Santa Ana" coords="259,335,261,341,256,347,256,353,267,349,282,367,288,378,305,355,321,317,338,280,330,289,321,298,312,302,300,302,295,295,285,293,274,286,264,288,255,292,252,299,254,309,258,321,262,328" shape="poly">
                  <area target="" alt="Sta. Mesa" title="Sta. Mesa" href="?place=Sta. Mesa" coords="301,300,312,299,321,294,330,284,338,275,338,258,331,237,319,224,315,214,306,204,298,215,235,224,243,246,242,252,248,252,249,246,260,244,268,246,278,252,289,261,298,270,302,277,298,289,298,295" shape="poly">
                  <area target="" alt="Sampaloc" title="Sampaloc" href="?place=Sampaloc" coords="307,201,299,213,235,223,224,228,209,221,204,228,181,212,186,147,195,134,196,75,203,77" shape="poly">
                  <area target="" alt="Sta Cruz" title="Sta Cruz" href="?place=Sta Cruz" coords="200,75,211,18,184,2,170,12,162,38,171,56,170,94,161,93,154,130,162,169,149,209,145,219,147,226,155,230,160,239,157,246,163,248,168,256,176,248,184,146,193,135" shape="poly">
                  <area target="" alt="Quiapo" title="Quiapo" href="?place=Quiapo" coords="180,214,203,228,203,237,201,244,203,254,203,263,199,271,191,266,184,260,177,261,172,266,168,257,177,249" shape="poly">
                  <area target="" alt="San Miguel" title="San Miguel" href="?place=San Miguel" coords="210,221,204,230,201,242,204,252,204,262,198,270,183,261,174,265,171,270,184,287,195,295,203,296,212,287,220,276,225,264,232,257,242,257,241,249,244,243,235,224,224,229" shape="poly">
                  <area target="" alt="Intramuros" title="Intramuros" href="?place=Intramuros" coords="149,262,137,264,123,260,111,258,143,331,156,318,162,303,160,279" shape="poly">
                  <area target="" alt="Paco" title="Paco" href="?place=Paco" coords="251,258,242,257,234,257,225,262,220,276,205,295,185,289,193,326,188,332,194,349,213,360,222,377,228,374,237,381,245,371,251,361,256,358,256,346,260,341,259,335,243,336,235,318,233,303,245,293,251,284,252,273" shape="poly">
                  <area target="" alt="Pandacan" title="Pandacan" href="?place=Pandacan" coords="250,248,252,257,252,284,245,296,233,303,235,319,244,335,259,334,261,328,255,313,253,299,256,290,274,284,288,292,294,292,300,276,286,259,270,248,260,245" shape="poly">
              </map>
            </div>
          </div>


        </div> 

      </div>
      <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="messages-tab">
              <?php 
              $p = new PostView();
              $p->ShowPost();
              ?>  
      </div>
       <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
              <?php 
              $p->UsPost($_SESSION['Id']);
              ?>

      </div>
    </div>

    <script>
      var firstTabEl = document.querySelector('#myTab li:last-child a')
      var firstTab = new bootstrap.Tab(firstTabEl)

      firstTab.show()
    </script>

        <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content" style="width: 400px;">

               <div class="modal-header text-center ">
                  <h5>Post</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

                <div class="modal-body">
                  <div class="container-fluid" style="">
                      <form action="../../PHP/Functions/createPost.php" method="post" enctype="multipart/form-data">
                        <div>
                          <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                        </div>
                        <br>
                        <div>
                          <textarea class="form-control" id="exampleFormControlTextarea1" name="cont" placeholder="Tell Us About Your Experience!" rows="5" ></textarea>
                        </div>
                        <br>
                        <div class="container-fluid">

                          <div class="row">

                                <div class="col">

                                  <?php 
                                    $s = new PlaceView();

                                    $s->Places();

                                   ?>

                                </div>
                                <br>
                                <div class>
                                   <fieldset>
                                    <span class="star-cb-group">
                                      <input type="radio" id="rating-5" name="rating" value="5" />
                                      <label for="rating-5">5</label>
                                      <input type="radio" id="rating-4" name="rating" value="4" />
                                      <label for="rating-4">4</label>
                                      <input type="radio" id="rating-3" name="rating" value="3" />
                                      <label for="rating-3">3</label>
                                      <input type="radio" id="rating-2" name="rating" value="2" />
                                      <label for="rating-2">2</label>
                                      <input type="radio" id="rating-1" name="rating" value="1" />
                                      <label for="rating-1">1</label>
                                      <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" />
                                      <label for="rating-0">0</label>
                                    </span>
                                  </fieldset>
                                </div>

                          </div>
                          

                        </div>
                        <br>

                        <div class="mb-3">
                        <input name="file[]" type="file" multiple="multiple" />
                      </div>

                        <br>
                        <div>
                          <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                        <br>
                      </form>
                     
                </div>
              </div>
            </div>
          </div>
        </div>  
</div>

  
      

 </div>

    <div class="col text-center mx-auto bg-light" style="overflow: auto;height:720px;overflow-x: hidden;">
      <h4 class="text-light bg-dark text-center  p-1" style="font-family: Caveat; font-weight: bolder;"> Places In <?php echo $place; ?></h4>
      <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#places" type="button" role="tab" aria-controls="home" aria-selected="true"><span class="material-icons">map</span></button>
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
                  <?php 
                  //$plc-> Allplace($_SESSION['lat'],$_SESSION['lot'],$_SESSION['City']);
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Museum');
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Sports complex');
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Historical place');
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Museum');
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Motel');
                  ?>  

          </div>
          <div class="tab-pane" id="landmark" role="tabpanel" aria-labelledby="place-tab">
                  <?php 
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Historical landmark');
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Church');
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Shopping');
                  ?>  

          </div>
          <div class="tab-pane" id="restaurants" role="tabpanel" aria-labelledby="messages-tab">
                  <?php 
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Restaurant');                
                  ?>  
          </div>
           <div class="tab-pane" id="tourist" role="tabpanel" aria-labelledby="messages-tab">
                  <?php 
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Tourist attraction');
                  $plc-> Typeplace($_SESSION['lat'],$_SESSION['lot'],$place,'Park');
                  ?>

          </div>
        </div>

        <script>
          var firstTabEl = document.querySelector('#myTab li:last-child a')
          var firstTab = new bootstrap.Tab(firstTabEl)

          firstTab.show()
        </script>

    </div>


  </div>

  
</section>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../../plugins/jquery.rwdImageMaps.min.js"></script>
<script src>
  $(document).ready(function(e){
    $('img[usemap]').rwdImageMaps();
  });
</script>
 </body>

 <?php 

echo 
        "
         <script type='text/javascript'>
           function error() {
          Swal.fire({
              title: 'Welcome Back ". $_SESSION['UserName']."'
          })
        }
        error();
        </script>
        ";





  ?>

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

 
