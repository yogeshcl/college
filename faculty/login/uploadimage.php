<?php
 include_once("./login/db.php");
  if($conn)

  if(isset($_POST['uploadprofile'])){
      $filename=$_FILES['uploadprofile']['name'];
      $filetmpname=$_FILES['uploadprofile']['tmp_name'];
      $folder ='imageuploaded/';

      move_uploaded_file($filetmpname, $folder.$filename)
  
  $sql ="INSERT INTO `profile`( `profilepic`) VALUES ('$filename')";


  $qry=mysqli_query($conn, $sql);
  if($qry){
      echo 'image uploaded';
  }
}
?>