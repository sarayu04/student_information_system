<?php
    include('includes/db_connect.php');
    $roll=$_POST['roll'];
    $name=$_POST['name'];
    $gname=$_POST['gname'];
    $dob=$_POST['dob'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $blood=$_POST['blood'];
/* 
    $sql="insert into student_login('Roll_no','Name','Guardian','DOB','contact','Gender','Address','Blood_Group')
    values('$roll','$name','$gname',''$dob','$contact','$gender','$address','$blood')";*/

    $sql="INSERT INTO student_login('Roll_no','Name','Guardian','DOB','contact','Gender','Address','Blood_Group')
    values('$roll','$name','$gname',''$dob','$contact','$gender','$address','$blood')";
	if($conns->query($sql)==true)
	{
        echo'data entered successfully';
    }
    else
    {
        echo'data not entered successfully';
    }
        mysqli_close($conns); 
    ?>