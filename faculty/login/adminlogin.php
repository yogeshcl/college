<?php
include_once('asession.php');
include_once('db.php');
$jssadmin=$_SESSION['jssateadmin'];

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
            <label for="tab4">All Faculties</label>

           


            <div class="tab__content">
                <h3>Faculty list</h3>
                <script type="text/javascript">
                    function validate(frm)
                    {
                        var ele1 = frm.elements['faculty1[]'];
                        var ele2 = frm.elements['faculty1[]'];
                        var ele3 = frm.elements['faculty1[]'];
                        if (! ele1.length)
                        {
                            alert(ele1.value);
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
               
               
                     <form method="post" action="./facultylist.php" onsubmit="return validate(this)">
                     <table>
                     <tr>
                         <td valign=top> Enter Faculties :</td>
                         <td valign=top>
                         <?php 
                         while($rows=mysqli_fetch_assoc($faculty))
                         {
                            
                        ?>
                        <div id="newlink">
                                 <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                                    <input type="text" name="faculty1[]" value="<?php echo "{$rows['pfno']}"; ?>" size="30">
                                    <input type="text" name="faculty2[]" value="<?php echo "{$rows['name']}"; ?>" size="30">  
                                    <input type="text" name="faculty3[]" value="<?php echo "{$rows['email']}"; ?>" size="30">     
                                 </div>
                             </div>
            
                        <?php 
                         }
                        
                                         
                         ?>
                             
                             <p id="addnew">
                                    <a href="javascript:add_feed()"> New Faculty </a>
                                </p>
                         </td>
                     </tr>
                     </table>
                         <p>
                             <br>
                             <input type="submit" name="submitfaculty">
                             <input type="reset" name="reset1">
                         </p>
                  
                     </form>
                     <!-- Template. This whole data will be added directly to working form above -->
                     <div id="newlinktpl" style="display:none">
                         <div class="feed" style="display:inline-block; padding-bottom: 10px;">
                          <input type="text" name="faculty1[]" value=""  size="30">
                          <input type="text" name="faculty2[]" value=""  size="30">
                          <input type="text" name="faculty3[]" value=""  size="30">
                         </div>
                     </div>
            </div>

        
        </div>

    </div>




</body>

</html>