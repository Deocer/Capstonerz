<?php

echo '
    <section style="background-color: white;height: calc(100vh - 100px);overflow-y: auto;">
      <div class="container-fluid bg-light" style="height:100%">
      <div class="text-center p-1 sign" style="background-color:white;font-size:50px;"><img src="../../imgs/logo.png" style="height:100px;"></div>
        <ul class="nav nav-tabs nav-fill nav-lg" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><strong class="sign" style="font-size:25px;">HOME</strong></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><strong class="sign" style="font-size:25px;">NEWSFEED</strong></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false"><strong class="sign" style="font-size:25px;">OTHER DESTINATIONS</strong></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false"><strong class="sign" style="font-size:25px;">YOUR POST</strong></button>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" style="overflow:auto;">
              <br><br><br>
            <div class="container-fluid bg-light mx-auto py-2" style="overflow: hidden;">
            <div class="row mx-auto" style="overflow: hidden;margin: auto;">
              <br>
            <div class ="col-7" style="overflow:hidden;">

                  <div class="card placecard mx-auto" style="width:100%;">';

                      if ($place == 'Tondo') {
                     echo '<img src="https://fastly.4sqi.net/img/general/600x600/QtNf3HOZCw4GiJMk0IhT3OZFpYy1XVm1PJnI0zk4H8o.jpg" class="card-img-top" alt="..." style="height:250px;width:100%;">';
                      }

                      if ($place == 'San Nicolas') {
                      echo '<img src="https://outoftownblog.com/wp-content/uploads/2008/10/Casa-Vizantina-in-Madrid-Street-700x508.jpg" class="card-img-top" alt="..." style="height:250px;width:100%;">';
                      }

                      if ($place == 'Binondo') {
                      echo '<img src="https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltd0e4036cee3390b0/5eb4be1655e75137dea93bd7/1._Chinese-Filipino_Friendship_Arch.jpg" class="card-img-top" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'Port Area') {
                      echo '<img src="https://media.philstar.com/images/articles/gen17-manila-port-area-eddgumban_2018-08-17_22-04-28.jpg" class="card-img-top" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'Ermita') {
                      echo '<img src="https://www.vigattintourism.com/assets/article_main_photos/optimize/1346054693SfB9lDHo.jpg" class="card-img-top" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'Malate') {
                      echo '<img src="https://youimg1.tripcdn.com/target/100b1f000001gspscDB29.jpg?proc=source%2Ftrip" class="card-img-top" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'San Andres') {
                      echo '<img src="https://i.pinimg.com/originals/bf/ee/e8/bfeee8e46fa83afba4ebe803cd07ede8.jpg" class="card-img-top" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'Santa Ana') {
                      echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Santa_Ana_Church_west_side.jpg/482px-Santa_Ana_Church_west_side.jpg"  style="height:250px;width:100%;">';
                      }



                      if ($place == 'Sta. Mesa') {
                      echo '<img src="https://lh5.googleusercontent.com/p/AF1QipNEac8SlyqKwFIPcMwlI43kFJbidXstknOXRP1h=w400-h300-k-no" class="card-img-top" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'Sampaloc') {
                      echo '<img src="https://planetofhotels.com/guide/sites/default/files/styles/paragraph__hero_banner__hb_image__1880bp/public/hero_banner/Arch-of-the-Centuries.jpg" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'Quiapo') {
                      echo '<img src="https://upload.wikimedia.org/wikipedia/commons/6/67/Allan_Jay_Quesada-_Quiapo_Church_DSC_0065_The_Minor_Basilica_of_the_Black_Nazarene_or_Quiapo_Church%2C_Manila.JPG" class="card-img-top" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'Sta Cruz') {
                      echo '<img src="https://www.ssscongregatio.org/images/articles/News/Phil-Uga-U.S./Sta_Cruz_Church_Manila1.jpg"  style="height:250px;width:100%;">';
                      }


                      if ($place == 'San Miguel') {
                      echo '<img src="https://intrepidwanderer.com/wp-content/uploads/2013/05/Presidential-Museum-and-Library.jpg" class="card-img-top" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'Intramuros') {
                      echo '<img src="https://a.cdn-hotels.com/gdcs/production16/d15/70589415-4617-4205-804f-210fbb296933.jpg" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'Paco') {
                      echo '<img src="https://upload.wikimedia.org/wikipedia/commons/e/e2/View_from_the_pathway_at_Paco_Park.JPG" class="card-img-top" alt="..."  style="height:250px;width:100%;">';
                      }

                      if ($place == 'Pandacan') {
                      echo '<img src="https://mapio.net/images-p/56251936.jpg"  style="height:250px;width:100%;">';
                      }                      



                     echo'       <div class="card-body">
                                <br>
                                <div style="margin:auto;text-align:center;">
                                <h1 class="card-title" style="font-family: Caveat;font-size:80px; font-weight: bolder;">'.$place.'</h1>
                                </div>
                                <p class="card-text" style="font-size:20px">Manila, capital and chief city of the Philippines. The city is the centre of the countrys economic, political, social, and cultural activity. It is located on the island of Luzon and spreads along the eastern shore of Manila Bay at the mouth of the Pasig River.</p>
                              </div>
                          </div>  

                    </div>
                    <div class ="col">
                    <div class="container-fluid" style="font-size: 5px; width: 100%;text-align:center;margin:auto;">
                    <h1>Other Districts in Manila</h1>
                    </div>
                    <br>
                    <div class="container-fluid" style="font-size: 25px; width: 100%;margin:auto;">
                      <a class="btn button1" href="?place=Tondo"  style="font-size: 25px;">Tondo</a>
                      <a class="btn button1" href="?place=San Nicolas" style="font-size: 25px;">San Nicolas</a>
                      <a class="btn button1" href="?place=Binondo" style="font-size: 25px;">Binondo</a>
                      <a class="btn button1" href="?place=Port Area" style="font-size: 25px;">Port Area</a>
                      <a class="btn button1" href="?place=Ermita" style="font-size: 25px;">Ermita</a>
                      <a class="btn button1" href="?place=Malate" style="font-size: 25px;">Malate</a>
                      <a class="btn button1" href="?place=San Andres" style="font-size: 25px;">San Andres</a>
                      <a class="btn button1" href="?place=Santa Ana" style="font-size: 25px;">Santa Ana</a>
                      <a class="btn button1" href="?place=Sta. Mesa" style="font-size: 25px;">Sta. Mesa</a>
                      <a class="btn button1" href="?place=Sampaloc" style="font-size: 25px;">Sampaloc</a>
                      <a class="btn button1" href="?place=Quiapo" style="font-size: 25px;">Quiapo</a>
                      <a class="btn button1" href="?place=Sta Cruz" style="font-size: 25px;">Sta Cruz</a>
                      <a class="btn button1" href="?place=San Miguel" style="font-size: 25px;">San Miguel</a>
                      <a class="btn button1" href="?place=Intramuros" style="font-size: 25px;">Intramuros</a>
                      <a class="btn button1" href="?place=Paco" style="font-size: 25px;">Paco</a>
                      <a class="btn button1" href="?place=Pandacan" style="font-size: 25px;">Pandacan</a>
                    </div>
                    </div>
            <div id="res" class="container-fluid" style="width:100%;">
              <div class="spinner-grow text-dark" role="status"> <span class="visually-hidden">Loading...</span> </div>
            </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="profile-tab" style="font-size: 15px; width: 100%; margin:auto;text-align:center;">
                  <br>
                  <h1 class="sign">Other Places In
                      '.$place.'
                    </h1>
                    <br>
                    <div class="container-fluid" style="font-size: 15px; width: 100%; margin:auto;">
                    <br>
                      <button id="landmark" class="btn button1" style="margin:auto;"><i class="fa fa-monument"></i> Historical landmark </button>
                      <button id="church" class="btn button1" style="margin:auto;"><i class="fa fa-church"></i> Church </button>
                      <button id="shopping" class="btn button1" style="margin:auto;"><i class="fa fa-shopping-cart"></i> Shopping </button>
                      <button id="park" class="btn button1" style="margin:auto;"><i class="fa fa-tree"></i> Park </button>
                      <button id="restaurant" class="btn button1" style="margin:auto;"><i class="fa fa-cutlery"></i> Restaurant </button>
                      <button id="attraction" class="btn button1" style="margin:auto;"><i class="fa fa-landmark"></i> Tourist attraction </button>
                      <button id="reco" class="btn button1" style="margin:auto;"><i class="fa fa-map-marker"></i> Recommended for you </button>
                      <button id="last" class="btn button1" style="margin:auto;"><i class="fa fa-map-marker"></i> Places you might like </button>
                    </div>
            <div class="" id="resto" style="font-size: 5px;">
              <button id="Café" class="btn button1"><i class="fa fa-coffee"></i> Café </button>
              <button id="Eatery" class="btn button1"><i class="fa fa-utensils"></i> Eatery </button>
              <button id="FastFood" class="btn button1"><i class="fa fa-hamburger"></i> Fast Food </button>
              <button id="Bar" class="btn button1"><i class="fa fa-glass-martini"></i> Bar </button>
            </div>
            <div id="pricesort" style="display: none;">
              <button id="asc" class="btn"><i class="fa fa-sort-amount-up-alt"></i> Low to High </button>
              <button id="dcs" class="btn"><i class="fa fa-sort-amount-down-alt"></i> High to Low </button>
            </div>
            <input id="des" type="" name="" style="display:none">
            <div class="col-auto">
            </div>
            <div style="text-align:left;">
                <button class="btn dropdown-toggle text-light" type="button" id="sort" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #9570DD;"><strong> Sort By :</strong> </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="color: #9570DD;">
                  <li>
                    <p style="color: #9570DD;" id="distance" class="dropdown-item"> <strong>Distance</strong> </p>
                  </li>
                  <li>
                    <p style="color: #9570DD;" id="prize" class="dropdown-item"> <strong>Price</p></strong></li>
                  <li>
                    <p style="color: #9570DD;" id="popularity" class="dropdown-item"> <strong>Popularity</strong></p>
                  </li>
                </ul>
              </div>
            <br>
            <input type="text" class="form-control" id="input" placeholder="Search Place in Manila " style="width:100%;">
            <br>
            <div id="result" style="margin:auto; text-align: center; text-align:center;"></div>
            <div id="demo">
              <div class="spinner-grow text-dark" role="status"> <span class="visually-hidden">Loading...</span> </div>
            </div>
          </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="messages-tab">
            <div class="card mx-auto bg-light" style="width:95%; background-color: white;">
              <div class="card-body">
                <form action="../../PHP/Functions/createPost.php" method="post" enctype="multipart/form-data">
                  <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="cont" placeholder="Tell Us About Your Experience!" rows="5"></textarea>
                  <div class="row">
                    <div class="col">
                    <input name="file[]" type="file" multiple="multiple" />
                    </div>
                    <div class="col" style="text-align:right;">
                    <button type="submit" class="btn btn-primary" style="font-size:1.5rem; background-color:#5E06AC;">Post</button>
                    </div>
                  </div>
                  
                  
                </form>
              </div>
            </div>
            <br>
            <br>
            <div class="bg-light" style="overflow: auto;height: 1200px;">
              <p id="post"></p>
            </div>
          </div>
          <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div id="uspost" class="bg-light"> </div>
          </div>
        </div>
        <?php 




 ?>
      </div>
    </section>
    
';
include '../../Class/mobilenav.php';

if (isset($_SESSION['close'])) {
      // code...
    }else{
            include '../../Class/mobilemodal.php';    
    }
