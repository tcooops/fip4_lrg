<?php 
require_once '../config/database.php';
require_once 'scripts/read.php';
require_once 'scripts/functions.php';
require_once 'scripts/user.php';

if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

    if(empty($email) || empty($password) || empty($username) || empty($fname)){
        $message = 'Please fill the required fields';
    }else{
        $message = createUser($fname, $username, $password, $email);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRG ~ Register</title>
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ed2927">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#ed2927">
</head>
<body>
<main>
<h1 class="hidden">Admin LogIn</h1>
    <header class="main-header admin-header" id="mainHeader">
        <div class="header">
            <div class="top-banner">
                <p id="banner1">London Referees Group</p>
                <div id="banner2">
                    <div class="top-socials">
                        <ul>
                            <li><a href="www.facebook.com" target="new"><img src="../public/images/fb.svg" alt="Facebook"></a></li>
                            <li><a xhref="www.instagram.com" target="new"><img src="../public/images/insta.svg" alt="Instagram"></a></li>
                            <li><a href="www.twitter.com" target="new"><img src="../public/images/twitter.svg" alt="Twitter"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav id="main-nav">
                <h2 class="hidden">Main Nav</h2>
                <button id="button"></button>
                <img src="../public/images/logo.svg" alt="mobile logo" id="mobile-logo">
                    <div id="burger-con">
                        <ul id="burger-menu">
                            <li class="nav-item1"><a href="index.php">HOME</a></li>
                            <li class="nav-item2"><a href="referee.php">THE REFEREE</a></li>
                            <li class="nav-item3"><a href="partners.php">PARTNERS</a></li>
                            <li class="nav-item4">                     
                                <a href="index.php"><img src="../public/images/logo.svg" alt="logo" id="main-logo"></a>
                            </li>
                            <li class="nav-item5"><a href="membership.php">MEMBERSHIP</a></li>
                            <li class="nav-item6"><a href="join.php">JOIN US</a></li>
                            <li class="nav-item7"><a href="contact.php">CONTACT</a></li>
                        </ul>
                        <div id="burger-legal">
                            <p>Copyright © 2021</p>
                            <p>London Referees Group</p>
                            <p>Proudly Canadian</p>
                        </div>
                  </div>
            </nav>
        </div>
    </header> 
        <section class="admin">
            <div id="register-con">
                <h2>Create An Account</h2>
                <?php echo !empty($message)? $message: ''; ?>
                <form action="admin_register.php" method="post" class="register-form">
                    <label>Name</label>
                    <input type="text" name="fname" value=""><br><br>
                    <label>Email</label>
                    <input type="email" name="email" value=""><br><br>
                    <label>Username</label>
                    <input type="text" name="username" value=""><br><br>
                    <label>Password</label>
                    <input type="text" name="password" value=""><br><br>
                    <label>Confirm Password</label>
                    <input type="text" name="password" value=""><br><br>
                    <div id="login-submit">
                        <button class="admin_button" name="submit">Create Account</button>
                        <p id="admin_button">Already have an account?<a href="admin_login.php"> Sign in!</a></p>
                    </div>
                    
                </form>

            </div>
        </section>
        
        <footer>
              <h2 class="hidden">Footer</h2>
              <div id="footer">
                <img src="../public/images/footer_logo.svg" alt="footer logo" id="footer-logo"> 
                <ul id="footer-nav">
                    <li><a href="#the-referee">The Referee</a></li>
                    <li><a href="partners.php">Partners</a></li>
                    <li><a href="membership.php">Membership</a></li>
                    <li><a href="join.php">Join Us</a></li> 
                    <li><a href="contact.php">Contact Us</a></li>       
                </ul>
                <ul id="footer-info">
                    <li><a href="">Bylaws</a></li>
                    <li><a href="">COVID-19</a></li ff>
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
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="../public/js/burger.js"></script>
<script src="../public/js/main.js"></script>
</body>
</html>