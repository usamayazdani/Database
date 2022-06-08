<!-- <table align="center" border="1px" style="width:600px; line-height:40px;" > 
	<tr> 
		<th colspan="4"><h4>Candidate</h4></th> 
		</tr> 
			  
               <th>Id </th>
			  <th> Name </th>  
              <th> party </th>

			  
			  
		</tr> 
		
		<?php 
        require('connect.php');
        // $query="select c.id,c.candidatename,c.candidateposition from candidate c inner join voter v on c.candidateposition=v.voter_position"; 
        $query=" select *   from candidate c inner join voter_cast p on p.p_id=c.p_id;";
        // $query = "SELECT  * FROM candidate";
        $result=mysqli_query($connect,$query); 
        // if (!$check1_res) {
        //     printf("Error: %s\n", mysqli_error($connect));
        //     exit();
        // }
        // session_start();
        // $_SESSION["name"] = null;
        // $_SESSION["id"]=null;
        while($rows=mysqli_fetch_array($result)) 
		{ 
		   ?>

		<tr>
            <td ><?php echo $rows['c_id'];?> </td> 
            <td id="name" value="<?php echo $rows['c_name']; ?>" name='candidatename'><?php echo $rows['c_name']; ?></td> 
            <td id="position" value="<?php echo $rows['p_id']; ?>" name='p_id'><?php echo $rows['p_id']; ?></h5></td> 
		<td> <button class="button button3"  name="btn"><a href="voter_ip.php?id=<?php echo $rows['id'];?>">Voted</button>
        <!-- onclick="<?php echo "onlcick"; $_SESSION["name"] = $rows['id']; ?>"  -->
           
</td>
		<!-- </tr> -->
        <!-- <?php  -->
               } 
          ?>  -->