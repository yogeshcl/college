<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost", "root1", "goodroot");
// Selecting Database
$db = mysqli_select_db( $conn,"faculty");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['pfno'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn,"select pfno from adminlogin where pfno='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['pfno'];
if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
header('Location: ../index.php'); // Redirecting To Home Page
}
?>