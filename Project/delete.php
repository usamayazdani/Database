<?php
require('connect.php');
    

   $id = $_GET['c_id'];
   mysqli_query( $connect,"SET FOREIGN_KEY_CHECKS=0;");

   $delete = mysqli_query($connect,"DELETE FROM candidate where c_id= '$id'");
   if($delete){
    echo '
  <script>     
  alert("Registration Successfully done");
  window.location = "candidate.php"; 
  </script>
  ';
}
else{
    echo '
  <script>
  alert("Some Error occured");
  window.location = "candidate.php"; 
  </script>
  ';
}

  ?>