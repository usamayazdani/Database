<?php 
// include "db_connect.php";
require('db_connect.php');
// session_start(); 


if (isset($_POST['Uname']) && isset($_POST['password'])) {

	// function validate($data){
    //    $data = trim($data);
	//    $data = stripslashes($data);
	//    $data = htmlspecialchars($data);
	//    return $data;
	// }

	$uname=stripslashes($_REQUEST['Uname']);
	$uname=mysqli_real_escape_string($conn,$uname);
	$pass=stripslashes($_REQUEST['password']);
	$pass=mysqli_real_escape_string($conn,$pass);
	$sql = "SELECT * FROM  'user' WHERE firstname='$uname' ";

		$result = mysqli_query($conn, $sql);
			// $rows=mysqli_num_rows($result);
			// if($rows==1)
					if (mysqli_num_rows($result) === 1) 

			{
				$_SESSION['firstname']=$uname;
				header("Location:registraionpage.php");
			}else {
				echo "incorrect";
			}
		// if (mysqli_num_rows($result) === 1) {

	// $uname = validate($_POST['Uname']);
	// $pass = validate($_POST['password']);

	// if (empty($uname)) {
	// 	header("Location: home.php?error=User Name is required");
	//     exit();
	// }else if(empty($pass)){
    //     header("Location: home.php?error=Password is required");
	//     exit();
	// }else{
	// 	$sql = "SELECT * FROM loginform WHERE username='$uname' AND password='$pass'";

	// 	$result = mysqli_query($conn, $sql);

	// 	if (mysqli_num_rows($result) === 1) {
	// 		$row = mysqli_fetch_assoc($result);
    //         if ($row['username'] === $uname && $row['password'] === $pass) {
    //         	$_SESSION['username'] = $row['username'];
    //         	$_SESSION['password'] = $row['password'];
    //         	$_SESSION['id'] = $row['id'];
    //         	header("Location: registrationpage.php");
	// 	        exit();
    //         }else{
	// 			header("Location: home.php?error=Incorect User name or password");
	// 	        exit();
	// 		}
	// 	}else{
	// 		header("Location: home.php?error=Incorect User name or password");
	//         exit();
	// 	}
	// }
	
}else{
	header("Location: home.php");
	exit();
}