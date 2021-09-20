<?php

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/user.php'); 
session_start();
if (isset($_SESSION['Id']) && $_SESSION['Permit'] != 'false') {

$id = $_SESSION['Id'];




	if (isset($_POST['loc']) && isset($_POST['prize'])) {


	$loc = $_POST['loc'];
	$prize = $_POST['prize'];
	$id = $_SESSION['Id'];


	$Geocoding = file_get_contents("https://us1.locationiq.com/v1/search.php?key=pk.afe673b433d0909e7601c9ea96162a9e&q=".$loc.",Manila&format=json");
	   

	$geo = json_decode($Geocoding, TRUE);


	$lat =  $geo[0]['lat'];
	$lot =  $geo[0]['lon'];

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