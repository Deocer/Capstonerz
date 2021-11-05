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
			 $res = $this->fetchUsers();
			 foreach($res as $r){
		 		$i++;
		 	 }
		 	 for ($ctr=0; $ctr < $i; $ctr++) { 
		 	 	$fl =0;
		 	 	$post  = $p->UserPost($res[$ctr]['UserID']);
		 	 	$pl=0;
		 	 	foreach($post as $r ){
		 			$pl++;
		 	 	}
			 	$flaged = $p->UserPostFlags($res[$ctr]['UserID']);
		 	 	foreach($flaged as $d ){
		 			$fl++;
		 	 	}
			 	 echo '
			 		  <tr>
			 		    <th scope="row">'.$res[$ctr]['UserID'].'</th>
					    <td>'.$res[$ctr]['UserName'].'</td>
					    <td>'.$pl.'</td>
					    <td>'.$fl.'</td>
					    <td>'.$res[$ctr]['Status'].'</td>
					    <td>
						<button type="button" class="btn btn-success" onClick="Unflag('.$res[$ctr]['UserID'].')">Unflag User</button>
						<button type="button" class="btn btn-danger" onClick="FlagU('.$res[$ctr]['UserID'].')">Flag User</button>
				        </td>
					  <tr>
			 	 ';

			 }

	}

	function Normals(){
		 $i = 0;
		 $res =  $this->fetchNormal();
		  foreach($res as $r ){
		 	$i++;
		 }

		 echo $i;

		 return $i;

	}

	function Flagged(){
		 $i = 0;
		 $res =  $this->fetchFlagged();
		  foreach($res as $r ){
		 	$i++;
		 }

		 echo $i;

		 return $i;

	}
}

 ?>