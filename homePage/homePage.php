<?php
session_start();
if (isset($_SESSION['userId'])) {
?>

    <html>

    <button type="submit" class="button" name="sport">Sport</button>
    <button type="submit" class="button" name="tehnologie">Tehnologie</button>
    <button type="submit" class="button" name="religie">Religie</button>
    <button type="submit" class="button" name="scoala">Scoala</button>

    <form action="veziIntrebarile.php" method="POST">
        <button type="submit" class="button" name="veziIntrebare">Vezi intrebarile</button>
    </form>
    <form action="add_question_db.php" method="POST">
            <label><b>Pune o intrebare</b></label>
            <input type="text" placeholder="Adauga" name="question" required>
            <button type="submit" class="button">Adauga</button>
    </form>

    </html>

<?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'error=question') !== false) {
        ?>
        <h1>Aceasta intrebare exista deja!</h1>
        <?php
    }
} else {
    header("Location: ../login/login.php");
}
?>
