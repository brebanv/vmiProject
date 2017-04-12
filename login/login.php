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

<form action="login_validate_db.php" method="post" >
    <div class="imgcontainer">
    </div>

    <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Password" name="pwd" required>

        <button type="submit">Login</button>
    </div>

</form>


<?php
    if (isset($_SESSION['id'])) {
        echo $_SESSION['id'];
    } else {
        echo "You are not logged in!";
    }
?>

<form action="../logout.php">
    <button>LOGOUT</button>
</form>

</body>
</html>
