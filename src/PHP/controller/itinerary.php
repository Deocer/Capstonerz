<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/itinerary.php');
/**
	 * 
	 */
	class ItemControl extends database
	{
		
		function AddItem($name,$des, $lat, $lot,$img, $id)
		{
		 $this->insert($name,$des, $lat, $lot,$img, $id);
		}


		function GetItem($id)
		{
		 
		 $res =  $this->fetch($id);

		 return $res;
		 
		}

		

	}


if ( isset($_GET['desc']) && isset($_GET['nm']) && isset($_GET['lat']) && isset($_GET['lot']) && isset($_GET['img'])){


$s = new ItemControl();
$s->AddItem($_GET['nm'],$_GET['desc'],$_GET['lat'],$_GET['lot'],$_GET['img'], $_GET['id']);
}else{

	echo 'nada';
}

 ?>