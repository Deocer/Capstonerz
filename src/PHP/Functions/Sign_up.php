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
				header('location:Log_in.php?Username='.$Username.'&Password='.$Pass.''); 
			}else{
				header("location:../../pages/Signup.php?error=nameTaken");
			}


	}

}

class Validations{

	function emptyInput($name, $password){
		$result;
		if (empty($name) ||empty($password)) 
			{
				$result = true;
			}else{
				$result = false;
			}
		return $result;
	}


	 function Invalidname($name){
	   	$result;
		if (preg_match("/^[a-zA-Z0-9]+$/", $name))
		{
		    $result = false;
		}else{
		    $result =true; 
		}
		return $result;
	}
	 function Namelength($name){
	   	$result;
		if (strlen($name) < 8)
		{
		    $result = true;
		}else{
		    $result =false; 
		}
		return $result;
	}
	 function Passlength($password){
	   	$result;
		if (strlen($password) < 6 )
		{
		    $result = true;
		}else{
		    $result =false; 
		}
		return $result;
	}


}





	if(isset($_POST['name']) &&  isset($_POST['password'])){

		$name = $_POST['name'];
        $password = $_POST['password'];
        $valid = new Validations();


        if ($valid->emptyInput($name, $password) !== false) {
        	header("location:../../pages/Signup.php?error=emptyinput");
        	exit();
        }

         if ($valid->Invalidname($name) !== false) {
        	header("location:../../pages/Signup.php?error=name");
        	exit();
        }
         if ($valid->Namelength($name) !== false) {
            header("location:../../pages/Signup.php?error=Shortname");
            exit();
        }

         if ($valid->Passlength($password) !== false) {
            header("location:../../pages/Signup.php?error=Shortpass");
            exit();
        }

        $s = new Maker();
		$s->NewUser($_POST['name'],$_POST['password']);


 	} 
    else{
 		header("location:../pages/sign_up.php");
 		exit();
 	}
   	


 ?>











