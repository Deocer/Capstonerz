<?php 

echo
'
<section style="background-color: white;height: calc(100vh - 100px);overflow-y: auto; width: 100%;margin: auto;">
<div class="container-fluid bg-light" style="height:100%; width: 100%;">
<h1 class="text-center p-1 sign" style="font-family: Caveat; font-weight: bolder; font-size:50px;"><img src="../../imgs/logo.png" style="height:100px;"></h1>
<ul class="nav nav-tabs nav-fill nav-lg" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><strong class="sign" style="font-size:25px;">Map</strong></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><strong class="sign" style="font-size:25px;">Reviews</strong></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false"><strong class="sign" style="font-size:25px;">Other Info.</strong></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false"><strong class="sign" style="font-size:25px;">Nearby Places</strong> </button>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <div id="map" class="mx-auto" style="width: 100%; height: 35rem;position: relative;z-index: 1;"></div>
                </div>
                <br><br>

                <div class="row">';

                  $img = str_replace("@","&",$_GET['img']); 
                  echo '

                  <div class="row no-gutters">
                      <div class="col-4">
                          <img src="'.$img.'" class="img-fluid rounded-circle m-1 "  alt="" style="width:20rem;height:20rem;">
                      </div>
                      <div class="col">
                          <span style="font-size:2.5rem;"><strong>'.$nm.'</strong> </span>
                          <br>
                          <br>
                          ';
                  echo '                
                  <div class="row">
                    <div class="col-5">';
                  if ($rating == 1) {
                    echo '<p style="font-size:85px;">'.$rating.'</p>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>';
                  }elseif ($rating > 1 && $rating < 2) {
                    echo '<span style="font-size:50px;">'.$rating.'</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_half</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                  }elseif ($rating == 2) {
                    echo '<span style="font-size:50px;">'.$rating.'</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                  }elseif ($rating > 2 && $rating < 3) {
                    echo '<span style="font-size:50px;">'.$rating.'</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_half</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                  }elseif ($rating == 3) {
                    echo '<span style="font-size:50px;">'.$rating.'</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                  }elseif ($rating > 3 && $rating < 4) {
                    echo '<span style="font-size:50px;">'.$rating.'</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_half</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                  }elseif ($rating == 4) {
                    echo '<span style="font-size:50px;">'.$rating.'</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                  }elseif ($rating > 4 && $rating < 5) {
                    echo '<span style="font-size:50px;">'.$rating.'</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_half</span>';
                  }elseif ($rating == 5) {
                    echo '<span style="font-size:50px;">'.$rating.'</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                    echo '<span style="font-size:30px;" class="material-icons" >star</span>';
                  }elseif ($rating == 0) {
                    echo '<span style="font-size:50px;">'.$rating.'</span>';
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                    echo '<span style="font-size:30px;" class="material-icons">star_outline</span>'; 
                  }
                  echo '
                   </div>
                    <div class="col">';
                    if ($price == 1) {
                      echo ' 
                      <p class=card-text" style="font-size:50px;">
                      <span class="material-icons"  style="font-size:50px;">paid</span>
                      </p>';
                    }elseif ($price == 2) {
                      echo '                                  
                      <p class=card-text" style="font-size:50px;">
                      <span class="material-icons"  style="font-size:50px;">paid</span>
                      <span class="material-icons"  style="font-size:50px;">paid</span>
                      </p>';
                    }else{
                      echo '                                   
                      <p class=card-text" style="font-size:50px;">
                      <span class="material-icons"  style="font-size:40px;">paid</span>
                      <span class="material-icons"  style="font-size:40px;">paid</span>
                      <span class="material-icons"  style="font-size:40px;">paid</span>
                      </p>';                          
                    }

                  echo'  
                    </div>
                    <div class="col">
                        <a class="btn" aria-current="page" onclick="add()" style="background-color:purple;color:white;"><span class="material-icons" style="font-size:55px;">add</span></a>
                    </div>
                  </div>';


                  echo'      
                          <p class="text-lead" style="font-size:2.2rem;">'.$desc.'</p><br>';

                  if ($address == '') {

                  }else{
                      echo '<p style="font-size:2.2rem;"><b>Located at :</b>'.$address.'</p>';
                  }  

                  if ($hour == '') {

                  }else{
                      echo '<p style="font-size:2.2rem;"><b>Operation Hours:</b> '.$hour.'</p><br><br>';
                  }           

                  if ($contact == 'N/A') {

                  }else{
                      echo '<p style="font-size:2.2rem;"><b>Contact ::</b> '.$contact.'</p><br><br>';
                  }

                  if ($site == 'N/A') {

                  }else{
                     echo '<p style="font-size:2.2rem;"><b>Website :</b><a href="'.$site.'">'.$site.'</a></p><br>';                    
                  }
                          
                  echo'
                      </div>
                  </div>


                  ';
echo '
 </div>  
  </div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                          <h2>'.$nm.'Reviews:</h2>';
                  $rev->ShowPost($nm);

 echo'                 </div>
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
            height: 1020px; 
            display: flex;
            flex-flow: row wrap;
            position: relative;
            margin: auto;
            text-align: center;
            overflow: auto;
          ">';
 
            $new = str_replace(' ', "%20", $nm);
            $YoutubeVids = file_get_contents("https://youtube.googleapis.com/youtube/v3/search?part=id&maxResults=10&q=".$new."&key=AIzaSyBi2oHeHWH5BD2Ck_iCaznlK2BZwDep998");
                 
            $yt = json_decode($YoutubeVids, TRUE); 

            for ($i=0; $i < 9; $i++) { 
            $did =  $yt["items"][$i]["id"]["videoId"];

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
  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
          <div style="font-size: 15px; width: 100%; margin:auto;text-align:center;">
                  <br>
                  <h1 class="sign">Nearby Places In
                      '.$nm.'
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
            <br>
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
          <br><br>
          <input type="text" class="form-control" id="input" placeholder="Search Place in Manila">
          <br><br>
      <div id="demo">';      

            $plc-> Recplace($lat,$lot,$nm,$class);
echo' 
      </div>
      <div id="result" style="height: 1400px;overflow-y: auto;"></div>

  </div>
</div>


</div>
</section>

';
               
include '../../Class/mobilenav.php';

 ?>