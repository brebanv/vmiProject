<?php
/**
 * Created by PhpStorm.
 * User: madal
 * Date: 04/22/17
 * Time: 18:38
 */
session_start();
require_once('../connect_db.php');
parse_str(file_get_contents("php://input"), $_POST);

$question = $_POST['question'];


$sql = "SELECT question FROM questions WHERE question= '$question'";
$result = $conn->query($sql);



    $sql = "INSERT INTO questions (question) VALUES ('$question')";
    $result = $conn->query($sql);




