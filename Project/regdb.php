<?php
require('connect.php');
session_start();


if (isset($_POST['create'])) {


    $firstname = $_POST['Firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    // $image=$_POST['photo'];
    
    $sql = mysqli_query($connect,"INSERT INTO users (firstname, lastname, email,password,address) VALUES('$firstname','$lastname','$email','$password','$address')");
    // $stmtinsert = $db->prepare($sql);
    // $sql   = mysqli_query($connect, $query);
    session_id($id);
    // $result = $stmtinsert->execute([$firstname, $lastname, $email, $address, $password]);
    $_SESSION['id'] = $id;
    
    if ($sql) {
        echo '
        <script>
        alert("You are successfully registered");
        window.location = "login.php"; 
        </script>
        ';
        
    } else {
        echo '
        <script>
        alert("Some Error occured");
        window.location = "registration.php"; 
        </script>
        ';
      
    }

    
}

?>