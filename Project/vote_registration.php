<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online voting system registration</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

     <style>
         #address{
             width: 30%;
         }

         #imagepart{
            border:2px solid black;
            border-radius:5px;
            padding:10px;
            width: 30%;
         }

         #role{
            border:2px solid black;
            border-radius:5px;
            padding:10px;
            width: 30%;
         }

         #RoleButton{
             padding: 10px;
         }

         #RegisterButton
         {
            padding: 5px;
            font-size: 15px;
            border-radius: 5px;
            background-color: cornflowerblue;
            color:aliceblue;
         }

     </style>



    <h1>Online Voting System</h1>
     <hr>
     <h2>Registration</h2>
     <form action="registerAPI.php" method="POST" enctype="multipart/form-data">                                                                                                                                                                                   
         <input type="text" name="name" placeholder="Enter name">
         <input type="number" name="mobile" placeholder="Enter mobile">
         <br><br><input type="password" name="password" placeholder="Password">
         <input type="password" name="cpassword" placeholder="Conform Password">
         <br><br><input id ="address" type="text" name="address" placeholder="Address">
         <br><br>
         <center>
         <div id="imagepart">
         Upload image<input  type="file" name="photo">
         </div>
         <br>
         <div id="role">
             Select role<select id="RoleButton" name="role">
             <option value="1">Voter</option>
             <!-- <option value="2">Group</option> -->
             </select>           
         </div>
         
         <br><br><button id = "RegisterButton">Register</button><br><br>
         </center>
         Already user?<a href="../vote_index.php">Login here</a>
     </form>
</body>
</html>