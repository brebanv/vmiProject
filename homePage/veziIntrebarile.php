<html>
<head>
    <meta charset="UTF-8">
    <title>Vezi Intrebarile</title>
    <link rel="stylesheet" type="text/css" href="veziIntrebarile.css"/>
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

            $sql_q = "SELECT * FROM answers WHERE questionId = " .$row['id'];

            echo "Intrebare din " . $row['category'] . " : " . $row['question'] . "<br>";
            echo "Respunsuri: <br>";
            if($result_q = mysqli_query($conn, $sql_q)){
                if(mysqli_num_rows($result_q) > 0){
                    while($row_q = mysqli_fetch_array($result_q)){
                        echo $row_q['answer'] . "<br>";
                    }
                }
            }

            echo "<form action=\"add_answer_db.php?idQuestion=". $row['id'] ."\" method=\"POST\">";
            echo "<input type=\"text\" placeholder=\"Adauga Raspuns\" name=\"answer\" required>";
            echo "<button type=\"submit\" class=\"button\">Adauga</button>";
            echo "
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
