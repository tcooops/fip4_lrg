<?php
    require_once '../load.php';
    confirm_logged_in();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<main id="app">
    <h1 class="hidden">London Referees Group</h1>
    <div class="main-container">
        <header class="main-header" id="mainHeader">
            <div class="header">
                <div class="top-banner">
                    <p id="banner1">London Referees Group</p>
                    <p id="banner2">Proudly Canadian</p>
                </div>
                <nav id="main-nav">
                    <h2 class="hidden">Main Nav</h2>
                    <img src="../images/logo.svg" alt="mobile logo" id="mobile-logo">
                    <button id="button"></button>
                        <div id="burger-con">
                            <ul id="burger-menu">
                                <li class="nav-item1"><a href="../index.php">HOME</a></li>
                                <li class="nav-item2"><a href="../#the-referee">THE REFEREE</a></li>
                                <li class="nav-item3"><a href="../partners.php">PARTNERS</a></li>
                                <li class="nav-item4">                    
                                    <a href="index.php"><img src="../images/logo.svg" alt="logo" id="main-logo"></a>
                                </li>
                                <li class="nav-item5"><a href="../membership.php">MEMBERSHIP</a></li>
                                <li class="nav-item6"><a href="../join.php">JOIN US</a></li>
                                <li class="nav-item7"><a href="../contact.php">CONTACT</a></li>
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

        <section class="dashboard">
            <h2>Welcome Newcomer to London Referees Group!</h2>

            <a href="admin_register.php">Create User</a><br>
            <a href="admin_edituser.php">Edit User</a><br>
            <a href="../index.php">Home</a><br>
            <a href="admin_logout.php">Sign Out</a>
            </div>
        </section>

        <footer>
            <h2 class="hidden">Footer</h2>
            <div id="footer">
            <img src="../images/footer_logo.svg" alt="footer logo" id="footer-logo"> 
            <ul id="footer-nav">
                <li><a href="../#the-referee">The Referee</a></li>
                <li><a href="../partners.php">Partners</a></li>
                <li><a href="../membership.php">Membership</a></li>
                <li><a href="../join.php">Join Us</a></li> 
                <li><a href="../contact.php">Contact Us</a></li>       
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
<script src="../js/burger.js"></script>
</body>
</html>