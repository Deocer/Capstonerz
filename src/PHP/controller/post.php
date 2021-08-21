<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/model/post.php');
/**
	 * 
	 */
	class PostControl extends database
	{
		
		function CreatePost($title, $cont, $tag, $rating, $id,$name)
		{
		 $this->insert($title, $cont, $tag, $rating, $id,$name);
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
	}

 ?>