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
<?php  require_once 'functions1.php'; ?>
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
	
	 <link rel="stylesheet" type="text/css" href="cse3101videostd.css" media="all" />
	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="js/global1.js"></script>
    
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
			<div class="aa"><li><a href=""><i data-uk-offcanvas="{target:'#my-id'}"class="fa fa-bars" aria-hidden="true" style="font-size:35px;"></i></a><br />Menu</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i></div>
   	    	<div class="bb"><li class=""><a href="start.php" ><i class="fa fa-home" aria-hidden="true" style="font-size:35px;"></i></a><br />Home</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i></div>
   	    	<div class="bb"><li ><a href="../bookstd/books.php"><i class="fa fa-book" aria-hidden="true" style="font-size:35px;"></i></a><br />Books</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i></div>
   	    	<div class="bb"><li class="active"><a href="cse3103videostd.php"><i class="fa fa-laptop" aria-hidden="true" style="font-size:35px;"></i></a><br />Video/Slide</li></div>
			<div class="b"><i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
			<i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i></div>
   	    	<div class="bb"><li ><a href="cse3103questionstd.php"><i class="fa fa-question aria-hidden="true" style="font-size:38px;"></i></a><br />Question</li></div>
   	    	
   	    </ul>
    
   </div>
  
   
	<div class="contuct">
	
	</div>
	
   <div id="my-id" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav><center><div class="head"><h2>CSE 3101</h2></div></center></ul>
			<div class="open">
				<i class="fa fa-user"  aria-hidden="true" style="font-size:25px;color:#2980B9;">Profile</i>
				<div class="profile"><?php echo("Name:$row[first_name] $row[last_name]") ;  ?>
				     <br /><hr /><?php echo("Roll:$row[roll]") ;  ?>
					 
			    </div>
				<i class="fa fa-file-text"  aria-hidden="true" style="font-size:25px;color:#2980B9;">Courses</i>
				<div class="course">
					<a href="cse3101videostd.php"><?php echo("CSE 3101 & CSE 3102") ;  ?></a>
					 
					 <hr /><a href="cse3103videostd.php"><?php echo("CSE 3103 & CSE 3104") ;  ?></a>
					
					 <hr /><a href="cse3105videostd.php"><?php echo("CSE 3105") ;  ?></a>
					 <hr /><a href="cse3107videostd.php"><?php echo("CSE 3107") ;  ?></a>
					 <hr /><a href="cse3109videostd.php"><?php echo("CSE 3109 & CSE 3110") ;  ?></a>
					 
			    </div>
				
				
			</div>
			<div class="logout">
				<i class="fa fa-power-off"  aria-hidden="true" style="font-size:25px;color:#2980B9;"><a href="logout.php"><b>Log out</b></a></i>
		    </div>
			<div class="emty">
				
		    </div>
		
    </div>
</div>


<div class="page-container">

	<br /><center><h2>Data Communication</h2></center>
      <?php 
	  
        get_total();
        //require_once 'check_com1.php';

  // new comment
  if(isset($_POST['new_comment'])) {
    
    $new_com_text = $_POST['comment'];
    $new_com_date = date('Y-m-d H:i:s');
    $new_com_code =$_POST['code'];
    if(isset($new_com_text)) {
      mysqli_query($con, "INSERT INTO parents1 ( user,text, date, code,course) VALUES ('$row[first_name]','$new_com_text', '$new_com_date', '$new_com_code','cse3103')");
    }
    
  }
  // new reply
  if(isset($_POST['new_reply'])) {
   
    $new_reply_text = $_POST['new-reply'];
    $new_reply_date = date('Y-m-d H:i:s');
    $new_reply_code = $_POST['code'];
    if(isset($new_reply_text)) {
      mysqli_query($con, "INSERT INTO children1 (user, text, date, par_code,course) VALUES ('$row[first_name]','$new_reply_text', '$new_reply_date', '$new_reply_code','cse3103')") or die(mysqli_error());
    }
   
  }
?>
     
      
       <?php 
       
    require '../config.php';
     $result1 =  mysqli_query($con, "SELECT * FROM documments WHERE course='cse3103' ORDER BY id DESC");
    $row_cnt1 = mysqli_num_rows($result1);
    foreach($result1 as $item1){ 
            $date = new dateTime($item1['date']);
            $date = date_format($date, 'M j, Y | H:i:s');
            $par_code = $item1['id'];
            $name=$item1['name'];
            $path=$item1['path'];
            $user = $item1['user'];
            echo '<div class="comment" id="'.$par_code.'">'
            // .'<p class="time">'.$par_code.'</p>'
            
            .'<p class="user">'.$user.'</p></br>'
            .'<p class="user1">'.$name.'</p><br>'
            
            
             .'<a href="'.$path.'" class="link-reply" target="_blank">Download/View</a>'

        
         .'<a class="link-reply" id="arshi" name="'.$par_code.'">comment</a><br>'
          .'<p class="time">'.$date.'</p>' ;
           
    $result =  mysqli_query($con, "SELECT * FROM parents1 WHERE code='$par_code' and course='cse3103' ORDER BY date DESC");
    $row_cnt = mysqli_num_rows($result);
    foreach($result as $item) {
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
        $chi_result = mysqli_query($con, "SELECT * FROM children1 WHERE par_code='$par_code' and course='cse3103' ORDER BY date DESC");
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
     echo '</div>';
  }
  
  
      // get_comments();
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