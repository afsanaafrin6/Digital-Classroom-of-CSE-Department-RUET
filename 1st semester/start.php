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

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>1st Semester</title>
	
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	 <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.gradient.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.almost-flat.min.css" media="all" />
	
	
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" media="all">
	<script src="../firstpage/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../firstpage/dist/sweetalert.css">
	
	 <link rel="stylesheet" type="text/css" href="coursestyle.css" media="all" />
	 <link rel="stylesheet" type="text/css" href="responsivecourse.css" media="all" />
	
    
</head>
<body>
	<!--header area-->
	<div class="fullbody">
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
			
				
				
		</div>
		
		
	<div class="clr">
	<div class="part">
   	    <ul>
			<div class="aa"><li><a href="#"><i data-uk-offcanvas="{target:'#my-id'}"class="fa fa-bars" aria-hidden="true" ></i></a><br />Menu</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	<div class="bb"><li class="active"><a href="#" ><i class="fa fa-home" aria-hidden="true" ></i></a><br />Home</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	<div class="bb"><li ><a href="../bookstd/books.php"><i class="fa fa-book" aria-hidden="true" ></i></a><br />Books</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	<div class="bb"><li ><a href="#" onclick="routine();"><i  class="fa fa-calendar" aria-hidden="true" ></i></a><br />Routine</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	<div class="bb"><li ><a href="#" onclick="syllabus();"><i class="fa fa-file-text-o" aria-hidden="true" ></i></a><br />Syllabus</li></div>
   	    	
   	    </ul>
    
   </div>
  
   
   <div class="owl-carousel ">
   
		<div class="item"><img src="image/pic3.jpg" alt="" /></div>
		<div class="item"><img src="image/pic4.jpg" alt="" /></div>
		<div class="item"><img src="image/pic5.jpg" alt="" /></div>
		<div class="item"><img src="image/pic1.jpg" alt="" /></div>
		<div class="item"><img src="image/pic2.jpg" alt="" /></div>
		<div class="item"><img src="image/pic6.jpeg" alt="" /></div>
		
	</div>
	
	<center><div class="contuct">
			<div class="box">
			<h2>Contact</h2>
			</div>
			<div class="info">
			Mailing Address : Registrar, Rajshahi University of Engineering & Technology, Kazla,Rajshahi-6204, Bangladesh. <br />
            Fax : +88 (0721) 750105 <br />
           (Ph) PABX : +88 (721) 750742-3, 751320-1 <br />
            Website: www.ruet.ac.bd<br />
            E-mail: registrar@ruet.ac.bd</div>
	</div></center>
	
   <div id="my-id" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav><center><div class="head"><h2>1st Semester</h2></div></center></ul>
			<div class="open">
				<i class="fa fa-user"  aria-hidden="true" style="font-size:25px;color:#2980B9;">Profile</i>
				<div class="profile"><?php echo("Name:$row[first_name] $row[last_name]") ;  ?>
				     <br /><hr /><?php echo("Roll:$row[roll]") ;  ?> <br /><hr />
					 <a  onClick="javascript: return confirm('Are you sure?');"  href="../5th semester/delete.php">Delete Account</a>
			    </div>
				<i class="fa fa-file-text"  aria-hidden="true" style="font-size:25px;color:#2980B9;">Courses</i>
				<div class="course">
					
				     <a href="cse1101videostd.php"><?php echo("CSE 1101 & CSE 1102") ;  ?></a>
					 
					 <hr /><a href="eee1151videostd.php"><?php echo("EEE 1151 & EEE 1152") ;  ?></a>
					 
					 <hr /><a href="math1113videostd.php"><?php echo("MATH 1113") ;  ?></a>
					 <hr /><a href="hum1113videostd.php"><?php echo("HUM 1113 & HUM 1114") ;  ?></a>
					
					 <hr /><a href="chem1113videostd.php"><?php echo("CHEM 1113 & CHEM 1114") ;  ?></a>
					
					 
			    </div>
				
				
			</div>
			<div class="logout">
				<i class="fa fa-power-off"  aria-hidden="true" style="font-size:25px;color:#2980B9;"><a href="logout.php"><b>Log out</b></a></i>
		    </div>
			
		
    </div>
</div>
<div class="emty">
				
		    </div>
</div>
</div>	
<script type="text/javascript" src="js/jquery.js"></script>	
<script type="text/javascript" src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>

<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<script type="text/javascript">
		$(document).ready(function(){
			$(".owl-carousel").owlCarousel({
				items:1,
				
				autoPlay: 3000,
				rewindNav:true,
				rewindSpeed:0,
				
				stopOnHover:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
					
				}
			});
				
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
	
			
</script>
</body>
</html>