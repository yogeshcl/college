<?php
 include("./db.php");
$update="UPDATE logdetails AS t1
INNER JOIN profile AS t2 ON t1.pfno = t2.pfno
SET t1.name = t2.name, t1.department=t2.department";




$query="select * from logdetails ORDER BY timestamp DESC";
$result1=mysqli_query($conn,$update);
$result=mysqli_query($conn,$query);
?>

<div id="dtBasicExample" class="table-responsive-xl  text-nowrap" style="padding-left:10vw; padding-right:10vw ">
<table id="dtBasicExample" class="table table-fixed table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-lg">Slno
      
            </th>
            <th class="th-lg">pfno
      
            </th>
            <th class="th-lg">Name
      
            </th>
            <th class="th-lg">Department
            </th>
             <th class="th-lg">Time Stamp
            </th>
        

          </tr>
        </thead>
        <tbody>
<?php 
 while($rows=mysqli_fetch_assoc($result))
 {
?>
 <tr>

    
   <td><?php echo "{$rows['slno']}</a>";?></td>
   <td><?php echo "{$rows['pfno']}</a>";?></td>
   <td><?php echo "{$rows['name']}</a>";?></td>
   <td><?php echo "{$rows['department']}</a>";?></td>
   <td><?php echo "{$rows['timestamp']}</a>";?></td>
 
 </tr>

 <?php
 }
?>
         
        </tbody>
  
      </table>
</div>