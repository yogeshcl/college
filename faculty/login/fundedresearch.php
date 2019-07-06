<?php
include_once('session.php');
 include("./db.php");
 $pfno=$_SESSION['pfno'];

  //if(isset($_POST['submitpubdetails'])){

 

    $fundedresearch=mysqli_query($conn, "SELECT * FROM fundedresearch WHERE pfno='$pfno'");
   
  
 


if(count($_POST))
{   $clearoldbooks ="DELETE from `fundedresearch` where `pfno`='$pfno'";

    $exec=mysqli_query($conn,$clearoldbooks);



    $len = count($_POST['fundedresearch']);
    $check=0;
 
    for ($i=0; $i < $len; $i++)
	{
        
        if(trim($_POST['fundedresearch'][$i])!=""){
        
        $sql=" INSERT INTO `fundedresearch`(`pfno`, `fundedresearch`) VALUES ('$pfno','".$_POST['fundedresearch'][$i]."')";
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
                $sql=" INSERT INTO `fundedresearch`(`pfno`,`fundedresearch`) VALUES ('$pfno',' ')";
                $qry=mysqli_query($conn, $sql);

               }
               
           } 

	
    }





    header("Location:./login.php"); 
}

  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>