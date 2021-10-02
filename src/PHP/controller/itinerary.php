<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/itinerary.php');
/**
	 * 
	 */
	class ItemControl extends itinerarydatabase
	{
		
		function AddItem($name,$id,$pname)
		{
		 $this->insert($name,$id,$pname);
		}


		function GetItem($id)
		{
		 
		 $res =  $this->fetch($id);

		 return $res;
		 
		}

		function DeleteItem($id)
		{
		 $this->delete($id);
		}

		

	}


if (isset($_GET['nm']) ){

$s = new ItemControl();
$s->AddItem($_GET['nm'],$_GET['id'],$_GET['nm']);
}else{


}

if (isset($_GET['delete']) ){

$s = new ItemControl();
$s->DeleteItem($_GET['delete']);
}else{


}


 ?>