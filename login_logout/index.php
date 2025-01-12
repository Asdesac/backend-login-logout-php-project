<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Login Page</title>
</head>
<body>
    <h1 class="title">Login Page</h1>
    <br><br>
    <form name="form" action="login.php" method="POST">
        Username:
        <input type="text" id="username" name="username" required> <br><br>
        Password:
        <input type="password" id="password" name="password" required> <br><br>
        <input type="submit" name="submit" id="login" value="Login">
    </form>
</body>
</html>