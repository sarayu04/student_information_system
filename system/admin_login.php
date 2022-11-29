<?php
include('includes/db_connect.php');
$result=mysqli_query($conns,"select * from admin where userid='$_POST[adminid]' AND password='$_POST[adminpass]'");

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1)
{
    header("Location:frame_admin.php");
}
else
{
    echo "<script>
    alert('Invalid username and password');
    document.location='index.php';
</script>";
}
mysqli_close($conns);
?>    
