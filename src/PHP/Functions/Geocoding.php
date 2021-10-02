<?php

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/user.php'); 
session_start();
if (isset($_SESSION['Id']) && $_SESSION['Permit'] != 'false') {

$id = $_SESSION['Id'];




	if (isset($_POST['prize'])) {


	$prize = $_POST['prize'];
	$id = $_SESSION['Id'];


	$i = new UserControl();
	$_SESSION['Permit'] = 'false';
	$i-> LocUser($prize,$id);
	header("location:../../PHP/Functions/location.html");
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