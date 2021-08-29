<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/place.php');
/**
	 * 
	 */
	class PlaceControl extends data
	{
		
		function AddItem($id,$name,$des, $lat, $lot,$img,$rating,$type,$price,$hours,$address)
		{
			if ($this->fetch($id) == null) {
				 $this->insert($name,$des, $lat, $lot,$img,$rating,$type,$price,$hours,$address);
			}else{
				header("location:../../pages/user/user.php");
			}
		
		}


		function GetVname($name)
		{
		 
		 $res =  $this->fetch($name);

		 return $res;
		 }
	
		function GetNear($lat,$lot)
		{
		 
		 $res =  $this->rec($lat,$lot);

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