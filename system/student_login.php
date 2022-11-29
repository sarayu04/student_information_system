<?php


include('includes/db_connect.php');
 session_start();

$result=mysqli_query($conns,"select * from student_login where Roll_no='$_POST[uname]' AND contact='$_POST[passw]'");
 $_SESSION['loginid']=$_POST['uname'];


$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1)
{
    header("Location:frame_student.php");
    
}
else
{
    echo "<script>
        alert('Invalid username and password');
        document.location='index.php';
    </script>";
}

?>    


