<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/place.php');
/**
	 * 
	 */
	class PlaceControl extends data
	{
		
		function AddItem($id,$name,$des, $lat, $lot,$img,$rating,$type)
		{
			if ($this->fetch($id) == null) {
				 $this->insert($name,$des, $lat, $lot,$img,$rating,$type);
			}else{
				header("location:../../pages/user/user.php");
			}
		
		}

		
		function GetItem($lat,$lot)
		{
		 
		 $res =  $this->fetch($lat,$lot);

		 return $res;
		 }


		 function Getplaces()
		{
		 
		 $res =  $this->select();

		 return $res;
		 }
		

		
		function GetName()
		{
		 
		 $res =  $this->placename();

		 return $res;
		 }
					

	}



 ?>