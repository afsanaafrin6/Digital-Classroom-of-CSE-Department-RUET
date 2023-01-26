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
<?php  require_once 'functions.php'; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>4th Semester</title>
	
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	 <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.gradient.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.almost-flat.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" media="all">
	
	 <link rel="stylesheet" type="text/css" href="cse3101video.css" media="all" />
	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="js/global.js"></script>
    
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
			<div class="aa"><li><a href=""><i data-uk-offcanvas="{target:'#my-id'}"class="fa fa-bars" aria-hidden="true" style="font-size:35px;"></i></a><br />Menu</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i></div>
   	    	<div class="bb"><li class=""><a href="teacherhome.php" ><i class="fa fa-home" aria-hidden="true" style="font-size:35px;"></i></a><br />Home</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i></div>
   	    	<div class="bb"><li ><a href="../../booktea/books.php"><i class="fa fa-book" aria-hidden="true" style="font-size:35px;"></i></a><br />Books</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i></div>
   	    	<div class="bb"><li ><a href="eee2251video.php"><i class="fa fa-laptop" aria-hidden="true" style="font-size:35px;"></i></a><br />Video/Slide</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i></div>
   	    	<div class="bb"><li class="active"><a href="eee2251question.php"><i class="fa fa-question aria-hidden="true" style="font-size:38px;"></i></a><br />Question</li></div>
   	    </ul>
    
   </div>
   
   
	<div class="contuct">
	
	</div>
	
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
			
			<div class="emty">
				
		    </div>
		
    </div>
    <center><h2>Data Structure</h2></center>
<div class="page-container">

      <?php 
	  
        get_total();
       
  // new comment
  if(isset($_POST['new_comment'])) {
   
    $new_com_text = $_POST['comment'];
    $new_com_date = date('Y-m-d H:i:s');
    // $new_com_code = generateRandomString();
    if(isset($new_com_text)) {
      mysqli_query($con, "INSERT INTO parents (user, text, date, code,course) VALUES ('$row[first_name] $row[last_name]', '$new_com_text', '$new_com_date', '','eee2251')");
    }
   
  }
  // new reply
  if(isset($_POST['new_reply'])) {
   
    $new_reply_text = $_POST['new-reply'];
    $new_reply_date = date('Y-m-d H:i:s');
    $new_reply_code = $_POST['code'];
    if(isset($new_reply_text)) {
      mysqli_query($con, "INSERT INTO children (user, text, date, par_code,course) VALUES ('$row[first_name] $row[last_name]', '$new_reply_text', '$new_reply_date', '$new_reply_code','eee2251')") or die(mysqli_error());
    }
  
  }
?>
      
      <form action="" method="post" class="main">
        <h1>QUESTION</h1>
        <textarea class="form-text" name="comment" id="comment"></textarea>
        <br />
        <input type="submit" class="form-submit" name="new_comment" value="post">
      </form>
       <?php 
       //get_comments(); 
	   
    require '../../config.php';
    $resul =  mysqli_query($con, "SELECT * FROM parents WHERE course='eee2251' ORDER BY date DESC ");
    $row_cnt = mysqli_num_rows($resul);
    foreach($resul as $item) {
      $date = new dateTime($item['date']);
      $date = date_format($date, 'M j, Y | H:i:s');
      $user = $item['user'];
      $comment = $item['text'];
      $par_code = $item['code'];
      echo '<div class="comment" id="'.$par_code.'">'
          .'<p class="user">'.$user.'</p>&nbsp;'
          .'<p class="time">'.$date.'</p>'
          .'<p class="comment-text">'.$comment.'</p>'
          .'<a class="link-reply" id="reply" name="'.$par_code.'">Reply</a>';
        $chi_result = mysqli_query($con, "SELECT * FROM children WHERE par_code='$par_code' and course='eee2251' ORDER BY date DESC");
        $chi_cnt = mysqli_num_rows($chi_result);
        if($chi_cnt == 0){
        } else {
          echo '<a class="link-reply" id="children" name="'.$par_code.'"><span id="tog_text">replies</span> ('.$chi_cnt.')</a>'
            .'<div class="child-comments" id="C-'.$par_code.'">';
          foreach($chi_result as $com) {
            $chi_date = new dateTime($com['date']);
            $chi_date = date_format($chi_date, 'M j, Y | H:i:s');
            $chi_user = $com['user'];
            $chi_com = $com['text'];
            $chi_par = $com['par_code'];
            echo '<div class="child" id="'.$par_code.'-C">'
                .'<p class="user">'.$chi_user.'</p>&nbsp;'
                .'<p class="time">'.$chi_date.'</p>'
                .'<p class="comment-text">'.$chi_com.'</p>'
              .'</div>';
          }
          echo '</div>';
        }
        echo '</div>';
    }
  
	   ?>
    </div>
</div>	
<script type="text/javascript" src="js/jquery.js"></script>	
<script type="text/javascript" src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			
				
			$('.open').accordion({'collapsible':'true','heightStyle':'content'});
				
			
		});
			
			
</script>
</body>
</html>