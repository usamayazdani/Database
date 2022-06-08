<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="stylesheet.css">

    <style>

      body{
            margin:0;
            padding:0;
            font-family: 'Courier New', Courier,monospace;
            background:linear-gradient(120deg,lightgreen,lightblue);
            height:100vh;
            /* overflow: hidden; */
        }
        progress[value]
{
    background-color:aliceblue;
    border-radius: 5px;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.25) inset;
    position: relative;
    width: 500px;
    height: 25px;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.25) inset;
    
}

h3{
    font-size: 162.5%; /* 26px */
	color: rgb(147, 69, 69);
    font-family: "Public Sans", Verdana, sans-serif;
    font-weight: 700;

}

#backbtn{
        float:left;
        font-family: cursive;
        padding: 5px;
        font-size: 15px;
        border-radius: 5px;
        background-color: black;
        color:aliceblue;
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
  <li><a href="position_p.php">Position</a></li>
  <li><a href="candidate.php">Candidate</a></li>
  <li><a href="des.php">Result</a></li>
</ul>
</head>
<body>
    <div id="headersection">
    <!-- <a href="admin.php"><button id ="backbtn">Back to Admin</button></a> -->
        <h1>Online Voting System</h1>
    </div>
    <hr>
    <div id="bodysection">
      <form action="" method="POST">
          <h1>Results</h1>
        
        </form>
    </div>

    <?php
            require("connect.php");
            mysqli_query( $connect,"SET FOREIGN_KEY_CHECKS=0;");
            $query = "SELECT * FROM zeeshan_counter"; 

            $result = mysqli_query($connect,$query) ;
            
            // $records=0;
            $total=0;
            
            while($row = mysqli_fetch_array($result)){
                
                $total=$total+$row['counter'];
                // $records++;
            }
            ?>
            <?php
            $ffresult = mysqli_query($connect,$query) ;

            while($row = mysqli_fetch_array($ffresult)){
                $f_value=0;
                $counter_V=$row['counter'];
                $f_value=($counter_V/$total)*100;

                $id=$row['c_id'];     

                $query10 = "SELECT * FROM candidate WHERE c_id='$id' ";
                $L_result = mysqli_query($connect,$query10) ;
                $row1 = mysqli_fetch_array($L_result);
               
                $name=$row1['c_name'];
                // echo $name; 
                ?>
                 <br><br>
                 <h3><?php echo $name; ?></h3>
                
                <progress id="file" value="<?php echo $f_value; ?>" max="100"> </progress>
                 
            <?php  
            }
            echo "<br />";
            // echo $total;
            // echo $records;
              
           ?> 

           <?php
                 $query13 = "SELECT * FROM zeeshan_counter WHERE counter=(SELECT max(counter) FROM zeeshan_counter)";
                 $first = mysqli_query($connect,$query13) ;
                 $row2 = mysqli_fetch_array($first);
                 
                 $w_id=$row2['c_id'];
                //  echo $w_id;

           ?>

           <?php
               $query15 = "SELECT * FROM candidate WHERE c_id='$w_id' ";
               $W_result = mysqli_query($connect,$query15) ;
               $row4 = mysqli_fetch_array($W_result);

               $w_name=$row4['c_name'];
            //    echo $w_name;

           ?>
           <br><br>
           <h3>Winner is <?php echo $w_name; ?></h3>
            
          
          
    
</body>
</html>