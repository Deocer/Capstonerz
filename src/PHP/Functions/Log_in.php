<?php 
include '../model/user.php';


	class Log extends database
	{		

		function LogUser($Username, $Pass)
		{


			 $res = $this->fetch($Username, $Pass);
			 if ( $res != null) {

					 for ($ctr=0; $ctr < 0; $ctr++) { 

					 	 echo $res[$ctr]['UserName'];
					 	 echo $res[$ctr]['Pass'];
					 	 echo $res[$ctr]['Lat'];
					 	 echo $res[$ctr]['Lot'];

					 	}

			  		session_start();
			  		$_SESSION['Id'] =  $res[$ctr]['UserID'];
			  		$_SESSION['UserName'] =  $res[$ctr]['UserName'];
					$_SESSION['lat'] =  $res[$ctr]['Lat'];
					$_SESSION['lot'] =  $res[$ctr]['Lot'];

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

		function StrUser($Username, $Pass)
		{


			 $res = $this->fetch($Username, $Pass);
			 if ( $res != null) {

					 for ($ctr=0; $ctr < 0; $ctr++) { 

					 	 echo $res[$ctr]['UserName'];
					 	 echo $res[$ctr]['Pass'];
					 	 echo $res[$ctr]['Lat'];
					 	 echo $res[$ctr]['Lot'];

					 	}

			  		session_start();
			  		$_SESSION['Id'] =  $res[$ctr]['UserID'];
			  		$_SESSION['UserName'] =  $res[$ctr]['UserName'];
					$_SESSION['lat'] =  $res[$ctr]['Lat'];
					$_SESSION['lot'] =  $res[$ctr]['Lot'];

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

}


if (isset($_POST['Username']) &&  isset($_POST['Password'])){

$s = new Log();
$s->LogUser($_POST['Username'],$_POST['Password']);
}else{


	echo 'nada';
}


if (isset($_GET['Username']) &&  isset($_GET['Password'])){

$s = new Log();
$s->StrUser($_GET['Username'],$_GET['Password']);
}else{


	echo 'nada';
}




 ?>











