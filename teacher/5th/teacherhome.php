<?php

session_start();

date_default_timezone_set("Asia/Dhaka");


require_once('../../config.php');
if(!isset($_SESSION['email']))
{
  header("Location:../../firstpage/teacherlogin.php");
}

if(isset($_SESSION['email']))
{
  $user_email=$_SESSION['email'];
  

}
$sql="SELECT * FROM teacher_info WHERE email='$user_email'";
$send=mysqli_query($con,$sql);
$row=mysqli_fetch_array($send);

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>5th Semester</title>
	
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	 <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.gradient.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.almost-flat.min.css" media="all" />
	
	
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" media="all">
	<script src="../../firstpage/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../firstpage/dist/sweetalert.css">
	
	 <link rel="stylesheet" type="text/css" href="teacherhome.css" media="all" />
	  <link rel="stylesheet" type="text/css" href="responsivecourse.css" media="all" />
	
    
</head>
<body>
	<!--header area-->
	<div class="fullbody">
		<div class="header_area">
			<div class="center_area">
				<div class="logo">
					<center><img src="../../ruet.png" alt="logo" /></center>
					
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
			<div class="bb"><li class="active"><a href="teacherhome.php" ><i class="fa fa-home" aria-hidden="true" ></i></a><br />Home</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
			<div class="bb"><li ><a href="courseregistration.php"><i  class="fa fa-newspaper-o" aria-hidden="true" ></i></a><br />Courses</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	<div class="bb"><li ><a href="../../booktea/books.php"><i class="fa fa-book" aria-hidden="true" ></i></a><br />Books</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	
   	    	<div class="bb"><li ><a href="#" onclick="syllabus();"><i class="fa fa-file-text-o" aria-hidden="true" ></i></a><br />Syllabus </li></div>
   	    	
   	    </ul>
    
   </div>
   
   
   <div class="owl-carousel ">
   
		<div class="item"><img src="../../5th semester/image/pic3.jpg" alt="" /></div>
		<div class="item"><img src="../../5th semester/image/pic4.jpg" alt="" /></div>
		<div class="item"><img src="../../5th semester/image/pic5.jpg" alt="" /></div>
		<div class="item"><img src="../../5th semester/image/pic1.jpg" alt="" /></div>
		<div class="item"><img src="../../5th semester/image/pic2.jpg" alt="" /></div>
		<div class="item"><img src="../../5th semester/image/pic6.jpeg" alt="" /></div>
		
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
	<div class="emty">
				
		    </div>
	
   <div id="my-id" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav><center><div class="head"><h2>Profile</h2></div></center></ul>
			<div class="open">
				<i class="fa fa-user"  aria-hidden="true" style="font-size:25px;color:#2980B9;">Profile</i>
				<div class="profile"><?php echo("Name:$row[first_name] $row[last_name]") ;  ?>
				     <br /><hr /><?php echo("$row[department]") ;  ?>
				<br /><hr />
					 <a  onClick="javascript: return confirm('Are you sure?');"  href="delete.php">Delete Account</a>
			    </div>
				<i class="fa fa-file-text"  aria-hidden="true" style="font-size:25px;color:#2980B9;">Courses</i>
				<div class="course">
						<?php
						$sq="select links from courselink inner join teacher_info on courselink.course=teacher_info.course_1 where email='$user_email'";
						$result=mysqli_query($con,$sq);
						$rows=mysqli_fetch_array($result);
						
				?>
				
					<form>
						<input type="button" value="<?php echo ("$row[course_1]");?>" onclick="window.location.href='<?php echo("$rows[links]"); ?>'" />
					</form>
					<hr />
					<?php
						$sq2="select links from courselink inner join teacher_info on courselink.course=teacher_info.course_2 where email='$user_email'";
						$result2=mysqli_query($con,$sq2);
						$rows2=mysqli_fetch_array($result2);
						
				?>
				
					<form>
						<input type="button" value="<?php echo ("$row[course_2]");?>" onclick="window.location.href='<?php echo("$rows2[links]"); ?>'" />
					</form>
					<hr />
					<?php
						$sq3="select links from courselink inner join teacher_info on courselink.course=teacher_info.course_3 where email='$user_email'";
						$result3=mysqli_query($con,$sq3);
						$rows3=mysqli_fetch_array($result3);
						
				?>
				
					<form>
						<input type="button" value="<?php echo ("$row[course_3]");?>" onclick="window.location.href='<?php echo("$rows3[links]"); ?>'" />
					</form>
					<hr />
					<?php
						$sq4="select links from courselink inner join teacher_info on courselink.course=teacher_info.course_4 where email='$user_email'";
						$result4=mysqli_query($con,$sq4);
						$rows4=mysqli_fetch_array($result4);
						
				?>
				
					<form>
						<input type="button" value="<?php echo ("$row[course_4]");?>" onclick="window.location.href='<?php echo("$rows4[links]"); ?>'" />
					</form>
					<hr />
					<?php
						$sq5="select links from courselink inner join teacher_info on courselink.course=teacher_info.course_5 where email='$user_email'";
						$result5=mysqli_query($con,$sq5);
						$rows5=mysqli_fetch_array($result5);
						
				?>
				
					<form>
						<input type="button" value="<?php echo ("$row[course_5]");?>" onclick="window.location.href='<?php echo("$rows5[links]"); ?>'" />
					</form>
					
			    </div>
					 
			    </div>
				<div class="logout">
				<i class="fa fa-power-off"  aria-hidden="true" style="font-size:25px;color:#2980B9;"><a href="logoutteacher.php"><b>Log out</b></a></i>
		    </div>
				
			</div>
			
			
		
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

function syllabus(){
			var before= '<a href="../../syllabus/undergraduate 1.doc" target="_blank">Previous Syllabus(Before 2013-3014)</a>';
			var updated= '<a href="../../syllabus/undergraduate 2.pdf" target="_blank">Updated Syllabus (From 2013-3014)</a>';
			swal({title:"<b>Syllabus</b>",text: "Undergraduate Syllabus"+"<br /> <br />"+before+"<br /> <br />"+updated,html:true});
			}
	
			
</script>
</body>
</html>