<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="register_style.css"/>
</head>
<body>

<h2 class="login_title">Registration</h2>

<form action="signup_insert_db.php" method="POST">
    <div class="container">
        <label><b>First Name</b></label>
        <input type="text" placeholder="Enter your first name" name="firstName" required>

        <label><b>Last Name</b></label>
        <input type="text" placeholder="Enter your last name" name="lastName" required>

        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required>

        <div>
            <button type="submit" class="button">Sign Up</button>
        </div>
    </div>
</form>
</body>
</html>