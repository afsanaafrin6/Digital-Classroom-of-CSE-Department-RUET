<?php
  // new comment
  if(isset($_POST['new_comment'])) {
    $new_com_name = $_SESSION['user'];
    $new_com_text = $_POST['comment'];
    $new_com_date = date('Y-m-d H:i:s');
    // $new_com_code = generateRandomString();
    if(isset($new_com_text)) {
      mysqli_query($con, "INSERT INTO parents (user, text, date, code) VALUES ('$new_com_name', '$new_com_text', '$new_com_date', '')");
    }
   
  }
  // new reply
  if(isset($_POST['new_reply'])) {
    $new_reply_name = $_SESSION['user'];
    $new_reply_text = $_POST['new-reply'];
    $new_reply_date = date('Y-m-d H:i:s');
    $new_reply_code = $_POST['code'];
    if(isset($new_reply_text)) {
      mysqli_query($con, "INSERT INTO children (user, text, date, par_code) VALUES ('$new_reply_name', '$new_reply_text', '$new_reply_date', '$new_reply_code')") or die(mysqli_error());
    }
  
  }
?>