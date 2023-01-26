<?php
  //session_start();
  // $_SESSION['user'] = $row[department];
  function get_total() {
    require '../config.php';
    $result = mysqli_query($con, "SELECT * FROM parents1 ORDER BY date DESC");
    $row_cnt = mysqli_num_rows($result);
    // echo '<h1>All Comments ('.$row_cnt.')</h1>';
  }
  
?>