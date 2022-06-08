<?php
require('connect.php');
   $name = $_POST['name_01'];
   $position=$_POST['position'];
  //  echo $position;
   $insert = mysqli_query($connect,"INSERT INTO candidate  (c_name,p_id) VALUES ('$name','$position')");
   
$id=mysqli_insert_id($connect);
mysqli_query( $connect,"SET FOREIGN_KEY_CHECKS=0;");

$insert2 = mysqli_query($connect,"INSERT INTO  zeeshan_counter (c_id) VALUES ('$id')");

  
  // echo $id;
//   $id=last_insert_id();
//    $ok1=mysqli_query($connect,"select max(c_id) from candidate");
//    while($rows=mysqli_fetch_array($result)) 
//    { 
  //  ?
//         echo $rows
//  <?php 
//               } 
//               ? 
  
  //  if (mysqli_query($connect, $insert)) {
  //   $last_id = mysqli_insert_id($connect);
  //   echo "New record created successfully. Last inserted ID is: " . $last_id;
  // } else {
  //   echo "Error: " . $insert . "<br>" . mysqli_error($connect);
  // }
    // if ($connect->query($insert)==TRUE) {
    //   $last_id=$connect->insert_id;
    //   echo "ID is ". $last_id;
    // }else
    //   {
    //     echo "DFDSF" . $insert . "<br>" . $connect->error; 
    //   }

   if($insert2){

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