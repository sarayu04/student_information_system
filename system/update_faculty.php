<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    
<body>
<div class="table_data">
    
    <?php
        include('includes/db_connect.php');
        $result=mysqli_query($conns,"select * from faculty_login");
        
        if(mysqli_num_rows($result)!=0)
        {
            ?>
            <table id="tab-des">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>E-mail</th>
            <th>Blood Group</th>
            <th>Qualification</th>
            <th></th>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
                echo "
                <tr>
                <td>".$row['ID']."</td>
                <td>".$row['f_name']."</td>
                <td>".$row['department']."</td>
                <td>".$row['dob']."</td>
                <td>".$row['address']."</td>
                <td>".$row['gender']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['email']."</td>
                <td>".$row['blood']."</td>
                <td>".$row['qualification']."</td>
                <td><a href='update_data_faculty.php?id=$row[ID]&nam=$row[f_name]' class='delete'>Update</td>
                </tr>
                ";
            }
        }
        else{
            echo "<script>alert('No records to update');
            document.location='update.php';
            </script>";
        }
mysqli_close($conns);
?>
</table>
</div>
</body>
</html>