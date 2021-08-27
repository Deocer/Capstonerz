<?php
include 'CreateDesImgandTxt.php';


class Place_Box{
  private $q;

  public function getLoc($q,$lat,$lot,$desc,$imgurl,$type,$rating,$hours,$address) {
  if ($q != '') {
    $destination_box = '
  <div class="card mb-1" style="width:100%;">
  <div class="row g-0">
    <div class="col">
      <div class="card-body">

        <p class="card-title"><a href="../../pages/user/place.php?nm='.$q.'&lat='.$lat.'&lot='.$lot.'&desc='.$desc.'&img='.$imgurl.'&class='.$type.'&rating='.$rating.'" class="text-body"  style="text-decoration: none" ><b><small class="text-muted">'.str_replace('%20',' ',$q).'</small></b></a></p>
        <p class=""><small class="text-muted"><span class="fa fa-star"></span> '.$rating.'</small></p>
        <p class=""><sub class="text-muted">'.$hours.'</sub></p>
        <p class=""><sub class="text-muted">'.$address.'</sub></p>

      </div>
    </div>
    <div class="col mx-auto" style="margin:auto;">
      <img src="'.$imgurl.'" class="" alt="..." style="width:80%; height:100px;">
    </div>
  </div>
</div>
  ';

  echo $destination_box;
  }else{
    echo '';
  }

}


}



 ?>
