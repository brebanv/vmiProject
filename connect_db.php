<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 08.04.2017
 * Time: 14:33
 */
    $conn = new mysqli("localhost", "root", "", "logintest");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>