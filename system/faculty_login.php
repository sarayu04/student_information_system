<?php

include('includes/db_connect.php');
 session_start();

$result=mysqli_query($conns,"select * from faculty_login where ID='$_POST[facultyid]' AND phone='$_POST[facultypass]'");
 $_SESSION['loginidfac']=$_POST['facultyid'];


$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1)
{
    header("Location:frame_faculty.php");
    
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
