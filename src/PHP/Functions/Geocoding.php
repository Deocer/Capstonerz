<?php

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/user.php'); 

session_start();
if (isset($_SESSION['Id'])) {

$id = $_SESSION['Id'];




	if (isset($_POST['loc'])) {


	$loc = $_POST['loc'];
	$id = $_SESSION['Id'];


	$Geocoding = file_get_contents("http://www.mapquestapi.com/geocoding/v1/address?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&location=".$loc.",Philippines");
	   

	$geo = json_decode($Geocoding, TRUE);


	$lat =  $geo['results']['0']['locations']['0']['latLng']['lat'];
	$lot =  $geo['results']['0']['locations']['0']['latLng']['lng'];

	$i = new UserControl();

	$i-> LocUser($lat,$lot,$id);
	

	}
	else{

	}



}else{

$URL='../../../index.php';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
















 ?>