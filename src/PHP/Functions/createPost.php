<?php 
session_start();

include '../controller/post.php';

if (isset($_POST['title']) &&  isset($_POST['cont']) && isset($_POST['rating'])){

$title =$_POST['title'];
$cont =$_POST['cont'];
$rating =$_POST['rating'];
$tag = 'temp';
$id = $_SESSION['Id'];
$name = $_SESSION['UserName'];

$c = new PostControl();

$c->CreatePost($title, $cont,$tag, $rating, $id,$name);

}











 ?>