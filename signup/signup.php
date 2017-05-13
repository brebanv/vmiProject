<?php
require_once('../logout.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="signup_style.css"/>
</head>
<body>

<h2 class="login_title">Registration</h2>

<form action="signup_insert_db.php" method="POST">
    <div class="container">
        <label><b>First Name</b></label>
        <input type="text" placeholder="Enter your first name" name="firstName" required>

        <label><b>Last Name</b></label>
        <input type="text" placeholder="Enter your last name" name="lastName" required>

        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required>

        <div>
            <button type="submit" class="button">Sign Up</button>
        </div>
    </div>
</form>


<?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url, 'error=email') !== false) {
    ?>
    <h1 class="already_exist">This email already exist. Please login!</h1>
    <form action="../login/login.php">
        <div class="center_div">
            <button type="submit" class="button_login">Login</button>
        </div>
    </form>
    <?php
}
?>
</body>
</html>
