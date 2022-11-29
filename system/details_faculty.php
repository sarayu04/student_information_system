<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <?php
        include('includes/db_connect.php');
        $result=mysqli_query($conns,"select * from faculty_login where ID='$_SESSION[loginidfac]'")
        ?>
         <table id="tab-des">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Department</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Contact Number</th>     
        <th>qualification</th>
        </tr>
        
        <?php
	while($row=mysqli_fetch_array($result))
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
		<td><?php echo $row['qualification'];?></td>
        
	</tr>	
    <?php
    }
    ?>          
    </table>
    <?php
    mysqli_close($conns);
    ?>
</body>
</html>