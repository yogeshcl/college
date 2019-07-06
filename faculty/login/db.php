<?php 
 $conn = mysqli_connect('localhost','root1','goodroot');
 if(!$conn)
 {
     echo 'Not Connected to Server';
 }
 if(!mysqli_select_db($conn,'faculty')){
     echo 'Database Not Selected';
 }



?>