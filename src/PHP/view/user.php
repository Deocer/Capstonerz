<?php 
include '../model/user.php';


/**
	 * 
	 */
	class UserView extends database
	{		

		function GetUser($Username, $Pass)
		{


			 $res = $this->fetch($Username, $Pass);
			 if ( $res != null) {

					 for ($ctr=0; $ctr < 1; $ctr++) { 

					 	 echo $res[$ctr]['UserName'];
					 	 echo $res[$ctr]['Pass'];
					 	 echo $res[$ctr]['Lat'];
					 	 echo $res[$ctr]['Lot'];

					 	}

			  		echo 'log in successful';
			  		return $res;

			  }
			  else{

			  	return 'None';
			  }

			 

	}

}

 ?>