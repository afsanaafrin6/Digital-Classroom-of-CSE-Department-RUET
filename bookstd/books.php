<?php

session_start();

date_default_timezone_set("Asia/Dhaka");


require_once('../config.php');
if(!isset($_SESSION['email']))
{
  header("Location:../firstpage/studentlogin.php");
}

if(isset($_SESSION['email']))
{
  $user_email=$_SESSION['email'];
  

}
$sql="SELECT * FROM student_info WHERE email='$user_email'";
$send=mysqli_query($con,$sql);
$row=mysqli_fetch_array($send);

 foreach($send as $it) {
     
      $semester = $it['semester'];}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>5th Semester</title>
	
	 <link rel="stylesheet" type="text/css" href="../5th semester/css/font-awesome.min.css" media="all" />
	 
	<link rel="stylesheet" type="text/css" href="../5th semester/css/uikit.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../5th semester/css/uikit.gradient.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../5th semester/css/uikit.almost-flat.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../5th semester/css/avgrund.css" media="all" />
   
	
	<link rel="stylesheet" type="text/css" href="../5th semester/css/jquery-ui.css" media="all">
	<script src="../firstpage/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../firstpage/dist/sweetalert.css">
	
	 <link rel="stylesheet" type="text/css" href="bookstyle.css" media="all" />
	 <link rel="stylesheet" type="text/css" href="responsivecourse.css" media="all" />
	
    
</head>
<body>
	<!--header area-->
	
		<div class="header_area">
			<div class="center_area">
				<div class="logo">
					<center><img src="../ruet.png" alt="logo" /></center>
					
				</div>
				<div class="col-sm-4 date">
				   <?php
		           $d=date("Y-m-d");
		           $month = date('jS F Y',strtotime($d));

		           echo "$month<br>";$time=date("h:i:s A");echo "$time";?></div>
		</div>
			</div>
			
				
				
	
		
	<div class="clr">	
	
	<div class="part">
   	    <ul>
			<div class="aa"><li><a href="#"><i data-uk-offcanvas="{target:'#my-id'}"class="fa fa-bars" aria-hidden="true" ></i></a><br />Menu</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
			
			
			<?php 
			if($semester=='1st semester'){?>
   	    	<div class="bb"><li class=""><a href="../1st semester/start.php" ><i class="fa fa-home" aria-hidden="true" ></i></a><br />Home</li></div><?php }?>
			<?php if($semester=='2nd semester'){?>
   	    	<div class="bb"><li class=""><a href="../2nd semester/start.php" ><i class="fa fa-home" aria-hidden="true" ></i></a><br />Home</li></div><?php }?>
			<?php if($semester=='3rd semester'){?>
   	    	<div class="bb"><li class=""><a href="../3rd semester/start.php" ><i class="fa fa-home" aria-hidden="true" ></i></a><br />Home</li></div><?php }?>
			<?php if($semester=='4th semester'){?>
   	    	<div class="bb"><li class=""><a href="../4th semester/start.php" ><i class="fa fa-home" aria-hidden="true" ></i></a><br />Home</li></div><?php }?>
			<?php if($semester=='5th semester'){?>
   	    	<div class="bb"><li class=""><a href="../5th semester/start.php" ><i class="fa fa-home" aria-hidden="true" ></i></a><br />Home</li></div><?php }?>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	<div class="bb"><li class="active"><a href="" ><i class="fa fa-book" aria-hidden="true"></i></a><br />Books</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	<div class="bb"><li ><a href="#" onclick="routine();"><i  class="fa fa-calendar" aria-hidden="true"></i></a><br />Routine</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	<div class="bb"><li ><a href="#" onclick="syllabus();"><i class="fa fa-file-text-o" aria-hidden="true"></i></a><br />Syllabus</li></div>
   	    	
   	    </ul>
    
   </div>
  
 <center><div class="uk-button-dropdown" data-uk-dropdown="{ mode:'click'}" >
  <div class="button"><a href="#" >
	1st Semester
	<i class="uk-icon-caret-down"></i>
	</a></div>
	
		<div class="uk-dropdown uk-dropdown-scrollable uk-dropdown-small" style="min-width:100%; margin-left:0;">
	
			
				<ul class="uk-nav uk-nav-dropdown">
					<li><a href="#" onclick="cse1100();">CSE 1100</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#"  onclick="cse1101();">CSE 1101</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#" onclick="cse1102();">CSE 1102</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#" onclick="eee1151();">EEE 1151</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#" onclick="eee1151();">EEE 1152</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#" onclick="cse1100();">Math 1113</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#" onclick="hum();">Hum 1113</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#" onclick="hum();">Hum 1114</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#" onclick="cse1100();">Chem 1113 </a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#" onclick="cse1100();">Chem 1114</a></li>
				</ul>
			
	    </div>
		
	
  </div></center>
  <center><div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}" >
    <div class="button"><a href="#" >
	2nd Semester
	<i class="uk-icon-caret-down"></i>
	</a></div>
	
		<div class="uk-dropdown uk-dropdown-scrollable " style="min-width: 100%;
	margin-left:0;">
			<ul class="uk-nav uk-nav-dropdown">
				<li><a href="#" onclick="cse1200()";>CSE 1200</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse1201()";>CSE 1201</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse1201()";>CSE 1202</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse1203()";>CSE 1203</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse1203()";>CSE 1204</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">Math 1213</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">Hum 1213</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="phy1213()";>Phy 1213</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="phy1213()";>Phy 1214</a></li>
			</ul>
	    </div>
		
	
  </div></center>
    <center><div class="uk-button-dropdown" data-uk-dropdown="{ mode:'click'}" >
    <div class="button"><a href="#" >
	3rd Semester
	<i class="uk-icon-caret-down"></i>
	</a></div>
	
		<div class="uk-dropdown uk-dropdown-scrollable " style="min-width:100%;
	margin-left:0;">
			<ul class="uk-nav uk-nav-dropdown">
				<li><a href="#" onclick="cse2100();">CSE 2100</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse2101();">CSE 2101</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse2101();">CSE 2102</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse2103();">CSE 2103</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse2103();">CSE 2104</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">EEE 2151</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">EEE 2152</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">Math 2113</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="hum2113();">Hum 2113</a></li>
			</ul>
	    </div>
		
	
  </div></center>
  <center><div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}" >
    <div class="button"><a href="#" >
	4th Semester
	<i class="uk-icon-caret-down"></i>
	</a></div>
	
		<div class="uk-dropdown uk-dropdown-scrollable " style="min-width: 100%;
	margin-left:0;">
			<ul class="uk-nav uk-nav-dropdown">
				<li><a href="#" onclick="cse2201();">CSE 2201</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse2202();">CSE 2202</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse2203();">CSE 2203</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse2204();">CSE 2204</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse2205();">CSE 2205</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="cse2206();">CSE 2206</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="eee2251();">EEE 2251</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="eee2252();">EEE 2252</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#" onclick="math2213();">Math 2213</a></li>
			</ul>
	    </div>
		
	
  </div></center>
    <center><div class="uk-button-dropdown" data-uk-dropdown="{ mode:'click'}" >
    <div class="button"><a href="#" >
	5th Semester
	<i class="uk-icon-caret-down"></i>
	</a></div>
	
		<div class="uk-dropdown uk-dropdown-scrollable " style="min-width:100%;
	margin-left:0;">
			<ul class="uk-nav uk-nav-dropdown">
				<li  onclick="cse3100();"><a href="#">CSE 3100</a></li>
				<li class="uk-nav-divider"></li>
				<li onclick="cse3101();"><a href="#">CSE 3101</a></li>
				<li class="uk-nav-divider"></li>
				<li onclick="cse3102();"><a href="#">CSE 3102</a></li>
				<li class="uk-nav-divider"></li>
				<li onclick="cse3103();"><a href="#">CSE 3103</a></li>
				<li class="uk-nav-divider"></li>
				<li onclick="cse3104();"><a href="#">CSE 3104</a></li>
				<li class="uk-nav-divider"></li>
				<li onclick="cse3105();"><a href="#">CSE 3105</a></li>
				<li class="uk-nav-divider"></li>
				<li onclick="cse3107();"><a href="#">CSE 3107</a></li>
				<li class="uk-nav-divider"></li>
				<li onclick="cse3109();"><a href="#">CSE 3109</a></li>
				<li class="uk-nav-divider"></li>
				<li onclick="cse3110();"><a href="#">CSE 3110</a></li>
				<li class="uk-nav-divider"></li>
				<li onclick="cse3112();"><a href="#">CSE 3112</a></li>
				<li class="uk-nav-divider"></li>
			</ul>
	    </div>
		
	
  </div></center>
  <center><div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}" >
    <div class="button"><a href="#" >
	6th Semester
	<i class="uk-icon-caret-down"></i>
	</a></div>
	
		<div class="uk-dropdown uk-dropdown-scrollable " style="min-width: 100%;
	margin-left:0;">
			<ul class="uk-nav uk-nav-dropdown">
				<li><a href="#" onclick="cse();">CSE 3200</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">CSE 3201</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">CSE 3202</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">CSE 3203</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">CSE 3205</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">CSE 3206</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">CSE 3207</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">CSE 3208</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">CSE 3209</a></li>
				<li class="uk-nav-divider"></li>
				<li><a href="#">CSE 3210</a></li>
				<li class="uk-nav-divider"></li>
				
			</ul>
	    </div>
		
	
  </div></center>
    <center><div class="uk-button-dropdown" data-uk-dropdown="{ mode:'click'}" >
    <div class="button"><a href="#" >
	7th Semester 
	<i class="uk-icon-caret-down"></i>
	</a></div>
	
		<div class="uk-dropdown uk-dropdown-scrollable uk-dropdown-width-3" style="min-width:100%;
	margin-left:0;">
			<div class="uk-grid uk-dropdown-grid">
				<div class="uk-width-1-3">
					<ul class="uk-nav uk-nav-dropdown">
					<li>Main courses</li><hr />
						<li><a href="#">CSE 4000</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4101</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4102</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4103</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4104</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4105</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4106</a></li>
						
					
					</ul>
				</div>
				<div class="uk-width-1-3">
					<ul class="uk-nav uk-nav-dropdown">
						<li>Optional courses I </li><hr />
						<li><a href="#">CSE 4107</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4108</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4109</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4110</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4111</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4112</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4113</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4114</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4115</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4116</a></li>
						<li class="uk-nav-divider"></li>
					</ul>
				</div>
				<div class="uk-width-1-3">
					<ul class="uk-nav uk-nav-dropdown">	
						<li>Optional courses II </li><hr />
						<li><a href="#">CSE 4117</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4119</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4121</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4123</a></li>
					
					</ul>
				</div>
			</div>
			
	    </div></center>
		
	
   <center><div class="uk-button-dropdown" data-uk-dropdown="{ mode:'click'}" >
    <div class="button"><a href="#" >
	8th Semester 
	<i class="uk-icon-caret-down"></i>
	</a></div>
	
		<div class="uk-dropdown uk-dropdown-scrollable uk-dropdown-width-3" style="min-width:100%;
	margin-left:0;">
			<div class="uk-grid uk-dropdown-grid">
				<div class="uk-width-1-2">
					<ul class="uk-nav uk-nav-dropdown">
					<li>Main courses</li><hr />
						<li><a href="#">CSE 4000</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4201</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4202</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4203</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4204</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4206</a></li>
						
					
					</ul>
				</div>
				<div class="uk-width-1-2">
					<ul class="uk-nav uk-nav-dropdown">
						<li>Optional courses I/II/III </li><hr />
						<li><a href="#">CSE 4207</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4209</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4211</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4213</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4215</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4217</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4219</a></li>
						<li class="uk-nav-divider"></li>
						<li><a href="#">CSE 4221</a></li>
						
					</ul>
				</div>
				
			</div>
			
	    </div>
		
	</div></center>
	
   <div id="my-id" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav></ul>
			<div class="open">
				<i class="fa fa-user"  aria-hidden="true" style="font-size:25px;color:#2980B9;">Profile</i>
				<div class="profile"><?php echo("Name:$row[first_name] $row[last_name]") ;  ?>
				     <br /><hr /><?php echo("Roll:$row[roll]") ;  ?>
				<br /><hr />
					 <a  onClick="javascript: return confirm('Are you sure?');"  href="../5th semester/delete.php">Delete Account</a>
			    </div>
				
				
				
			</div>
			<div class="logout">
				<i class="fa fa-power-off"  aria-hidden="true" style="font-size:25px;color:#2980B9;"><a href="../5th semester/logout.php"><b>Log out</b></a></i>
		    </div>
			
		
    </div>
	
</div>
<div class="emty">
				
		</div>
</div>	
</div>
<script type="text/javascript" src="../5th semester/js/jquery.js"></script>	
<script type="text/javascript" src="../5th semester/js/uikit.min.js"></script>
<script type="text/javascript" src="../5th semester/js/jquery-ui.js"></script>
<script type="text/javascript" src="../5th semester/js/jquery.avgrund.js"></script>



<script type="text/javascript">
		$(document).ready(function(){
			
				
			$('.open').accordion({'collapsible':'true','heightStyle':'content'});
			
					
		});
function routine(){
			var A= '<a href="sectionA.png"> Section A</a>';
			var B='<a href="sectionB.jpg"> Section B</a>'
   swal({title:"<b>Class Routine</b>",text: A+"<br /> <br />"+B,html:true});
			}	
function syllabus(){
			var before= '<a href="../syllabus/undergraduate 1.doc" target="_blank">Previous Syllabus(Before 2013-3014)</a>';
			var updated= '<a href="../syllabus/undergraduate 2.pdf" target="_blank">Updated Syllabus (From 2013-3014)</a>';
			swal({title:"<b>Syllabus</b>",text: "Undergraduate Syllabus"+"<br /> <br />"+before+"<br /> <br />"+updated,html:true});
			}

	function cse1100(){
			var A= '<a href="https://www.google.com/"><h3>Google</h3></a>';
	 swal({title:"<b>Computer Fundamentals and Ethics</b>",text: A,html:true});
			}
	function cse1101(){
			var A= '<a href="../booktea/first/C prog-BYRON S. GOTTFRIED.pdf"><h3>C prog-BYRON S. GOTTFRIED.pdf</h3></a>';
	 swal({title:"<b>Computer Programming</b>",text: A,html:true});
			}
	function cse1102(){
			var A= '<a href=../booktea/first/C prog-BYRON S. GOTTFRIED.pdf"><h3>C prog-BYRON S. GOTTFRIED.pdf</h3></a>';
			var B='<a href="../booktea/first/Esho Programming Shikhi byTamim Shariar Subeen [BanglaEbook.net]-HABIB, RUET,CSE-12.pdf"><h3>Esho Programming Shikhi byTamim Shariar Subeen</h3></a>'
	 swal({title:"<b>Sessional Based on CSE 1101</b>",text:A+"<br /> <br />"+B,html:true});
			}
			function cse1200(){
			var A= '<a href="https://uva.onlinejudge.org/"><h3>uva onlinejudge</h3></a>';
	 swal({title:"<b>Analytical Programming</b>",text: A,html:true});
			}
			function cse1201(){
			var A= '<a href="http://faadoocoders.blogspot.com/2014/02/free-pdf-data-structures-with-c-seymour.html?m=1"><h3>data-structures-with-c-seymour</h3></a>';
	 swal({title:"<b>Data Structure</b>",text: A,html:true});
			}
			function phy1213(){
			var A= '<a href="http://bestdownloadtorrentonline.info/2017/08/24/physics-for-engineers-by-giasuddin-pdf_kr/"><h3>physics-for-engineers-by-giasuddin</h3></a>';
	 swal({title:"<b>Physics</b>",text: A,html:true});
			}
			function cse2100(){
			var A= '<a href="https://www.google.com/"><h3>Google</h3></a>';
	 swal({title:"<b>Software Development Project I</b>",text: A,html:true});
			}
			function cse2205(){
			var A= '<a href="../booktea/HopcroftMotwaniUllman2ndEdition.pdf"><h3>Finite Automata Theory HopcroftMotwaniUllman2ndEdition</h3></a>';
	 swal({title:"<b>Finite Automata Theory</b>",text: A,html:true});
			}
			function cse2206(){
			var A= '<a href="https://www.google.com/"><h3>Google</h3></a>';
	 swal({title:"<b>Sessional Based on CSE 2205</b>",text: A,html:true});
			}
			function eee2251(){
			var A= '<a href="https://www.slideshare.net/mobile/abhinaypotlabathini/principles-of-electrical-machines-vk-mehta-all-chapters-53507772"><h3>principles-of-electrical-machines-vk-mehta</h3></a>';
	 swal({title:"<b>Electrical Machines and Instrumentations</b>",text: A,html:true});
			}
			function math2213(){
			var A= '<a href="../booktea/Schaums-outline-complex-variables.pdf"><h3>Schaums-outline-complex-variables.pdf</h3></a>';
	 swal({title:"<b>Complex Variable,Differential Equations and Harmonic Analysis</b>",text: A,html:true});
			}

		function eee1151(){
			var A= '<a href="../booktea/first/Boylestad - Introductory Circuit Analysis 10e (Prentice, 2002).pdf"><h3>Boylestad - Introductory Circuit Analysis</h3></a>';
	 swal({title:"<b>Basic Electrical Engineering</b>",text: A,html:true});
		}
		function eee1151(){
			var A= '<a href="../booktea/first/Boylestad - Introductory Circuit Analysis 10e (Prentice, 2002).pdf"><h3>Boylestad - Introductory Circuit Analysis</h3></a>';
	 swal({title:"Sessional Based on EEE 1151",text: A,html:true});
			}
		function hum(){
			var A= '<a href="https://www.google.com/"><h3>Google</h3></a>';
			var B= '<a href="first/Criticism of the Diamond necklace.pdf"><h3>Criticism of the Diamond necklace</h3></a>';
	 swal({title:"Functional English",text: A+"<br /> <br />"+B,html:true});
			}
			function hum(){
			var A= '<a href="https://www.google.com/"><h3>Google</h3></a>';
			
	 swal({title:"Sessional Based on HUM 1113",text: A,html:true});
			}
			function cse1203(){
			var A= '<a href="../booktea/second/e_balagurusamy - object_oriented_programming_with_c++_text.pdf"><h3>e_balagurusamy object_oriented_programming</h3></a>';
			var B= '<a href="../booktea/second/introduction to java programing.pdf"><h3>introduction to java programing</h3></a>';
			var C= '<a href="../booktea/second/java 2 complete reference 5th ed Herbert Schildt.pdf"><h3>java 5th ed Herbert Schildt</h3></a>';
	 swal({title:"Object Oriented Programming",text: A+"<br /> <br />"+B+"<br /> <br />"+C,html:true});
			}
		function hum2113(){
			var A= '<a href="https://www.slideshare.net/mobile/MdMonzurul/accounting-principle-weygandt-kieso-kimmel-9th-edition"><h3>Accounting principle</h3></a>';
			
	 swal({title:"Accounting",text: A,html:true});
			}
			function cse2103(){
			var A= '<a href="../booktea/Descrite mathematich-schume series.pdf"><h3>Descrite mathematich-schume series.pdf</h3></a>';
			var B='<a href="../booktea/Discrete_Mathematics 7th_Edition_Rosen.pdf"><h3>Discrete_Mathematics 7th_Edition_Rosen.pdf</h3></a>';
	 swal({title:"Discrete Mathematics",text: A+"<br /> <br />"+B,html:true});
			}
			function cse2101(){
			var A= '<a href="../booktea/Introductory Methods of Numerical Analysis by S.S. Sastry - 4th edition.pdf"><h3>Introductory Methods of Numerical Analysis by S.S. Sastry - 4th edition.pdf</h3></a>';
			
	 swal({title:"Numerical Methods",text: A,html:true});
			}
		function cse2201(){
			var A= '<a href="../booktea/Cormen_Algorithms_3rd.pdf"><h3>Cormen_Algorithms_3rd.pdf</h3></a>';
			var B='<a href="../booktea/horowitz-and-sahani-fundamentals-of-computer-algorithms-2nd-edition.pdf"><h3>horowitz-and-sahani-fundamentals-of-computer-algorithms-2nd-edition.pdf</h3></a>';
	 swal({title:"Computer Algorithms",text: A+"<br /> <br />"+B,html:true});
			}
			function cse2202(){
			var A= '<a href="../booktea/Cormen_Algorithms_3rd.pdf"><h3>Cormen_Algorithms_3rd.pdf</h3></a>';
			var B='<a href="../booktea/horowitz-and-sahani-fundamentals-of-computer-algorithms-2nd-edition.pdf"><h3>horowitz-and-sahani-fundamentals-of-computer-algorithms-2nd-edition.pdf</h3></a>';
	 swal({title:"Sessional Based on cse2201",text: A+"<br /> <br />"+B,html:true});
			}
			function cse2203(){
			var A= '<a href="../booktea/Digital systems principles and applications 8ed Tocci  2001.pdf"><h3>Digital systems principles and applications 8ed Tocci  2001.pdf</h3></a>';
			var B='<a href="../booktea/Digital Design- M. Morris Mano.pdf"><h3>Digital Design- M. Morris Mano.pdf</h3></a>';
	 swal({title:"Digital Techniques",text: A+"<br /> <br />"+B,html:true});
			}
			function cse2204(){
			var A= '<a href="../booktea/Digital systems principles and applications 8ed Tocci  2001.pdf"><h3>Digital systems principles and applications 8ed Tocci  2001.pdf</h3></a>';
			var B='<a href="../booktea/Digital Design- M. Morris Mano.pdf"><h3>Digital Design- M. Morris Mano.pdf</h3></a>';
	 swal({title:"Sessional Based on cse2203",text: A+"<br /> <br />"+B,html:true});
			}
	function cse3100(){
			var A= '<a href="https://www.google.com/"><h3>Google</h3></a>';
			
	 swal({title:"Web Based Application Lab/Project",text: A,html:true});
			}
   function cse3101(){
			var A= '<a href="../booktea/Database System Concepts 6th edition.pdf"><h3>Database System Concepts 6th edition</h3></a>';
			var B= '<a href="../booktea/plsql_tutorial.pdf"><h3>PL/SQL tutorial</h3></a>';
	 swal({title:"Database Systems",text: A+"<br /> <br />"+B,html:true});
			}		
   function cse3102(){
			var A= '<a href="//www.w3schools.com/sql/"><h3>SQL w3school</h3></a>';
			var B= '<a href="../booktea/plsql_tutorial.pdf"><h3>PL/SQL tutorial</h3></a>';
	 swal({title:"Sessional Based on CSE 3101",text: A+"<br /> <br />"+B,html:true});
			}
function cse3103(){
			var A= '<a href="../booktea/Data.Communications.and.Networking.5th.Edition.pdf"><h3>Data.Communications and Networking 5th Edition</h3></a>';
			
	 swal({title:"Data Communication",text: A,html:true});
			}	
function cse3104(){
			var A= '<a href="../booktea/Data.Communications.and.Networking.5th.Edition.pdf"><h3>Data.Communications and Networking 5th Edition</h3></a>';
			
	 swal({title:"Data Communication",text: A,html:true});
			}	
function cse3105(){
			var A= '<a href="../booktea/Software Eng, Roger Presmen.pdf"><h3>Software Eng, Roger Presmen.pdf</h3></a>';
			
	 swal({title:"Software Engineering",text: A,html:true});
			}	
function cse3107(){
			var A= '<a href="../booktea/Probability and Statistical Inference.pdf"><h3>Probability and Statistical Inference</h3></a>';
			var B= '<a href="../booktea/openintro-statistics.pdf"><h3>openintro-statistics</h3></a>';
	 swal({title:"Applied Statistics and Queuing Theory",text: A+"<br /> <br />"+B,html:true});
			}	
function cse3109(){
			var A= '<a href="https://www.scribd.com/mobile/doc/289949049/Ytha-Yu-Charles-Marut-Assembly-Language-Programming-Organization-of-the-IBM-PC-1992#close_user_settings_menu"><h3>Microprocessors and Assembly Language-Charles Marut</h3></a>';
			
	 swal({title:"Microprocessors and Assembly Language",text: A,html:true});
			}		
function cse3110(){
			var A= '<a href="https://www.scribd.com/mobile/doc/289949049/Ytha-Yu-Charles-Marut-Assembly-Language-Programming-Organization-of-the-IBM-PC-1992#close_user_settings_menu"><h3>Microprocessors and Assembly Language-Charles Marut</h3></a>';
			
	 swal({title:"Microprocessors and Assembly Language",text: A,html:true});
			}	
function cse3112(){
			var A= '<a href="https://www.google.com/"><h3>Google</h3></a>';
			
	 swal({title:"Technical Writing and Presentation",text: A,html:true});
			}				
</script>
</body>
</html>