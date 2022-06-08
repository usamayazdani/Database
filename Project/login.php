<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="info.css">
    <script src="js/main.js"></script>
    

</head>

<body>
    <h2>E-voting</h2><br>
    <!-- <div class="login"> -->
    <?php
    require('connect.php');
    session_start();
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($connect, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($connect, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='$password'";
        $result = mysqli_query($connect, $query);
        // $rows = mysqli_num_rows($result);
        // $_SESSION['result']['id']=$id;
        // $val=$_SESSION['id'];
        // echo  "hello form this";
        if (mysqli_num_rows($result) > 0) {
            // echo  "hello form this";
            $userdata = mysqli_fetch_array($result);
            $_SESSION['userdata'] = $userdata;
            $id = $_SESSION['userdata']['id'];
            echo $id;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $id;
            // echo  "hello form this";

            // Redirect to user dashboard page
            header("Location: voter_p.php");
        } else {

            echo '
  <script>     
  alert("Incorrect username and password");
  window.location = "login.php"; 
  </script>
  ';
        }
    } else {
    ?>
        <div class="login">

            <form name="login" method="post" action="" class="form">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <!-- <div class="container" > -->
                <label>
                    <span style="color: blue;"><b>Email</b></span>
                    <br>
                </label>
                <input type="text" id="Uname" name="email" placeholder="Email" required>

                <br><br>
                <label> <span style="color: blue;"><b>Password
                        </b>
                    </span>
                    <br>
                </label>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <br><br>

                <!-- </a> -->&nbsp; &nbsp;
                &nbsp;
                &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp
                &nbsp; &nbsp;
                &nbsp;
                &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; 
                &nbsp; &nbsp; &nbsp;
                &nbsp;
                <button class="button-85" role="button">Login </button>

                <!-- <button type="submit" id="nextpage1" value="Login" name="submit" class="btn">Login</button> -->
                <br>
                <!-- <br> -->


                <!-- <div id="nextpage1"> -->
                <h4 style="color: rgba(47,86,135,1)"> Dont have account? Register here: <br>
                
                &nbsp; &nbsp; &nbsp;

                &nbsp; &nbsp;
                &nbsp;
                &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; 
                &nbsp; &nbsp; &nbsp;
                &nbsp;


                <!-- <a href="registration.php"> -->
                    <button class="button-85" role="button" onclick="location.href='registration.php'"> Registeration </button>
                    </h4>

                <!-- </a> -->
                <!-- <br>  -->
                <h4 style="color: rgba(47,86,135,1)">If you want to login as admin? press Here:
                    <br> 

                    &nbsp; 

                    &nbsp; &nbsp;
                    &nbsp;
                    &nbsp;

                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;

                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <button class="button-85" role="button" onclick="location.href='admin.php'">
                        Login as admin
                    </button>
                </h4>

                <br>
                <br>


                <br><br>
        </div>
        </form>

    <?php
    }
    ?>





</body>

</html>
<style>
    .button-85 {
        padding: 0.6em 2em;
        border: none;
        outline: none;
        color: rgb(255, 255, 255);
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-85:before {
        content: "";
        background: linear-gradient(45deg,
                #ff0000,
                #ff7300,
                #fffb00,
                #48ff00,
                #00ffd5,
                #002bff,
                #7a00ff,
                #ff00c8,
                #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        -webkit-filter: blur(5px);
        /* width: 100%; */
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing-button-85 20s linear infinite;
        transition: opacity 0.3s ease-in-out;
        border-radius: 10px;
    }

    @keyframes glowing-button-85 {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 400% 0;
        }

        100% {
            background-position: 0 0;
        }
    }

    .button-85:after {
        z-index: -1;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: #222;
        left: 0;
        top: 0;
        border-radius: 10px;
    }
</style>