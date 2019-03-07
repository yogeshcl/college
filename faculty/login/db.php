<?php 
 $conn = mysqli_connect('127.0..0.1','root','');
 if(!conn)
 {
     echo 'Not Connected to Server';
 }
 if(!mysqli_select_db($conn,'faculty')){
     echo 'Database Not Selected';
 }



?>