<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dicting.css">
    <title>Membership</title>
</head>
<body>
    <h1 class="title">Welcome to Membership</h1>
    <form action="" method="POST">
        <input type="submit" class="signin" name="login" value="Login">
        <input type="submit" class="signup" name="signup" value="Signup">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["login"])) {
            header("Location: index.php");
            exit(); // Ensure no further code is executed
        } elseif (isset($_POST["signup"])) {
            header("Location: signup.php");
            exit(); // Ensure no further code is executed
        }
    }
    ?>
</body>
</html>