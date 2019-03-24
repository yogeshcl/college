<?php
include_once('session.php');
$pfno=$_SESSION['pfno'];
 include("./profileupdate.php");
 include("./uploadimage.php");
 $result = mysqli_query($conn, "SELECT * FROM profile WHERE pfno='$pfno'");   


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
            <label for="tab4">Profile</label>

            <input type="radio" id="tab5" name="tabGroup2" class="tab">
            <label for="tab5">Responsibilites</label>

            <input type="radio" id="tab6" name="tabGroup2" class="tab">
            <label for="tab6">Research</label>

            <input type="radio" id="tab7" name="tabGroup2" class="tab">
            <label for="tab7">Publications</label>

            <div class="tab__content">
                <h3>Profile</h3>

                <?php 
if ($row = $result->fetch_assoc()) {
?>

                <div id="profiledata" style="float:left">
                    <form name="profile" action="" method="post">

                        <table>
                            <tr>
                                <td>PF Number</td>
                                <td> <input type="text" name="pfnumber" id="pfnumber" value="<?php echo $pfno;?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td> <input type="text" name="name" id="name" value="<?php echo $row['name'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Education Qualification</td>
                                <td>
                                    <input type="text" name="eduquali" id="eduquali" value="<?php echo $row['eduquali'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td>
                                    <input list="desig" name="designation" id="designation" value="<?php echo $row['designation'];?>">
                                    <datalist id="desig">
                                        <option value="Professor">
                                        <option value="Professor &amp; Head">
                                        <option value="Associate Professor">
                                        <option value="Asst. Professor">
                                        <option value="Adjunct Faculty">
                                    </datalist>
                                </td>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td>
                                    <input list="dept" name="department" id="department" value="<?php echo $row['department'];?>">
                                    <datalist id="dept">
                                        <option value="Civil Engineering">
                                        <option value="Computer Science and Engineering">
                                        <option value="Electronics  and Communication Engineering">
                                        <option value="Electronics and Insturmentation  Science &amp Engineering">
                                        <option value="Engineering Chemistry">
                                        <option value="Engineering Mathematics">
                                        <option value="Engineering Physics">
                                        <option value="Industrial Engineering and Management">
                                        <option value="Information Science and Engineering">
                                        <option value="Master of Business Administration">
                                        <option value="Mechanical Engineering">
                                        <option value="Thermal Engineering">
                                        <option value="VLSI Design & Embedded Systems">


                                    </datalist>
                                </td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>
                                    <input type="date" name="dob" id="dob"  value="<?php echo $row['dob'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Date of Join</td>
                                <td>
                                    <input type="date" name="doj" id="doj"  value="<?php echo $row['doj'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>No of years Experience </td>
                                <td>
                                    <input type="text" name="experience" id="experience" value="<?php echo $row['experience'];?>">
                                </td>
                            </tr>

                            <tr>
                                <td>Father Name</td>
                                <td>
                                    <input type="text" name="fathername" id="fathername" value="<?php echo $row['fathername'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <input list="s" name="sex" id="sex"value="<?php echo $row['sex'];?>">
                                    <datalist id="s">
                                        <option value="Male">
                                        <option value="Female">

                                    </datalist>
                                </td>
                            </tr>
                            <tr>
                                <td>Nationality</td>
                                <td>
                                    <input type="text" name="nationality" id="nationality" value="<?php echo $row['nationality'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Contact No</td>
                                <td>
                                    <input type="number" name="contactno" id="contactno" value="<?php echo $row['contactno'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Email Id</td>
                                <td>
                                    <input type="email" name="emailid" id="emailid" value="<?php echo $row['emailid'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Correspondance Address</td>
                                <td>
                                    <input type="text" name="caddress" id="caddress"value="<?php echo $row['caddress'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Permanent Address</td>
                                <td>
                                    <input type="text" name="paddress" id="paddress" value="<?php echo $row['paddress'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Achievements
                                <td>
                                    <input type="text" name="achievements" id="achievements" value="<?php echo $row['achievements'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Hobbies
                                <td>
                                    <input type="text" name="hobbies" id="hobbies" value="<?php echo $row['hobbies'];?>">
                                </td>
                            </tr>



                        </table>
                        <div margin-left=40px>
                            <input type="submit" name="profilee" id="profilee" >
                        </div>

                    </form>
                </div>
                <?php
}
else
  echo "<h3>Faculty Not Found";
?>



                <div id="profileimage" style="float:right">
                        <h1>Profile picture</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                      
                        <input type="file" name="image" id="image" />
                        <input type="Submit" name="insertt" id="insertt" />
                    </form>
                </div>

                <script>
                    $(document).ready(function(){
                        $('#insertt').click(function(){
                            console.log($('#insertt').val());
                        var image_name=$('#image').val();

                        if(image_name=='')
                        {
  
                        alert("Please select image");
                        return false;
                        }
                        else
                        {
                             var extension=$('#image').val().split('.').pop().toLowerCase();
                             if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])==-1)
                             {
                                 alert('Invalid Image File');
                                 $('#image').val('');
                                 return false;
                             }
                        }
                        
                        });
                    });
                </script>
            </div>

            <div class="tab__content">
                <h3>Responsibilites</h3>
                <script type="text/javascript">
                    function validate(frm)
                    {
                        var ele = frm.elements['responsibility[]'];
                        if (! ele.length)
                        {
                            alert(ele.value);
                        }
                        // for(var i=0; i<ele.length; i++)
                        // {
                        //     alert(ele[i].value);
                        // }
                        return true;
                    }
                    function add_feed()
                    {
                        var div1 = document.createElement('div');
                        div1.innerHTML = document.getElementById('newlinktpl').innerHTML;
                    
                        document.getElementById('newlink').appendChild(div1);
                    }
                    </script>
               
               
                     <form method="post" action="./responsibility.php" onsubmit="return validate(this)">
                     <table>
                     <tr>
                         <td valign=top> Enter Responsibilites :</td>
                         <td valign=top>
                         <?php 
                         while($rows=mysqli_fetch_assoc($respo))
                         {
                            
                        ?>
                        <div id="newlink">
                                 <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                                    <input type="text" name="responsibility[]" value="<?php echo "{$rows['responsibility']}"; ?>" size="20">   
                                 </div>
                             </div>
            
                        <?php 
                         }
                        
                                         
                         ?>
                             
                             <p id="addnew">
                                    <a href="javascript:add_feed()">Add New </a>
                                </p>
                         </td>
                     </tr>
                     </table>
                         <p>
                             <br>
                             <input type="submit" name="submitresponsibility">
                             <input type="reset" name="reset1">
                         </p>
                  
                     </form>
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktpl" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                          <input type="text" name="responsibility[]" value=""  size="20">
                         </div>
                     </div>
                       

            </div>

            <div class="tab__content">
                <h3>Research</h3>

            </div>

            <div class="tab__content">
                <h3>Publications</h3>

            </div>

        </div>

    </div>




</body>

</html>