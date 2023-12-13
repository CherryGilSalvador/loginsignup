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
        <h2>SIGN UP</h2>
        <form action="controller.php" method="POST">
            <div class="user-box">
                <input type="text" name="NAME" required="">
                <label>Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="SECTION" required="">
                <label>Section</label>
            </div>
            <div class="user-box">
                <input type="text" name="EMAIL" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="PASSWORD" required="">
                <label>Password</label>
            </div>
            <div class="con"> <button type="submit" name="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    submit
                </button>
                <a href="login.php">
                    Login
                </a>
            </div>
        </form>
    </div>

</body>

</html>