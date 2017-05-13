<?php
session_start();
$sessionId = session_id();


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

        $sql = "SELECT id FROM user WHERE email='".$email."' AND pwd='".$hash_pwp."'";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
        $userId= (int)$row["id"];

        if($userId > 0) {
            $_SESSION['userId'] = $userId;
            ?>
            <html>
            <head>
                <link rel="stylesheet" type="text/css" href="login_style.css"/>
            </head>
            <body class="logging">
            <h1>Logging in...</h1>
            </body>
            </html>
            <?php
            header("Location: ../homePage/homePage.php");
        }else{
            header("Location: ../login/login.php?error=invalid_credentials");
        }
    }
}
?>
