<?php 
if (isset($_SESSION['close'])) {
	       echo '';	
}else{
	       echo '

<div class="modal open show w-100" id="sampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false"  style="display:block; background-color: rgba(1,1,1,0.5);">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-xl" style="min-width:800px;min-height:900px">
    <div class="modal-content" style="min-width:800px;min-height:900px">
      <div class="modal-header">
        <h3 class="modal-title text-muted" id="exampleModalLabel">Welcome'.$_SESSION['UserName'].'!</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" id="modalclose" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="height:80rem">
      <img src="../../imgs/s1.png" class="card-img-top" alt="..." style="width:100%">
      <br>
      <img src="../../imgs/s2.png" class="card-img-top" alt="..." style="width:100%">
      <br>
      <img src="../../imgs/s3.png" class="card-img-top" alt="..." style="width:100%">


      </div>
    </div>
  </div>
</div>


       ';

}





 ?>