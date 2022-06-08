<!DOCTYPE html>
<html>
    <head>
    <center>
        <h1>Online Voting System</h1>
        <hr>
    </center>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="login.php">Login</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li><a href="position_p.php">Position</a></li>
  <li><a href="candidate.php">Candidate</a></li>
  <li><a href="des.php">Result</a></li>
</ul>

    <style>
        body{
            margin:0;
            padding:0;
            font-family: 'Courier New', Courier,monospace;
            background:linear-gradient(120deg,lightyellow,lightblue);
            height:100vh;
            overflow: hidden;
        }

        .form-card{
            position:absolute;
            top: 0px;
            left: 50px;
            transform: translate(-50%,50%);
            width: 400px;
            
            background: black;
            border-radius: 10px;
            margin-left: 180px;
            
        }

        .form-card h2{
            text-align: center;
            color: aliceblue;
            padding: 0 0 20px 0;
            border-bottom: 1px solid silver;
        }

        .form-card form{
            padding: 0 40px;
            box-sizing: border-box;
            
        }

        form .card-text{
           position: relative;
           border-bottom: 2px slategray;
           margin: 10px 3px;
        }

        /* .card-text input{
            width: 100px;
            padding: 0 50px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
        } */

        input{
            display: block;
            width: 50%;
            margin: 11px auto;
            padding: 9px;
            font-size: small;
            border: black;
            border-radius: 7px;
        
            outline: none;
        }

        .btn{
            padding: 6px 20px;
            color: white;
            background: fuchsia;
            font-family: 'Courier New', Courier,monospace;
            font-size: 15px;
            border: 2px solid;
            border-radius: 13px;
            cursor: pointer;
            /* position: absoulte; */
            
            margin: 11px 160px;

            
        }
        
        
    </style>
        <!-- <a href="des.php"><button id ="backbtn">Result</button></a> -->

    </head>
    <body>
        <!-- <form action="candidate_ip.php" method='post'> -->
            <div class="container" id="candidate_01">
            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
            <div class="form-card">
            <h2>Add new candidate</h2><br>
                <form method="post" action="candidate_ip.php">
                    <div class="card-text">
                        <label> Candidate name:</label>
                        <input type="text" name="name_01" placeholder="Candidate name" required>
                        <span></span>
                    </div>
                    <div class="card-text">
                        <label for="position">Choose position:</label>
                        <select name="position" style="padding: 9px;width: 55%;margin: 11px -91px;border-radius: 7px;">
                        <option value="ok1"> -----   Select Position  ----   </option>;

    <?php 
        require('connect.php');
        $query="select  * from position"; 
        $result=mysqli_query($connect,$query); 

        while($rows=mysqli_fetch_array($result)) 
		{ 
		?> 
		<option value="<?php echo $rows['p_id']; ?>" ><?php echo $rows['p_id']; ?></option> 
        <option value="<?php echo $rows['p_name']; ?>" ><?php echo $rows['p_name']; ?></option> 

		
		
	<?php 
               } 
          ?> 

            </select>
            <span></span>
                    </div>

    
    <center><button type="submit" name="ok_01" class="btn">Add</button></center>
                </form>
            </div>

  <!-- <input type="submit" placeholder="see candidate"> -->
               <br>
               <table align="right" border="1px" style="width:600px; line-height:40px;margin: 20px 50px; height:50px">

            
	<tr> 
		<th colspan="4">
            <h2>Availabe candidate</h2>
        </th> 
            </tr> 
			  <th> candidate id </th> 
			  <th> Candidate name </th> 
			  <th> candidate position</th> 
              <th> Delete candidate</th>
            
            </tr> 
            
		<?php 
        require('connect.php');
        $query="select * from candidate"; 
        $result=mysqli_query($connect,$query); 
        while($rows=mysqli_fetch_array($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['c_id']; ?></td> 
		<td><?php echo $rows['1']; ?></td> 
		<td><?php echo $rows['2']; ?></td> 
		<td><a href="delete.php ? c_id=<?php echo $rows['c_id'];?> " >Delete<td>
		</tr> 
	<?php 
               } 
               ?> 
       
            </table>
            </div>

    
        <!-- </form> -->
    </body>
    </html>