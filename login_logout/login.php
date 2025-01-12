<?php
include("connection.php");
if (isset($_POST["submit"])) {
    $username=$_POST["username"];
    $password=$_POST["password"];
}
$sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1){
    header("location:welcome.php");
}else{
    echo'<script>window.location.href="index.php"
    alert("login failed:invalid username or password!");
    </script>';
}

// if(isset($_POST[]))
// if (isset($_POST["submit"])) {
//     // Use prepared statements to prevent SQL injection
//     $username = mysqli_real_escape_string($conn, $_POST["username"]);
//     $password = $_POST["password"]; // Do not escape password
//     // Fetch user data based on username
//     $sql = "SELECT * FROM login WHERE username=?";
//     $stmt = mysqli_prepare($conn, $sql);
//     mysqli_stmt_bind_param($stmt, "s", $username);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);

//     if ($row = mysqli_fetch_assoc($result)) {
//         // Verify the password using password_verify
//         if (password_verify($password, $row['password'])) {
//             header("Location: welcome.php");
//             exit(); // Ensure no further code is executed
//         } else {
//             echo '<script>
//                     alert("Login failed: invalid username or password!");
//                     window.location.href="index.php";
//                   </script>';
//         }
//     } else {
//         echo '<script>
//                 alert("Login failed: invalid username or password!");
//                 window.location.href="index.php";
//               </script>';
//     }
//     // Close statement
//     mysqli_stmt_close($stmt);
// }
// Close connection
mysqli_close($conn);
?>