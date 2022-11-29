<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form action="search_student.php" method="get">
    <div class="search">
        <input type="text" placeholder="search by roll no...." id="ser" name="search">
        <button type="submit" id="btn-ser"><i class="fa fa-search"></i></button>      
    </div>
    </form>

    <div class="table_data">
        <?php
            include('includes/db_connect.php');
            $result=mysqli_query($conns,"select * from student_login");
            if(mysqli_num_rows($result)!=0){
        ?>
        <table id="tab-des">
        <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Guardian Name</th>
        <th>Date of Birth</th>
        <th>Contact Number</th>
        <th>E-mail</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Blood Group</th>
        </tr>
        <?php
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	<tr>
		<td><?php echo $row['Roll_no'];?></td>
		<td><?php echo $row['Name'];?></td>
        <td><?php echo $row['dept'];?></td>
		<td><?php echo $row['Guardian'];?></td>
		<td><?php echo $row['DOB'];?></td>
		<td><?php echo $row['contact'];?></td>		
        <td><?php echo $row['email'];?></td>		
		<td><?php echo $row['Gender'];?></td>
		<td><?php echo $row['Address'];?></td>
        <td><?php echo $row['Blood_Group'];?></td>
	</tr>	
    <?php
    }
    }
    else{
        echo "<div class='message'>No records to show in student table</div>";
    }
    ?>          
    </table>
    <?php
    mysqli_close($conns);
    ?>
    </div>
</body>
</html>