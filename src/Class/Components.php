<?php 

class Form
{
	
	function __construct()
	{
		echo '
			<div class="container-fluid" style="overflow:hidden;">
								    <form action="../../PHP/Functions/createPost.php" method="post">
										  <div>
											  <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
											</div>
											<br>
											<div>
											  <textarea class="form-control" id="exampleFormControlTextarea1" name="cont" placeholder="Tell Us About Your Experience!" rows="5" ></textarea>
											</div>
											<br>
										  <div class="container-fluid">

										  	<div class="row">

													  	<div class="col">

													  		<button type="button" name="tag" value="test" class="btn btn-primary">
																  Notifications <span class="badge bg-secondary"></span>
																</button>

													  	</div>

													  	<div class="col">
													  		 <fieldset>
															    <span class="star-cb-group">
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
															    </span>
															  </fieldset>
													  	</div>

										  	</div>
										  	

										  </div>
										  <br>

										  <div class="mb-3">
										  <input class="form-control" type="file" id="formFileMultiple" multiple>
										</div>

											<br>
										  <div>
										    <button type="submit" class="btn btn-primary">Sign in</button>
										  </div>
										</form>
		';
	}
}



class Intro{

function __construct(){

echo '<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>';
	
}




}

 ?>