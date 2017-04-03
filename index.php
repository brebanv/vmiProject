<!DOCTYPE html>
<html>
<head>
    <title>vmiProject</title>
</head>
<body>

<center>
    <table>
        <tr><th>id</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>
        <?php

        $conn = new mysqli("127.0.0.1", "root", "", "users");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        $query = "SELECT * FROM userInfo";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($result)){
            echo "<tr><td>".$row["idUser"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["email"]."</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</center>

</body>
</html>