<!DOCTYPE html>
<html>
<body>
<title>vmiProject</title>

<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "users";
// Create connection
//$conn = new mysqli($servername, $username, $password);
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_select_db($conn, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

</body>
</html>