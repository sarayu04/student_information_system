<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form action="search_faculty.php" method="get">
    <div class="search">
        <input type="text" placeholder="search by ID...." id="ser" name="search">
        <button type="submit" id="btn-ser"><i class="fa fa-search"></i></button>
    </div>
    </form>
    <div class="table_data">
        <?php
            session_start();
            include('includes/db_connect.php');
            $result=mysqli_query($conns,"select * from faculty_login");
            if(mysqli_num_rows($result)!=0){
        ?>
        <table id="tab-des">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Department</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Contact No</th>     
        <th>E-mail</th>     
        <th>Blood Group</th>     
        <th>Qualification</th>
        </tr>
        <?php
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	<tr>
		<td><?php echo $row['ID'];?></td>
		<td><?php echo $row['f_name'];?></td>
        <td><?php echo $row['department'];?></td>
		<td><?php echo $row['dob'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['gender'];?></td>		
		<td><?php echo $row['phone'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['blood'];?></td>
		<td><?php echo $row['qualification'];?></td>
        
	</tr>	
    <?php
    }
    }
    else{
        echo "<div class='message'>No records to show in faculty table</div>";
                
    }
    ?>          
    </table>
    <?php
    mysqli_close($conns);
    ?>
    </div>
</body>
</html>