<?php 
include '../model/post.php';
/**
	 * 
	 */
	class PostControl extends database
	{
		
		function CreatePost($title, $cont, $tag, $rating, $id)
		{
		 $this->insert($title, $cont, $tag, $rating, $id);
		}
	}

 ?>