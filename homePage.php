<?php
session_start();
?>

/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 04.04.2017
 * Time: 21:36
 */

<html>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>

            </button>
            <a class="navbar-brand" href="#">Toate</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>

            </button>
            <a class="navbar-brand" href="#">Adolescenti</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>

            </button>
            <a class="navbar-brand" href="#">Sport</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>

            </button>
            <a class="navbar-brand" href="#">Arta</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>

            </button>
            <a class="navbar-brand" href="#">Tehnologie</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">

               <li> <form action="../logout.php">
                       <button align="right">LOG OUT </button></li>

                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<img  src="forum.jpg" align=center width="300" height="160" border="4" hspace="10" vspace="7"></img>

<body bgcolor="#F5F5F5">

<form action="insert_question_db.php" method="POST">

    <form action="question_validate_db.php" method="POST" >
        <div class="container">
            <label><b>Pune o intrebare</b></label> <br>
            <input type="text" placeholder="scrie aici" name="question" required>



                <div class="center_div">
                    <button type="submit"> Adauga</button>
                </div>

        </div>
    </form>


</div>


</form>

</body>
<?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
</html>
