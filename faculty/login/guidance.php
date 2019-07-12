<?php
include_once('session.php');
 include("./db.php");
 $pfno=$_SESSION['pfno'];

  //if(isset($_POST['submitresponsibility'])){

 

  
    $guidance=mysqli_query($conn, "SELECT * FROM guidance WHERE pfno='$pfno'");


if(count($_POST))
{  
    $clearoldguidance ="DELETE from `guidance` where `pfno`='$pfno'";
    $exec=mysqli_query($conn,$clearoldguidance);

    $len = count($_POST['nameofresearchscholar']);
    $check=0;
 
 
    for ($i=0; $i < $len; $i++)
	{
        
        if(trim($_POST['nameofresearchscholar'][$i])!=""){
        
        $sql=" INSERT INTO `guidance`(`pfno`,`type`,`name`,`tittle`,`university`) VALUES ('$pfno','".$_POST['types'][$i]."','".$_POST['nameofresearchscholar'][$i]."','".$_POST['tittle'][$i]."','".$_POST['university'][$i]."')";
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
                echo ' <script> alert("Failed")</script>';
                $sql=" INSERT INTO `guidance`(`pfno`,`name`,`tittle`,`university`) VALUES ('$pfno',' ',' ',' ')";
                $qry=mysqli_query($conn, $sql);

               }
               
           } 

	
    }
   

    header("Location:./login.php"); 
}

  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>