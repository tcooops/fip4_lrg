<?php
//add PHP
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
require_once './load.php';

if (isset($_POST['sendemail'])){    
    $message = sendemail($mail);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>London Referees Group</title>
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>
<main id="app"></main>
    <h1 class="hidden">London Referees Group - Contact Us</h1>
    <div class="main-container">
        <header id="main-header">
            <div class="top-banner">
                <p id="banner1">London Referees Group</p>
                <p id="banner2">Proudly Canadian</p>
            </div>
            <nav id="main-nav">
              <h2 class="hidden">Main Nav</h2>
              <img src="images/logo.svg" alt="mobile logo" id="mobile-logo">
                <button id="button"></button>
                  <div id="burger-con">
                    <ul id="burger-menu">
                        <li class="nav-item1"><a href="#">HOME</a></li>
                        <li class="nav-item2"><a href="#">THE REFEREE</a></li>
                        <li class="nav-item3"><a href="#">PARTNERS</a></li>
                        <li class="nav-item4">                    
                            <a href="/"><img src="images/logo.svg" alt="logo" id="main-logo"></a>
                        </li>
                        <li class="nav-item5"><a href="#">MEMBERSHIP</a></li>
                        <li class="nav-item6"><a href="#">JOIN US</a></li>
                        <li class="nav-item7"><a href="contact.php">CONTACT</a></li>
                    </ul>
                  </div>
            </nav>
          </header>

          <section class="contact">
                <h2 class="hidden">Contact Page</h2>
                <form action="" method="post">
                    <label for="subject">Subject</label><br>
                    <input type="text" name="subject" value=""><br>
                    <label for="email">Email</label><br>
                    <input type="text" name="email" value=""><br>
                    <label for="inquiry">Inquiry</label><br>
                    <textarea name="inquiry" id="" cols="30" rows="10"></textarea><br>
                    <button name="sendemail">Send</button>
                </form>
          </section>

          <footer>
              <h2 class="hidden">Footer</h2>
              <div id="footer">
                <img src="images/footer_logo.svg" alt="footer logo" id="footer-logo"> 
                <ul id="footer-nav">
                    <li><a href="">The Referee</a></li>
                    <li><a href="">Partners</a></li>
                    <li><a href="">Membership</a></li>
                    <li><a href="">Join Us</a></li>        
                </ul>
                <ul id="footer-info">
                    <li><a href="">Bylaws</a></li>
                    <li><a href="">COVID-19</a></li>
                    <li><a href="">Supervisors</a></li>
                    <li><a href="">Report a Crime Offence</a></li>
                    <li><a href="">Match Penalty Reports</a></li>
                    <li><a href="">Brand Guidelines</a></li>
                </ul>
                <ul id="copyright">
                    <li>Copyright © 2021</li>
                    <li>London Referee Group</li>
                    <li>Proudly Canadian</li>
                </ul>
              </div>
          </footer>
    </div>
</main>
<script src="js/burger.js"></script>
</body>
</html>