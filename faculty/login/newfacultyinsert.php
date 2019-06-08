<?php
include_once('asession.php');
 include("./db.php");
 $pfno=$_SESSION['jssateadmin'];

  //if(isset($_POST['submitpubdetails'])){

 

 
    $faculties=mysqli_query($conn, "SELECT * FROM adminlogin");

  
 


       // echo ' <script> alert("new facluty is being Inserting ")</script>';

if(count($_POST))
{  



    $len = count($_POST['faculty1']);
    $check=0;
 
    for ($i=0; $i < $len; $i++)
	{
        
        if(trim($_POST['faculty1'][$i])!=""){

            $chk="SELECT `pfno` FROM `adminlogin` where pfno='".$_POST['faculty1'][$i]."'";
            //$row = mysql_fetch_array($chk);
            $row=$conn->query($chk);
            //echo $row;
            
              
               // echo ' <script> alert("Insertion ")</script>';
        
        $sql=" INSERT INTO `adminlogin`(`pfno`, `name`,`email`) VALUES ('".$_POST['faculty1'][$i]."','".$_POST['faculty2'][$i]."','".$_POST['faculty3'][$i]."')";
        $qry=mysqli_query($conn, $sql);
          if($qry){
      echo ' <script> alert("Insertion Sucessful")</script>';
               }
           else
      echo ' <script> alert("Insertion Failed")</script>';
        
        
        
        
        }

           else{
            echo ' <script> alert("Enter Pfno ")</script>';
               
           } 

	
    }
  header("Location:./adminlogin.php"); 
}
    
  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>