<?php
session_start();
require_once('../connect_db.php');
parse_str(file_get_contents("php://input"), $_POST);

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$questionId = substr($url, -2);
$answer = $_POST['answer'];

    $sql = "INSERT INTO answers (questionId, answer, currdate) VALUES ('$questionId' , '$answer' , now())";
    $result = $conn->query($sql);

    $sql = "SELECT * FROM answers";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo   $row['questionId'] . " </td>";
                echo   $row['answer'] . "</td>";
                echo "     <br />";
            }
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    header("Location: /vmiProject/vmiProject/homePage/veziIntrebarile.php");

