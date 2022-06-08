<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="info.css" />
    <style>
        .inputs {
            display: block;

            margin: 11px auto;
            padding: 9px;

            border: black;
            border-radius: 7px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 15px;

            /* border-radius: 13px; */
            outline: none;
        }

        #Firstname,
        #lastname,
        #address,
        #password {
            color: blue;
            font-size: 15px;
            padding: 5px;
            width: 380px;
            /* border-radius: 17px; */
        }
    </style>
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
                     VALUES ('$Firstname', '$lastname','$password ', '$email', '$address')";
        $result   = mysqli_query($connect, $query);
        if ($result) {
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
    } else {
    ?>
        <form action="" method="post" class="form">
            <div class="container" id="ok_01">
                <div class="row">
                    <div class="col-sm-3">
                        <h2 style="color:crimson;font-family: cursive;font-size: 30px;border-bottom: 1px solid silver;"><b>Registeration form</b></h2>
                        <!-- <p>Please fill this form to register with us</p> -->
                        <hr class="mb-3">
                        <div class="inputs">

                            <br>
                            <input type="text" class="form-control" name="Firstname" id="Firstname" placeholder="First name" required>
                            &nbsp;


                            <input type="text" class="login-input" name="lastname" id="lastname" placeholder="Last Name" required>
                            <br>
                            &nbsp;


                            <br>

                            <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>

                            &nbsp;
                            <input type="email" name="email" id="address" placeholder="Enter the email address" required>
                            <br>
                            <!-- <br> -->
                            <br>
                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

                            <input type="Password" class="login-input" name="password" id="password" placeholder="Password" required>
                            <br>


                        </div>

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