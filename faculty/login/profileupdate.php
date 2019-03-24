<?php
include_once('session.php');
 $conn = mysqli_connect('localhost','root','');
 if(!conn)
 {
     echo 'Not Connected to Server';
 }
 if(!mysqli_select_db($conn,'faculty')){
     echo 'Database Not Selected';
 }

 $respo=mysqli_query($conn, "SELECT * FROM responsibilites WHERE pfno='$pfno'");
 $profile=mysqli_query($conn,"SELECT * FROM `probile` WHERE pfno='$pfno'");


  if(isset($_POST['profilee'])){
    $rawdate = htmlentities($_POST['doj']);
    $doj = date('Y-m-d', strtotime($rawdate));
   
    $rawdate1 = htmlentities($_POST['dob']);
    $dob = date('Y-m-d', strtotime($rawdate1));

    
  $sql= " UPDATE `profile` SET `name`='".$_POST["name"]."',`designation`='".$_POST["designation"]."',`department`='".$_POST["department"]."',
  `doj`='$doj',`dob`='$dob',`fathername`='".$_POST["fathername"]."',`sex`='".$_POST["sex"]."',`nationality`='".$_POST["nationality"]."',`contactno`='".$_POST["contactno"]."',`emailid`='".$_POST["emailid"]."',
  `caddress`='".$_POST["caddress"]."',`paddress`='".$_POST["paddress"]."',`eduquali`='".$_POST["eduquali"]."',`experience`='".$_POST["experience"]."',`achievements`='".$_POST["achievements"]."',`hobbies`='".$_POST["hobbies"]."'  WHERE pfno='$pfno'";

  $qry=mysqli_query($conn, $sql);

  if(!$qry)
  echo ' <script> alert("Failed to save Data")</script>';
      
}
?>