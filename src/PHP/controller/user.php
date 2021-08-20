<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/user.php');

/**
	 * 
	 */
	class UserControl extends database
	{
		
		function CreateUser($Username, $Pass, $Lat, $Lot)
		{
		 $this->insert($Username, $Pass, $Lat, $Lot);
		}

		function LocUser($Lat, $Lot,$id)
		{
		 $this->secloc($Lat, $Lot,$id);
		}

		function GetUser($Username, $Pass)
		{
		  $res = $this->fetch($Username, $Pass);
		  echo $res;
			 if ( $res != null) {

					 for ($ctr=0; $ctr < 0; $ctr++) { 

					 	 echo $res[1];
					 	 echo $res[2];
					 	 echo $res[3];
					 	 echo $res[4];

					 	}

			  		session_start();
			  		$_SESSION['Id'] =  $res[0];
			  		$_SESSION['UserName'] =  $res[1];
					$_SESSION['lat'] =  $res[3];
					$_SESSION['lot'] =  $res[4];

					echo $_SESSION['UserName'];
					echo $_SESSION['Id'];
					header("location:../../pages/user/user.php");
			  		return $res;

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


		function StarterUser($Username, $Pass)
		{
		  $res = $this->fetch($Username, $Pass);
			 if ( $res != null) {

					 for ($ctr=0; $ctr < 0; $ctr++) { 

					 	
					 	 echo $res[1];
					 	 echo $res[2];
					 	 echo $res[3];
					 	 echo $res[4];

					 	}

			  		session_start();
			  		$_SESSION['Id'] =  $res[0];
			  		$_SESSION['UserName'] =  $res[1];
					$_SESSION['lat'] =  $res[3];
					$_SESSION['lot'] =  $res[4];

					echo $_SESSION['UserName'];
					echo $_SESSION['Id'];
					header("location:../../pages/user/starter.php");
			  		return $res;

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

		function VerUser($Username)
		{
		 $this->verify($Username);
		}


	}

if (isset($_POST['Username']) &&  isset($_POST['Password'])){

echo $_POST['Username'];
echo $_POST['Password'];
$s = new UserControl();
$s->GetUser($_POST['Username'],$_POST['Password']);
}else{

	echo 'nada';
}


if (isset($_GET['Username']) &&  isset($_GET['Password'])){

echo $_GET['Username'];
echo $_GET['Password'];
$s = new UserControl();
$s->StarterUser($_GET['Username'],$_GET['Password']);
}else{


	echo 'nada';
}

 ?>