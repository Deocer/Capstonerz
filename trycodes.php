<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'src/PHPmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
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
    $mail->Password = 'ben10ultalien';// SMTP password

    $mail->setFrom('moralesdeocer@gmail.com', 'Wander Travel Website');//Your application NAME and EMAIL
    $mail->Subject = 'Change Password Email Test';//Message subject
    $mail->MsgHTML('HTML code');// Message body
    $mail->addAddress('marc.gab.lasheras08@gmail.com', 'User Name');// Target email
    $mail->addAddress('erylcarillo@gmail.com', 'User Name');
    $mail->addAddress('manciaraycarlo@gmail.com', 'User Name');


    $mail->send();
