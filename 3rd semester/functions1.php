<?php
  //session_start();
  // $_SESSION['user'] = $row[department];
  function get_total() {
    require '../config.php';
    $result = mysqli_query($con, "SELECT * FROM parents1 ORDER BY date DESC");
    $row_cnt = mysqli_num_rows($result);
    // echo '<h1>All Comments ('.$row_cnt.')</h1>';
  }
  function get_comments() {
    require '../config.php';
     $result1 =  mysqli_query($con, "SELECT * FROM documments ORDER BY id DESC");
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
           
    $result =  mysqli_query($con, "SELECT * FROM parents1 WHERE code='$par_code' ORDER BY date DESC");
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
        $chi_result = mysqli_query($con, "SELECT * FROM children1 WHERE par_code='$par_code' ORDER BY date DESC");
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
  }
  
?>