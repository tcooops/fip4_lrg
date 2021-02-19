<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
require_once './load.php';

    function sendEmail($mail){
        
        $pdo = Database::getInstance()->getConnection();

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
        $mail->Username = '';
        $mail->Password = '';

        //add recipient
        $mail->setFrom('', '');
        // typed email in the contact form
        $mail->addAddress($_POST['email']); 
      
        //set email format to html - Content
        $mail->isHTML(true);

        $mail->Subject = 'LRG - Thank you for your inquiry';
        
        $mail->Body = '
            Thank you for your inquiry. We will get in touch with you in 24 hours!
            '
        ;

        //send email
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent successfully. Check yo email!';
        }
    }
?>


