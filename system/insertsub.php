<?php
include('includes/db_connect.php');

$roll=$_POST['roll'];
$sub=$_POST['sub'];
$subname=$_POST['subname'];
$type=$_POST['type'];

$result=mysqli_query($conns,"insert into subjects (Roll_no,subject_code,paper_name,paper_type)values ('$roll','$sub','$subname','$type')");

if($result)
   {
    echo "<script>alert('Data inserted successfully');
        document.location='subject.php';
        </script>";
   }
   else
   {
    echo "<script>alert('Data not inserted successfully');
    document.location='subject.php';
    </script>";
   }
       mysqli_close($conns); 
?>