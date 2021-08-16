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

	}

 ?>