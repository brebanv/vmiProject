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
<script>
window.open('login/login.php','_self');
</script>