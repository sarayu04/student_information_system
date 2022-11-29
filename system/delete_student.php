<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="table_data">
    
        <?php
            include('includes/db_connect.php');
            $result=mysqli_query($conns,"select * from student_login");
            
            if(mysqli_num_rows($result)!=0)
            {
                ?>
                <table id="tab-des">
                <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Department</th>
                <th>Guardian Name</th>
                <th>DOB</th>
                <th>Contact No</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Blood Group</th>
                <th></th>
                </tr>
                <?php
                while($row=mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                    <td>".$row['Roll_no']."</td>
                    <td>".$row['Name']."</td>
                    <td>".$row['dept']."</td>
                    <td>".$row['Guardian']."</td>
                    <td>".$row['DOB']."</td>
                    <td>".$row['contact']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['Gender']."</td>
                    <td>".$row['Address']."</td>
                    <td>".$row['Blood_Group']."</td>
                    <td><a href='del_student.php?rn=$row[Roll_no]' class='delete'>Delete</td>
                    </tr>
                    ";
                }
            }
            else{
                echo "<script>alert('No records to delete');
                document.location='delete.php';
                </script>";
            }
    mysqli_close($conns);
	?>
    </table>
	</div>

</body>
</html>
