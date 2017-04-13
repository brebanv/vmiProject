<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 09.04.2017
 * Time: 21:45
 */
session_start();
require_once('../connect_db.php');
parse_str(file_get_contents("php://input"), $_POST);

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT email FROM user WHERE email= '$email'";
$result = mysqli_query($conn,$sql);
$emailCheck = mysqli_num_rows($result);

if ($emailCheck > 0) {
    header("Location: signup.php?error=email");
    exit();
} else {
    // Criptare Parola
    $encripted_pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (firstName, lastName, email, pwd) VALUES ('$firstName' , '$lastName' , '$email' , '$encripted_pwd')";
    $result = $conn->query($sql);

    header("Location: ../login/login.php");
}

