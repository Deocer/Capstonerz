<?php 
echo 
'

    <section class="container-fluid">
      <div class="row p-0 m-0">
        <div class="col-1" style="padding: 0;">';
          include '../../Class/sidebar.php';
echo'
        </div>
        <div class="col-7 mx-auto">
          <div class="container-fluid bg-light" style="overflow: auto;height:720px">
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
              <strong class="sign">
                Map                
              </strong>
              </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                <strong class="sign">
                 Reviews                 
                </strong>
              </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
                <strong class="sign">
                 Other Info.                 
                </strong>
              </button>
              </li>
            </ul>
            <div class="tab-content bg-light" style="width:100%;height: 70%;">
              <div class="tab-pane active bg-light" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <div id="map" class="mx-auto" style="width: 100%; height: 300px;position: relative;z-index: 1;"></div>
                </div>
                <br><br>

                <div class="row">

'
;

 
                  $img = str_replace("@","&",$_GET['img']); 
                  echo '

                  <div class="row no-gutters">
                      <div class="col-4">
                          <img src="'.$img.'" class="img-fluid rounded-circle m-1 "  alt="" style="width:150px;height:120px;">
                      </div>
                      <div class="col">
                          <span style="font-size:1.5rem;"><strong>'.$nm.'</strong> </span>
                          ';
                  echo '                
                  <div class="row">
                    <div class="col-5">';

                  if ($rating == 1) {
                    echo '<p style="font-size:55px;">'.$rating.'</p>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons">star_outline</span>';
                    echo '<span class="material-icons">star_outline</span>';
                    echo '<span class="material-icons">star_outline</span>';
                    echo '<span class="material-icons">star_outline</span>';
                  }elseif ($rating > 1 && $rating < 2) {
                    echo '<span style="font-size:30px;">'.$rating.'</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons">star_half</span>';
                    echo '<span class="material-icons">star_outline</span>';
                    echo '<span class="material-icons">star_outline</span>';
                    echo '<span class="material-icons">star_outline</span>'; 
                  }elseif ($rating == 2) {
                    echo '<span style="font-size:30px;">'.$rating.'</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons">star_outline</span>';
                    echo '<span class="material-icons">star_outline</span>';
                    echo '<span class="material-icons">star_outline</span>'; 
                  }elseif ($rating > 2 && $rating < 3) {
                    echo '<span style="font-size:30px;">'.$rating.'</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons">star_half</span>';
                    echo '<span class="material-icons">star_outline</span>';
                    echo '<span class="material-icons">star_outline</span>'; 
                  }elseif ($rating == 3) {
                    echo '<span style="font-size:30px;">'.$rating.'</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons">star_outline</span>';
                    echo '<span class="material-icons">star_outline</span>'; 
                  }elseif ($rating > 3 && $rating < 4) {
                    echo '<span style="font-size:30px;">'.$rating.'</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons">star_half</span>';
                    echo '<span class="material-icons">star_outline</span>'; 
                  }elseif ($rating == 4) {
                    echo '<span style="font-size:30px;">'.$rating.'</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons">star_outline</span>'; 
                  }elseif ($rating > 4 && $rating < 5) {
                    echo '<span style="font-size:30px;">'.$rating.'</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons">star_half</span>';
                  }elseif ($rating == 5) {
                    echo '<span style="font-size:30px;">'.$rating.'</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                    echo '<span class="material-icons" >star</span>';
                  }elseif ($rating == 0) {
                    echo '<span style="font-size:30px;">'.$rating.'</span>';
                    echo '<span class="material-icons">star_outline</span>'; 
                    echo '<span class="material-icons">star_outline</span>'; 
                    echo '<span class="material-icons">star_outline</span>'; 
                    echo '<span class="material-icons">star_outline</span>'; 
                    echo '<span class="material-icons">star_outline</span>'; 
                  }
                  echo '
                   </div>
                    <div class="col">';
                    if ($price == 1) {
                      echo ' 
                      <p class=card-text" style="font-size:30px;">
                      <span class="material-icons">paid</span>
                      </p>';
                    }elseif ($price == 2) {
                      echo '                                  
                      <p class=card-text" style="font-size:30px;">
                      <span class="material-icons">paid</span>
                      <span class="material-icons">paid</span>
                      </p>';
                    }else{
                      echo '                                   
                      <p class=card-text" style="font-size:30px;">
                      <span class="material-icons">paid</span>
                      <span class="material-icons">paid</span>
                      <span class="material-icons">paid</span>
                      </p>';                          
                    }

                  echo'  
                    </div>
                    <div class="col">
                        <a class="btn" aria-current="page" onclick="add()" style="background-color:purple;color:white;"><span class="material-icons" style="font-size:35px;">add</span></a>
                    </div>
                  </div>';


                  echo'      
                          <p class="text-lead" style="font-size:1.2px;">'.$desc.'</p><br>';

                  if ($address == '') {

                  }else{
                      echo '<p style="font-size:1.2rem;"><b>Located at :</b>'.$address.'</p>';
                  }  

                  if ($hour == '') {

                  }else{
                      echo '<p style="font-size:1.2rem;"><b>Operation Hours:</b> '.$hour.'</p><br><br>';
                  }           

                  if ($contact == 'N/A') {

                  }else{
                      echo '<p style="font-size:1.2rem;"><b>Contact ::</b> '.$contact.'</p><br><br>';
                  }

                  if ($site == 'N/A') {

                  }else{
                     echo '<p style="font-size:1.2rem;"><b>Website :</b><a href="'.$site.'">'.$site.'</a></p><br>';                    
                  }     
                  echo'
                      </div>
                  </div>


                  ';
echo'
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
                          <form action="../../PHP/controller/review.php?nm=<?php echo $nm ?>&lat=<?php echo $lat ?>&lot=<?php echo $lot ?>&desc=<?php echo $desc ?>&img=<?php echo $img ?>&class=<?php echo $class ?>&rating=<?php echo $rating ?>&address=<?php echo $address ?>&hours=<?php echo $hour ?>&price=<?php echo $price ?>&contact=<?php echo $contact ?>&site=<?php echo $site ?>" method="post">
                            <div>
                              <input class="form-control" style="display: none;" name="place" value="<?php echo $nm ?>">
                              <input class="form-control" style="display: none;" name="id" value="'.$_SESSION['Id'].'">
                              <input class="form-control" style="display: none;" name="name" value="'.$_SESSION['UserName'].'"> </div>
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
                          <h2><?php echo $nm; ?> Reviews:</h2>';
  
                  $rev->ShowPost($nm);

echo'
                        </div>
                      </div>
                    </div>
                  </div>
                  <script type="text/javascript">
                  function add() {
                    Swal.fire({
                      title: "Destination added!",
                      text:  "<?php echo $nm ?>" +" has been added to your itinerary",
                      icon: "success",
                    }).then(function() {
                      window.location.href = "../../PHP/controller/itinerary.php?nm='.$nm.'&id='.$id.'";
                    });
                  }
                  </script>
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
          ">';

 $new = str_replace(' ', '%20', $nm);
            $YoutubeVids = file_get_contents("https://youtube.googleapis.com/youtube/v3/search?part=id&maxResults=10&q=".$new."&key=AIzaSyAqTTjLTHUEGLysV4vuF43wxl4LM5TpIko");
                 
            $yt = json_decode($YoutubeVids, TRUE); 

            for ($i=0; $i < 9; $i++) { 
            $did =  $yt['items'][$i]['id']['videoId'];            
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
                  <a href="https://www.youtube.com/watch?app=desktop&v='.$did.'"><img src="http://img.youtube.com/vi/'.$did.'/hqdefault.jpg" title="YouTube Video" alt="YouTube Video" style="width:200px;height:200px;"/></a>
                </div>
            ';

            }
echo'
                </div>
              </div>
            </div>
            <script>
            var firstTabEl = document.querySelector("#myTab li:last-child a")
            var firstTab = new bootstrap.Tab(firstTabEl)
            firstTab.show()
            </script>
          </div>
        </div>

    <div class="col text-center mx-auto bg-light" style="overflow: auto;height:720px;overflow-x: hidden;">
      <div class="p-2" style="font-weight: bolder; margin: auto; text-align:center;">
         <p class="text-center  sign" style="font-weight: bolder;">Nearby <span id="dest"></span> in <span id="name"></span><?php echo $nm; ?> </p>        
      </div>
<br>
          <button  id="landmark" class="btn  button1"><i class="fa fa-monument"></i>
          <strong>
            Historical landmark          
          </strong>
         </button>

          <button  id="church" class="btn  button1"><i class="fa fa-church"></i>
          <strong>
           Church
         </strong>
         </button>

          <button  id="shopping" class="btn  button1"><i class="fa fa-shopping-cart"></i>
          <strong>
           Shopping            
          </strong>
         </button>

          <button  id="park" class="btn  button1"><i class="fa fa-tree"></i>
          <strong>
           Park            
          </strong>
         </button>

          <button  id="restaurant" class="btn  button1"><i class="fa fa-cutlery"></i>
          <strong>
           Restaurant            
          </strong>
         </button>

          <button  id="attraction" class="btn  button1"><i class="fa fa-landmark"></i>
          <strong>
           Tourist attraction            
          </strong>
         </button>

          <button  id="reco" class="btn  button1"><i class="fa fa-map-marker"></i>
          <strong>
           Recommended for you            
          </strong>
         </button>  
          <br> 
          <br>
          <input type="text" class="form-control" id="input" placeholder="Search Place in Manila">

      <p id="result"></p>
      <div id="demo"> ';     

            $plc-> Recplace($lat,$lot,$nm,$class);

echo'    </div>


    </div>
      </div>
    </section>';
 