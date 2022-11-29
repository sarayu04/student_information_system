<link rel="stylesheet" href="css/style2.css">
<?php
include('includes/db_connect.php');
$result=mysqli_query($conns,"select * from marks");
if(mysqli_num_rows($result)>0){
?>
    <table id="tab-des">
    <tr>
    <th>Roll no</th>
    <th>Name</th>
    <th>Subject</th>
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
    <td><?php echo $row['Roll_no'];?></td>
    <td><?php echo $row['Name'];?></td>
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
}
else{
    echo "<div class='message'>No records to show</div>";
}
mysqli_close($conns);
?>

