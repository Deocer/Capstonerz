<?php 
include '../model/user.php';


/**
	 * 
	 */
	class UserControl extends database
	{
		
		function CreateUser($Username, $Pass, $Lat, $Lot)
		{
		 $this->insert($Username, $Pass, $Lat, $Lot);
		}
	}

 ?>