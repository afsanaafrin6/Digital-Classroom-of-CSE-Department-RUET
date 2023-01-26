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
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Welcome to the cse department</title>
	<link rel="stylesheet" type="text/css" href="jqueryui/css/jquery-ui.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.gradient.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.almost-flat.min.css" media="all" />

	<script src="dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
     <link rel="stylesheet" type="text/css" href="style.css" media="all" />
	   <link rel="stylesheet" type="text/css" href="responsivefirstpage.css" media="all" />
</head>
<body>
	<!--header area-->
	<div class="fullbody">
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
	<center><div class="stdlogin_area">
		<div class="regis">
		<center><h2>Login Here</h2></center>
			<form action="studentlogin.php" method="post">
					<label for="email">Email</label>
						<center><input type="email" id="email" name="user_email" required="required" placeholder="Enter your email address"/></center>	<br />
					
					
						<label for="pass">Password</label>
						<center><input type="password" id="pass" name="user_pass" required="required" placeholder="Enter your Password"/></center><br />
					<div class="submit">
					   <center><input type="submit" name="login" value="Login" /></center>
					  </div><br />
					  <div class="rg"><center><a href="student.php">Registration Here</a></center></div>
			</form>
			
		</div>
		
	</div></center>
</div>	<div class="emty"></div>
<?php
	if(isset($_POST['login']))
	   {
		   $user_email=mysqli_real_escape_string($con,$_POST['user_email']);
			$user_pass=mysqli_real_escape_string($con,$_POST['user_pass']);
			
			$sel = "select * from student_info where email='$user_email' AND password='$user_pass'";
			$run = mysqli_query($con,$sel);
			$check=mysqli_num_rows($run);
			$row=mysqli_fetch_array($run);
			if(!$run){die("database query failed");}
			
			if($check==0){
					echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Password and email is not correct!","Message!","warning");';
  echo '}, 100);</script>';
				exit();
			}
			elseif($row[semester]=='1st semester'){
				$_SESSION['email']=$user_email;
				echo "<script>window.open('../1st semester/start.php','_self')</script>";
			}
			elseif($row[semester]=='2nd semester'){
				$_SESSION['email']=$user_email;
				echo "<script>window.open('../2nd semester/start.php','_self')</script>";
			}
			elseif($row[semester]=='3rd semester'){
				$_SESSION['email']=$user_email;
				echo "<script>window.open('../3rd semester/start.php','_self')</script>";
			}
			elseif($row[semester]=='4th semester'){
				$_SESSION['email']=$user_email;
				echo "<script>window.open('../4th semester/start.php','_self')</script>";
			}
			elseif($row[semester]=='5th semester'){
				$_SESSION['email']=$user_email;
				echo "<script>window.open('../5th semester/start.php','_self')</script>";
			}
	   }
?>
	<script type="text/javascript" src="jqueryui/js/jquery-ui.js"></script>	
<script type="text/javascript" src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/components/datepicker.min.js"></script>

	
</body>
</html>