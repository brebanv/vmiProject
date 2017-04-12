<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 09.04.2017
 * Time: 21:45
 */


session_start();


include 'connect_db.php';

parse_str(file_get_contents("php://input"), $_POST);

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (firstName, lastName, email, pwd) VALUES ('$firstName' , '$lastName' , '$email' , '$pwd')";
$result = $conn->query($sql);

?>