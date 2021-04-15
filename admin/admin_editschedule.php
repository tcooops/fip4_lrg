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
    <title>LRG ~ Edit Schedule</title>
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
<main id="app">
    <h1 class="hidden">London Referees Group</h1>
    <div class="main-container">
    <header class="main-header" id="mainHeader">
        <div class="header">
            <div class="top-banner">
                <p id="banner1">London Referees Group</p>
                <div id="banner2">
                    
                    <div class="top-socials">
                        <ul>
                            <li><a href="www.facebook.com" target="new"><img src="../public/images/fb.svg" alt="Facebook"></a></li>
                            <li><a href="www.instagram.com" target="new"><img src="../public/images/insta.svg" alt="Instagram"></a></li>
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
                            <li class="nav-item1"><a href="../index.php">LRG HOME</a></li>
                            <li class="nav-item2"><a href="../referee.php">THE REFEREE</a></li>
                            <li class="nav-item3"><a href="../partners.php">PARTNERS</a></li>
                            <li class="nav-item4">                     
                                <a href="index.php"><img src="../public/images/logo.svg" alt="logo" id="main-logo"></a>
                            </li>
                            <li class="nav-item5"><a href="../membership.php">MEMBERSHIP</a></li>
                            <li class="nav-item6"><a href="../join.php">JOIN US</a></li>
                            <li class="nav-item7"><a href="../contact.php">CONTACT</a></li>
                        </ul>
                        <div id="burger-login">
                            <div class="top-login">
                                <a href="admin_logout.php">Log Out</a>
                            </div>
                        </div>
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
        <div class="edit-user">
            <h2>Welcome, <?php echo $_SESSION['user_name'];?>!</h2>
            <h4>Edit the schedule information</h4>
            
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>Location</th>
                        <th>Referees</th>
                        <th>Date</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $matches = allMatches($con);
                    foreach($matches as $match){
                        echo "<tr>";
                            echo "<td>". $match['names'] ."</td>";
                            echo "<td>". $match['matchlocation'] ."</td>";
                            echo "<td>". $match['refs'] ."</td>";
                            echo "<td>". $match['matchdate'] ."</td>";
                            echo "<td><a href='admin_deletematch.php'>Delete</a></td>";
                        echo "</tr>";
                    }   
                    ?>
                </tbody>
            </table>
            <br>
            <a class="link" id="admin_button"  href="admin_addschedule.php">Add A New Schedule</a>

            <p><a class="link" href="index.php">Back To Dashboard</a></p>
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