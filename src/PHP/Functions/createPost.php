<?php 
session_start();

include $_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/post.php';


function uploader($id,$Name){

    if (isset($_FILES['file'])) {
    $total = count($_FILES['file']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {

        $file_name = $_FILES['file']['name'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_error = $_FILES['file']['error'][$i];

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        $allowed = array('txt','jpg','srt','png','jpeg',);

        if (in_array($file_ext, $allowed)) {
            if ($file_error === 0) {
                if ($file_size <= 2097152) {
                    
                    $file_name_new = uniqid('',true) . '.' .$file_ext;
                    $file_destination = '../../uploads/'. $file_name_new;
                    if (move_uploaded_file($file_tmp, $file_destination)) {
                        $x = new PostControl();
                         $x->Pane($file_destination,$id,$Name);
                        }
                    }
                }
            }

        }   

    }

}


if (isset($_POST['title']) &&  isset($_POST['cont'])){

$title =$_POST['title'];
$cont =$_POST['cont'];
$id = $_SESSION['Id'];
$name = $_SESSION['UserName'];


$d = new PostControl();

$d->CreatePost($title, $cont, $id,$name);

$num  = $d->Pop($id,$title,$name);

uploader($num,$name);

header("location:../../pages/user/user.php");
exit();

}else{
}















 ?>