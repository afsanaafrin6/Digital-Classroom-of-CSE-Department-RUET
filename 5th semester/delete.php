<?php
require_once('../config.php');
session_start();
	
	if(isset($_SESSION['email']))
{
  $user_email=$_SESSION['email'];
  

}
$sql="SELECT * FROM student_info WHERE email='$user_email'";
$send=mysqli_query($con,$sql);
$row=mysqli_fetch_array($send);					
							$dele="delete from student_info where email='$user_email'";
							$re=mysqli_query($con,$dele);
							if($re){
								
								
	                header("Location:../firstpage/studentlogin.php");
							}
						
				


?>