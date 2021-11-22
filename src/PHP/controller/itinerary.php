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

		function RecItem($id)
		{
		 $res = $this->Placefetch($id);
		 return $res;
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

if (isset($_POST['id']) ){

$s = new ItemControl();
$res = $s->RecItem(61);
//echo count($res);
	if (count($res) < 2) {
		return null;
	}else{
	$type1 =$res[0]['type'];
	$type2 =$res[1]['type'];
	$district1 = $res[0]['District'];
	$district2 = $res[1]['District'];
	$price1 = $res[0]['price'];
	$price2 = $res[1]['price'];

	$age = array("District1"=>$res[0]['District'], "District2"=>$res[1]['District'], "Type1"=>$res[0]['type'],"Type2"=>$res[1]['type'],"Price1"=>$res[0]['price'],"Price2"=>$res[1]['price'] );

	echo $res = json_encode($age);

	//echo '<pre>'; print_r($res); echo '</pre>';
	return $res;	
	}

}else{


}

 ?>