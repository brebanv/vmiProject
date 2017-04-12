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

$sql = "SELECT * FROM user WHERE email='".$email."' AND pwd='".$pwd."'";

$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
    echo "Your username or password is incorrect!";
}else {
    echo $_SESSION['id'] = $row['id'];
    echo "<br>You are logged in!";
    ?>
    <script>
        window.open('../homePage.php', '_self');
    </script>
    <?php
}
?>

