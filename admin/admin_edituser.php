<?php 
require_once '../load.php';
confirm_logged_in();

$id = $_SESSION['user_id'];
$current_user = getSingleUser($id);

if(empty($current_user)){
    $message = 'Failed to get user info!';
}

if(isset($_POST['submit'])){
    $data = array(
        'fname'=>trim($_POST['fname']),
        'username'=>trim($_POST['username']),
        'password'=>trim($_POST['password']),
        'email'=>trim($_POST['email']),
        'id'=>$id
    );

    $message = editUser($data);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRG - Edit User</title>
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
                            <li class="nav-item2"><a href="../index.php#the-referee">THE REFEREE</a></li>
                            <li class="nav-item3"><a href="../partners.php">PARTNERS</a></li>
                            <li class="nav-item4">                    
                                <a href="../index.php"><img src="../images/logo.svg" alt="logo" id="main-logo"></a>
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

        <section class="admin">
            <h2>Edit User</h2>
            <?php echo !empty($message)?$message:'';?>
            <?php if(!empty($current_user)):?>

            <form action="admin_edituser.php" method="post">
                <?php while($user_info = $current_user->fetch(PDO::FETCH_ASSOC)):?>
                    <label for="first_name">First Name</label>
                    <input id="first_name" type="text" name="fname" value="<?php echo $user_info['user_fname'];?>"><br><br>

                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" value="<?php echo $user_info['user_name'];?>"><br><br>

                    <label for="password">Password</label>
                    <input id="password" type="text" name="password" value="<?php echo $user_info['user_pass'];?>"><br><br>

                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="<?php echo $user_info['user_email'];?>"><br><br>

                    <button type="submit" name="submit">Update User</button>
                <?php endwhile;?>
            </form>
            <?php endif;?>
        </section>
        
        <footer>
            <h2 class="hidden">Footer</h2>
            <div id="footer">
            <img src="../images/footer_logo.svg" alt="footer logo" id="footer-logo"> 
            <ul id="footer-nav">
                <li><a href="../index.php#the-referee">The Referee</a></li>
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