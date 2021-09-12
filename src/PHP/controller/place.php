<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/place.php');
/**
	 * 
	 */
	class PlaceControl extends data
	{
		
		function AddItem($name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city)
		{
			if ($this->fetch($name) == null) {
				 $this->insert($name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city);
				 echo "g";
			}else{
			}
		
		}


		function GetVname($name)
		{
		 
		 $res =  $this->fetch($name);

		 return $res;
		 }
	
		function GetNear($type,$city)
		{
		 
		 $res =  $this->rec($type,$city);

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