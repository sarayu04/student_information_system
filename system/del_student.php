
<?php
include('includes/db_connect.php');
$id=$_GET['rn'];
$sql="delete from student_login where Roll_no='$id'";

if(mysqli_query($conns,$sql))
{
    echo "<script>alert('Deleted successfully');
    document.location='delete_student.php';
</script>";

}
else
{
    echo "<script>alert('Delete not successful');
    document.location='delete_student.php';
</script>";
}
mysqli_close($conns);
?>