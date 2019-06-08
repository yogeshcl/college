<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style type="text/css">

		.tab_content{
			font-family: helvetica;
			text-align: justify;
			line-height: 1.8;
		}
		.main-page-image-text .Title{
			color:#78100D;
			font-size: 36px;
			line-height: 42px;
		    padding:10px 10px 10px 30px;
			background-color: #ebbb76;
			width:100%;
			font-weight: bold;
		}
         .main .Box,.right{
         	display: inline-block;
         	float: left;
         }
         .right{
         	margin-top: 30px;
           margin-left: 5px;
           border:2px solid black;
           width: 28%;
           height: 300px;
         }

			.Box{
				margin-top: 30px;
				width: 70%;
			}

		.tabHead{
			display: inline-block;
			width: 100%;   
            background-color: #ebbb76;   
		}
		.tablinks{
			padding:10px 20px 10px 20px;
			border: 0;
			font-weight: bold;
			font-size: 15px;
			background-color: #ebbb76;
			outline: none;
			min-width: 100px;
		}

		button:active{
			background-color: white;
			color: black;
		}
		button:hover{
			background-color: white;
			color:black;
		}
		button:visited{
			background-color: white;
			color:black ;
		}

		@media screen and (max-width: 600px) {
			.Box{
				float: none;
				width: 100%;
				flex-direction: column;
				margin-left: 15px;
			}
			.right{
				float:none;
				width: 100%;
				flex-direction: column;
			}
			.images{
				text-align: center;
			}
		}
	</style>
</head>
<body>

		<?php include("./mainpage/header.html");?>
	     <div class="main-page-image-text">
		<h1 class="Title">BOYS HOSTEL</h1>
	</div>
	<div class="main">
		<div class="Box">
	     	<div class="tabHead">
	     		<button class="tablinks" onclick="openCity(event,'overview')">
	     			 Overview
	     		</button>
	     		<button class="tablinks" onclick="openCity(event,'types')">
	     			Types Of Accomodation
	     		</button>
	     		<button class="tablinks" onclick="openCity(event,'facilities')">
	     			Facilities
	     		</button>
	     		<button class="tablinks" onclick="openCity(event,'Testimonial')">
	     			Testimonial
	     		</button>
	     		<button class="tablinks" onclick="openCity(event,'Fees')">
	     			Fees Structure
	     		</button>
	     		<button class="tablinks" onclick="openCity(event,'Comm')">
	     			Commitee
	     		</button>
	     	</div>
     	<div class="tab_content" style="display: block;">
     		<div class="tabcontent" id="overview">
     			<p style="text-align: justify;">The Hostel was started in the year 2009 to accommodate the boy’s students. The hostel has two blocks accommodating about 400 students. The rooms are well furnished and the surroundings of hostel is very green and pleasant. The hostel is having&nbsp; dinning hall&nbsp; to cater the needs of the boarders of north and south Indians.</p>
     			<p style="text-align: justify;">Hostel is known for its discipline and well managed by dedicated faculty and&nbsp; staff members. The Hostel area is spacious with built up area&nbsp; 9060.00 sq mt has 158 Rooms. Hostel supports the Institute to arrange many programme.</p>
     			<ol>
				<li><strong>Warden- Dr. D&nbsp;M&nbsp;Mahesh&nbsp;Kumar</strong>,<br>
				Associate professor &amp; Head,<br>
				Dept of EIE, JSSATEB,<br>
				Ph: <strong>080</strong>&nbsp;<strong>2861 1702</strong></li>
				<li><strong>Assistant warden – Mr. Rohitaksha K,</strong><br>
				Assistant professor,<br>
				Dept of CSE, JSSATEB,<br>
				</ol>
     		</div>
     		<div class="tabcontent" id="types" style="display: none;">
				<table style="width: 100%;" border="2">
				<tbody>
				<tr>
				<td><strong>Single sharing</strong></td>
				<td><strong>Two sharing</strong></td>
				<td><strong>Three sharing</strong></td>
				</tr>
				<tr>
				<td>Number of rooms – 02</td>
				<td>Number of rooms – 11</td>
				<td>Number of rooms – 145</td>
				</tr>
				</tbody>
				</table>
     		</div>
            <div class="tabcontent" id="facilities" style="display: none;">
     			<div class="images" style="margin-top: 10px;">
     				<img src="JSSATEB-Boys-Hostel-2-300x225.jpg">
     				<img src="JSSATEB-Boys-Hostel-3-300x225.jpg">
     				<img src="JSSATEB-Boys-Hostel-4-300x225.jpg">
     				<img src="JSSATEB-Boys-Hostel-5-300x225.jpg">
     				<img src="JSSATEB-Boys-Hostel-1-300x225.jpg">
     			</div>
     		</div>
            <div class="tabcontent" id="Testimonial" style="display: none;">
     			<p><strong>Rohankulkarni K</strong></p>
     			<P>At JSS, every care is taken to provide the best facilities for students who stay away from their homes. The hostel provides hygienic food and clean surroundings so that the inmates can live in a congenial atmosphere at affordable prices.</p>
     		</div>
            <div class="tabcontent" id="Fees" style="display: none;">
     			<table border:2 style="width:100%;margin-top: 20px;">
				<tbody>
				<tr>
				<td colspan="3">
				<h6 style="text-align: center;"><strong>Amount Per Year In Rupees</strong></h6>
				</td>
				</tr>
				<tr>
				<td colspan="3">
				<h6 style="text-align: center;"><strong>For Attached Bathroom</strong></h6>
				</td>
				</tr>
				<tr>
				<td>
				<h6 style="text-align: center;"><strong>Three Students in One room</strong></h6>
				</td>
				<td>
				<h6 style="text-align: center;"><strong>Two Students in One room</strong></h6>
				</td>
				<td>
				<h6 style="text-align: center;"><strong>One Student in One room</strong></h6>
				</td>
				</tr>
				<tr>
				<td colspan="3">
				<h6 style="text-align: center;"><strong>For Students Admitted in 2016-17</strong></h6>
				</td>
				</tr>
				<tr>
				<td>
				<p style="text-align: center;"><strong>60600/- Rupees</strong></p>
				</td>
				<td>
				<p style="text-align: center;"><strong>90600/- Rupees</strong></p>
				</td>
				<td>
				<p style="text-align: center;"><strong>120600/- Rupees</strong></p>
				</td>
				</tr>
				<tr>
				<td colspan="3">
				<h6 style="text-align: center;"><strong>For Students Admitted before 2016-17</strong></h6>
				</td>
				</tr>
				<tr>
				<td>
				<p style="text-align: center;"><strong>43300/- Rupees</strong></p>
				</td>
				<td>
				<p style="text-align: center;"><strong>73300/- Rupees</strong></p>
				</td>
				<td>
				<p style="text-align: center;"><strong>103300/- Rupees</strong></p>
				</td>
				</tr>
				</tbody>
				</table>
     		</div>
            <div class="tabcontent" id="Comm" style="display: none;">
     			<p>lolsoodldqqqqqqqqqqqq</p>
     		</div>
     	</div>
     </div>

     <div class="right">
     	 <p>hello</p>
     </div>

	</div>
     
              
     <script type="text/javascript">
     	 function openCity(evt, cityName) {
  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
     </script>
<?php include("./mainpage/footer.html");?>
     
</body>
</html>