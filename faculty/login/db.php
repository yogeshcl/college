<?php 
 $conn = mysqli_connect('localhost','root','');
 if(!conn)
 {
     echo 'Not Connected to Server';
 }
 if(!mysqli_select_db($conn,'faculty')){
     echo 'Database Not Selected';
 }



?>