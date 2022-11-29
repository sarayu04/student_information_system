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

$result=mysqli_query($conns,"select * from student_login where Roll_no like '%$search%'");
if(mysqli_num_rows($result)>0)
{
    ?>
    <div class="table_data">
    <table id="tab-des">
        <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Guardian Name</th>
        <th>Date of Birth</th>
        <th>Contact Number</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Blood Group</th>
        </tr>
        <?php
	while($row=mysqli_fetch_array($result))
	{
	?>
	<tr>
		<td><?php echo $row['Roll_no'];?></td>
		<td><?php echo $row['Name'];?></td>
        <td><?php echo $row['dept'];?></td>
		<td><?php echo $row['Guardian'];?></td>
		<td><?php echo $row['DOB'];?></td>
		<td><?php echo $row['contact'];?></td>		
		<td><?php echo $row['Gender'];?></td>
		<td><?php echo $row['Address'];?></td>
        <td><?php echo $row['Blood_Group'];?></td>
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