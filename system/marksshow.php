<link rel="stylesheet" href="css/style2.css">

<?php
include('includes/db_connect.php');
session_start();
$result=mysqli_query($conns,"select * from marks where Roll_no='$_SESSION[loginid]'");
?>
  <table id="tab-des">
        <tr> 
        <th>Subjects</th>
        <th>CA1</th>
        <th>CA2</th>
        <th>CA3</th>
        <th>CA4</th>
        <th>PCA1</th>
        <th>PCA2</th>
        </tr>
        
        <?php
	while($row=mysqli_fetch_array($result))
	{
	?>
	<tr>
    <td><?php echo $row['subject'];?></td>
		<td><?php echo $row['CA1'];?></td>
		<td><?php echo $row['CA2'];?></td>
		<td><?php echo $row['CA3'];?></td>		
		<td><?php echo $row['CA4'];?></td>
		<td><?php echo $row['PCA1'];?></td>
    <td><?php echo $row['PCA2'];?></td>
	</tr>	
    <?php
    }
    ?>          
    </table>
    <?php
    mysqli_close($conns);
    ?>
