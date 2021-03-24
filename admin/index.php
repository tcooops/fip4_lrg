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
    <title>LRG ~ User Dashboard</title>
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

        <section class="dashboard-con">
                <h2>Welcome, <?php echo $_SESSION['user_name'];?>!</h2>
                <h3>User Dashboard</h3>
            <div class="dashboard">
                <div class="icon-div">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                    <g>
                    <title>background</title>
                    <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                    <title>Layer 1</title>
                    <path id="svg_1" fill="none" d="m0,0l24,0l0,24l-24,0l0,-24z"/>
                    <path fill="#ed2927" id="svg_2" d="m3,17.25l0,3.75l3.75,0l11.06,-11.06l-3.75,-3.75l-11.06,11.06zm17.71,-10.21c0.39,-0.39 0.39,-1.02 0,-1.41l-2.34,-2.34c-0.39,-0.39 -1.02,-0.39 -1.41,0l-1.83,1.83l3.75,3.75l1.83,-1.83z"/>
                    </g>
                    </svg>
                    <a class="link" href="admin_edituser.php">Edit profile</a>
                </div>
                <div class="icon-div">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                    <g>
                    <title>background</title>
                    <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                    <title>Layer 1</title>
                    <path id="svg_1" fill="none" d="m0,0l24,0l0,24l-24,0l0,-24z"/>
                    <path fill="#ed2927" id="svg_2" d="m20,3l-1,0l0,-2l-2,0l0,2l-10,0l0,-2l-2,0l0,2l-1,0c-1.1,0 -2,0.9 -2,2l0,16c0,1.1 0.9,2 2,2l16,0c1.1,0 2,-0.9 2,-2l0,-16c0,-1.1 -0.9,-2 -2,-2zm0,18l-16,0l0,-13l16,0l0,13z"/>
                    </g>
                    </svg>
                    <a class="link" href="../membership.php">See schedule</a>
                </div>
                <div class="icon-div">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                    <g>
                    <title>background</title>
                    <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                    <title>Layer 1</title>
                    <path id="svg_1" fill="none" d="m0,0l24,0l0,24l-24,0l0,-24z"/>
                    <path fill="#ed2927" id="svg_2" d="m10,19.958848l0,-6l4,0l0,6l5,0l0,-8l3,0l-10,-9l-10,9l3,0l0,8l5,0z"/>
                    </g>
                    </svg>
                    <a class="link" href="../index.php">Home</a>
                </div>
                <div class="icon-div">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                    <g>
                    <title>background</title>
                    <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                    <title>Layer 1</title>
                    <path id="svg_1" fill="none" d="m0,0l24,0l0,24l-24,0l0,-24z"/>
                    <path fill="#ed2927" id="svg_2" d="m17,7l-1.41,1.41l2.58,2.59l-10.17,0l0,2l10.17,0l-2.58,2.58l1.41,1.42l5,-5l-5,-5zm-13,-2l8,0l0,-2l-8,0c-1.1,0 -2,0.9 -2,2l0,14c0,1.1 0.9,2 2,2l8,0l0,-2l-8,0l0,-14z"/>
                    </g>
                    </svg>
                    <a class="link" href="admin_logout.php">Log out</a>
                </div>                
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