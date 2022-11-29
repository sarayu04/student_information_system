<link rel="stylesheet" href="css/style2.css">
<?php
include('includes/db_connect.php');
$result=mysqli_query($conns,"select * from attendence");
if(mysqli_num_rows($result)>0){
    ?>
        <table id="tab-des">
        <tr>
        <th>Roll_no</th>
        <th>Name</th>
        <th>Department</th>
        <th>Days present</th>
        <th>Total days</th>
        <th>attendence</th>
        </tr>
        <?php
    while($row=mysqli_fetch_array($result))
    {
    ?>
    <tr>
        <td><?php echo $row['Roll_no'];?></td>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Department'];?></td>
        <td><?php echo $row['pdays'];?></td>
        <td><?php echo $row['totdays'];?></td>
        <td><?php echo $row['attendence'];?></td>  
    </tr>	
    <?php
    }
    ?>          
    </table>
    <?php
    }
    else{
        echo 'No data found';
    }
    mysqli_close($conns);
    ?>
    
