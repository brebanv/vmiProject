<?php

session_start();
require_once('../connect_db.php');
parse_str(file_get_contents("php://input"), $_POST);

$question = $_POST['question'];
$category = $_POST['category'];
$userID = $_SESSION['userId'];

if($category !== '0') {

    $sql = "SELECT question FROM questions WHERE question= '$question' AND category = '$category'";
    $result = mysqli_query($conn, $sql);
    $questionCheck = mysqli_num_rows($result);

    if ($questionCheck > 0) {
        header("Location: homePage.php?error=question");
        exit();
    } else {
        $sql = "INSERT INTO questions (question, category, currdate, userID) VALUES ('$question' , '$category' , now(), '$userID')";
        $result = $conn->query($sql);

        $sql = "SELECT * FROM questions";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['id'] . " </td>";
                    echo $row['question'] . "</td> ";
                    echo $row['userID'] . "</td>";
                    echo "     <br />";
                }
                // Free result set
                mysqli_free_result($result);
            } else {
                echo "No records matching your query were found.";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
    header("Location: /vmiProject/vmiProject/homePage/veziIntrebarile.php");
}else{
    header("Location: homePage.php?error=domeniu");
}
