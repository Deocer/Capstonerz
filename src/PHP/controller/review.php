<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/review.php');
/**
	 * 
	 */
	class ReviewControl extends database
	{
		
		function CreateReview($place, $cont,$rating, $id, $name)
		{
		 $this->insert($place, $cont,$rating, $id, $name);
		}

		function DeleteReview($id)
		{
		 $this->delete($id);
		}

		function GetReview($nm)
		{
		 
		 $res =  $this->fetch($nm);

		 return $res;
		 
		}

		function UserReview($id)
		{
		 
		 $res =  $this->fetchUser($id);

		 return $res;
		 
		}

	}

if ( isset($_POST['name'])  && isset($_POST['place'])  && isset($_POST['cont'])  && isset($_POST['id'])){

if (isset($_POST['rating'])) {
	$rating = $_POST['rating'];
}else{
	$rating = 0;
}
$place = $_POST['place'];
$name = $_POST['name'];
$id = $_POST['id'];
$cont = $_POST['cont'];
echo 'mobalista';
$d = new ReviewControl();
$d->CreateReview($place, $cont,$rating, $id, $name);
}


 ?>