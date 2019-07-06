<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost", "root1", "goodroot");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$u="jssateadmin";
if($username!=$u)
{
// Selecting Database
$db = mysqli_select_db( $conn,"faculty");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn, "select * from adminlogin where pass='$password' AND pfno='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['pfno']=$username; // Initializing Session
header("location: ./login/login.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
else{
    
// Selecting Database
$db = mysqli_select_db( $conn,"faculty");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn, "select * from jssadmin where adpass='$password' AND jssateadmin='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['jssateadmin']=$username; // Initializing Session
header("location: ./login/adminlogin.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}



}
}
?>