<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- <link rel="stylesheet" href="info.css"> -->

    <style>
.container{
    text-emphasis-color:inherit;
    color: yellow;
}

</style>
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
<ul>
  <li><a class="active" href="login.php">Login</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li><a href="registration.php">Registration</a></li>
</ul>
</head>
<body>

    <div  class="headsection" id="headersection">
        <h1 style="text-align:center ;" >Online Voting System</h1>
        
    </div>
    <hr>
    <div class="bodysection" id="bodysection" >
        <!-- <form action="voter_ip.php" method="POST"> -->
        <!-- <h2 style="color: yellow"  >Select position: </h2> -->

        <div class="container"  style= "width:auto" >

        <h2 style="text-align: left; color:black;"> Select position: </h2>
        <div class="within">
        <form  method="post" >

          <select  name="position">
          <option > ----------   Select Position  --------   </option>;

            <?php 
                require('connect.php');
                $query1="select * from position"; 
                $result=mysqli_query($connect,$query1); 
    
        while($rows=mysqli_fetch_array($result)) 
		{ 
        
        ?> 

        <option ><?php echo $rows['p_id']; ?></option> 
		<option value="<?php echo $rows['p_name']; ?>"><?php echo $rows['p_name']; ?></option> 
        
		
	<?php 
               } 
          ?> 

            </select>
            <button type="submit" name="ok_01" formaction="voter_p.php" > position</button>
            
        </form>
        </div>
        </div>
    </div>

         <?php 
         if(isset($_POST['ok_01'])){     
         session_start();
    $position=$_POST['position'];
    // echo $position;
    $_SESSION['position']=$position;
           ?>

    <h2 style="text-align: left; color:black;"> Select Candidate: </h2>
    <div class="within2">

    <form  method="post" action="voter_ip.php">


          <select  name="position2098">
          <option> ----------   Select Candidate  --------   </option>;

            <?php 
                require('connect.php');
                $query="select distinct * from candidate  where p_id='$position'";
                $result=mysqli_query($connect, $query); 

        while($rows=mysqli_fetch_array($result)) 
		{ 
        
		?> 
        <option value="<?php echo $rows['c_id']; ?>"><?php echo $rows['c_id']; ?></option> 
		<option value="<?php echo $rows['c_name']; ?>"><?php echo $rows['c_name']; ?></option> 
        
		
	<?php 
               } 
          ?> 


</select>

            <button type="submit"  name="ok_21"> candidate</button>
            </form>

        

    </div>
            </div>
               <div class="table" >
               <table align="right" border="1px" style="width:600px; line-height:40px; margin: -80px 100px; height: 50px;">

    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
    </tr>
  
  <?php 
        require('connect.php');
        // $query=" select * from voter_cast v natural join candidate c where (c.c_id=v.c_id and c.p_id=v.p_id); "; 
        $query="select distinct * from candidate  where p_id='$position'";

        // $result= "select distinct c.id,c.cand, c.candidateposition from candidate c inner join voter v on c.candidateposition=v.voter_position"
        $result=mysqli_query($connect,$query); 
        while($rows=mysqli_fetch_array($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['c_id']; ?></td> 
		<td><?php echo $rows['c_name']; ?></td> 
		</tr> 
	<?php 
               } 
               ?> 
    <tr>
      
      </tr>
    

               </table>
               </div>
            </div>
            <?php }?>
            </form>
	
    <script src="script.js"> </script>
</body>
</html>
<style>
        body{
            /* margin:0; */
            /* padding:0; */
            font-family: 'Courier New', Courier,monospace;
            background:linear-gradient(120deg,lightyellow,lightblue);
            /* height:100vh; */
            /* overflow: hidden; */
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

        .card-text input{
            width: 100px;
            padding: 0 50px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
        }

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
            margin: 11px 160px;
            
        }

        
    </style>

