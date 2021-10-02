<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/post.php');
/**
	 * 
	 */
	class PostControl extends postdatabase
	{
		
		function CreatePost($title, $cont, $tag, $rating, $id,$name)
		{
		 $this->insert($title, $cont, $tag, $rating, $id,$name);
		}

		function DeletePost($id)
		{
		 $this->delete($id);
		}

		function Pane($src, $id, $name)
		{
		 $this->paneinsert($src, $id, $name);
		}


		function GetPost()
		{
		 
		 $res =  $this->fetchPost();

		 return $res;
		 
		}

		function UserPost($id)
		{
		 
		 $res =  $this->fetchUser($id);

		 return $res;
		 
		}

		function Pop($id,$title,$name)
		{
		 
		 $res =  $this->fetchPop($id,$title,$name);

		 return $res;
		 
		}


		function Pic($id)
		{
		 
		 $res =  $this->fetchPic($id);

		 return $res;
		 
		}

		function TagPost($tag)
		{
		 
		 $res =  $this->fetchTag($tag);

		 return $res;
		 
		}

		function flagPost($id, $pid)
		{

			if ($res = $this->verifyflag($id, $pid) == null) 
			{
				$this->flag($id, $pid);
				header('location:../../pages/user/user.php?flag'); 
			}else{
				header('location:../../pages/user/user.php');
			}		 

		}

	    function fetchPlag($PostID)// Queries the Flags table to get all flags related to a single post. Those flags are counted in the View part to identify how many times the post has been flagged.
		{
		 
		 $res =  $this->fetchflag($PostID);

		 return $res;
		 
		}

	    function UserPostFlags()// Queries the Flags table to get all post made .
		{
		 
		 $res =  $this->flagUser();

		 return $res;
		 
		}




	}



if (isset($_GET['nm'])){


$d = new PostControl();

$d->DeletePost($_GET['nm']);

header("location:../../pages/admin/dashboard.php");
exit();
}


if (isset($_GET['flagID']) && isset($_GET['UID'])){

$d = new PostControl();

$d-> flagPost($_GET['UID'], $_GET['flagID']);

}

 ?>