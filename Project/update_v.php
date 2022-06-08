<?php
  require('connect.php');
  //    $name = $_POST['submit_01'];
  session_start();
  $name = $_SESSION['name'];
   $position=$_GET['id'];
    echo "Name: ".$name;
    // where id='$position'
   $updation = mysqli_query($connect,"UPDATE voter   SET counter=counter+1 ,voter_position=NULL where voter_candidate = '$name'");
   if($updation){
     echo '
   <script>     
   alert("Registration Successfully done");
   window.location = "voter_p.php"; 
   </script>
   ';
 }
 else{
     echo '
   <script>
   alert("Some Error occured");
   window.location = "voter_p.php"; 
   </script>
   ';
 }
   ?>