<?php

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/user.php'); 
session_start();
if (isset($_SESSION['Id']) && $_SESSION['Permit'] != 'false') {

$id = $_SESSION['Id'];




	if (isset($_POST['loc']) && isset($_POST['prize'])) {


	$loc = $_POST['loc'];
	$prize = $_POST['prize'];
	$id = $_SESSION['Id'];


	$Geocoding = file_get_contents("http://www.mapquestapi.com/geocoding/v1/address?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&location=".$loc.",Philippines");
	   

	$geo = json_decode($Geocoding, TRUE);


	$lat =  $geo['results']['0']['locations']['0']['latLng']['lat'];
	$lot =  $geo['results']['0']['locations']['0']['latLng']['lng'];

	$i = new UserControl();
	$_SESSION['Permit'] = 'false';
	$_SESSION['City'] = $loc;
	$i-> LocUser($lat,$lot,$loc,$prize,$id);
	header("location:../../pages/user/user.php");
	exit();
	

	}
	else{

	}



}else{

$URL='../../../index.php';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
















 ?>