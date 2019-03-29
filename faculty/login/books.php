<?php
include_once('session.php');
 include("./db.php");
 $pfno=$_SESSION['pfno'];

  //if(isset($_POST['submitpubdetails'])){

 

    $books=mysqli_query($conn, "SELECT * FROM books WHERE pfno='$pfno'");
   
  
 


if(count($_POST))
{   $clearoldbooks ="DELETE from `books` where `pfno`='$pfno'";

    $exec=mysqli_query($conn,$clearoldbooks);



    $len = count($_POST['books']);
    $check=0;
 
    for ($i=0; $i < $len; $i++)
	{
        
        if(trim($_POST['books'][$i])!=""){
        
        $sql=" INSERT INTO `books`(`pfno`, `details`) VALUES ('$pfno','".$_POST['books'][$i]."')";
        $qry=mysqli_query($conn, $sql);
          if($qry){
      echo ' <script> alert("Sucessful")</script>';
               }
           else
      echo ' <script> alert("Failed")</script>';
            }
           else{
               $check++;
               if($check==$len){
                $sql=" INSERT INTO `books`(`pfno`,`details`) VALUES ('$pfno',' ')";
                $qry=mysqli_query($conn, $sql);

               }
               
           } 

	
    }





    header("Location:./login.php"); 
}

  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>