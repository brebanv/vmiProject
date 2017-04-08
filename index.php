<!DOCTYPE html>
<html>
<head>
    <title>vmiProject</title>
    <link rel="stylesheet" type="text/css" href="index_style.css">
</head>

<body>
    <table>
        <tr><th>id</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>
        <?php
        require_once ("connect_db.php");
        $query = "SELECT * FROM userInfo";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($result)){
            echo "<tr><td>".$row["id"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["email"]."</td></tr>";
        }

        ?>
    </table>
</body>
</html>