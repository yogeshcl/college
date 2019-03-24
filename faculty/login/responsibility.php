<?php
include_once('session.php');
 include("./db.php");
 $pfno=$_SESSION['pfno'];

  //if(isset($_POST['submitresponsibility'])){

 

  
    $respo=mysqli_query($conn, "SELECT * FROM responsibilites WHERE pfno='$pfno'");


if(count($_POST))
{  
    $clearoldresponisibilites ="DELETE from `responsibilites` where `pfno`='$pfno'";
    $exec=mysqli_query($conn,$clearoldresponisibilites);

    $len = count($_POST['responsibility']);
    $check=0;
 
 
    for ($i=0; $i < $len; $i++)
	{
        
        if(trim($_POST['responsibility'][$i])!=""){
        
        $sql=" INSERT INTO `responsibilites`(`pfno`, `responsibility`) VALUES ('$pfno','".$_POST['responsibility'][$i]."')";
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
                $sql=" INSERT INTO `responsibilites`(`pfno`,`responsibility`) VALUES ('$pfno',' ')";
                $qry=mysqli_query($conn, $sql);

               }
               
           } 

	
    }
    header("Location:./login.php"); 
}

  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>