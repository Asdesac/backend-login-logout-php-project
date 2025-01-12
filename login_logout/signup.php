<?php
include("connection.php");
// $sql = "insert into user(username,password) values ('asdesach','password123')";
// $result = query($sql);
// echo $result;
// Execute the query;
//$hash=password_hash($password,Password_Default);
//use $hash instead of $password
// Check if the query was successful
// try{
//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//         echo "User added successfully.";
//     }
// }catch(mysqli_sql_exception){
//     echo "Error: " . mysqli_error($conn);
// }
// To display the data from the database
// $sql = "SELECT * FROM user WHERE username='asdesach'";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     echo $row["id"] . "<br>"; // Corrected from $raw to $row
//     echo $row["username"] . "<br>"; // Corrected from $raw to $row
//     echo $row["password"]. "<br>";
//     echo $row["register_date"]."<br>";
// } else{
//     echo "0 results";
// }
// to fetch the all by loop 
// $sql = "SELECT * FROM user ";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     while($row=mysqli_fetch_assoc($result)){
//         // $row = mysqli_fetch_assoc($result);
//         echo $row["id"] . "<br>"; // Corrected from $raw to $row
//         echo $row["username"] . "<br>"; // Corrected from $raw to $row
//         echo $row["password"]. "<br>";
//         echo $row["register_date"]."<br>";
//     }
// } else{
//     echo "0 results";
// }
//
// // Close the database connection
// mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <h2 class="title">Welcome to signup</h2>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        username: <br>
        <input type="text" name="username" value=""> <br> 
        password: <br>
        <input type="password" name="password"> <br>
        <input type="submit" value="register" name="submit" class="register" id="login" >
    </form>
</body>
</html>
<?php 
// include("database.php"); // Ensure database connection is included
// Check if the form is submitted
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    try {
        // Check if fields are empty
        if (empty($username) || empty($password)) {
            echo "<script>alert('Please fill all the fields');</script>";
        } else {
            // Hash the password
            $hash = password_hash($password, PASSWORD_DEFAULT);
            // Prepare the SQL statement
            $sql = "INSERT INTO login (username, password) VALUES (?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ss", $username, $hash);
            // Execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // echo "User added successfully.";
                header("location:welcome.php");
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
            }
            // Close the statement
            mysqli_stmt_close($stmt);
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
// Close the database connection
mysqli_close($conn);
?>