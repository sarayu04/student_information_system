<?php
include('includes/db_connect.php');
$roll=$_POST['roll'];
$name=$_POST['st_name'];
$dept=$_POST['dept'];
$pdays=$_POST['pres'];
$tdays=$_POST['tot'];
$atten=$_POST['atten'];

$result=mysqli_query($conns,"insert into attendence(Roll_no,Name,Department,pdays,totdays,attendence)
            values('$roll','$name','$dept','$pdays','$tdays','$atten')");

if($result)
{
    echo'data entered successfully';
?>
<div><button onclick="history.back()">go back</button></div>
<?php
}
else
{
   echo'data not entered successfully';
}
mysqli_close($conns);          
?>