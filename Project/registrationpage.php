<?php
require_once('db_connect.php');
?>




<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="info.css">
    <!-- <link href="https://getbootstrap.com/docs/4.0/components/buttons/"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <style background: url("2.jpg")  no-repeat center center fixed; > -->
            <!-- /* background: url("2.jpg")  no-repeat center center fixed;  */ -->
        

        <!-- </style> -->

        <!-- <div style="background-image: url("2.jpg")> -->
      
    </head>


<body>
    <form action="registrationpage.php" method="post">
       <div class="container" id="ok_01">
           <div class="row">
                <div class="col-sm-3">
           <h2 style="color:pink;" ><b>Registeration form</b></h2>
            <p>Please fill this form to register with us</p>
            <hr class="mb-3">
            <label>
                <span style="color: black;"><b>First Name</b></span>
            </label>
            <br>
            <input type="text"  class="form-control" name="Firstname" id="Firstname" placeholder="First name" required>
            &nbsp;
            <br>
            <label>
                <span style="color: black;"><b>Last Name</b></span>
            </label>
            <br>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
            <br>
            &nbsp;
            <label>
                <span style="color: black;"><b>Password</b></span>
            </label>
            <br>
            
            <input type="Password" class="form-control" name="password" id="password" placeholder="Password" required>
            <br>
            &nbsp;
            <label>
                <span style="color:black;"><b>Address</b></span>
            </label>
            <br>
            &nbsp;
            <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
        
            <br>
        
            &nbsp;    
            <br>
            <label>
                <span style="color:black;"><b>Email</b></span>
            </label>
            <br>
            &nbsp;
            <input type="email"  name="email" id="address" placeholder="Enter the email address" required>
            <br>
            $nbsp;
            <br>
            <label>
                <span style="color:black;"><b>Upload Your Image:</b></span>
            </label>
            &nbsp;
            <input type="file" class="form-control" name="photo" required><br></br>
            &nbsp;
            <label>
                <span style="color: black;"><b>Select your role:</b></span>
            </label>
            &nbsp;
            <select name="role">
                <option value="1">voter</option>
                <option value="2">Administraion</option>
            </select>
            <hr class="mb-3">

					<input   class="btn btn-outline-success" type="submit" id="register" name="create" value="Sign Up">
    
                </div>
           </div>
        </div>

    </form>
    


 
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var address =    $('#address').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'regdb.php',
					data: {firstname: firstname,lastname: lastname,email: email,address: address,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
<?php
    require('connect.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['Firstname'])) {
        // removes backslashes
        $Firstname = stripslashes($_REQUEST['Firstname']);
        //escapes special characters in a string
        $Firstname = mysqli_real_escape_string($connect, $Firstname);
        $lastname = stripslashes($_REQUEST['lastname']);
        $lastname = mysqli_real_escape_string($connect, $lastname);
        // $id = stripslashes($_REQUEST['id']);
        // $id = mysqli_real_escape_string($connect, $id);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($connect, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($connect, $password);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($connect, $address);
        $query    = "INSERT into `users` (firstname,lastname, password, email, address)
                     VALUES ('$Firstname', '$lastname','" . md5($password) . "', '$email', '$address')";
        $result   = mysqli_query($connect, $query);
        session_id($id);

        // $ok1=select id from users;
        // $geting="select id from users";
        // $getting2=mysqli_query($connect,$geting);
        // $rows=$getting2->fetch_assoc();
        // echo $rows;
        // $_SESSION['result']['v_name']=$Firstname;
        $_SESSION['id'] = $id;

        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    ?>