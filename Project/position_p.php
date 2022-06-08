<?php
        require('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="stylesheet.css"> -->
    <style>
        /* .btn btn-outline-dark btn-rounded {} */

        #ps {
            padding: 5px 8px;
        }

        .container {
            /* background: url("2.jpg")  no-repeat center center fixed;  */
            /* background-image:"2.jpg"; */
            /* background-image: url('4.jpg'); */
            background-repeat: no-repeat;
            background:linear-gradient(120deg,lightyellow,lightblue);



            /* -webkit-background-size: cover; */
            /* -moz-background-size: cover; */
            /* -o-background-size: cover; */
            background-size:contain;
            /* width: 10000px; */
            height: 1000px;
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
<div class="container">

    <body>
        <center>
            <h1>Online Voting System</h1>

            <hr>

            <div id="bodysection">
                <form action="position_ip.php" method="POST">
                    <h2>Add new position</h2>
                    <input type="text" name="position" placeholder="Enter new position" required>

                    <button class="btn btn-outline-dark btn-rounded" name="submit" data-mdb-ripple-color="dark" id="login_button">Submit</button><br><br>

                </form>
            </div>
            <table class="table table-striped table-dark" align="center" border="1px" style="width:600px; line-height:40px;">


                <tr>
                    <thead colspan="4"><br><br><br>
                        <h2>Voting Record</h2>
                    </thead>

                    <th colspan="4">
                        <h2>Voting Record</h2>
                    </th>
                </tr>
                <th> ID </th>
                <th> Name </th>


                </tr>
        </center>

        <?php
        $query = "select * from position";
        $result = mysqli_query($connect, $query);

        while ($rows = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $rows['p_id']; ?></td>
                <td><?php echo $rows['p_name']; ?></td>

            </tr>
        <?php
        }
        ?>

        </table>

    
</div>
</body>


</html>