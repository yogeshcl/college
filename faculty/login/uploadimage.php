<?php
include_once('session.php');


  if(isset($_POST['insertt'])){
    echo ' <script> alert("insert clicked")</script>';

    $file =addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    $sql ="UPDATE profile SET profilepic='$file' where pfno='fdsf345'";

   

  $qry=mysqli_query($conn, $sql);
  if($qry){
      echo ' <script> alert("Image Inserted into Databse")</script>';
  }
  else
    echo 'not inserte';
}
?>