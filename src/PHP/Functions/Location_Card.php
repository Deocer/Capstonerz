<?php
include 'CreateDesImgandTxt.php';


class Place_Box{
  private $q;
  public function __construct($q,$lat,$lot) {
  $des = new Destination($q);
  $imgurl = $des->getimg();
  $desc = $des->getdesc();

  $destination_box = '

  <div class="card mx-auto bg-light" style="width: 300px;">
    <img src="'.$imgurl.'>"  style="height: 300px; lass="card-img-top" alt="NOT AVAILABLE">
    <div class="card-body mx-auto">
      <h5 class="card-title text-center p-1">'.str_replace('%20',' ',$q).'</h5>
      <p class="card-text">'.$desc.'</p>
      <a href="../../pages/user/place.php?nm='.$q.'&lat='.$lat.'&lot='.$lot.'&desc='.$desc.'" class="btn btn-primary " type="button" >CHECK OUT</a>
    </div>
  </div>
  ';

  echo $destination_box;
    }

}



 ?>
