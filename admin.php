<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRG - Sign In</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<main id="app">
    <h1 class="hidden">London Referees Group</h1>
    <div class="main-container">
        <?php include 'templates/header.php'; ?>

        <section class="signinout">
            <h2>Welcome back! Please sign in your account. If you do not have an account, please create one.</h2><br>

            <a href="admin/admin_login.php">Sign In</a><br>
            <a href="admin/admin_register.php">Sign Up</a>
        </section>

        <?php include 'templates/footer.php'; ?>

    </div><!--end main-->
</main>
<script src="js/burger.js"></script>
<script src="js/scroll.js"></script>
</body>
</html>