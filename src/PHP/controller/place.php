<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/place.php');
/**
	 * 
	 */
	class PlaceControl extends placedatabase
	{
		
		function AddItem($name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city,$contact, $site)
		{
			$this->insert($name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city,$contact, $site);

		}

		function UpdateItem($name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city,$contact, $site, $id)
		{
			$this->update($name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city,$contact, $site, $id);

		}

		function DeleteItem($id)
		{
		 
		 $res =  $this->delete($id);

		 return $res;
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

		function AscPrice($district,$type,$price)
		{
		 
		 $res =  $this->AscSortbyPrice($district,$type,$price);

		 return $res;
		 }

		function DescPrice($district,$type,$price)
		{
		 
		 $res =  $this->DescSortbyPrice($district,$type,$price);

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
					
		function SearchName($name)
		{
		 
		 $res =  $this->SearchPlace($name);

		 return $res;
		 }

		function Itinerarylast($district,$district2,$type,$type2)
		{
		 
		 $res =  $this->Last2($district,$district2,$type,$type2);
		 return $res;
		 }
			
	}

if (isset($_POST['add']) || isset($_POST['placename']) ){

$plc = new PlaceControl();
$plc-> AddItem($_POST['name'],$_POST['desc'],$_POST['lat'],$_POST['lot'],$_POST['image'],$_POST['rating'],$_POST['reviews'],$_POST['type'],$_POST['price'],$_POST['hours'],$_POST['address'],$_POST['district'],$_POST['contact'], $_POST['site']);


}

if (isset($_POST['update']) ){

$plc = new PlaceControl();
$plc-> UpdateItem($_POST['name'],$_POST['desc'],$_POST['lat'],$_POST['lot'],$_POST['image'],$_POST['rating'],$_POST['reviews'],$_POST['type'],$_POST['price'],$_POST['hours'],$_POST['address'],$_POST['district'],$_POST['contact'], $_POST['site'], $_POST['id'] );


}

if (isset($_POST['delete']) ){

$plc = new PlaceControl();
$plc-> DeleteItem($_POST['id']);


}

 ?>