<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/user.php');

/**
	 * 
	 */
	class UserControl extends userdatabase
	{
		
		function CreateUser($Username, $Pass, $Status)// Used in the registration process to input
		{
		 $this->insert($Username, $Pass, $Status);
		}

		function SetUser($Budget,$des,$district,$id)// Used to set the user's budget
		{
		 $this->secloc($Budget,$des,$district,$id);
		}

		function GetUser($Username, $Pass)// Used of the user log in
		{
		  $res = $this->fetch($Username, $Pass);

			 if ( $res != null) {

					 for ($ctr=0; $ctr < 0; $ctr++) { 



					 	}




			  		$_SESSION['Id'] =  $res[0];
			  		$_SESSION['UserName'] =  $res[1];
					$_SESSION['Permit'] = 'false';
					$_SESSION['Status'] = $res[3];
					$_SESSION['price'] = $res[4];
					$_SESSION['type'] = $res[5];
					$_SESSION['district'] = $res[6];
					$_SESSION['Auth'] = $res[7];


					
			  		header("location:../../PHP/Functions/location.html");
			  		exit();

			  }
			  else{

					header("location:../../pages/Login.php?error=Wrong");
			  		exit();
			  }		 
		}


		function StarterUser($Username, $Pass)// Only in the registration process. This function points the user to the starter page
		{
		  $res = $this->fetch($Username, $Pass);
			 if ( $res != null) {

					 for ($ctr=0; $ctr < 0; $ctr++) { 

					 	


					 	}

			  		$_SESSION['Id'] =  $res[0];
			  		$_SESSION['UserName'] =  $res[1];
					$_SESSION['Permit'] = 'true';
					$_SESSION['Status'] = $res[3];
					$_SESSION['price'] = $res[4];
					$_SESSION['type'] = $res[5];
					$_SESSION['district'] = $res[6];
					$_SESSION['Auth'] = $res[7];

					header("location:../../pages/user/starter.php");
			  		exit();

			  }
			  else{

			  	echo '
				<div class="alert alert-danger d-flex align-items-center" role="alert">
				  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
				  <div>
				    An example danger alert with an icon
				  </div>
				</div>

				';
			  }		 
		}

		function VerUser($Username)// Verifies if Username is Taken
		{
		 $this->verify($Username);
		}

		function fetchUsers()//Select All User
		{
		 $res = $this->selectAll();
		 return $res;
		}

		function fetchNormal()//Select All User
		{
		 $res = $this->selectNormal();
		 return $res;
		}

		function fetchFlagged()//Select All User
		{
		 $res = $this->selectFlagged();
		 return $res;
		}

	    function StatUsers($id)//Flag User
		{
		 $res = $this->setstat($id);
		 header("location:../../pages/admin/dashboard.php");
		 exit();
		}

	    function UnStatUsers($id)//Unflag the User
		{
		 $res = $this->unstat($id);
		 header("location:../../pages/admin/dashboard.php");
		 exit();
		}



	}

if (isset($_POST['Username']) &&  isset($_POST['Password'])){


$s = new UserControl();
$s->GetUser($_POST['Username'],$_POST['Password']);

}else{

}


if (isset($_GET['Username']) &&  isset($_GET['Password'])){


$s = new UserControl();
$s->StarterUser($_GET['Username'],$_GET['Password']);
}else{

}

if (isset($_GET['Status'])){


$s = new UserControl();
$s->StatUsers($_GET['Status']);
}else{

}

if (isset($_GET['Unstat'])){


$s = new UserControl();
$s->UnStatUsers($_GET['Unstat']);
}else{

}

 ?>