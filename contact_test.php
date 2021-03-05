<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
require_once './load.php';

    if (isset($_POST['sendemail'])){
        $mail = new PHPMailer();

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;

        //sender email
        $mail->Username = 'nguyenalex1110@gmail.com';
        $mail->Password = 'hien4444';
        $mail->setFrom('nguyenalex1110@gmail.com', 'Alex Nguyen');

        //add recipient
        $mail->addAddress('xuanhien1110@gmail.com', 'Hien Xuan'); 
        //$mail->addAddress('ellen@example.com');  
    
        //$mail->isHTML(true);
        //$mail->Subject = 'Email from Xuan Hien';
        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['message'];

        //send email
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            redirect_to('confirm_mail.html');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try PHPMailer Successful</title>
</head>
<body>
    <h1>Testing email</h1>
    <!--action="confirm.html"-->
    <form action="" method="post">
        <label for="subject">Subject</label>
        <input type="text" name="subject" value="">
        <label for="email">Email</label>
        <input type="text" name="email" value="">
        <label for="message">Message</label>
        <input type="text" name="message" value="">
        <button name="sendemail">Send</button>
    </form>
</body>



