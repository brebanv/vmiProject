<?php
session_start();
if (isset($_SESSION['userId'])) {
?>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="homePage.css"/>
    </head>
<body>
    <h2>Alege un domeniu:</h2>
    <button type="submit" class="myButton" name="sport">Sport</button>
    <button type="submit" class="myButton" name="tehnologie">Tehnologie</button>
    <button type="submit" class="myButton" name="religie">Religie</button>
    <button type="submit" class="myButton" name="scoala">Scoala</button>
    <button type="submit" class="myButton" name="diverse">Diverse</button>
    <p></p>
    <form action="veziIntrebarile.php" method="POST">
        <button type="submit" class="button_VeziIntrebarile" name="veziIntrebare">Vezi intrebarile</button>
    </form>
    Sau pune o intrebare:
    <div class="container">
        <form action="add_question_db.php" method="POST">

            <label><b>Alege categoria: </b></label>
            <select id="category" name="category">
                <option value="0">Diverse</option>
                <option value="Sport">Sport</option>
                <option value="Tehnologie">Tehnologie</option>
                <option value="Religie">Religie</option>
                <option value="Scoala">Scoala</option>
            </select>
            <input type="text" placeholder="Adauga intrebarea" name="question" required>  <br>
            <h1></h1>
            <button type="submit" class="button">Adauga</button>
        </form>
    </div>
</body>
    </html>

<?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'error=question') !== false) {
        ?>
        <h1>Aceasta intrebare exista deja!</h1>
        <?php
    }
} else {
    header("Location: ../index.php");
}
?>
