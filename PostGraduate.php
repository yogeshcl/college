<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post Graduate</title>
	<style type="text/css">


    	a:link {
  				color: black;
  				text-decoration: none;
			}
		a:visited {
 					 color: black;
 					 text-decoration: none;
			}
		a:hover {
                   color:white;
                   background-color:darkred;
           }

		.thermal, .vlsi{
			float:left;
			width: auto;
			margin-left:50px;
			margin-top: 50px;
			font-family: helvetica;
			font-weight: 20px;
			box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);
		}

		.Title{
			color:#78100D;
			background-color: #ebbb76;
			width:100%;
			padding-left:20px;
			padding-bottom:1px;
			padding-top: 1px;
		}

		@media screen and (max-width: 600px) {
			.thermal, .vlsi{
			float:center;
			flex-direction: column;
			width: auto;
			margin-left:40px;
			margin-right: 10px;
			margin-top:10px;
			margin-bottom: 10px;
			font-family: helvetica;
			font-weight: 20px;
			box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);
		}

	   	a:link {
  			color: black;
  			text-decoration: none;
			}
		a:visited {
 					 color: black;
 					 text-decoration: none;
			}
		a:hover {
                   color:white;
                   background-color:darkred;
           }
		}
	</style>
</head>
<body>
<?php include("./mainpage/header.html");?>
	 <div class="Title">
	 	<h3 style="margin-bottom:0.5px;color: white">Departments</h3>
		<h1 style="margin-top:0.5px;">POST GRADUATE</h1>
	 </div>

   <div class="main">
     <div class="second_main">

     	<a class="thermal" href="https://www.google.co.in">
   		<div>
   			<img src="https://jssateb.ac.in/wp-content/uploads/2016/10/JSSATEB-Thermal-Engineering-1024x604.jpg" width="300px" height="150px">
   		</div>
   			<p style="padding-left: 20px">Thermal Engineering</p>
   		</a>

   		<a class="vlsi" href="https://www.google.co.in">
   		<div>
   			<img src="https://jssateb.ac.in/wp-content/uploads/2016/10/JSSATE-VLSI-Design-and-Embedded-Systems-1024x604.jpg" width="300px" height="150px">
   		</div>
   		<div>
   			<p style="padding-left: 20px">VLSI Design and Embedded System</p>
   		</div>
   		</a>

     </div>
   </div>
   <?php include("./mainpage/footer.html");?>
</body>
</html>