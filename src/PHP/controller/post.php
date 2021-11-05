<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/post.php');

/**
	 * 
	 */
	class PostControl extends postdatabase
	{
		
		function CreatePost($title, $cont, $id, $name)
		{
		 $this->insert($title, $cont, $id, $name);
		}

		function DeletePost($id)
		{
		 $this->delete($id);
		}

		function UserDeletePost($id)
		{
		 $this->Userdelete($id);
		}

		function RestorePost($id)
		{
		 $this->restore($id);
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

		function GetArchive()
		{
		 
		 $res =  $this->fetchArchive();

		 return $res;
		 
		}

	    function Archives()
		{
		 
		 $res =  $this->Archived();

		 return $res;
		 
		}

	    function Actives()
		{
		 
		 $res =  $this->Active();

		 return $res;
		 
		}

	    function Deleteds()
		{
		 
		 $res =  $this->Deleted();

		 return $res;
		 
		}

		function UserPost($id)
		{
		 
		 $res =  $this->fetchUser($id);

		 return $res;
		 
		}

		function UserArchive($id)
		{
		 
		 $res =  $this->fetchUserArchive($id);

		 return $res;
		 
		}

		function Pop($UserID,$title,$cont,$name)
		{
		 
		 $res =  $this->fetchPop($UserID,$title,$cont,$name);

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

	    function UserPostFlags($id)// Queries the Flags table to get all post made .
		{
		 
		 $res =  $this->flagUser($id);

		 return $res;
		 
		}




	}



if (isset($_GET['nm'])){


$d = new PostControl();

$d->DeletePost($_GET['nm']);

header("location:../../pages/admin/dashboard.php");
exit();
}


if (isset($_GET['usd'])){


$d = new PostControl();

$d->UserDeletePost($_GET['usd']);

header("location:../../pages/user/user.php");
exit();
}



if (isset($_GET['res'])){


$d = new PostControl();

$d->RestorePost($_GET['res']);

header("location:../../pages/admin/dashboard.php");
exit();
}


if (isset($_GET['flagID']) && isset($_GET['UID'])){

$d = new PostControl();

$d-> flagPost($_GET['UID'], $_GET['flagID']);

}

 ?>