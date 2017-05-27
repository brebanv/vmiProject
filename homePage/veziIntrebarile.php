
<html>
<head>
    <meta charset="UTF-8">
    <title>Vezi Intrebarile</title>
    <link rel="stylesheet" type="text/css" href="homePage.css"/>
</head>
<body>
<h2>Toate intrebarile:</h2>
</html>
<?php
session_start();
require_once('../connect_db.php');
parse_str(file_get_contents("php://input"), $_POST);

$sql = "SELECT * FROM questions";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo  $row['category'] . " : " . $row['question'] .
                "<form action=\"add_answer_db.php\" method=\"POST\">

                    <input type=\"text\" placeholder=\"Adauga Raspuns\" name=\"answer\" required>
                    <button type=\"submit\" class=\"button\">Adauga</button>

                </form>" ."</td>";
            echo "<br />";
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
<html>
</body>
</html>
