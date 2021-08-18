<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/place.php');
/**
	 * 
	 */
	class PlaceControl extends database
	{
		
		function AddItem($id,$name,$des, $lat, $lot,$img)
		{
			if ($this->fetch($id) == null) {
				 $this->insert($name,$des, $lat, $lot,$img);
			}else{
				header("location:../../pages/user/user.php");
			}
		
		}		

	}

 ?>