<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/itinerary.php');
/**
	 * 
	 */
	class ItemControl extends database
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

		

	}


if (isset($_GET['nm']) ){

$s = new ItemControl();
$s->AddItem($_GET['nm'],$_GET['id'],$_GET['nm']);
}else{


}

 ?>