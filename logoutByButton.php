<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 10.04.2017
 * Time: 21:08
 */
session_start();
session_destroy();
?>
<html>
<link rel="stylesheet" type="text/css" href="logging.css"/>
<body class = logging_out>
    <h1>Logging out...</h1>
</body>
</html>
<script>
window.open('login/login.php','_self');
</script>
