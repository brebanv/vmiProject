<?php
require_once('../logout.php');
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login_style.css"/>
</head>

<body>

<h2 class="login_title">Login</h2>
<form action="login_validate_db.php" method="post" >
    <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Password" name="pwd" required>

        <button type="submit">Login</button>
    </div>
</form>

<?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url, 'error=invalid_credentials') !== false) {
    ?>
    <h1 class="already_exist">Invalid credentials.</h1>
    <h3 class="already_exist">Please check your username and password and try again.</h3>
    <?php
}
?>

</body>
</html>
