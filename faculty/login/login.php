<?php
include_once('session.php');
$pfno=$_SESSION['pfno'];
 include("./profileupdate.php");
 include("./uploadimage.php");
 $result = mysqli_query($conn, "SELECT * FROM profile WHERE pfno='$pfno'");  
 $result1 = mysqli_query($conn, "SELECT profilepic FROM profile WHERE pfno='$pfno'");    
 $consultancy=mysqli_query($conn, "SELECT * FROM consultancy WHERE pfno='$pfno'");
 $fundedresearch=mysqli_query($conn, "SELECT * FROM fundedresearch WHERE pfno='$pfno'");
 $publications=mysqli_query($conn, "SELECT * FROM publications WHERE pfno='$pfno'");
 $achievements=mysqli_query($conn, "SELECT * FROM achievements WHERE pfno='$pfno'");
 $guidance=mysqli_query($conn, "SELECT * FROM guidance WHERE pfno='$pfno'");
 $flag=0;
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

            <input type="radio" id="tab8" name="tabGroup2" class="tab">
            <label for="tab8">Achievements</label>

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
                                <td>Prefix</td>
                                <td> <input list="pref" type="text" name="prefix" id="prefix" value="<?php echo $row['prefix'];if($row['prefix']=='Dr.'){$flag=1;}else{$flag=0;}?>">
                                <datalist id="pref">
                                        <option value="Mr.">
                                        <option value="Ms.">
                                        <option value="Mrs">
                                        <option value="Miss">
                                        <option value="Dr.">
                                    </datalist>
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
                                <td>Professional Bodies
                                <td>
                                    <input type="text" name="professionalbodies" id="professionalbodies" value="<?php echo $row['professionalbodies'];?>">
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



                <div id="profileimage" style="float:right; margin-left:auto; margin-right:auto; text-align: center;">
                        <h1>Profile picture</h1>
                        
                        <?php 
if ($row1 = $result1->fetch_assoc()) {

    echo "<img src='../../profilepics/{$row1['profilepic']}' height='200px' width='200px'>";

}

                        ?>
                    <form action="./uploadimage.php" method="post" enctype="multipart/form-data">
                      

                        <input type="file" name="image" id="image" />
                        <input type="Submit" value="Upload" name="insertt" id="insertt" />
                    </form>
                </div>

 <!-- Responsibilities -->


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
     <!--------------------research-------------->

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
                                    <input type="text" name="responsibility[]" value="<?php echo "{$rows['responsibility']}"; ?>" size="30">   
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
                          <input type="text" name="responsibility[]" value=""  size="30">
                         </div>
                     </div>
            </div>

            <div class="tab__content">
                <h3>Research</h3>
                    <script type="text/javascript">
                    function validateresearch(frm)
                    {
                        var ele = frm.elements['research[]'];
                        if (! ele.length)
                        {
                            alert(ele.value);
                        }
                    
                        return true;
                    }
                    function add_feedresearch()
                    {
                        var div1 = document.createElement('div');
                        div1.innerHTML = document.getElementById('newlinktp2').innerHTML;
                    
                        document.getElementById('newlink1').appendChild(div1);
                    }
                    </script>
               
               
                     <form method="post" action="./research.php" onsubmit="return validateresearch(this)">
                     <table>
                     <tr>
                         <td valign=top>  Area of Research :</td>
                         <td valign=top>
                         <?php 
                         while($rows=mysqli_fetch_assoc($research))
                         {
                            
                        ?>
                        <div id="newlink1">
                                 <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                                 <textarea name="research[]"  cols="100" rows="3" maxlength="995"><?php echo "{$rows['description']}"; ?> </textarea>
                                    <!-- <input type="text" name="research[]" value="" size="20">    -->
                                 </div>
                             </div>
            
                        <?php 
                         }
                        
                                         
                         ?>
                             
                             <p id="addnew">
                                    <a href="javascript:add_feedresearch()">Add New </a>
                                </p>
                         </td>
                     </tr>
                     </table>
                         <p>
                             <br>
                             <input type="submit" name="submitresearch">
                             <input type="reset" name="reset1">
                         </p>
                  
                     </form>
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktp2" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                         <textarea name="research[]"  cols="100" rows="3" maxlength="995"> </textarea>
                          
                         </div>
                     </div>
                     
<!-----------fundedresearch---------------->
                     <script type="text/javascript">
                    function validatefundedresearch(frm)
                    {
                        var ele = frm.elements['fundedresearch[]'];
                        if (! ele.length)
                        {
                            alert(ele.value);
                        }
                        return true;
                    }
                    function add_feedfundedresearch()
                    {
                        var div1 = document.createElement('div');
                        div1.innerHTML = document.getElementById('newlinktp6').innerHTML;
                    
                        document.getElementById('newlink6').appendChild(div1);
                    }
                    </script>
               
               
                     <form method="post" action="./fundedresearch.php" onsubmit="return validatefundedresearch(this)">
                     <table>
                     <tr>
                         <td valign=top style="width:150px;"> Funded Project :</td>
                         <td valign=top>
                         <?php 
                         while($rows=mysqli_fetch_assoc($fundedresearch))
                         {
                            
                        ?>
                        <div id="newlink6">
                                 <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                                 <textarea name="fundedresearch[]"  cols="100" rows="3" maxlength="995"><?php echo "{$rows['Fundedresearch']}"; ?></textarea>
                                  
                                 </div>
                             </div>
            
                        <?php 
                         }
                        
                                         
                         ?>
                             
                             <p id="addnew">
                                    <a href="javascript:add_feedfundedresearch()">Add New </a>
                                </p>
                         </td>
                     </tr>
                     </table>
                         <p>
                             <br>
                             <input type="submit" name="submitfundedresearch">
                             <input type="reset" name="reset1">
                         </p>
                  
                     </form>
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktp6" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                         <textarea name="fundedresearch[]"  cols="100" rows="3" maxlength="995"></textarea>
                         </div>
                     </div>
                    
                
 <!-------------fundedresearch end------------->
  <!-----------------consultancy--------------->
                     
                <script type="text/javascript">
                    function validateconsultancy(frm)
                    {
                        var ele = frm.elements['consultancy[]'];
                        if (! ele.length)
                        {
                            alert(ele.value);
                        }
                        return true;
                    }
                    function add_feedconsultancy()
                    {
                        var div1 = document.createElement('div');
                        div1.innerHTML = document.getElementById('newlinktp5').innerHTML;
                    
                        document.getElementById('newlink5').appendChild(div1);
                    }
                    </script>
               
               
                     <form method="post" action="./consultancy.php" onsubmit="return validateconsultancy(this)">
                     <table>
                     <tr>
                         <td valign=top style="width:150px;"> Consultancy  :</td>
                         <td valign=top>
                         <?php 
                         while($rows=mysqli_fetch_assoc($consultancy))
                         {
                            
                        ?>
                        <div id="newlink5">
                                 <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                                 <textarea name="consultancy[]"  cols="100" rows="3" maxlength="995"><?php echo "{$rows['consultancy']}"; ?></textarea>
                                      
                                 </div>
                             </div>
            
                        <?php 
                         }
                        
                                         
                         ?>
                             
                             <p id="addnew">
                                    <a href="javascript:add_feedconsultancy()">Add New </a>
                                </p>
                         </td>
                     </tr>
                     </table>
                         <p>
                             <br>
                             <input type="submit" name="submitconsultancy">
                             <input type="reset" name="reset1">
                         </p>
                  
                     </form>
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktp5" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                         <textarea name="consultancy[]"  cols="100" rows="3" maxlength="995"></textarea>
                         </div>
                     </div>
 <!--------------end  consultancy----------------->
   <!------------guiding ---------------->   
                <?php 
                if ($flag)
                 {
                  ?> 
                 <script type="text/javascript">
                    function validateguidance(frm)
                    {
                        var ele = frm.elements['guidance[]'];
                        if (! ele.length)
                        {
                            alert(ele.value);
                        }
                        return true;
                    }
                    function add_feedguidance()
                    {
                        var div1 = document.createElement('div');
                        div1.innerHTML = document.getElementById('newlinktp50').innerHTML;
                    
                        document.getElementById('newlink50').appendChild(div1);
                    }
                    </script>
               
               
                     <form method="post" action="./guidance.php" onsubmit="return validateguidance(this)">
                     <table>
                     <tr>
                         <td valign=top style="width:150px;"> Guidance Research  :</td>
                         <td valign=top>
                          <ol>   
                         <?php 
                         while($gud=mysqli_fetch_assoc($guidance))
                         {
                            
                        ?>
                        <li>
                        <div id="newlink50">
                            <table>
                             <tr>
                                <td>Name         :</td>
                                <td>
                                    <input type="text" name="nameofresearchscholar[]" id="nameofresearchscholar" maxlength="500" size="35" value="<?php echo $gud['name'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Tittle       :</td>
                                <td>
                                    <input type="text" name="tittle[]" id="tittle" maxlength="500" size="35" value="<?php echo $gud['tittle'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>University   :</td>
                                <td>
                                    <input type="text" name="university[]" id="university" maxlength="500" size="35" value="<?php echo $gud['university'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Guidance Type:</td>
                                <td>
                                    <input list="typ" type="text" name="types[]" id="types" maxlength="7" size="10" value="<?php echo $gud['type'];?>">
                                    <datalist id="typ">
                                        <option value="guided">
                                        <option value="guiding">
                                    </datalist>
                                </td>
                            </tr>
                        </table>
                             </div>
                         </li>  
                         
            
                        <?php 
                         }                 
                         ?>
                        </ol> 
                             
                             <p id="addnew">
                                    <a href="javascript:add_feedguidance()">Add New </a>
                                </p>
                         </td>
                     </tr>
                     </table>
                         <p>
                             <br>
                             <input type="submit" name="submitguidance">
                             <input type="reset" name="reset1">
                         </p>
                  
                     </form>
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktp50" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                        
                         </div>
                       
                            <table>
                             <tr>
                                <td>Name          :</td>
                                <td>
                                    <input type="text" name="nameofresearchscholar[]" id="nameofresearchscholar" maxlength="500" size="35" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Tittle        :</td>
                                <td>
                                    <input type="text" name="tittle[]" id="tittle" maxlength="500" size="35" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>University    :</td>
                                <td>
                                    <input type="text" name="university[]" id="university" maxlength="500" size="35" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Guidance Type :</td>
                                <td>
                                    <input list="typ" type="text" name="types[]" id="types" maxlength="7" size="10" value="">
                                    <datalist id="typ">
                                        <option value="guided">
                                        <option value="guiding">
                                    </datalist>
                                </td>
                            </tr>
                        </table>
                        
                         
                     </div>

                     <?php
                     }
                    
                     ?>





            </div>

            <div class="tab__content">
              
               
                <!-- books -->
                <script type="text/javascript">
                    function validatebooks(frm)
                    {
                        var ele = frm.elements['books[]'];
                        if (! ele.length)
                        {
                            alert(ele.value);
                        }
                        return true;
                    }
                    function add_feedbooks()
                    {
                        var div1 = document.createElement('div');
                        div1.innerHTML = document.getElementById('newlinktp3').innerHTML;
                    
                        document.getElementById('newlink3').appendChild(div1);
                    }
                    </script>
               
               
                     <form method="post" action="./books.php" onsubmit="return validatebooks(this)">
                     <table>
                     <tr>
                         <td valign=top style="width:150px;"> Books published  :</td>
                         <td valign=top>
                         <?php 
                         while($rows=mysqli_fetch_assoc($books))
                         {
                            
                        ?>
                        <div id="newlink3">
                                 <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                                 <textarea name="books[]"  cols="100" rows="3" maxlength="995"><?php echo "{$rows['details']}"; ?></textarea>
                                      
                                 </div>
                             </div>
            
                        <?php 
                         }
                        
                                         
                         ?>
                             
                             <p id="addnew">
                                    <a href="javascript:add_feedbooks()">Add New </a>
                                </p>
                         </td>
                     </tr>
                     </table>
                         <p>
                             <br>
                             <input type="submit" name="submitbooks">
                             <input type="reset" name="reset1">
                         </p>
                  
                     </form>
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktp3" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                         <textarea name="books[]"  cols="100" rows="3" maxlength="995"></textarea>
                         </div>
                     </div>



                     <!-- publications -->
                     <script type="text/javascript">
                    function validatepublications(frm)
                    {
                        var ele = frm.elements['publications[]'];
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
                    function add_feedpublications()
                    {
                        var div1 = document.createElement('div');
                        div1.innerHTML = document.getElementById('newlinktp91').innerHTML;
                    
                        document.getElementById('newlink91').appendChild(div1);
                    }
                    </script>
               
               
                     <form method="post" action="./publications.php" onsubmit="return validatepublications(this)">
                     <table>
                     <tr>
                         <td valign=top style="width:150px;"> Conference Details :</td>
                         <td valign=top>
                         <?php 
                         while($rows=mysqli_fetch_assoc($publications))
                         {
                            
                        ?>
                        <div id="newlink91" >
                                 <div class="feed" style="display:inline-block; padding-bottom: 10px;" >
                                 <textarea name="publications[]"  cols="100" rows="3" maxlength="995"><?php echo "{$rows['pubdetails']}"; ?></textarea>
                                       
                                 </div>
                             </div>
            
                        <?php 
                         }
                        
                                         
                         ?>
                             
                             <p id="addnew">
                                    <a href="javascript:add_feedpublications()">Add New </a>
                                </p>
                         </td>
                     </tr>
                     </table>
                         <p>
                             <br>
                             <input type="submit" name="submitpublications">
                             <input type="reset" name="reset1">
                         </p>
                  
                     </form>
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktp91" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                         <textarea name="publications[]"  cols="100" rows="3" maxlength="995"></textarea>
                          
                         </div>
                     </div>

                     <!-- journals -->
                     <script type="text/javascript">
                    function validatejournals(frm)
                    {
                        var ele = frm.elements['journals[]'];
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
                    function add_feedjournals()
                    {
                        var div1 = document.createElement('div');
                        div1.innerHTML = document.getElementById('newlinktp51').innerHTML;
                    
                        document.getElementById('newlink51').appendChild(div1);
                    }
                    </script>
               
               
                     <form method="post" action="./journals.php" onsubmit="return validatejournals(this)">
                     <table>
                     <tr>
                         <td valign=top style="width:150px;">Journal Details :</td>
                         <td valign=top>
                         <?php 
                         while($rows=mysqli_fetch_assoc($journals))
                         {
                            
                        ?>
                        <div id="newlink51">
                                 <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                                 <textarea name="journals[]"  cols="100" rows="3" maxlength="995"><?php echo "{$rows['journaldetails']}"; ?></textarea>
                                  
                                 </div>
                             </div>
            
                        <?php 
                         }
                        
                                         
                         ?>
                             
                             <p id="addnew">
                                    <a href="javascript:add_feedjournals()">Add New </a>
                                </p>
                         </td>
                     </tr>
                     </table>
                         <p>
                             <br>
                             <input type="submit" name="submitjournals">
                             <input type="reset" name="reset1">
                         </p>
                  
                     </form>
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktp51" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                         <textarea name="journals[]"  cols="100" rows="3" maxlength="995"></textarea>

                                           </div>
                     </div>
                     
                    
            </div>
            <div class="tab__content">
                <h3>Achievements</h3>
                <script type="text/javascript">
                    function validate(frm)
                    {
                        var ele = frm.elements['achievements[]'];
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
                        div1.innerHTML = document.getElementById('newlinktpl0').innerHTML;
                    
                        document.getElementById('newlink0').appendChild(div1);
                    }
                    </script>
               
               
                     <form method="post" action="./achievements.php" onsubmit="return validate(this)">
                     <table>
                     <tr>
                         <td valign=top> Enter Achievements :</td>
                         <td valign=top>
                         <?php 
                         while($rows=mysqli_fetch_assoc($achievements))
                         {
                            
                        ?>
                        <div id="newlink0">
                                 <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                                    <input type="text" name="achievements[]" value="<?php echo "{$rows['achievements']}"; ?>" size="30">   
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
                             <input type="submit" name="submitachievements">
                             <input type="reset" name="reset1">
                         </p>
                  
                     </form>
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktpl0" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                          <input type="text" name="achievements[]" value=""  size="30">
                         </div>
                     </div>
                 

            </div>

        </div>

    </div>




</body>

</html>