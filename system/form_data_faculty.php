<?php
    include('includes/db_connect.php');
    $id=$_POST['id'];
    $f_name=$_POST['fal_name'];
    $dept=$_POST['dept'];
    $dob=$_POST['f_dob'];
    $address=$_POST['f_add'];
    $gender=$_POST['f_gender'];
    $contact=$_POST['ph'];  
    $mail=$_POST['mail'];
    $blood=$_POST['blood'];
    $edu=$_POST['qula'];

    $sql="insert into faculty_login(ID,f_name,department,dob,address,gender,phone,email,blood,qualification) 
    values('$id','$f_name','$dept','$dob','$address','$gender','$contact','$mail','$blood','$edu')";
   

   if(mysqli_query($conns,$sql))
   {
    echo "<script>alert('Data inserted successfully');
         document.location='insert_form_faculty.php';
        </script>";
   }
   else
   {
    echo "<script>alert('Data not inserted successfully');
            document.location='insert_form_faculty.php';
        </script>";
   }
       mysqli_close($conns); 


?>

