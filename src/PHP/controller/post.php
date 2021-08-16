<?php 
include '../model/post.php';
/**
	 * 
	 */
	class PostControl extends database
	{
		
		function CreatePost($title, $cont, $tag, $rating, $id,$name)
		{
		 $this->insert($title, $cont, $tag, $rating, $id,$name);
		}


		function GetPost()
		{
		 
		 $res =  $this->fetchPost();

		 return $res;
		 
		}
	}

 ?>