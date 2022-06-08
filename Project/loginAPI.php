<?php
   session_start();
   include("connect.php");
   $mobile = $_POST['mobile'];
   $password = $_POST['password'];
   $role = $_POST['role'];
   
   $check = mysqli_query($connect,"SELECT * from user WHERE mobile='$mobile' AND password='$password' AND role='$role'");
   
   if(mysqli_num_rows($check)>0){
       $userdata = mysqli_fetch_array($check); /* Fetch data for single user */
      //  $group = mysqli_query($connect,"SELECT * FROM user where role=2");
      //  $groupdata = mysqli_fetch_all($group,MYSQLI_ASSOC); /* join all the group and create their object and in it */
       
       $_SESSION['userdata'] = $userdata;
      //  $_SESSION['groupdata'] = $groupdata;

       echo '
    <script>
    window.location = "voter_p.php" ;
    </script>
    ';

   }
   else{
    echo '
    <script>
    alert("invalid Credentials and user name not found");
    window.location = "vote_index.php";  
    </script>
    ';

   }

?>