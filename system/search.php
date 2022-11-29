<?php
include('includes/db_connect.php');
$search=$_POST['search'];
echo $search;
$sql="select * from student_login where Roll_no=$search";
if(mysqli_query($conns,$sql))
{
    ?>
    <div class="table_data">
    <table>
        <tr>
        <th>Roll No</th>
        <th>Name</th>
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
?>
    </div>
