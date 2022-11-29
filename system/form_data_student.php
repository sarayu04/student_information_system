<?php
    include('includes/db_connect.php');
    $roll=$_POST['roll'];
    $st_name=$_POST['st_name'];
    $dept=$_POST['dept'];
    $gname=$_POST['gname'];
    $dob=$_POST['dob'];
    $contact=$_POST['contact'];
    $email=$_POST['mail'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $blood=$_POST['blood'];

    $sql="insert into student_login(Roll_no,Name,dept,Guardian,DOB,contact,email,Gender,Address,Blood_Group) 
    values('$roll','$st_name','$dept','$gname','$dob','$contact','$email','$gender','$address','$blood')";

   if(mysqli_query($conns,$sql))
   {
    echo "<script>alert('Data inserted successfully');
        document.location='insert_form_student.php';
        </script>";
   }
   else
   {
    echo "<script>alert('Data not inserted successfully');
    document.location='insert_form_student.php';
    </script>";
   }
       mysqli_close($conns); 
?>
