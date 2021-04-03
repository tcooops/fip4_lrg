<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require_once './load.php';

    if (isset($_POST['submit'])){
        $mail = new PHPMailer();

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;

        //add recipient
        $mail->addAddress('xuanhien1110@gmail.com', 'Hien Xuan');

        //password of sender
        $mail->Password = 'hien4444';

        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $subject = $_POST['option'];
        $message = $_POST['message'];

        $mail->Username = $email;
        $mail->setFrom($email, $firstname); 
        $mail->Subject = $subject;
        $mail->isHTML(true);
        $mail->Body = '<p>First Name:' .$firstname. '<br>Last Name:' .$lastname. '<br>Phone:' .$phone. '<br>Message:' .$message.'</p>';

        //send email
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            redirect_to('./confirm_mail.html');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRG - Contact</title>
    <?php include 'templates/links.php'; ?>
</head>
<body>
<main id="app">
    <h1 class="hidden">London Referees Group</h1>
    <div class="main-container">
        <?php include 'templates/header.php'; ?>
        <section class="top-hero">
        <h2 class="hidden">Get in touch</h2>
                <div id="hero-img-contact">
                    <div class="hero-info">
                    </div>
                </div>
        </section>
        <section id="contact-main-con">
        <h2 class="hidden">Get in touch with LRG</h2>
            <div class="form-con">
                <form action="" method="post" id="contact-form" class="contact-form">
                    <label for="fname">First name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="John" class="input" required>
                    <label for="lname">Last name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Doe" class="input" required>
                    <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="123-456-7890" required>
                    <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="johndoe@example.ca" required>
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" class="input" required>
                        <option name="option" value="joining">Joining LRG</option>
                        <option name="option" value="services">Using LRG services</option>
                        <option name="option" value="mentorship">Junior Development Program</option>
                        <option name="option" value="membership">Membership</option>
                        <option name="option" value="other">Other</option>
                    </select>
                    <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="5" placeholder="How can we help?" required></textarea>
                    <div class="contact-submit">
                        <button class="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div id="contact-sidebar">
                <img class="pulse" src="public/images/icon_call.svg" alt="phone">
                <img class="pulse" src="public/images/icon_email.svg" alt="email">
                <img class="pulse" src="public/images/icon_mail.svg" alt="mail">
            </div>
        </section>
        <?php include 'templates/footer.php'; ?>
    </div>
</main>
<?php include 'templates/bottomLinks.php'; ?>
</body>
</html>