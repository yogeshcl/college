<?php
include_once('./db.php');
include_once('session.php');



$pfno=$_SESSION['pfno'];






if(isset($_POST['insertt'])) {

  //Process the image that is uploaded by the user

  $target_dir = "../../profilepics/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
      echo "Sorry, there was an error uploading your file.";
  }

  $image=basename( $_FILES["image"]["name"],".jpg"); // used to store the filename in a variable
  echo $image;

  //storind the data in your database
  $query ="UPDATE profile SET profilepic='$image' where pfno=$pfno";
 // $query1= "INSERT INTO items VALUES ('$id','$title','$description','$price','$value','$contact','$image')";
 

  $qry=mysqli_query($conn, $query);
  if($qry){
     echo ' <script> alert("Image Inserted into Databse")</script>';
  }
  else{
     echo ' <script> alert("Failed to Upload the image")</script>';
  }
  // echo "Your add has been submited, you will be redirected to your account page in 1 seconds....";
  // header( "Refresh:1; url=login.php", true, 303);
  header('Location: ./login.php'); 
}








?>