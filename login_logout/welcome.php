<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Document</title>
</head>
<body>
<form class="form" action="welcome.php" method="post">
<input type="submit" class="logout" name="logout" value="logout" >
</form>   
    <h1 class="welcome">loge in successfully</h1>
    
</body>
</html>
<?php
if(isset($_POST["logout"])){
    header("location:index.php");
}
?>