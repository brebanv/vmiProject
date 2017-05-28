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
<ul>
    <li><a href="veziIntrebarile.php?domeniu=Tehnologie">Tehnologie</a></li>
    <li><a href="veziIntrebarile.php?domeniu=Sport">Sport</a></li>
    <li><a href="veziIntrebarile.php?domeniu=Religie">Religie</a></li>
    <li><a href="veziIntrebarile.php?domeniu=Scoala">Scoala</a></li>
    <li><a href="veziIntrebarile.php?domeniu=Diverse">Diverse</a></li>
</ul>

    <p></p>
    <form action="veziIntrebarile.php" method="POST">
        <button type="submit" class="button_VeziIntrebarile" name="veziIntrebare">Vezi intrebarile</button>
    </form>
    <h2>Adauga o intrebare</h2>
    <div class="container">
        <form action="add_question_db.php" method="POST">

            <label><b>Alege categoria: </b></label>
            <select id="category" name="category">
                <option value="0">Alege Domeniu</option>
                <option value="Diverse">Diverse</option>
                <option value="Sport">Sport</option>
                <option value="Tehnologie">Tehnologie</option>
                <option value="Religie">Religie</option>
                <option value="Scoala">Scoala</option>
            </select>
            <input type="text" placeholder="Adauga intrebarea" name="question" required>  <br>
            <h1></h1>
            <button type="submit" class="button_adauga">Adauga</button>
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
    if(strpos($url, 'error=domeniu') !== false){
        ?>
        <h1>Alege un domeniu!</h1>
        <?php
    }
} else {
    header("Location: ../index.php");
}
?>
