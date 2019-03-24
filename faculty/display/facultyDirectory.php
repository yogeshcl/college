<?php
 include("./faculty/login/db.php");
$query="select * from profile";
$result=mysqli_query($conn,$query);
?>

<div id="dtBasicExample" class="table-responsive-xl  text-nowrap" style="padding-left:10vw; padding-right:10vw ">
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
<?php 
 while($rows=mysqli_fetch_assoc($result))
 {
?>
 <tr>

    
   <td><?php echo "<a href='./details.php?id={$rows['pfno']}'>{$rows['name']}</a>";?></td>
   <td><?php echo "<a href='./details.php?id={$rows['pfno']}'>{$rows['designation']}</a>";?></td>
   <td><?php echo "<a href='./details.php?id={$rows['pfno']}'>{$rows['department']}</a>";?></td>
   <td><?php echo "<a href='./details.php?id={$rows['pfno']}'>{$rows['eduquali']}</a>";?></td>
 
 </tr>

 <?php
 }
?>
         
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