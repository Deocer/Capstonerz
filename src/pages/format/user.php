<?php 

echo
'

<section class="container-fluid">
  <div class="row p-0 gx-3">
    <div class="col-1" style="padding: 0;">';

include '../../Class/sidebar.php';

echo '</div>

<div class="col-7 mx-auto bg-light mx-2 me-3" style="overflow: auto;height:720px">

<div class="container bg-light">
  <h4 class="text-center p-1 sign" style="font-family: Caveat; font-weight: bolder;">TRAVEL FEED</h4>

    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
        <strong class="sign">
        Manila Area Map          
        </strong>
      </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
        <strong class="sign">
        Blog Feed          
        </strong>
      </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
      <strong class="sign">
        My Post        
      </strong>
      </button>
      </li>
      <li class="nav-item" role="presentation">';

          if ($_SESSION['Status'] == 'Normal') {
            echo '<button type="button" class="btn" style="background-color:#5E06AC;color:white;" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">create</span></button>';
          }

echo '</li>
    </ul>

    <div class="tab-content bg-light" style="width:100%;height: 100%;">
      <div class="tab-pane active bg-light" id="home" role="tabpanel" aria-labelledby="home-tab">

        <div class="container bg-light mx-auto py-2" style="overflow: hidden;">
          <div class="row mx-auto" style="overflow: hidden;margin: auto;">
            <div class="col" style="overflow: hidden;margin: auto;text-align: center;">


              <div class="card mx-auto" style="width:100%;height: 70%;">';

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



          echo'      <div class="card-body">
                  <h5 class="card-title" style="font-family: Caveat;font-size:20px; font-weight: bolder;"><?php echo $place  ?></h5>
                  <p class="card-text" style="font-size:13px">Manila, capital and chief city of the Philippines. The city is the centre of the countrys economic, political, social, and cultural activity. It is located on the island of Luzon and spreads along the eastern shore of Manila Bay at the mouth of the Pasig River.</p>

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
            <div id="post">          
            </div>
   
      </div>
       <div class="tab-pane bg-light" id="messages" role="tabpanel" aria-labelledby="messages-tab" style="margin:auto;">
          <div  class="bg-light" style="height: 600px;text-align: center;">
              <div id="uspost" class="bg-light">
                
              </div>
          </div>
      </div>
    </div>

    <script>
      var firstTabEl = document.querySelector("#myTab li:last-child a")
      var firstTab = new bootstrap.Tab(firstTabEl)

      firstTab.show()
    </script>

        <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content" style="width: 400px;">

               <div class="modal-header text-center ">
                  <h5>Post</h5>
                  <button type="button" id="modalcloser" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
      <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <p class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <p class="sign"> Places In <?php echo $place; ?></p>
              </button>
            </p>
            <div id="panelsStayOpen-collapseOne" class="accordion accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                    <div class="" style="font-size: 5px;">
                       <button  id="landmark" class="btn button1"><i class="fa fa-monument"></i>
                          Historical landmark          
                       </button>

                        <button  id="church" class="btn button1"><i class="fa fa-church"></i>
                         Church
                       </button>

                        <button  id="shopping" class="btn button1"><i class="fa fa-shopping-cart"></i>
                         Shopping            
                       </button>

                        <button  id="park" class="btn button1"><i class="fa fa-tree"></i>
                         Park            
                       </button>

                        <button  id="restaurant" class="btn button1"><i class="fa fa-cutlery"></i>
                         Restaurant            
                       </button>

                        <button  id="attraction" class="btn button1"><i class="fa fa-landmark"></i>
                         Tourist attraction            
                       </button>

                        <button  id="reco" class="btn button1"><i class="fa fa-map-marker"></i>
                         Recommended for you            
                       </button>
                        <button  id="last" class="btn button1"><i class="fa fa-map-marker"></i>
                         Places you might like            
                       </button>          
                    </div>
              </div>
            </div>
          </div>

      </div>
                    <div class="" id="resto" style="font-size: 5px;">
                       <button  id="Café" class="btn button1"><i class="fa fa-coffee"></i>
                          Café          
                       </button>

                        <button  id="Eatery" class="btn button1"><i class="fa fa-utensils"></i>
                         Eatery
                       </button>

                        <button  id="FastFood" class="btn button1"><i class="fa fa-hamburger"></i>
                         Fast Food            
                       </button>

                       <button  id="Bar" class="btn button1"><i class="fa fa-glass-martini"></i>
                         Bar            
                       </button>        
                    </div>

      <div id="pricesort" style="display: none;">
          <button  id="asc" class="btn"><i class="fa fa-sort-amount-up-alt"></i>
           Low to High            
         </button>

          <button  id="dcs" class="btn"><i class="fa fa-sort-amount-down-alt"></i>
           High to Low            
         </button>            

      </div>
    


      <div class="row g-3">

        <input id="des" type="" name="" style="display:none">

        <div class="col-auto">
            <div class="dropdown">     
                <button class="btn dropdown-toggle text-light" type="button" id="sort" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #9570DD;"><strong> Sort By :</strong>
                </button>
                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"  style="color: #9570DD;">
                    <li><p style="color: #9570DD;"id="distance" class="dropdown-item" >
                      <strong>Distance</strong> </p></li>
                    <li><p style="color: #9570DD;"id="prize" class="dropdown-item" >
                      <strong>Prize</p></strong></li>
                    <li><p style="color: #9570DD;"id="popularity"class="dropdown-item">
                      <strong>Popularity</strong></p></li>
                </ul>
           </div>
                    
        </div>
        <div class="col">
          <input type="text" class="form-control" id="input" placeholder="Search Place in Manila "
           style="width:100%;">
        </div>
      </div>
      <p id="result"></p>
      <div id="demo">      
      <div class="spinner-grow text-dark" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      </div>




    </div>


  </div>

  
</section>';


if (isset($_SESSION['close'])) {
      // code...
   }else{
          include '../../Class/modal.php';    
   }





 ?>