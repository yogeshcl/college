<?php
include_once('session.php');
 include("./db.php");
 $pfno=$_SESSION['pfno'];

  //if(isset($_POST['submitresponsibility'])){

 

  
    $reserach=mysqli_query($conn, "SELECT * FROM research WHERE pfno='$pfno'");


if(count($_POST))
{  
    $clearoldreserach ="DELETE from `research` where `pfno`='$pfno'";
    $exec=mysqli_query($conn,$clearoldreserach);

    $len = count($_POST['research']);
    $check=0;
 
 
    for ($i=0; $i < $len; $i++)
	{
        
        if(trim($_POST['research'][$i])!=""){
        
        $sql=" INSERT INTO `research`(`pfno`, `description`) VALUES ('$pfno','".$_POST['research'][$i]."')";
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
                $sql=" INSERT INTO `research`(`pfno`,`description`) VALUES ('$pfno',' ')";
                $qry=mysqli_query($conn, $sql);

               }
               
           } 

	
    }
    header("Location:./login.php"); 
}

  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>