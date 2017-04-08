<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 04.04.2017
 * Time: 21:36
 */
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
    header("Location: index.php");
}
?>
<h2>Login</h2>
