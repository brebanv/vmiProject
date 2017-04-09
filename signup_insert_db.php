<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 09.04.2017
 * Time: 21:45
 */

include 'connect_db.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

echo $firstName;
echo $lastName;
echo $email;
echo $pwd;

//$sql = "INSERT INTO user (firstName, lastName, email, pwd) VALUES ('$firstName' , '$lastName' , '$email' , '$pwd')";
//$result = $conn->query($sql);

?>