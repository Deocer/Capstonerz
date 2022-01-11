<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../../PHPmailer/PHPMailerAutoload.php';


function sendmail($name,$email, $sub, $mes){

 $mail = new PHPMailer(true);
    $mail->SMTPDebug = 2;
    $mail->isSMTP();// Set mailer to use SMTP
    $mail->CharSet = "utf-8";// set charset to utf8
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

    $mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
    $mail->Port = 587;// TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->isHTML(true);// Set email format to HTML

    $mail->Username = 'gaiavanshee@gmail.com';// SMTP username
    $mail->Password = 'pbgiumectyttxxoj';// SMTP password


    $mail->setFrom($email, 'Wander Travel Website');//Your application NAME and EMAIL
    $mail->Subject = ' User Message From '.$name.'';//Message subject
    $img = "https://img5.goodfon.com/wallpaper/nbig/4/6d/manila-bay-pasay-mall-of-asia-filippiny-naberezhnaia.jpg";
    $mail->Body = '
    <section style="background-image: url('.$img.');">
    <br><br><br>
     <div style="width:80%; margin:auto; background-color:white;">
      <h3 style="margin:0px; padding-left:10px; padding-right:10px; padding-top:10px; Text-align:center;">User Concern: <br>'.$sub.' </h3>
      <p style="padding:20px; text-align:center; margin:0px; color:black">
           '.$mes.'
    </p>
    <br>
    </div>
    <br>
    <p style="text-align:center; color:white;padding-bottom:50px;">@2021 4-1N Group 5 PUP Capstone 2  &nbsp;&nbsp;&nbsp;&nbsp;<p>   

    </section>
    <br>
    ';

    $mail->addAddress("moralesdeocer@gmail.com", "Wander Travel Website");// Target email


    $mail->send();


}

 if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['mesg'])){
    if (sendmail($_POST['name'] , $_POST['email'] , $_POST['subject'] , $_POST['mesg'])) {
     header("google.com");
    exit();   
    }
}