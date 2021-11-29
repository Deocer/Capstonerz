<?php 
if (isset($_POST['close'])) {
	$_SESSION['close'] = 'set';
	echo $_SESSION['close'] = 'set';
}

 ?>