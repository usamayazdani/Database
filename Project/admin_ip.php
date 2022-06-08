<?php
require('connect.php');
   $name = $_POST['name'];
   $password = $_POST['password'];

   $check = mysqli_query($connect,"SELECT * from master WHERE name='$name' AND password='$password' ");
   
   if(mysqli_num_rows($check)>0){   //num of row in result set
      //  $admindata = mysqli_fetch_array($check); /* Fetch data for single user */
                                               
      //  $_SESSION['admindata'] = $admindata;

       echo '
    <script>
    window.location = "position_p.php";
    </script>
    ';

   }
   else{
    echo '
    <script>
    alert("invalid password and username not found");
    window.location = "admin.php";  
    </script>
    ';

   }
  ?>
