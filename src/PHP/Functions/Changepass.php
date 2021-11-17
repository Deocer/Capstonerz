<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/controller/user.php');

class Validations{

    function emptyInput($password,$cpassword){
        $result;
        if (empty($password) ||empty($cpassword)) 
            {
                $result = true;
            }else{
                $result = false;
            }
        return $result;
    }



     function Passlength($password,$cpassword){
        $result;
        if (strlen($password) < 6 && strlen($cpassword) < 6 )
        {
            $result = true;
        }else{
            $result =false; 
        }
        return $result;
    }

     function Samepass($password,$cpassword){
        $result;
        if (strcmp($password,$cpassword))
        {
            $result = true;
        }else{
            $result =false; 
        }
        return $result;
    }


}

    if(isset($_POST['password']) &&  isset($_POST['cpassword'])){

        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $valid = new Validations();


        if ($valid->emptyInput($password,$cpassword) !== false) {
                header("location:../../pages/reset.php?error=emptyinput&mail=".$_GET['mail']."");
                exit();       
        }elseif ($valid->Passlength($password,$cpassword) !== false) {
            header("location:../../pages/reset.php?error=Shortpass&mail=".$_GET['mail']."");
            exit();
        }elseif ($valid->Samepass($password,$cpassword) !== false) {
            header("location:../../pages/reset.php?error=Notsame&mail=".$_GET['mail']."");
            exit();
        }else{
               $s = new UserControl();
               $s->Changepass($_POST['password'],$_POST['email']);
        }

    } 
    else{
        header("location:../../pages/reset.php");
        exit();
    }



 ?>