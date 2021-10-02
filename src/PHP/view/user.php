<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/user.php');


/**
	 * 
	 */
	class UserView extends UserControl 
	{		

	function AdminUsers()
		{
			 $p = new PostControl();
			 $i = 0;
			 $pl =0;
			 $fl =0;
			 $res = $this->fetchUsers();
			 foreach($res as $r){
		 		$i++;
		 	 }
		 	 for ($ctr=0; $ctr < $i; $ctr++) { 
		 	 	$post  = $p->UserPost($res[$ctr]['UserID']);
		 	 	$pl=0;
		 	 	foreach($post as $r ){
		 			$pl++;
		 	 	}
			 	$flaged = $p->UserPostFlags();
		 	 	foreach($post as $r ){
		 			$fl++;
		 	 	}
			 	 echo '
			 		  <tr>
			 		    <th scope="row">'.$res[$ctr]['UserID'].'</th>
					    <td>'.$res[$ctr]['UserName'].'</td>
					    <td>'.$pl.'</td>
					    <td>'.$fl.'</td>
					    <td>'.$res[$ctr]['Status'].'</td>
					  <tr>
			 	 ';

			 }

	}

}

 ?>