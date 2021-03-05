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
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['user_name'];?> to the page!</h2>

    <a href="admin_register.php">Create User</a><br>
    <a href="admin_edituser.php">Edit User</a><br>
    <a href="admin_logout.php">Sign Out</a><br>
    <a href="../index.html">Home</a>
</body>
</html>