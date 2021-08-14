<?php 
include '../model/user.php';


/**
	 * 
	 */
	class Maker extends database
	{		

		function NewUser($Username, $Pass)
		{
			if ($res = $this->verify($Username) == null) {
				$this->insert($Username, $Pass, '0', '0'); 
			}else{
				echo 'Account Username Already Taken';
			}


	}

}

if (isset($_POST['name']) &&  isset($_POST['password'])){


$s = new Maker();
$s->NewUser($_POST['name'],$_POST['password']);

}else{



	echo 'nada';
}




 ?>











