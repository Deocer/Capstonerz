<?php 
session_start();
if (isset($_SESSION['Id'])) {

}else{
header("location:../../../index.php");
 exit();
}

include '../../PHP/Functions/CreateRecList.php';
include '../../PHP/view/review.php';
class Place extends PlaceView
  {

  }
$id = $_SESSION['Id'];
if (isset($_GET['lat']) && isset($_GET['lot']) && isset($_GET['nm']) && isset($_GET['desc']) && isset($_GET['img']) && isset($_GET['class']) && isset($_GET['rating'])  && isset($_GET['price'])  && isset($_GET['hours'])  && isset($_GET['address']) ){
$lat = $_GET['lat'];
$lot = $_GET['lot'];
$nm = $_GET['nm'];
$desc = $_GET['desc'];
$img = $_GET['img'];
$rating = $_GET['rating'];
$class = $_GET['class'];
$price = $_GET['price'];
$hour = $_GET['hours'];
$address = $_GET['address'];
}

$id = $_SESSION['Id'];

$plc = new Place();
$rev = new ReviewView();
 ?>
  <!DOCTYPE html>
  <html>

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>
      <?php echo $nm; ?>
    </title>
    <script type="text/javascript">
    window.onload = function() {
      L.mapquest.key = 'lYrP4vF3Uk5zgTiGGuEzQGwGIVDGuy24';
      var map = L.mapquest.map('map', {
        center: [<?php echo $lat; ?>, <?php echo $lot; ?>],
        layers: L.mapquest.tileLayer('map'),
        zoom: 18
      });
      L.marker([<?php echo $lat; ?>, <?php echo $lot; ?>], {
        icon: L.mapquest.icons.marker(),
        draggable: false
      }).bindPopup('<?php echo $nm;?>').addTo(map);
    }
    </script>
  </head>

  <body>
    <section class="container-fluid">
      <div class="row p-0 m-0">
        <div class="col-1" style="padding: 0;">
          <aside class="p-0 bg-dark " style="height: 100%;">
            <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
              <br> <span class="material-icons text-light fs-1 text py-1">account_circle</span>
              <p class="text-light">
                <?php echo $_SESSION['UserName']; ?>
              </p>
              <br>
              <div class="collapse navbar-collapse order-last" id="nav">
                <ul style="display:block;margin: 0;padding: 0;">
                  <li><span class="material-icons p-3 text-light">home</span><a href="user.php"><i class="fw-bold text-light">Home</i></a></li>
                  <br>
                  <?php 

                        if ($_SESSION['Auth'] == 'Admin') {
                          echo '
                              <li><span class="material-icons p-3 text-light">dashboard</span><a href="../admin/dashboard.php"><i class="fw-bold text-light">Dashboard</i></a></li>
                          ';
                        }
                   ?>
                    <li><span class="material-icons p-3 text-light">travel_explore</span><a href="itinerary.php"><i class="fw-bold text-light">Itinerary</i></a></li>
                    <br>
                    <li><span class="material-icons p-3 text-light">logout</span><a href="../../Log_out.php"><i class="fw-bold text-light">Log Out</i></a></li>
                </ul>
              </div>
            </nav>
          </aside>
        </div>
        <div class="col-7 mx-auto">
          <div class="container-fluid bg-light" style="overflow: auto;height:720px">
            <h4 class=" text-light bg-dark text-center  p-3"><?php echo $nm; ?></h4>
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Map</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Reviews</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Other Info.</button>
              </li>
            </ul>
            <div class="tab-content bg-light" style="width:100%;height: 70%;">
              <div class="tab-pane active bg-light" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <div id="map" class="mx-auto" style="width: 100%; height: 300px;"></div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="card text-center fs-1 text" style="width: 100%;height: 150px;">
                      <div class="card-body">
                        <h5 class="card-title">Google Review Rating</h5>
                        <div class="col" style="    
                              display: flex;
                              align-items: center;
                              margin-left: 1em; ">
                          <p style="font-size:30px;">
                            <?php echo $rating ?>
                          </p>
                          <p><span class="material-icons" style="font-size:35px;">star</span></p>
                        </div>                      
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center fs-1 text" style="width: 100%;height: 150px;">
                      <div class="card-body">
                        <h5 class="card-title">Destination Price Point</h5>
                        <?php 

                                if ($price == 1) {
                                  echo ' 
                                  <p class=card-text" style="font-size:56px;">
                                  <span class="material-icons" style="font-size:56px;">paid</span>
                                  </p>';
                                }elseif ($price == 2) {
                                  echo '                                  
                                  <p class=card-text" style="font-size:40px;">
                                  <span class="material-icons" style="font-size:40px;">paid</span>
                                  <span class="material-icons" style="font-size:40px;">paid</span>
                                  </p>';
                                }else{
                                  echo '                                   
                                  <p class=card-text" style="font-size:36px;">
                                  <span class="material-icons" style="font-size:36px;">paid</span>
                                  <span class="material-icons" style="font-size:36px;">paid</span>
                                  <span class="material-icons" style="font-size:36px;">paid</span>
                                  </p>';                          
                                }

                          ?>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center fs-1 text" style="width: 100%;height: 150px;">
                      <div class="card-body">
                        <h5 class="card-title">Operating Hours</h5>
                        <p class="card-text" style="font-size:20px;font-weight: bolder;">
                          <?php echo $hour ?>
                        </p>                        
                      </div>
                    </div>
                  </div>
                  <div class="col">
                     <div class="card text-center fs-1 text" style="width: 100%;height: 150px;">
                      <div class="card-body">
                        <h5 class="card-title">Add To Itinerary</h5>
                        <a class="btn btn-primary" aria-current="page" onclick="add()"><span class="material-icons p-3 text-light">travel_explore</span></a>                       
                      </div>
                    </div>
                  </div>

                  <script type="text/javascript">
                  function add() {
                    Swal.fire({
                      title: "Success!",
                      text: "Redirecting in 2 seconds.",
                      icon: "success",
                    }).then(function() {
                      window.location.href = "../../PHP/controller/itinerary.php?nm=<?php echo $nm; ?>&id=<?php echo $id; ?>";
                    });
                  }
                  </script>
                </div>
              </div>
              <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="messages-tab">
                <reviews>
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Reviews
                </button>
              </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <form action="../../PHP/controller/review.php" method="post">
                            <div>
                              <input class="form-control" style="display: none;" name="place" value="<?php echo $nm ?>">
                              <input class="form-control" style="display: none;" name="id" value="<?php echo $_SESSION['Id'] ?>">
                              <input class="form-control" style="display: none;" name="name" value="<?php echo $_SESSION['UserName'] ?>"> </div>
                            <div>
                              <textarea class="form-control" style="overflow:auto;resize:none" id="exampleFormControlTextarea1" name="cont" placeholder="Tell Us About Your Experience!" rows="3" required></textarea>
                            </div>
                            <br>
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col">
                                  <label>Rating :</label>
                                  <fieldset> <span class="star-cb-group">
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
                              </span> </fieldset>
                                </div>
                                <div class="col mx-auto text-center">
                                  <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                              </div>
                            </div>
                          </form>
                          <br>
                          <br>
                          <h2><?php echo $nm; ?> Reviews:</h2>
                          <?php 
                  $rev->ShowPost($nm);
                  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </reviews>
              </div>
              <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                <div class="con bg-dark" style="
            width: 100%;
            height: 420px; 
            display: flex;
            flex-flow: row wrap;
            position: relative;
            margin: auto;
            text-align: center;
            overflow: auto;
          ">
                  <?php 
            $new = str_replace(' ', '%20', $nm);
            $YoutubeVids = file_get_contents("https://youtube.googleapis.com/youtube/v3/search?part=id&maxResults=10&q=".$new."&key=AIzaSyBi2oHeHWH5BD2Ck_iCaznlK2BZwDep998");
                 
            $yt = json_decode($YoutubeVids, TRUE); 

            for ($i=0; $i < 9; $i++) { 
            $id =  $yt['items'][$i]['id']['videoId'];            
            echo '
                <div class="item" style="
                  margin: 2px;
                  height: 200px;
                  flex: 0 1 calc(20% - 8px);
                  position: relative;
                  text-align: center;
                  margin: auto;
                  color: white;
                  margin-bottom: 5px;
                  margin-top: 5px;

                ">
                  <a href="https://www.youtube.com/watch?app=desktop&v='.$id.'"><img src="http://img.youtube.com/vi/'.$id.'/hqdefault.jpg" title="YouTube Video" alt="YouTube Video" style="width:200px;height:200px;"/></a>
                </div>
            ';

            }
?>
                </div>
              </div>
            </div>
            <script>
            var firstTabEl = document.querySelector('#myTab li:last-child a')
            var firstTab = new bootstrap.Tab(firstTabEl)
            firstTab.show()
            </script>
          </div>
        </div>

    <div class="col text-center mx-auto bg-light" style="overflow: auto;height:720px;overflow-x: hidden;">
      <div class="bg-dark text-center  p-2" style="font-weight: bolder; margin: auto; text-align:center;">
         <h4 class="text-light bg-dark text-center  p-1" style="font-weight: bolder;">Nearby <span id="dest"></span> in <span id="name"></span><?php echo $nm; ?> </h4>        
      </div>
<br>
          <button  id="landmark" class="btn"><i class="fa fa-monument"></i> Historical landmark</button>
          <button  id="church" class="btn"><i class="fa fa-church"></i> Church</button>
          <button  id="shopping" class="btn"><i class="fa fa-shopping-cart"></i> Shopping</button>
          <button  id="park" class="btn"><i class="fa fa-tree"></i> Park</button>
          <button  id="restaurant" class="btn"><i class="fa fa-cutlery"></i> Restaurant</button>
          <button  id="attraction" class="btn"><i class="fa fa-landmark"></i> Tourist attraction</button>
          <button  id="reco" class="btn"><i class="fa fa-map-marker"></i> Recommended for you</button>
          <br> 
          <br>
          <input type="text" class="form-control" id="input" placeholder="Search Place in Manila">

      <p id="result"></p>
      <div id="demo">      
       <?php 
            $plc-> Recplace($lat,$lot,$nm,$class);
       ?> 
      </div>


    </div>
      </div>
    </section>
    <section>
      <footer class="bg-dark"> </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
 <script>
  $(document).ready(function(){
    $("#input").keyup(function(){
          $( "#result" ).empty();
          $( "#demo" ).empty();
          $.ajax({
              url: '../../PHP/Functions/SearchDes.php',
              type:'post',
              data: {search: $(this).val()},
              success:function(result){
                  $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#landmark").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Historical landmark",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Historical landmark",
                      
            },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   <?php $destype = 'Landmark' ?>
                   $('#dest').html("Historical landmark");
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#church").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "church",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Church",
            },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   <?php $destype = 'Church' ?>
                   $('#dest').html("Church");
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#shopping").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "shopping",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Shopping",
            },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                    <?php $destype = 'Shopping' ?>
                   $('#dest').html("Shopping");
              },
            error: function(){
                console.log("error")
            }
          });
    });


    $("#park").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Park",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Park",
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                    <?php $destype = 'Park' ?>
                   $('#dest').html("Park");
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#restaurant").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Restaurant",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Restaurant",
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                    <?php $destype = 'Restaurant' ?>
                   $('#dest').html("Restaurant");
              },
            error: function(){
                console.log("error")
            }
          });
    });


    $("#attraction").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Tourist attraction",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Tourist attraction",
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                    <?php $destype = 'Tourist Attraction' ?>
                   $('#dest').html("Tourist Attraction");
              },
            error: function(){
                console.log("error")
            }
          });
    });

     $("#reco").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Tourist attraction",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "<?php echo $class ?>",
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   $('#dest').html("<?php echo $class ?>");
              },
            error: function(){
                console.log("error")
            }
          });
    });



    $('#input').blur(function()
    {
    if( !$(this).val() ) {
         $( "#result" ).empty();
    }
    });
  });

</script>
  </html>