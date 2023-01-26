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
      if(isset($_POST['sub1'])){
			$course1 = mysqli_real_escape_string($con,$_POST['course1']);
			
		       $_SESSION['email']=$user_email; 
				  $insert1="update teacher_info set course_1='$course1' where email='$user_email'";
				        
				 
				$run_insert1= mysqli_query($con,$insert1);
				
				if(!$run_insert1){die("database query failed1");}
				
				
				if($run_insert1 )
				{			echo  '<script type="text/javascript"> alert("success");</script>';
					echo  '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Course no.1 successfully registered,go to course no.2 for next course registration");';
  echo '}, 100);</script>';
					
					
				}
			
			}
	   if(isset($_POST['sub2'])){
			
			$course2 = mysqli_real_escape_string($con,$_POST['course2']);
			
			
		     $_SESSION['email']=$user_email; 
				  $insert2="update teacher_info set course_2='$course2' where email='$user_email'";
				        
				 
				$run_insert2= mysqli_query($con,$insert2);
				
				if(!$run_insert2){die("database query failed1");}
				
				
				if($run_insert2 )
				{		echo  '<script type="text/javascript"> alert("success");</script>';
					echo  '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Course no.2 successfully registered,go to course no.3 for next course registration");';
  echo '}, 100);</script>';
					
					
						
			}
			
			
	  }
	   if(isset($_POST['sub3'])){
			
			$course3 = mysqli_real_escape_string($con,$_POST['course3']);
			
			
		
		         $_SESSION['email']=$user_email; 
				  $insert3="update teacher_info set course_3='$course3' where email='$user_email'";
				        
				 
				$run_insert3= mysqli_query($con,$insert3);
				
				if(!$run_insert3){die("database query failed1");}
				
				
				if($run_insert3 )
				{			echo  '<script type="text/javascript"> alert("success");</script>';
					echo  '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Course no.3 successfully registered,go to course no.4 for next course registration");';
  echo '}, 100);</script>';
					
					
				
				
			
			
			
			
			
			}
			
			
	  }
	   if(isset($_POST['sub4'])){
			
			$course4 = mysqli_real_escape_string($con,$_POST['course4']);
		
			
			
			
			
			 
		         $_SESSION['email']=$user_email; 
				  $insert4="update teacher_info set course_4='$course4' where email='$user_email'";
				        
				 
				$run_insert4= mysqli_query($con,$insert4);
				
				if(!$run_insert4){die("database query failed1");}
				
				
				if($run_insert4 )
				{				echo  '<script type="text/javascript"> alert("success");</script>';
					echo  '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Course no.4 successfully registered,go to course no.5 for next course registration");';
  echo '}, 100);</script>';
					
					
				
				
			
				}
			
			
	  }
	   if(isset($_POST['sub5'])){
			
			$course5 = mysqli_real_escape_string($con,$_POST['course5']);
			
			
			
			
			 
		         $_SESSION['email']=$user_email; 
				  $insert5="update teacher_info set course_5='$course5' where email='$user_email'";
				        
				 
				$run_insert5= mysqli_query($con,$insert5);
				
				if(!$run_insert5){die("database query failed1");}
				
				
				if($run_insert5 )
				{    echo  '<script type="text/javascript"> alert("success");</script>';
					echo  '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Course no.5 successfully registered");';
  echo '}, 100);</script>';
					
					
				
				
			
			
			
			
			
			}
			
			
	  }
		
			

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
			<div class="bb"><li ><a href="teacherhome.php" ><i class="fa fa-home" aria-hidden="true" ></i></a><br />Home</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
			<div class="bb"><li class="active"><a href=""><i  class="fa fa-newspaper-o" aria-hidden="true" ></i></a><br />Courses</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	<div class="bb"><li ><a href="../../booktea/books.php"><i class="fa fa-book" aria-hidden="true" ></i></a><br />Books</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i>
			<i class="fa fa-circle-o" aria-hidden="true" ></i></div>
   	    	
   	    	<div class="bb"><li ><a href="#" onclick="syllabus();"><i class="fa fa-file-text-o" aria-hidden="true" ></i></a><br />Syllabus</li></div>
   	    	
   	    </ul>
    
   </div>
   
    
  
   <center><div class="course2">
			<div class="register">
				<h2>Course Registration</h2>
							<div class="tabs">
						<ul class="tab-menu" data-uk-switcher="{connect:'.tab'}">
							<li><a href="#">Course no.1</a></li>
							<li><a href="#">Course no.2</a></li>
							<li><a href="#">Course no.3</a></li>
							<li><a href="#">Course no.4</a></li>
							<li><a href="#">Course no.5</a></li>
						</ul>
						
						<ul class="tab uk-switcher">
							<li><form action="courseregistration.php"  method="post" enctype="multiple/form-data">
				
						    <center><br /><label for="text">Course no.1:</label>
						    <input type="text" id="text" name="course1" placeholder="Enter your course no.1"/></center>	<br />
							<div class="submit">
						     <input type="submit" name="sub1" value="Submit" />
						
					      </div></li>
							<li><form action="courseregistration.php"  method="post" enctype="multiple/form-data">
				
						    <center><br /><label for="text">Course no.2:</label>
						    <input type="text" id="text" name="course2" placeholder="Enter your course no.2"/></center>	<br />
							<div class="submit">
						     <input type="submit" name="sub2" value="Submit" />
						
					      </div></li>
							<li><form action="courseregistration.php"  method="post" enctype="multiple/form-data">
				
						    <center><br /><label for="text">Course no.3:</label>
						    <input type="text" id="text" name="course3" placeholder="Enter your course no.3"/></center>	<br />
							<div class="submit">
						     <input type="submit" name="sub3" value="Submit" />
						
					      </div></li>
						  <li><form action="courseregistration.php"  method="post" enctype="multiple/form-data">
				
						    <center><br /><label for="text">Course no.4:</label>
						    <input type="text" id="text" name="course4" placeholder="Enter your course no.4"/></center>	<br />
							<div class="submit">
						     <input type="submit" name="sub4" value="Submit" />
						
					      </div></li>
						  <li><form action="courseregistration.php"  method="post" enctype="multiple/form-data">
				
						    <center><br /><label for="text">Course no.5:</label>
						    <input type="text" id="text" name="course5" placeholder="Enter your course no.5"/></center>	<br />
							<div class="submit">
						     <input type="submit" name="sub5" value="Submit" />
						
					      </div></li>
						</ul>
					</div>
					<p>[*Don't give any space in course no & all letters must be small]</p>

				
			</div>
			<div class="emty"></div>
   </div></center>
  
	
	
	
   <div id="my-id" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav><center><div class="head"><h2>Profile</h2></div></center></ul>
			<div class="open">
				<i class="fa fa-user"  aria-hidden="true" style="font-size:25px;color:#2980B9;">Profile</i>
				<div class="profile"><?php echo("Name:$row[first_name] $row[last_name]") ;  ?>
				     <br /><hr /><?php echo("$row[department]") ;  ?>
					
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
    <div class="emty2"></div>
 </div>
<script type="text/javascript" src="js/jquery.js"></script>	
<script type="text/javascript" src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>

<script type="text/javascript" src="js/owl.carousel.min.js"></script>

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
	
			
</script>

</body>
</html>