<!DOCTYPE html>    
<html>    
<head>    
    <title>E-Voting</title>    
    <link rel="stylesheet" type="text/css" href="info.css">  
    <script src="js/main.js"></script>  


</head>   

<body>    
    
    <h2>E-voting</h2><br>   
    <div class="login"> 
    <form id="login" method="post" action="loginpage.php" >
    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <label>
            <span style="color: blue;"><b>Username</b></span>   
        <br>
    </label> 
        <input type="text" name="Uname" id="Uname" placeholder="Username">  
          
        <br><br>    
        <label> <span style="color: blue;"><b>Password     
        </b>    
        </span>
        <br>    
    </label>    
        <input type="password" name="password" id="password" placeholder="Password" >    
        <br><br>    
        <button type="submit" id="nextpage1">Login  </button>
        <!-- <input type="button" name="log" id="log" value="Log In Here">        -->
        <br><br>    
            
        <!-- <input type="button" id="nextpage1" value="Forget Password" href="#"> 
        <br><br>     -->
       
        <!-- <a href="registrationpage.html" id="nextpage2" type="button"  >New Registration -->
        <!-- <button  id="nextpage2" href="registrationpage.html">New Registeration</button> -->
        <!-- </a> -->
        <div id="nextpage1">
        <a href="registrationpage.php">
            <input type="button" value="Registeration" id="nextpage1"/>
          </a>
        </div>
        <!-- <input type="button"  href="registrationpage.html" value="Registeration" id="nextpage2">  -->
        <br><br>     
    </form>     
</div>    
</body>    
</html>  