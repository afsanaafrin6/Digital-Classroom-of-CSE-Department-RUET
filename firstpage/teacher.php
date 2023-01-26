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
			<form action="teacher.php"  method="post" enctype="multiple/form-data">
				<div class="regis">
					<div class="firstname">
							<label for="fname">First Name</label>
							<center><input type="text" id="fname" name="user_fname" required="required" placeholder="Enter Your First name" /></center><br />
					</div>
					<div class="lastname">
							<label for="lname">Last Name</label>
							<center><input type="text" id="lname" name="user_lname" required="required" placeholder="Enter Your First name" /></center><br />
					</div>
					<div class="dg">
							<label for="dg">Designation</label><br />
							<center><select required="required" name="user_dg">
							<option value="">Select Designation</option>
							<option value="Professor">Professor</option>
							<option value="Associate Professor">Associate Professor</option>
							<option value="Assistant Professor">Assistant Professor</option>
							<option value="Lecturer">Lecturer</option>
							
							
						</select></center>
					</div>
					<div class="dep">
						<label for="dep">Department</label><br />
						<center>	<select required="required" name="user_dep">
							<option value="">Select Department</option>
							<option value="Department of CSE">Department of CSE</option>
							<option value="Department of EEE">Department of EEE</option>
							<option value="Department of Mathematics">Department of Mathematics</option>
							<option value="Department of Humanities">Department of Humanities</option>
							<option value="Department of Physics">Department of Physics</option>
							<option value="Department of Chemistry">Department of Chemistry</option>
							
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
						<center><input type="text" id="code" name="user_code" required="required" placeholder="Enter code"/><br /></center>
					</div>
				</div>	
					<div class="submit">
						<input type="submit" name="sub" value="Submit" />
						<input type="reset" value="Reset  "/>
					</div>
					<div class="goto">
					<center><h2><a href="teacherlogin.php">Login Here!</a></h2></center>
					</div>
				
			</form>
			
		</div></center>
	</div><div class="emty"></div>
	<?php
		if(isset($_POST['sub'])){
			$user_fname = mysqli_real_escape_string($con,$_POST['user_fname']);
			$user_lname = mysqli_real_escape_string($con,$_POST['user_lname']);
			$user_dg = mysqli_real_escape_string($con,$_POST['user_dg']);
			$user_dep = mysqli_real_escape_string($con,$_POST['user_dep']);
			$user_email = mysqli_real_escape_string($con,$_POST['user_email']);
			$user_pass = mysqli_real_escape_string($con,$_POST['user_pass']);
			$user_code = mysqli_real_escape_string($con,$_POST['user_code']);
			
			$sel_email="select * from teacher_info where email='$user_email'";
			$run_email=mysqli_query($con,$sel_email);
			$check_email= mysqli_num_rows($run_email);
			
			
			if($check_email==1)
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
			elseif($user_code!="teacher")
			{
				echo  '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Please enter correct code!","Message!","warning");';
  echo '}, 100);</script>';
				
			}
			else
			{   
		         $_SESSION['email']=$user_email; 
				$insert="INSERT INTO teacher_info (first_name,last_name,designation,department,email,password,code) VALUES('$user_fname','$user_lname','$user_dg','$user_dep','$user_email','$user_pass','$user_code')";
				
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