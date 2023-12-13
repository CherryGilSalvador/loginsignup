<?php
include 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cherry Assignment</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
        <form action="controller.php" method="POST">
            <div class="user-box">
                <input type="text" name="EMAIL" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="PASSWORD" required="">
                <label>Password</label>
            </div>
            <button type="submit" name="login">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
            </button>
            <a href="signup.php">
                Create new account?
            </a>
        </form>
    </div>

</body>

</html>