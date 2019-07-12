<?php
include_once('asession.php');
include_once('db.php');
$jssadmin=$_SESSION['jssateadmin'];
$update="UPDATE adminlogin AS t1
INNER JOIN profile AS t2 ON t1.pfno = t2.pfno
SET t1.name = t2.name, t1.email=t2.emailid";




$result1=mysqli_query($conn,$update);

 $faculty = mysqli_query($conn, "SELECT * FROM adminlogin ");   


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JSS Academy of Technical Education</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Theme CSS-->
    <link rel="stylesheet" href="../../css/theme.css" />
    <link rel="stylesheet" href="../../css/header.css" />
    <link rel="stylesheet" href="../css/tab.css" />
    <!-- <link href="../node_modules/mdbootstrap/css/addons/datatables.min.css" rel="stylesheet">
    <script type="text/javascript" src="../node_modules/mdbootstrap/js/addons/datatables.min.js"></script>
    <script type="text/javascript" src="./login/responsibilites/responsibility.js"></script> -->

</head>



<body>

    <header>
        <!-- Topbar-->
        <div class="navbar-top ">
            <div class="container">
                <div id="uppernav">
                    <ul class="nav navbar-nav align-items-center mr-auto">

                        

                        <li class="nav-item">
                            <a class="nav-link" href="./logout.php">Logout</a>
                        </li>


                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <hr />

        <!-- Navbar-->

        <div class="row" id="headinglogo">

            <a href="../index.php"><img id="logo" src="../../img/logo.png" alt="JSSATE-B" width="130" height="130" /></a>
            <div id="container" class="headingname">
                <p id="organization"> JSS MAHAVIDYAPEETHA</p>
                <p id="clgname">JSS ACADEMY OF TECHNICAL EDUCATION</p>
                <p id="addr">Bengaluru</p>
            </div>
        </div>



  



    </header>

























    <div class="container">

        <div class="tab-wrap">

            <input type="radio" id="tab4" name="tabGroup2" class="tab" checked>
            <label for="tab4"><h4><b>Faculty List</b></h4></label>

            <input type="radio" id="tab5" name="tabGroup2" class="tab">
            <label for="tab5"><h4><b>Log Details</b></h4></label>

    


            <div class="tab__content">
                
                <script type="text/javascript">
                    function validate(frm)
                    {
                        var ele1 = frm.elements['faculty1[]'];
                        var ele2 = frm.elements['faculty1[]'];
                        var ele3 = frm.elements['faculty1[]'];
                        if (! ele1.length)
                        {
                           // alert(ele1.value);
                        }
                      
                        return true;
                    }
                    function add_feed()
                    {
                        var div1 = document.createElement('div');
                        div1.innerHTML = document.getElementById('newlinktpl').innerHTML;
                    
                        document.getElementById('newlink').appendChild(div1);
                    }
                    </script>
               <a href="./download.php"><button>Download All Faculty Details</button> </a>
               
                    
                     <table id="facultylist">
                     
                     <tr>
                         
                         <td valign=top>
                         <p id="addnew">
                                    <a href="javascript:add_feed()"><button> Add New Faculty </button> </a>
                                </p>
                                <form method="post" >
                                
                         <?php 
                         while($rows=mysqli_fetch_assoc($faculty))
                         {
                            
                        ?>
                        <div id="newlink">
                                 <div class="feed" style="display:inline-block; padding-bottom: 10px;">

                                 

              
                                    <input type="text" name="faculty1[]" value="<?php echo "{$rows['pfno']}"; ?>" size="30" disabled >
                                    <input type="text" name="faculty2[]" value="<?php echo "{$rows['name']}"; ?>" size="30" disabled>  
                                    <input type="text" name="faculty3[]" value="<?php echo "{$rows['email']}"; ?>" size="30" disabled>  
                                    <input type="hidden" name="pfno" value="<?php echo "{$rows['pfno']}"; ?>">
                                    <input type="submit" name="delete" value="Delete">
   
                                    <!-- <button id="delete[]"  onclick="myFunction()">Delete</button> -->
                                   



                                    
                                 </div>
                             </div>

                                         
                        <?php 
                       

                         }
                        
                                         
                         ?>
                             </form>
                            
                         </td>
                     </tr>
                     </table>
                     <p id="demo"></p>

                         <!-- <p>
                             <br>
                             <input type="submit" name="submitfaculty" value="Update ">
                            
                         </p> -->
                  
                    
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktpl" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                         <form method="post" action="./newfacultyinsert.php" onsubmit="return validate(this)">
                          <input type="text" name="faculty1[]" value=""  size="30">
                         
                          <input type="submit" name="newfaculty" value="add">
                         
                         </div>
                     </div>
            </div>
            <div class="tab__content">
                <!-- <h3>Log Details</h3> -->

                <?php include("./logdetails.php");?>
               



            </div>
        
        

    </div>
                        </div>
                        </div>

  

                        <!-- ---------------------Deleteting -->
<script type = "text/javascript">
         <!--
            function myFunction() {
               var retVal = confirm("Are you sure you want to delete the faculty ?");
               if( retVal == true ) {
                   alert("deleted");
                 <?php  include_once('deletefaculty.php'); ?>
                //include_once('deletefaculty.php');
                  
                  return true;
               } else {
             alert("Not Deleted");
                 
                  return false;
               }
            }
         //-->
      </script>  



<!-- ---------------------Deleting -->
<?php
if(isset($_REQUEST['delete']))
 {
    $del="DELETE from adminlogin where pfno='".$_REQUEST['pfno']."' ";

   echo "<script>{
   var retVal = confirm(\"Are you sure you want to delete the faculty ?\");
   if( retVal == true ) {
       alert(\"deleted\");
    
      
      return true;
   } else {
 alert(\"Not Deleted\");
     
      return false;
   }}
   </script>";
    
    $deletion=mysqli_query($conn, $del);
 if($deletion){
echo ' <script> alert("Faculty is Sucessfully deleted")</script>';
echo '<script>$(\'#facultylist\').load("/divcontents");</script>';
//header('Location: '.$_SERVER['REQUEST_URI']);
  


      }
  else
echo ' <script> alert("Deletion Failed")</script>';

 }
                       

?>

</body>

</html>