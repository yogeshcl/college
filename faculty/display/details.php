<?php
 include("../login/db.php");
 $id = $_GET['id'];
 $result = mysqli_query($conn, "SELECT * FROM profile WHERE pfno='$id'");   
?>

<div class="table-responsive-xl  text-nowrap" style="padding-left:10vw; padding-right:10vw ">
<table id="dtBasicExample" class="table table-fixed table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-lg">Name
      
            </th>
            <th class="th-lg">Designation
      
            </th>
            <th class="th-lg">Department
      
            </th>
            <th class="th-lg">Education Qualification
            </th>
        

          </tr>
        </thead>
        <tbody>

 <tr>
<?php 
if ($row = $result->fetch_assoc()) {
?>
   
   <td><?php echo $row['name'] ;?></td>
   <td><?php echo $row['designation'];?></td>
   <td><?php echo $row['department'];?></td>
   <td><?php echo $row['doj'];?></td>
 
<?php
}
else
  echo "<h3>Faculty Not Found";
?>

 </tr>

     
        </tbody>
        <!-- <tfoot>
          <tr>
            <th>Name
            </th>
            <th>Designation
            </th>
            <th>Department
            </th>
            <th>Education Qualification
            </th>
           
          </tr>
        </tfoot> -->
      </table>
</div>