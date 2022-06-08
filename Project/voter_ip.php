<?php
//  echo "add button voter id" ;
  require('connect.php');
  
  session_start();
  // $fname=$_SESSION['v_name'];
  // $id=$_SESSION['id'];
  $id=$_SESSION['userdata']['id'];
  //  echo $id;

  // echo $id;

//    $name = $_POST['name_01'];
   $position=$_SESSION['position'];
  //  echo $position;


   $position_two=$_POST['position2098'];

  echo $position_two;
  

    // $position_two=$_POST['id'];

    // echo $position;
    mysqli_query( $connect,"SET FOREIGN_KEY_CHECKS=0;");
    // echo "In query  voter id" ;
    $insert = mysqli_query($connect,"INSERT INTO voter_cast (v_id,p_id,c_id) VALUES ('$id','$position','$position_two')");
    $inset11=mysqli_query($connect,"update zeeshan_counter set   counter=counter+1 where c_id='$position_two'");
  
    if($inset11){
   echo '
   
  <script>     
  alert("You have cast the vote Successfully");
  window.location = "login.php"; 
   </script>
   ';
 } 
 
//   if(isset($position_two))
//   {
      // echo "in if";
      // session_start();
      // $name = $_SESSION["name"];
      // $id=$_SESSION["id"];
      // echo "Name: ".$name."<br>";
      // $query = mysqli_query($connect,"INSERT INTO voter (voter_candidate,id) VALUES ('$name','$id')");
  //     if($query){
  //       echo '
  //         <script>     
  //         alert("Registration Successfully done");
  //         window.location = "voter_p.php"; 
  //         </script>
  //     ';
  //  }
//  }
   
else{
    echo '
  <script>
  alert("Some Error occured");
  window.location = "voter_p.php"; 
  </script>
   '; }
// echo "end" ;
    ?>