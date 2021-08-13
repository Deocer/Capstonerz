<?php
include 'CreateDesImgandTxt.php';


class Place_Box{
  private $q;
  public function __construct($q,$lat,$lot) {
  $des = new Destination($q);
  $imgurl = $des->getimg();
  $desc = $des->getdesc();
  if ($imgurl != 'IMAGE NOT AVAILABLE') {
    $destination_box = '

  <div class="card mx-auto bg-light" style="width: 100%;">
    <img src="'.$imgurl.'>"  style="height: 150px; lass="card-img-top" alt="NOT AVAILABLE">
    <div class="card-body mx-auto">
      <p class="card-title text-center"><b>'.str_replace('%20',' ',$q).'</b></p>
      <p class="card-text">'.$desc.'</p>
      <a href="../../pages/user/place.php?nm='.$q.'&lat='.$lat.'&lot='.$lot.'&desc='.$desc.'" class="btn btn-primary " type="button" >CHECK OUT</a>
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
