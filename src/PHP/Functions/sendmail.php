<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../../PHPmailer/PHPMailerAutoload.php';


function sendmail($email,$username){

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

    $enc_string = $email;
      

    $ciphering = "AES-128-CTR";
      
    // Use OpenSSl Encryption method
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
      
    // Non-NULL Initialization Vector for encryption
    $encryption_iv = '1234567891011121';
      
    // Store the encryption key
    $encryption_key = "When I set out to lead humanity along my Golden Path, I promised them a lesson their bones would remember. I know a profound pattern which humans deny with their words even while their actions affirm it. They say they seek security and quiet, the condition they call peace. Even as they speak, they create the seeds of turmoil and violence. If they find their quiet security, they squirm in it. How boring they find it. Look at them now. Look at what they do while I record these words. Hah! I give them enduring eons of enforced tranquility which plods on and on despite their every effort to escape into chaos. Believe me, the memory of Leto's peace shall abide with them forever. They will seek their quiet security thereafter only with extreme caution and steadfast preparation.";
      
    // Use openssl_encrypt() function to encrypt the data
    $encryption = openssl_encrypt($enc_string, $ciphering,
                $encryption_key, $options, $encryption_iv);
      
    // Display the encrypted string
    $encd = base64_encode($encryption);

    $mail->setFrom('moralesdeocer@gmail.com', 'Wander Travel Website');//Your application NAME and EMAIL
    $mail->Subject = 'Good day! '.$username.'';//Message subject
    $img = "https://img5.goodfon.com/wallpaper/nbig/4/6d/manila-bay-pasay-mall-of-asia-filippiny-naberezhnaia.jpg";
    $mail->Body = '
    <section style="background-image: url('.$img.');">
    <br><br><br>
     <div style="width:80%; margin:auto; background-color:white;">
      <h3 style="margin:0px; padding-left:10px; padding-right:10px; padding-top:10px; Text-align:center;">WANDER <br> Reset Password </h3>
      <p style="padding:20px; text-align:center; margin:0px; color:black">
            Hi <b>'.$username.'</b>,
            <input type="hidden" name="name" value="'.$email.'" />

            There was a request to change your password!

            If you did not make this request then please ignore this email.

            Otherwise, please click this link to change your password:
    </p>
    <br>
        <div style="width:50%; margin:auto; position:relative; text-align:center; background-color:white; height:100px; ">
          <a style="background-color:#2C15D9; margin-top:25px; padding:10px; color:white; border-color:blue; border-radius:100px; width:150px; height:30px;" href="http://localhost/PHP%2000P/src/pages/reset.php?mail='.$encd.'">Change Password</a>
        </div>
    </div>
    <br>
    <p style="text-align:center; color:white;padding-bottom:50px;">@2021 4-1N Group 5 PUP Capstone 2  &nbsp;&nbsp;&nbsp;&nbsp;<p>   

    </section>
    <br>
    ';

    $mail->addAddress($email, $username);// Target email


    $mail->send();

}
