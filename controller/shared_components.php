<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require("$dir/vendor/libs/PHPMailer/PHPMailer/src/PHPMailer.php");
// require("$dir/vendor/libs/PHPMailer/PHPMailer/src/SMTP.php");
function sendEmail($email,$e_pass, $user_email,$subject ,$body){
    $SYSTEM_USERNAME=$email;
    $SYSTEM_SECRET=$e_pass;
    
    $name = "Frieght Management System";  // Name of your website or yours
    $to = $user_email;  // mail of reciever
    $subject = $subject;
    $body = $body;
    $from = $SYSTEM_USERNAME;  // you mail
    $password = $SYSTEM_SECRET;  // your mail password
    
    // Ignore from here
    

    $mail = new PHPMailer(true);
    
    // To Here
    
    //SMTP Settings
    $mail->isSMTP();
    // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
    $mail->Host = "smtp.gmail.com"; // smtp address of your email
    $mail->SMTPAuth = true;
    $mail->Username = $from;
    $mail->Password = $password;
    $mail->Port = 587;  // port
    $mail->SMTPSecure = "tls";  // tls or ssl
    $mail->smtpConnect([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ]
    ]);
    
    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($from, $name);
    $mail->addAddress($to); // enter email address whom you want to send
    $mail->Subject = ("$subject");
    $mail->Body = $body;
    $mail->send();
    
    
}

?>