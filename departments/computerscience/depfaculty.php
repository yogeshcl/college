<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<base href="http://localhost/college/" />
<style>
#myInput {
background-image: url('https://www.freeiconspng.com/img/9966'); /* Add a search icon to input */
background-position: 10px 12px; /* Position the search icon */
background-repeat: no-repeat; /* Do not repeat the icon image */
width: 100%; /* Full-width */
font-size: 16px; /* Increase font-size */
padding: 12px 20px 12px 40px; /* Add some padding */
border: 1px solid #ddd; /* Add a grey border */
margin-bottom: 12px; /* Add some space below the input */
}
#myTable {
border-collapse: collapse; /* Collapse borders */
width: 100%; /* Full-width */
border: 1px solid #ddd; /* Add a grey border */
font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
text-align: left; /* Left-align text */
padding: 12px; /* Add padding */
}

#myTable tr {
/* Add a bottom border to all table rows */
border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
/* Add a grey background color to the table header and on hover */
background-color: #f1f1f1;
}
</style>

</head>
<body>
<?php include("../../faculty/login/db.php");

$query="select * from profile where `department`='Computer Science and Engineering'";
$result=mysqli_query($conn,$query);?>
<?php include("./dheader.html");?>
<div>
<?php include("../leftcontent.html");?>
<div style="display:block; position:relative; float:left; padding-top:2vw">

<h2>Faculties</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<table id="myTable">
<tr class="header">
<th style="width:60%;">Name</th>
<th style="width:40%;">Designation</th>
<th style="width:60%;">Department</th>
<th style="width:40%;">Education Qualification</th>
</tr>
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
</table>
<script>
function myFunction() {
// Declare variables 
var input, filter, table, tr, td, i, txtValue;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
table = document.getElementById("myTable");
tr = table.getElementsByTagName("tr");

// Loop through all table rows, and hide those who don't match the search query
for (i = 0; i < tr.length; i++) {
td = tr[i].getElementsByTagName("td")[0];
if (td) {
txtValue = td.textContent || td.innerText;
if (txtValue.toUpperCase().indexOf(filter) > -1) {
tr[i].style.display = "";
} else {
tr[i].style.display = "none";
}
} 
}
}
</script>


</div>
</div>

<?php include("../../mainpage/footer.html");?> 
</body>
</html>
