<?php
include_once('session.php');
 include("./db.php");
 $pfno=$_SESSION['pfno'];

  //if(isset($_POST['submitpubdetails'])){

 

    $consultancy=mysqli_query($conn, "SELECT * FROM consultancy WHERE pfno='$pfno'");
   
  
 


if(count($_POST))
{   $clearoldbooks ="DELETE from `consultancy` where `pfno`='$pfno'";

    $exec=mysqli_query($conn,$clearoldbooks);



    $len = count($_POST['consultancy']);
    $check=0;
 
    for ($i=0; $i < $len; $i++)
	{
        
        if(trim($_POST['consultancy'][$i])!=""){
        
        $sql=" INSERT INTO `consultancy`(`pfno`, `consultancy`) VALUES ('$pfno','".$_POST['consultancy'][$i]."')";
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
                $sql=" INSERT INTO `consultancy`(`pfno`,`consultancy`) VALUES ('$pfno',' ')";
                $qry=mysqli_query($conn, $sql);

               }
               
           } 

	
    }





    header("Location:./login.php"); 
}

  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>