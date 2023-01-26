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
<?php  require_once 'functions.php'; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>2nd Semester</title>
  
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
    <script src="js/global.js"></script>
  
    
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
          <div class="bb"><li ><a href="cse1200videostd.php"><i class="fa fa-laptop" aria-hidden="true" style="font-size:35px;"></i></a><br />Video/Slide</li></div>
      <div class="b"><i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
      <i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i>
      <i class="fa fa-circle-o" aria-hidden="true" style="font-size:15px;color:#3A6E96;"></i></div>
          <div class="bb"><li class="active"><a href="cse1200questionstd.php"><i class="fa fa-question aria-hidden="true" style="font-size:38px;"></i></a><br />Question</li></div>
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
          
            <a href="cse1200videostd.php"><?php echo("CSE 1200") ;  ?></a>
             <hr><a href="cse1201videostd.php"><?php echo("CSE 1201 & CSE 1202") ;  ?></a>
          
           <hr /><a href="cse1203videostd.php"><?php echo("CSE 1203 & CSE 1204") ;  ?></a>
           
           <hr /><a href="math1213videostd.php"><?php echo("MATH 1213") ;  ?></a>
           <hr /><a href="hum1213videostd.php"><?php echo("HUM 1213") ;  ?></a>
           <hr /><a href="phy1213videostd.php"><?php echo("PHY 1213 &PHY 1214") ;  ?></a>
          
           
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
<br /><center><h2>Analytical Programming</h2></center>
      <?php 
    
        get_total();
        //require_once 'check_com.php';

  // new comment
  if(isset($_POST['new_comment'])) {
    $new_com_name = $_SESSION['user'];
    $new_com_text = $_POST['comment'];
    $new_com_date = date('Y-m-d H:i:s');
    // $new_com_code = generateRandomString();
    if(isset($new_com_text)) {
      mysqli_query($con, "INSERT INTO parents (user, text, date, code,course) VALUES ('$new_com_name', '$new_com_text', '$new_com_date', '','cse1200')");
    }
   
  }
  // new reply
  if(isset($_POST['new_reply'])) {
    $new_reply_name = $_SESSION['user'];
    $new_reply_text = $_POST['new-reply'];
    $new_reply_date = date('Y-m-d H:i:s');
    $new_reply_code = $_POST['code'];
    if(isset($new_reply_text)) {
      mysqli_query($con, "INSERT INTO children (user, text, date, par_code,course) VALUES ('$new_reply_name', '$new_reply_text', '$new_reply_date', '$new_reply_code','cse1200')") or die(mysqli_error());
    }
  
  }

      ?>
      <form action="" method="post" class="main">
        <label>QUESTION</label>
        <textarea class="form-text" name="comment" id="comment"></textarea>
        <br />
        <input type="submit" class="form-submit" name="new_comment" value="post">
      </form>
       <?php 
       //get_comments(); 
   
    require '../config.php';
    $resul =  mysqli_query($con, "SELECT * FROM parents WHERE course='cse1200' ORDER BY date DESC");
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
        $chi_result = mysqli_query($con, "SELECT * FROM children WHERE par_code='$par_code' and course='cse1200' ORDER BY date DESC");
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