<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/user.php'); 

if ($_SESSION['Permit'] == 'true') {

$id = $_SESSION['Id'];


	if (isset($_POST['prize'])) {


	$prize = $_POST['prize'];
	$district = $_POST['district'];
	$type = $_POST['type'];
	$_SESSION['price'] = $prize;
	$_SESSION['type'] = $type;
	$_SESSION['district'] = $district;


	$i = new UserControl();
	$_SESSION['Permit'] = 'false';
	$i-> SetUser($prize,$type,$district,$id);


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