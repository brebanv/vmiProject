<?php

session_start();
require_once('../connect_db.php');
parse_str(file_get_contents("php://input"), $_POST);

$sql = "SELECT * FROM questions";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo   $row['question'] . "</td>";
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