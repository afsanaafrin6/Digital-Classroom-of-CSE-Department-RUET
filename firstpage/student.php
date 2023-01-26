<?php
	session_start();
	require_once("../config.php");
	//$dbhost="localhost";
	//$dbuser="root";
	//$dbpass="";
	//$dbname="php";
	
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno()){
		die("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")" );
	}
?><!DOCTYPE HTML>

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Welcome to the cse department</title>
	<link rel="stylesheet" type="text/css" href="jqueryui/css/jquery-ui.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.gradient.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.almost-flat.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/components/notify.min.css" media="all" />
	<script src="dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	
     <link rel="stylesheet" type="text/css" href="style.css" media="all" />
	   <link rel="stylesheet" type="text/css" href="responsivefirstpage.css" media="all" />
</head>
<body>
	<!--header area-->
	<div class="fullbodyteacher">
		<div class="header_area">
			
			<div class="center_area">
				<div class="logo">
					<center><img src="../ruet.png" alt="logo" /></center>
				</div>
			</div>
			<div class="welcome">
					<marquee direction="left" speed="4" scrollamount="4" >Welcome to the Department of Computer Science and Technology</marquee>
			</div>
				
				
			</div>
		
		<center><div class="login_area">
			<form action="student.php"  method="post" enctype="multiple/form-data">
				<div class="regis">
					<div class="firstname">
							<label for="fname">First Name</label>
							<center><input type="text" id="fname" name="user_fname" required="required" placeholder="Enter Your First name" /></center><br />
					</div>
					<div class="lastname">
							<label for="lname">Last Name</label>
							<center><input type="text" id="lname" name="user_lname" required="required" placeholder="Enter Your First name" /></center><br />
					</div>
					<div class="roll">
							<label for="roll">Roll Number</label>
							<center><input type="text" id="roll" name="user_roll" required="required" placeholder="Enter Your Roll Number" /></center><br />
					</div>
					<div class="dep">
						<label for="dep">Semester</label><br />
							<center><select id="dep" required="required" name="user_sem">
							<option value="">Select Semester</option>
							<option value="1st semester">1st semester</option>
							<option value="2nd semester">2nd semester</option>
							<option value="3rd semester">3rd semester</option>
							<option value="4th semester">4th semester</option>
							<option value="5th semester">5th semester</option>
							<option value="6th semester">6th semester</option>
							<option value="7th semester">7th semester</option>
							<option value="8th semester">8th semester</option>
							
						</select></center>
					</div>
					<div class="email">
						<br /><label for="email">Email</label>
						<center><input type="email" id="email" name="user_email" required="required" placeholder="Enter your email address"/></center>	<br />
					</div>
					<div class="pass">
						<label for="pass">Password</label>
						<center><input type="password" id="pass" name="user_pass" required="required" placeholder="Enter your password minimum 8 characters"/></center><br />
					</div>
					
					<div class="code">
						<label for="code">Code</label>
						<center><input type="text" id="code" name="user_code" required="required" placeholder="Enter code"/></center><br />
					</div>
				</div>	
					<div class="submit">
						<input type="submit" name="sub" value="Submit" />
						<input type="reset" value="Reset  "/>
					</div>
					<div class="goto">
					<center><h2><a href="studentlogin.php">Login Here!</a></h2></center>
					</div>
				
			</form>
			
		</div></center>
	</div><div class="emty"></div>
	<?php
		if(isset($_POST['sub'])){
			$user_fname = mysqli_real_escape_string($con,$_POST['user_fname']);
			$user_lname = mysqli_real_escape_string($con,$_POST['user_lname']);
			$user_roll = mysqli_real_escape_string($con,$_POST['user_roll']);
			$user_sem = mysqli_real_escape_string($con,$_POST['user_sem']);
			$user_email = mysqli_real_escape_string($con,$_POST['user_email']);
			$user_pass = mysqli_real_escape_string($con,$_POST['user_pass']);
			$user_code = mysqli_real_escape_string($con,$_POST['user_code']);
			$sel_roll="select * from student_info where roll='$user_roll'";
			$runroll=mysqli_query($con,$sel_roll);
			$checkroll= mysqli_num_rows($runroll);
			$sel_email="select * from student_info where email='$user_email'";
			$run_email=mysqli_query($con,$sel_email);
			$check_email= mysqli_num_rows($run_email);
			
			if($checkroll==1)
			{
				
				echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("This roll is already resistered,Please try another!","Message!","warning");';
  echo '}, 100);</script>';
				
			
			}
		  elseif($check_email==1)
			{
				
				echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("This email is already resistered,Please try another!","Message!","warning");';
  echo '}, 100);</script>';
				
			
			}
			
			
			elseif(strlen($user_pass)<8){
				echo  '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("please select a password of 8 charecters at least!","Message!","info");';
  echo '}, 100);</script>';
				
			}
			elseif($user_code!="student")
			{
				echo  '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Please enter correct code!","Message!","warning");';
  echo '}, 100);</script>';
				
			}
			else
			{   
		         $_SESSION['email']=$user_email; 
				$insert="INSERT student_info (first_name,last_name,roll,semester,email,password,code) VALUES('$user_fname','$user_lname','$user_roll','$user_sem','$user_email','$user_pass','$user_code')";
				
				$run_insert= mysqli_query($con,$insert);
				if(!$run_insert){die("database query failed");}
				
				if($run_insert)
				{
					echo  '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Registration successful!","Please Login!","success");';
  echo '}, 100);</script>';
					
					
				}
			}
			
		}
			
		
		mysqli_close($con);	
			
		
	?>
	
<script type="text/javascript" src="jqueryui/js/jquery-ui.js"></script>	
<script type="text/javascript" src="js/uikit.min.js"></script>

	
</body>
</html>