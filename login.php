<?php
    session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login_style.css"/>
</head>
<body>

<h2 class="login_title">Login</h2>

<form action="login_insert_db.php" method="POST">
    <div class="imgcontainer">
    </div>

    <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Password" name="pwd" required>

        <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
</form>


<?php
    if (isset($_SESSION['id'])) {
        echo $_SESSION['id'];
    } else {
        echo "You are not logged in!";
    }
?>

</body>
</html>