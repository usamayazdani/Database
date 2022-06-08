<?php
require('connect.php');
   $position = $_POST['position'];
   $insert = mysqli_query($connect,"INSERT INTO position (p_name) VALUES ('$position')");
   if($insert){
    echo '
  <script>
  alert("Registration Successfully done");
  window.location = "position_p.php"; 
  </script>
  ';
}
else{
    echo '
  <script>
  alert("Some Error occured");
  window.location = "position_p.php"; 
  </script>
  ';
}

  ?>