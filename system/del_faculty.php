<?php
include('includes/db_connect.php');
$id=$_GET['id'];

$sql="delete from faculty_login where ID='$id'";

if(mysqli_query($conns,$sql))
{
    echo "<script>alert('ID deleted');
    document.location='delete_faculty.php';
    </script>";
    }
    else
    {
        echo "<script>alert('ID not found');
        document.location='delete_faculty.php';
    </script>";
    }


mysqli_close($conns);
?>