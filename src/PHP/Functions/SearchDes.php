<?php 
session_start();
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/place.php');
/**
	 * 
	 */
	class Placesearch extends PlaceView
	{
		

		function GetPlace($name,$lat,$lot)
		{
		 
		 $res =  $this->Search($name,$lat,$lot);

		 return $res;
		 }
					

	}

if (isset($_POST['search'])){
$d = new Placesearch();
echo $d->GetPlace($_POST['search'],$_SESSION['lat'],$_SESSION['lot']);
}

 ?> 