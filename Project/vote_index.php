<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div id="headersection">
        <h1>Online Voting System</h1>
    </div>
    <hr>
    <div id="bodysection">
      <form action="loginAPI.php" method="POST">
          <h2>Login</h2>
          <input type="number" name="mobile" placeholder="Enter mobile"><br><br>
          <input type="password" name="password" placeholder="Enter password"><br><br>
          <select name="role" id="dropbox">
            <option value="1">Voter</option>
            <!-- <option value="2">Group</option> -->
          </select><br><br>
          <button id="login_button">Login</button><br><br>
          New user?<a href="vote_registration.php">Register here</a><br>
          Admin? <a href="position_p.php">Admin Login</a>
        </form>
    </div>
    
    
</body>
</html>