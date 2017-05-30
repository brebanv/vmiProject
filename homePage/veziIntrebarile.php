<?php
session_start();
if (isset($_SESSION['userId'])) {

?>
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
require_once('../connect_db.php');
parse_str(file_get_contents("php://input"), $_POST);

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'domeniu=Scoala') !== false) {
        $domeniu = 'Scoala';
    }elseif(strpos($url, 'domeniu=Tehnologie') !== false) {
        $domeniu = 'Tehnologie';
    }elseif(strpos($url, 'domeniu=Sport') !== false) {
        $domeniu = 'Sport';
    }elseif(strpos($url, 'domeniu=Diverse') !== false) {
        $domeniu = 'Diverse';
    }elseif(strpos($url, 'domeniu=Religie') !== false) {
        $domeniu = 'Religie';
    }else{
        $domeniu = 'Toate';
    }

    if($domeniu == 'Toate'){
        $sql = "SELECT * FROM questions";
    }else{
        $sql = "SELECT * FROM questions WHERE category= '$domeniu'";
    }

    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){

                $sql_q = "SELECT * FROM answers WHERE questionId = " .$row['id'];

                $sql_u = "SELECT * FROM user WHERE id = ".$row['userID'];
                $result_u = mysqli_query($conn, $sql_u);
                $row_u = mysqli_fetch_assoc($result_u);

                echo "Intrebare din " . $row['category'] . " : <font size = 4><b>" . $row['question'] . "</b></font>      <sub><font size = 1><i>".$row['currDate']." adaugata de ".$row_u['firstName']." ".$row_u['lastName']."</i></font></sub><br>";



                echo "Raspunsuri: <br>";


                if($result_q = mysqli_query($conn, $sql_q)){
                    if(mysqli_num_rows($result_q) > 0){
                        while($row_q = mysqli_fetch_array($result_q)){

                            $sql_ua = "SELECT * FROM user WHERE id = ".$row_q['userID'];
                            $result_ua = mysqli_query($conn, $sql_ua);
                            $row_ua = mysqli_fetch_assoc($result_ua);

                            echo "<b>".$row_q['answer'] .  "</b>    <sub><font size = 1><i>". " adaugat de <b>".$row_ua['firstName']." ".$row_ua['lastName']."</b> la ".$row_q['currDate'] ."</i></font></sub><br>";
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
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    ?>
    <html>
    <div class = adauga_intrebare>
        <form action="homePage.php" method="POST">
            <button type="submit">Adauga Intrebare</button>
        </form>
    </div>
    </body>
    </html>
    <?php
} else {
header("Location: ../index.php");
}
?>