<?php
include_once('session.php');
 include("./db.php");
 $pfno=$_SESSION['pfno'];


    $journals=mysqli_query($conn, "SELECT * FROM journals WHERE pfno='$pfno'");
  
 


if(count($_POST))
{   
    $clearoldjournals ="DELETE from `journals` where `pfno`='$pfno'";

    $exec=mysqli_query($conn,$clearoldjournals);


    $len = count($_POST['journals']);
    $check=0;
 
    for ($i=0; $i < $len; $i++)
	{
        
        if(trim($_POST['journals'][$i])!=""){
        
        $sql=" INSERT INTO `journals`(`pfno`, `journaldetails`) VALUES ('$pfno','".$_POST['journals'][$i]."')";
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
                $sql=" INSERT INTO `journals`(`pfno`,`journaldetails`) VALUES ('$pfno',' ')";
                $qry=mysqli_query($conn, $sql);

               }
               
           } 

	
    }






    header("Location:./login.php"); 
}

  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>