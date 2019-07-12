<?php
include_once('session.php');
 include("./db.php");
 $pfno=$_SESSION['pfno'];

  //if(isset($_POST['submitresponsibility'])){

 

  
    $achievements=mysqli_query($conn, "SELECT * FROM achievements WHERE pfno='$pfno'");


if(count($_POST))
{  
    $clearoldachievements ="DELETE from `achievements` where `pfno`='$pfno'";
    $exec=mysqli_query($conn,$clearoldachievements);

    $len = count($_POST['achievements']);
    $check=0;
 
 
    for ($i=0; $i < $len; $i++)
	{
        
        if(trim($_POST['achievements'][$i])!=""){
        
        $sql=" INSERT INTO `achievements`(`pfno`, `achievements`) VALUES ('$pfno','".$_POST['achievements'][$i]."')";
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
                $sql=" INSERT INTO `achievements`(`pfno`,`achievements`) VALUES ('$pfno',' ')";
                $qry=mysqli_query($conn, $sql);

               }
               
           } 

	
    }
    header("Location:./login.php"); 
}

  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>