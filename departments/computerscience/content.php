<!DOCTYPE html>
<!-- saved from url=(0043)file:///C:/Users/PUJIT/Desktop/UGINNER.html -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ug_cse</title>
	<title></title>
	<style type="text/css">
         
         	body {
  font-family: Algerian;
}
p{
	line-height: 1.8;
}
 
     .list-items{
        	border:2px solid black;
        	background-color: red;
        	height: 30px;
        	width: 200px;
     }
    .Main{
    	font-family: helvetica;
    }

    ul.jss_depList
    {
    margin-left: 30px;
    padding: 0;
    }

    ul.jss_depList li
    {
	list-style-type:none ;
    }

    ul.jss_depList li a
    {
    	display: block;
    	padding: 7px 15px 7px 25px; 
    	background: #78100d  no-repeat 10px 12px;
    	color: #fff; 
    	font-size: 12px;
    	line-height: 18px;
    	margin-bottom: 2px;
    	transition: .2s ease-out;
    	font-weight: bold;
    	text-decoration: none;
    }

     ul.jss_depList li a:hover{
     	background-color: #c99619;
     	color: #000;
     	transition: .2s ease-out;
     }

		.left{
         float:left;
         height: 100%;
         position:sticky;
       
         margin-right: 5px;
         display: block;
		 top:35vh;
         min-width:330px;
		}

		.middle{
			width:60%;
			float:left;
			position: relative;
            left: 100px;
			min-width: 300px;
		}

		.right{
			float:right;
			width:10%;
		}

		.button-class{
			background-color: #ebbb76;
		}

		.button-class-box{
			border:2px solid black;
		}

		  .tablinks,.tablinks1{
		  color:#78100D;
		  font-family: bold;
		  background-color: #ebbb76;
		  border: none;
		  padding: 10px 30px;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px 0px 0px;
		  cursor: pointer;
		  text-align: center;
		  outline: none;
		}
		.tablinks:hover,.tablinks1:hover {
		  background-color:white;
		  color: black;
		  border: none;
		}


		.tablinks:active,.tablinks1:active{
			background-color:white;
			color:black;
		   margin: 4px 2px 0px 0px;
		}

		.tablinks:visited,.tablinks1:visited{
			background-color:white;
			color:black;
		    margin: 4px 2px 0px 0px;
		}

     	 .tabcontent,.tabcontent1{
		  display: none;
		  padding: 6px 12px;
		  border: 1px solid #ccc;
		  border-top: none;
		}

		.poke{
			border: 2px solid black;
		}

		.images{
			display: block;
			width: 100%;
			height: 300px;

		}

		.left-image{
			float:left;
			margin-right:5px;
			width:48%;
			border: 2px solid black;
			height:300px;
			min-width: 40px;
		}
        
		.right-image{
			float:left;
			width:50%;
			height:300px;
			border:2px solid black;
			min-width: 40px;
		}

				.collapsible {
				  background-color: #78100d;
				  color: white;
				  cursor: pointer;
				  padding: 14px;
				  width: 100%;
				  border: none;
				  text-align: left;
				  outline: none;
				  font-size: 15px;
				  border-bottom: 0.5px solid black;
				}

				.active, .collapsible:hover {
				  background-color:  #c99619;
				}

				.content {
				  padding: 0 18px;
				  display: none;
				  overflow: hidden;
				  background-color: #f1f1f1;
				}
				        

		@media screen and (max-width: 700px) {
             .left{
             	display: none;
             }
             .middle{
             	position: relative;
             	left:5px;
             	right:5px;
             	width: 100%;
             	min-width: 400px;
             }
             .right{
             	display: none;
             }

             .collapsible {
				  background-color: #78100d;
				  color: white;
				  cursor: pointer;
				  padding: 14px;
				  width: 100%;
				  border: none;
				  text-align: left;
				  outline: none;
				  font-size: 15px;
				}


				.content {
				  padding: 0 18px;
				  display: none;
				  overflow: hidden;
				  background-color: #f1f1f1;
				}

        }

        @media screen and (max-width: 1350px){
            .left-image,.right-image{
            	width:100%;
            	margin-bottom: 10px;
            }
        }
	</style>
</head>
<body>
<div>
<?php include("../leftcontent.html");?>
    
<div  style="display:block; position:initial; width:60% padding-top:2vw">
	<div class="middle" >

		<div class="vision">
		<h3 style="border-bottom: 2px solid black">Vision</h3>
		<p style="border-left: 1px solid black;padding-left: 5px;">“To be a distinguished academic and research Department in the field of Computer Science and Engineering for enabling students to be highly competent professionals to meet global challenges”</p>
		</div>

		<div class="mission">
			<h3 style="border-bottom: 2px solid black">Mission</h3>
			<p><strong>M1:</strong>Impart quality education in Computer Science and Engineering through state-of-the art learning environment and committed Faculty with Research expertise.</p>
			<p><strong>M2:</strong>Train students to become the most sought after professionals in the field of Information Technology by providing them strong theoretical foundation with adequate practical training.</p>
            <p><strong>M3:</strong>Provide a conducive environment for Faculty and Students to carry out Research and Innovation in collaboration with reputed Research Institutes and Industry.</p>
	        <p><strong>M4:</strong>Inculcate human values and professional ethics among students to enable them to become good citizens and serve the society.</p> 	
		</div>

		<div class="poke">
			<div class="button-class">
				<button class="tablinks" onclick="openCity(event, &#39;PEO&#39;)">PEO</button>
  			    <button class="tablinks" onclick="openCity(event, &#39;PO&#39;)">PO</button>
 		        <button class="tablinks" onclick="openCity(event, &#39;PSO&#39;)">PSO</button>
			</div>
			

 		        <div id="PEO" class="tabcontent" style="display: block;">
 					     <p><strong>PEO1:</strong> Graduates shall possess essential skills to adapt emerging technologies & environment to solve real world problems.</p>
					 <p><strong>PEO2:</strong> Graduates shall have required technical competency for pursuing higher studies & Research.</p>
					 <p><strong>PEO3:</strong> Graduates shall have essential communication and managerial skills to become competent professionals and entrepreneurs.</p>
			  	</div>

				<div id="PO" class="tabcontent" style="display: none;">
				<p>  <strong>COMPUTER SCIENCE Engineering Graduates will be able to:</strong></p>

				<p><strong>PO1:Engineering knowledge:</strong>  Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.</p>

				<p><strong>PO2:Problem analysis:</strong> Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</p>

				<p><strong>PO3: Design/development of solutions:</strong> Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.</p>

				<p><strong>PO4: Conduct investigations of complex problems:</strong> Use research-based knowledge and research methods including design of experiments, analysis, and interpretation of data, and synthesis of the information to provide valid conclusions.</p>

				<p><strong>PO5: Modern tool usage:</strong> Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</p>

				<p><strong>PO6: The engineer and society:</strong> Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</p>

				<p><strong>PO7: Environment and sustainability:</strong> Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</p>

				<p><strong>PO8: Ethics:</strong> Apply ethical principles and commit to professional ethics, responsibilities, and norms of the engineering practice.</p>

				<p><strong>PO9: Individual and teamwork:</strong> Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</p>

				<p><strong>PO10: Communication:</strong> Communicate effectively on complex engineering activities with the engineering community and with society, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</p>

				<p><strong>PO11: Project management and finance:</strong> Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</p>

				<p><strong>PO12: Life-long learning:</strong> Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change. </p>
				</div>

				<div id="PSO" class="tabcontent" style="display: none;">
				 <p><strong>PSO1:</strong> Apply the principles of basic Engineering Science and acquire the hardware and software aspects of Computer Science.</p>
			     <p><strong>PSO2:</strong> Solve the real world problems using modeling for a specific Computer system and architecture.</p>
			   	 <p><strong>PEO3:</strong> Ability to design and develop applications using various software and hardware tools.</p>
				 <p><strong>PEO4:</strong> Exhibit the practical competence using broad range of programming languages.</p>
				</div>
		     	</div>

                  

	         

					<script>
					function oCity(evt, cityName) {
					  let i, tabcontent, tablinks;
					  tabcontent = document.getElementsByClassName("tabcontent1");
					  for (i = 0; i < tabcontent.length; i++) {
					    tabcontent[i].style.display = "none";
					  }
					  tablinks = document.getElementsByClassName("tablinks1");
					  for (i = 0; i < tablinks.length; i++) {
					    tablinks[i].className = tablinks[i].className.replace(" active", "");
					  }
					  document.getElementById(cityName).style.display = "block";
					  evt.currentTarget.className += " active";
					}
					</script>


      

				<h3 style="border-bottom: 2px solid black;margin-bottom: 15px; margin-top:30px">About The Department</h3>
				<p><strong>The Department is Headed by Dr. Naveen N C</strong></p>
				<p style="text-align: justify; text-indent: 50px;">The Department of Computer Science and Engineering was established in the year 1997, with the objective of imparting quality education in the field of Computer Science and Engineering. The department was accredited by NBA-AICTE in 2017.
                The department has to its credit a team of qualified, experienced and dedicated faculty, whose main aim is to equip students with the knowledge and expertise to grow professionally and contribute significantly to the society.</p>

               
                 <p style="text-align: justify; text-indent: 50px;" >Students are consistently getting ranks in university exams. They are encouraged to participate in various co-curricular and extra-curricular activities and have won prizes. Training and Placement division provides full training and placement assistance to students in all areas of professional education. Around 90% of our students get placed in reputed companies. Students have exhibited good performance in competitive examinations. Our Alumni are serving in various positions in reputed companies like Amazon, Adobe, Accenture, Wipro Technologies, Cognizant Technologies. With the rapidly evolving technology and the continuous need for innovation, it has been the department’s ongoing endeavour to produce quality engineering graduates</p> 
				</p>
                <h3 style="border-bottom: 2px solid black ;margin-bottom:5px">Research Initiatives</h3>
		       <!--<button class="collapsible">Publications <span style="float: right">+</span></button>
				<div class="content">
				  <p>ADD details over here</p>
				</div>-->
				<button class="collapsible">List of PhDs completed/student guided <span style="float: right">+</span></button>
				<div class="content">
				  <p>ADD details over here</p>
				</div>
				<button class="collapsible">Details of consultancy work <span style="float: right">+</span></button>
				<div class="content">
				  <p>ADD details over here</p>
				</div>
				<button class="collapsible">List of funded projects <span style="float: right">+</span></button>
				<div class="content">
				  <p>ADD details over here</p>
				</div>
				<h3 style="border-bottom: 2px solid black ;margin-bottom:5px">Interaction</h3>
		        <button class="collapsible">Industry Institute Intercation <span style="float: right">+</span></button>
				<div class="content">
				  <p>ADD details over here</p>
				</div>
			
		
				

      	        </div>
		</div>
		<div style="height:100px; width:100%;">
		</div>

						<script>
				var coll = document.getElementsByClassName("collapsible");
				var i;

				for (i = 0; i < coll.length; i++) {
				  coll[i].addEventListener("click", function() {
				    this.classList.toggle("active");
				    var content = this.nextElementSibling;
				    if (content.style.display === "block") {
				      content.style.display = "none";
				    } else {
				      content.style.display = "block";
				    }
				  });
				}
				</script>

				<script>
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

				<script>
				function diffCity(evt, cityName) {
				  var i, tabcontent, tablinks;
				  tabcontent = document.getElementsById("tabcontent1");
				  for (i = 0; i < tabcontent.length; i++) {
				    tabcontent[i].style.display = "none";
				  }
				  tablinks = document.getElementsById("tablinks1");
				  for (i = 0; i < tablinks.length; i++) {
				    tablinks[i].className = tablinks[i].className.replace(" active", "");
				  }
				  document.getElementById(cityName).style.display = "block";
				  evt.currentTarget.className += " active";
				}
				</script>

	</div>
	
</div>
			</div>

</body></html>