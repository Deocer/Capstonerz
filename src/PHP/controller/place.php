<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/place.php');
/**
	 * 
	 */
	class PlaceControl extends placedatabase
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

		 function GetRecommended($name,$type)
		{
		 
		 $res =  $this->Recommend($name,$type);

		 return $res;
		 }

	
		function GetByType($district,$type)
		{
		 
		 $res =  $this->fetchbytype($district,$type);

		 return $res;
		 }

		function GetByValue($district,$type,$price)
		{
		 
		 $res =  $this->fetchbyUserValue($district,$type,$price);

		 return $res;
		 }

		function SortPrice($district,$type,$price)
		{
		 
		 $res =  $this->SortbyPrice($district,$type,$price);

		 return $res;
		 }

		function SortRating($district,$type)
		{
		 
		 $res =  $this->SortbyRating($district,$type);

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