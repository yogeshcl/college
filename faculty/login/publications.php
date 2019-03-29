<?php
include_once('session.php');
 include("./db.php");
 $pfno=$_SESSION['pfno'];

  //if(isset($_POST['submitpubdetails'])){

 

 
    $publications=mysqli_query($conn, "SELECT * FROM publications WHERE pfno='$pfno'");

  
 


if(count($_POST))
{  
    $clearoldpublications ="DELETE from `publications` where `pfno`='$pfno'";
   
    $exec=mysqli_query($conn,$clearoldpublications);
  


    $len = count($_POST['publications']);
    $check=0;
 
    for ($i=0; $i < $len; $i++)
	{
        
        if(trim($_POST['publications'][$i])!=""){
        
        $sql=" INSERT INTO `publications`(`pfno`, `pubdetails`) VALUES ('$pfno','".$_POST['publications'][$i]."')";
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
                $sql=" INSERT INTO `publications`(`pfno`,`pubdetails`) VALUES ('$pfno',' ')";
                $qry=mysqli_query($conn, $sql);

               }
               
           } 

	
    }





    header("Location:./login.php"); 
}

  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>