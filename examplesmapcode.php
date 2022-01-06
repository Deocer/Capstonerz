
<pre></pre><!DOCTYPE html>
 <html>
 <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
   <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>My Travel Itinerary</title>

 </head>
 
 <body class="bg-light">
 <div id="map" class="" style="width: 100%; height: 550px; overflow: hidden;z-index: 1;"padding-top:50px;></div>
  </div>


<section class="container-fluid bg-light">
<div class ="row">

  <div class ="col-1">
<style type="text/css">
li {
  list-style: none;
}

*::-webkit-scrollbar {
  display: none;
}

a {
  text-decoration: none;
  color: #fff;
}


.sidebar {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 95vh;
  width: 60px;
  background-color:#290340;
  border-radius: 10px;
  overflow: hidden;
  z-index: 2;
  box-shadow: 0 10px 20px #111;
}

/* sidebar open */
.sidebar.open {
  width: 250px;
}
.sidebar.open .menu-text {
  display: block;
}
.sidebar.open .menu-item {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 90%;
}

.sidebar.open .menu-item a {
  display: flex;
  align-items: center;
  justify-content: space-between;
  text-align: left;
}

.sidebar.open .menu-item i {
  margin: 15px;
}

.sidebar.open .expand-button i {
  transform: rotate(-180deg);
  position: absolute;
  right: 10px;
  top: -50%;
}
/* profile  */
/* expand icon */
.profile {
  display: grid;
  place-items: center;
  height: 60px;
  width: 100%;
  background-color:#5E06AC;
  font-size: 20px;
  color: #fff;
  margin-bottom: 5px;
}

.profile img {
  display: grid;
  place-items: center;
  height: 40px;
  width: 40px;
  background-color: #364f6b;
  border-radius: 50%;
  cursor: pointer;
}
.menu-text {
  display: none;
  color:#e1dee3;
}
/* main menu */
.main-menu {
  width: 100%;
  align-items: center;
  display: flex;
  flex-direction: column;
}
.menu-item {
  position: relative;
  margin: 5px 0;
  height: 40px;
  width: 40px;
  display: grid;
  place-items: center;
  border-radius: 5px;
  transition: all 0.2s ease;
  cursor: pointer;
}
.menu-item.active {
  background-color: #333333;
}

.menu-item:hover {
  transform: scale(1.2);
}

.main-menu i.menu-icon {
  font-size: 15px;
  cursor: pointer;
  color:#e1dee3;
}

/* expand icon */
.expand-button {
  position: absolute;
  bottom: 0;
  display: grid;
  place-items: center;
  height: 30px;
  width: 100%;
  font-size: 20px;
  color: #fff;
  background-color: #5E06AC;
}

.expand-button i {
  position: absolute;
  top: -50%;
  display: grid;
  place-items: center;
  height: 40px;
  width: 40px;
  background-color: black;
  border: 5px #222 solid;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.2s ease;
}

/* code with love */
.code-with-love {
  position: absolute;
  right: 30px;
  bottom: 50px;
  border-radius: 5px;
  background-color: #111;
  padding: 10px;
  color: #fff;
  z-index: 99999999;
}

.code-with-love i.fa-heart,
.code-with-love span {
  color: #ff2828;
}

</style>


  <div class="sidebar">
    <div class="profile">
      <div class="profile-img">
        <img>
      </div>
    </div>
    <div class="main-menu">
      <div class="menu-item">
        <a href="#">
          <i class="menu-icon fa fa-user"></i>
          <p class="menu-text">admin123</p>
        </a>
      </div>
      <div class="menu-item">
        <a href="user.php">
          <i class="menu-icon fa fa-home"></i>
          <p class="menu-text">Home</p>
        </a>
      </div>
      <div class="menu-item">
        <a href="../admin/dashboard.php">
          <i class="menu-icon fa fa-dashboard"></i>
          <p class="menu-text">Dashboard</p>
        </a>
      </div>
         
      <div class="menu-item">
        <a href="itinerary.php">
          <i class="menu-icon fa fa-map"></i>
          <p class="menu-text">Itinerary</p>
        </a>
      </div>
      <div class="menu-item">
        <a href="../../PHP/Functions/Log_out.php">
          <i class="menu-icon fa fa-sign-out"></i>
          <p class="menu-text">Log Out</p>
        </a>
      </div>

    </div>
    <!-- expand icon -->
    <div class="expand-button">
      <i class="fa fa-angle-right expand-icon"></i>
    </div>
  </div>

<script>
const sidebar = document.querySelector(".sidebar");
const expandIcon = document.querySelector(".expand-icon");

expandIcon.addEventListener("click", () => {
  sidebar.classList.toggle("open");
});
</script>

  </div>

  <div class ="col-8">
  <h4 class="text-center  p-2 sign">MY DESTINATION MAP</h4>
   <div id="map" class="" style="width: 100%; height: 550px; overflow: hidden;z-index: 1;"padding-top:50px;></div>
  </div>

  <div class ="col-3">
  <h4 class="text-center  p-2 sign">ITINERARY</h4>
                        <p class="sign">DESTINATION #1</p>      
                        <div class="card mb-3" style="width:100%;padding:0;padding-top:10px;">
                                  <div class="row g-0">
                                    <div class="col-md-4" style="margin:auto;">
                                                                                <img src="https://previews.123rf.com/images/brokenhill/brokenhill1801/brokenhill180100075/93279098-location-icon-flat-with-house-on-white-background-vector-illustration-.jpg" alt=""style="width:70px;height:80px;" />
                                    </div>
                                    <div class="col-md-6 mx-auto" style="margin:auto;">
                                      <div class="card-body">
                                        <p class="card-title" style="font-size:1.5vh;"><b>CURRENT LOCATION</b></p>
                                      </div>
                                    </div>
                                    <div class="col-2 text-light" style="margin:auto; height:100%;text-align:center;margin:auto;">
                                                                        <button type="button" id="directions" class="btn btn-primary" style="font-size:1.5vh;"><b>Show Directions</b></button>
                                                <button type="button" id="nodirections" class="btn btn-primary" style="font-size:1.5vh;"><b>Remove Directions</b></button>
                                    </div>
                                  </div>
                                </div>
           <p class="sign" >DESTINATION #2</p>
                                <div class="card mb-3" style="">
                                  <div class="row g-0">
                                    <div class="col-md-4" style="margin:auto;">
                                                                <a href="../../pages/user/place.php?nm=Arroceros Forest Park&lat=14.5942352&lot=120.9817192&desc=Tree & plant-filled spot by the river. Small urban park with a vast array of trees & plants, plus a fishpond & riverside walkway.&img=https://lh5.googleusercontent.com/p/AF1QipNRzWYslmXmoBm0h0ve994SDjZXvxD8m45Tc6tM=w122-h92-k-no&class=Park&rating=4.4&address=659 A Antonio Villegas St, Ermita, Manila, 1000 Metro Manila, Philippines&hours=Open 24 hours&price=2&contact=N/A&site=N/A" class="text-body"  style="text-decoration: none;" >

                                                                                <img src="https://lh5.googleusercontent.com/p/AF1QipNRzWYslmXmoBm0h0ve994SDjZXvxD8m45Tc6tM=w122-h92-k-no" class="img-fluid rounded-circle m-1 "  alt="" style="width:70px;height:80px;">

                                                                </a>
                                    </div>
                                    <div class="col-md-6 mx-auto" style="margin:auto;">
                                      <div class="card-body">
                                        <p class="card-title"><b>Arroceros Forest Park</b></p>
                                        <p class="text-muted">Park</p>
                                      </div>
                                    </div>
                                    <div class="col-2 text-light" style="margin:auto; height:100%;text-align:center;margin:auto;">
                                                                <a type="button" class="btn" aria-current="page"  style="height:100%;width:50px;background-color:#f8481c;text-align:center;margin:auto;" href="../../PHP/controller/itinerary.php?delete=193">
                                                                                <strong>
                    <span 
                      class="material-icons text-light"
                      style="font-size:15px;"
                      >
                      remove_circle_outline
                      </span>
                                                                                </strong>
                                                                </a>
                                    </div>
                                  </div>
                                </div><p class="sign" >DESTINATION #3</p>
                                <div class="card mb-3" style="">
                                  <div class="row g-0">
                                    <div class="col-md-4" style="margin:auto;">
                                                                <a href="../../pages/user/place.php?nm=National Museum of Natural History&lat=14.583505&lot=120.9820883&desc=Gallery of animal & plant exhibits. Zoological, botanical & geological specimens displayed in an elegant venue with a soaring atrium.&img=https://lh5.googleusercontent.com/p/AF1QipMtzsfqX-LGZUQvreXrn10-qOc7z9g-SG4eN1Q8=w122-h92-k-no&class=Museum&rating=4.7&address=Teodoro F. Valencia Cir, Ermita, Manila, 1000 Metro Manila, Philippines&hours=Closed ⋅ Opens 10AM Tue&price=1&contact=N/A&site=N/A" class="text-body"  style="text-decoration: none;" >

                                                                                <img src="https://lh5.googleusercontent.com/p/AF1QipMtzsfqX-LGZUQvreXrn10-qOc7z9g-SG4eN1Q8=w122-h92-k-no" class="img-fluid rounded-circle m-1 "  alt="" style="width:70px;height:80px;">

                                                                </a>
                                    </div>
                                    <div class="col-md-6 mx-auto" style="margin:auto;">
                                      <div class="card-body">
                                        <p class="card-title"><b>National Museum of Natural History</b></p>
                                        <p class="text-muted">Museum</p>
                                      </div>
                                    </div>
                                    <div class="col-2 text-light" style="margin:auto; height:100%;text-align:center;margin:auto;">
                                                                <a type="button" class="btn" aria-current="page"  style="height:100%;width:50px;background-color:#f8481c;text-align:center;margin:auto;" href="../../PHP/controller/itinerary.php?delete=173">
                                                                                <strong>
                    <span 
                      class="material-icons text-light"
                      style="font-size:15px;"
                      >
                      remove_circle_outline
                      </span>
                                                                                </strong>
                                                                </a>
                                    </div>
                                  </div>
                                </div><p class="sign" >DESTINATION #4</p>
                                <div class="card mb-3" style="">
                                  <div class="row g-0">
                                    <div class="col-md-4" style="margin:auto;">
                                                                <a href="../../pages/user/place.php?nm=Rizal Park&lat=14.5831177&lot=120.9794171&desc=Large park for strolling & public events. Grand 140-acre park featuring lawns, gardens, outdoor events & a monument to hero José Rizal.&img=https://lh5.googleusercontent.com/p/AF1QipMVMi36DchOf8QEpfiz1-EY3PoJLOwGge1Kvge2=w122-h92-k-no&class=Park&rating=4.5&address=Ermita, Manila, 1000 Metro Manila, Philippines&hours=Open until 9:00 PM&price=1&contact=N/A&site=N/A" class="text-body"  style="text-decoration: none;" >

                                                                                <img src="https://lh5.googleusercontent.com/p/AF1QipMVMi36DchOf8QEpfiz1-EY3PoJLOwGge1Kvge2=w122-h92-k-no" class="img-fluid rounded-circle m-1 "  alt="" style="width:70px;height:80px;">

                                                                </a>
                                    </div>
                                    <div class="col-md-6 mx-auto" style="margin:auto;">
                                      <div class="card-body">
                                        <p class="card-title"><b>Rizal Park</b></p>
                                        <p class="text-muted">Park</p>
                                      </div>
                                    </div>
                                    <div class="col-2 text-light" style="margin:auto; height:100%;text-align:center;margin:auto;">
                                                                <a type="button" class="btn" aria-current="page"  style="height:100%;width:50px;background-color:#f8481c;text-align:center;margin:auto;" href="../../PHP/controller/itinerary.php?delete=172">
                                                                                <strong>
                    <span 
                      class="material-icons text-light"
                      style="font-size:15px;"
                      >
                      remove_circle_outline
                      </span>
                                                                                </strong>
                                                                </a>
                                    </div>
                                  </div>
                                </div>
                    <script type='text/javascript'>
                      window.onload = function() {
                        L.mapquest.key = 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9';
                        var directions = L.mapquest.directions();
                        directions.route({
                        locations: ["14.6553359,121.11052","14.5942352,120.9817192","14.583505,120.9820883","14.5831177,120.9794171",]
                      }, createMap);
                    function createMap(error, response) {
                          var map = L.mapquest.map('map', {
                            center: [0,0],
                            layers: L.mapquest.tileLayer('map'),
                            zoom: 0
                          });

                      var DirectionsLayerWithCustomMarkers = L.mapquest.DirectionsLayer.extend({

                        createStartMarker: function(location, stopNumber) {
                          console.log(location);
                          console.log(stopNumber);

                                return L.mapquest.textMarker(location.latLng, {
                                  text: 'Start',
                                  type: 'marker',
                                  icon: {
                                    primaryColor: '#333333',
                                    secondaryColor: '#333333',
                                    size: 'sm',
                                    symbol: stopNumber
                                  }
                                });

                        },

                        createWaypointMarker: function(location, stopNumber) {
                         console.log(location);
                         console.log(stopNumber);

                                return L.mapquest.textMarker(location.latLng, {
                                  text: stopNumber,
                                  type: 'marker',
                                  icon: {
                                    primaryColor: '#333333',
                                    secondaryColor: '#333333',
                                    size: 'sm',
                                    symbol: stopNumber
                                  }
                                });

                        },

                        createEndMarker: function(location, stopNumber) {
                          console.log(location);
                          console.log(stopNumber);

                                return L.mapquest.textMarker(location.latLng, {
                                  text: 'End',
                                  type: 'marker',
                                  icon: {
                                    primaryColor: '#333333',
                                    secondaryColor: '#333333',
                                    size: 'sm',
                                    symbol: stopNumber
                                  }
                                });

                        }

                      });

                      directionsLayer = new DirectionsLayerWithCustomMarkers({
                        directionsResponse: response
                      }).addTo(map);

                          var narrativeControl = L.mapquest.narrativeControl({
                            directionsResponse: response,
                            compactResults: true,
                            interactive: true,
                            position : 'bottomright',
                            className: 'nav'
                          });

                          narrativeControl.setDirectionsLayer(directionsLayer);
                          narrativeControl.addTo(map);
                        }
                    }
                    </script>
                
  </div>
</div>


</section>



 </body>
 <script type="text/javascript"> 
    $( "document" ).ready(function(){
      $("#directions").hide();
    });
    $( "#nodirections" ).click(function(){
      $(".nav").hide();
      $("#directions").show();
      $("#nodirections").hide();
    });

    $( "#directions" ).click(function(){
      $(".nav").show();
      $("#directions").hide();
      $("#nodirections").show(); 
    });    
</script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 </html>