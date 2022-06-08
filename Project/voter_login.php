<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="info.css" />
</head>

<body>
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
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($connect, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($connect, $password);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($connect, $address);
        $query    = "INSERT into `users` (firstname,lastname, password, email, address)
                     VALUES ('$Firstname', '$lastname','" . md5($password) . "', '$email', '$address')";
        $result   = mysqli_query($connect, $query);
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
        <form action="" method="post" class="form">
            <div class="container" id="ok_01">
                <div class="row">
                    <div class="col-sm-3">
                        <h2 style="color:pink;"><b>Registeration form</b></h2>
                        <p>Please fill this form to register with us</p>
                        <hr class="mb-3">
                        <label>
                            <span style="color: black;"><b>First Name</b></span>
                        </label>
                        <br>
                        <input type="text" class="form-control" name="Firstname" id="Firstname" placeholder="First name" required>
                        &nbsp;
                        <br>
                        <label>
                            <span style="color: black;"><b>Last Name</b></span>
                        </label>
                        <br>
                        <input type="text" class="login-input" name="lastname" id="lastname" placeholder="Last Name" required>
                        <br>
                        &nbsp;
                        <label>
                            <span style="color: black;"><b>Password</b></span>
                        </label>
                        <br>

                        <input type="Password" class="login-input" name="password" id="password" placeholder="Password" required>
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
                        <input type="email" name="email" id="address" placeholder="Enter the email address" required>
                        <br>
                    
                        <br>




                        <hr class="mb-3">
                        <input class="btn btn-outline-success" type="submit" id="register" name="create" value="Sign Up">

                    </div>
                </div>
            </div>

        </form>
       
    <?php
    }
    ?>
</body>

</html> 