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
$search=$_GET['search'];

$result=mysqli_query($conns,"select * from faculty_login where ID like '%$search%'");
if(mysqli_num_rows($result)>0)
{
    ?>
    <div class="table_data">
    <table id="tab-des">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Department</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Contact Number</th>    
        <th>E-mail</th>     
        <th>Blood Group</th>   
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
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['blood'];?></td>
		<td><?php echo $row['qualification'];?></td>
	</tr>	
    <?php
    }
    ?>          
    </table>
<?php
}
else{
    echo $search.' is not found';
}
mysqli_close($conns);
?>
    </div>

<input type="button" id="back" onclick="history.back()" value="Go Back">
</body>
</html>