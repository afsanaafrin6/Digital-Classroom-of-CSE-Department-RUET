<?php
require_once('../../config.php');
session_start();
	
	if(isset($_SESSION['email']))
{
  $user_email=$_SESSION['email'];
  

}
$sql="SELECT * FROM teacher_info WHERE email='$user_email'";
$send=mysqli_query($con,$sql);
$row=mysqli_fetch_array($send);					
							$dele="delete from teacher_info where email='$user_email'";
							$re=mysqli_query($con,$dele);
							if($re){
								
								
	                header("Location:../../firstpage/teacherlogin.php");
							}
						
				


?>