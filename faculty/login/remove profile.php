<?php
include_once('asession.php');
 include("./db.php");
 $pfno=$_SESSION['jssateadmin'];

  //if(isset($_POST['submitpubdetails'])){

    echo ' <script> alert("faculty remove ")</script>';
    $remove="DELETE FROM `adminlogin` WHERE `adminlogin`.`pfno`=$pfno";

$row=$conn->query($remove);
    
 

    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'remove':
                remove();
                break;
            
        }
    }
    
    function remove() {
        echo "The remove function is called.";
        echo ' <script> alert("faculty remove ")</script>';
        $remove="DELETE FROM `adminlogin` WHERE `adminlogin`.`pfno`=$pfno";
    
    $row=$conn->query($remove);

        exit;
    }
    
    
   
//  header("Location:./adminlogin.php"); 

  
// header("Location:http://localhost/jssate/college/faculty/"); 
?>