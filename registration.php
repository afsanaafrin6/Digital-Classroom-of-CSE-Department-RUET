
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="register.css" media="all" />
</head>

<body>
	<form action="registration.php" method="POST">
	
		<table >
			<tr>
				<td align="right"><strong>Name</strong></td>
				<td>
					<input type="text" name="user_name" placeholder="Enter your name" required="required"/>
				</td>
			</tr>
			<tr>
				<td align="right"><strong>Email</strong></td>
				<td>
					<input type="email" name="user_email" placeholder="Enter your email" required="required"/>
				</td>
			</tr>
			<tr>
				<td align="right"><strong>Password</strong></td>
				<td>
					<input type="password" name="user_pass" placeholder="Enter your password" required="required"/>
				</td>
			</tr>
			<tr>
				<td align="right"><strong>Country</strong></td>
				<td>
					<select name="user_country" required="required" id="">
						<option>Select your country</option>
						<option>Afganistan</option>
						<option>Bangladesh</option>
						<option>India</option>
					</select>
				</td>
			</tr> 
			<tr>
				<td align="right"><strong>Phone</strong></td>
				<td>
					<input type="number" name="user_no" placeholder="Enter your phone " required="required"/>
				</td>
			</tr>
			<tr>
				<td align="right"><strong>Gender</strong></td>
				<td>
					Male:<input type="radio" name="user_gender" value="Male" />
					Female: <input type="radio" name="user_gender" value="Female" />
				</td>
			</tr>
			<tr>
				<td align="right"><strong>Image</strong></td>
				<td>
					<input type="file" name="user_image" required="required"/>
				</td>
			</tr>
			<tr align="center">
				<td colspan="7"><input type="submit" name="register" value="Register Now"/></td>
				
			</tr>
		</table>
	 </form>
    <?php
		if(isset($_POST['register'])){
			$user_name = $_POST['user_name'];
			$user_email = $_POST['user_email'];
			$user_pass = $_POST['user_pass'];
			$user_country = $_POST['user_country'];
			$user_gender = $_POST['user_gender'];
			$user_no = $_POST['user_no'];
			//image
			$user_image=$_FILES['user_image']['name'];
			$user_tmp=$_FILES['user_image']['tmp_name'];
			
			
			if(strlen($user_pass)<8){
				echo "<script>alert('please select a password of 8 charecters at least ')</script>";
				exit();
			}
			if($user_country==NULL OR $user_gender==NULL ){
				echo "<script>alert('please fill all the fields')</script>";
				exit();
			}
			
			
			
		}
?>	

</body>
</html>

			
