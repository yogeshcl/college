<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JJS Academy of Technical Education</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Theme CSS-->
    <link rel="stylesheet" href="./css/theme.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./faculty/css/tab.css" />


    <style>
    p.profile {
        width: 200px;
        text-transform: Capitalize;
        display: inline-block;
    }

    p.values {
        width: 400px;
        text-transform: Capitalize;
        display: inline-block;
    }

    @media (max-width: 780px) {
      p.profile {
        width: 28vw;
      }
      p.values {
        width: 40vw;


    }
  }
    </style>
</head>

<body>

    <?php include("./mainpage/header.html");?>








    <?php
 include("./faculty/login/db.php");
 $id = $_GET['id'];
 $result = mysqli_query($conn, "SELECT * FROM profile WHERE pfno='$id'");   
 $respo=mysqli_query($conn, "SELECT * FROM responsibilites WHERE pfno='$id'");
?>


    <div class="container">

        <div class="tab-wrap">

            <input type="radio" id="tab4" name="tabGroup2" class="tab" checked>
            <label for="tab4">
                <h5>Profile</h5>
            </label>

            <input type="radio" id="tab5" name="tabGroup2" class="tab">
            <label for="tab5">
                <h5>Responsibilites</h5>
            </label>

            <input type="radio" id="tab6" name="tabGroup2" class="tab">
            <label for="tab6">
                <h5>Research</h5>
            </label>

            <input type="radio" id="tab7" name="tabGroup2" class="tab">
            <label for="tab7">
                <h5>Publications</h5>
            </label>

            <div class="tab__content" style=" vertical-align: middle;">

                <?php 
if ($row = $result->fetch_assoc()) {
?>

                <p class="profile">Name </p>: <p class="values"><?php echo $row['name'] ;?> </p><br>
                <p class="profile">designation </p>: <p class="values"><?php echo $row['designation'];?> </p><br>
                <p class="profile">department </p>: <p class="values"><?php echo $row['department'];?> </p><br>
                <p class="profile">Education Qualification </p>: <p class="values"><?php echo $row['eduquali'];?> </p>
                <br>

                <p class="profile">Date of Join </p>: <p class="values"><?php echo $row['doj'];?> </p><br>
                <p class="profile">Date of birth </p>: <p class="values"><?php echo $row['dob'];?> </p><br>
                <p class="profile">No of Years Experience </p>: <p class="values"><?php echo $row['experience'];?> </p><br>
                <p class="profile">father name </p>: <p class="values"><?php echo $row['fathername'];?> </p><br>
                <p class="profile">gender </p>: <p class="values"><?php echo $row['sex'];?> </p><br>
                <p class="profile">contact no </p>: <p class="values"><?php echo $row['contactno'];?> </p><br>
                <p class="profile" >email id </p>: <p class="values" style="text-transform:Lowercase;"><?php echo $row['emailid'];?> </p><br>
                <p class="profile">nationality </p>: <p class="values"><?php echo $row['nationality'];?> </p><br>
                <p class="profile">Correspondance Addresss </p>: <p class="values"><?php echo $row['caddress'];?> </p>
                <br>
                <p class="profile">Permanenent address </p>: <p class="values"><?php echo $row['paddress'];?> </p><br>
                
                <p class="profile">Achievements </p>: <p class="values"><?php echo $row['achievements'];?> </p><br>
                <p class="profile">Hobbies </p>: <p class="values"><?php echo $row['hobbies'];?> </p><br>



                <?php
}
else
  echo "<h3>Faculty Not Found";
?>
            </div>

        

        <div class="tab__content">
            <!-- <h3>Responsibilites</h3> -->
          
            <ul>
            <?php 
             while($rows=mysqli_fetch_assoc($respo))
             {
            ?>
          <li><?php echo " {$rows['responsibility']}"; ?> </li>  

            <?php 
             }
            //  else 
            //    echo "<h3>No Responsibilites";
             ?>
             </ul>
        </div>

        <div class="tab__content">
            <h3>Research</h3>

        </div>

        <div class="tab__content">
            <h3>Publications</h3>

        </div>

    </div>

    </div>






    <?php include("./mainpage/footer.html");?>

</body>

</html>