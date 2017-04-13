<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 09.04.2017
 * Time: 23:02
 */
session_start();
require_once('../connect_db.php');
parse_str(file_get_contents("php://input"), $_POST);

$email = $_POST['email'];
$pwd = $_POST['pwd'];

//decriptare parola si verificare
$sql = "SELECT * FROM user WHERE email='".$email."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwp = $row['pwd'];
$hash = password_verify($pwd, $hash_pwp);

if($hash == 0){
    header("Location: login.php?error=invalid_credentials");
    exit();
} else {
    $sql = "SELECT * FROM user WHERE email='".$email."' AND pwd='".$hash_pwp."'";
    $result = mysqli_query($conn,$sql);

    if(!$row = mysqli_fetch_assoc($result)){
        echo "Your username or password is incorrect!";
    }else {
        ?>
        <html>
        <head>
            <link rel="stylesheet" type="text/css" href="login_style.css"/>
        </head>
        <body class="logging">
            <h1>Logging in...</h1>
        </body>
        </html>

        <script>
            window.open('../homePage.php', '_self');
        </script>
        <?php
    }
}
?>
