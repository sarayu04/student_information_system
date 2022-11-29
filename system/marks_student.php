<?php
    include('includes/db_connect.php');
    $roll=$_POST['rollst'];
    $name=$_POST['stname'];
    $subject=$_POST['sub'];
    $ca1=$_POST['ca1'];
    $ca2=$_POST['ca2'];
    $ca3=$_POST['ca3'];
    $ca4=$_POST['ca4'];
    $pca1=$_POST['pca1'];
    $pca2=$_POST['pca2'];
    

    $sql="insert into marks(Roll_no,Name,subject,CA1,CA2,CA3,CA4,PCA1,PCA2) 
    values('$roll','$name','$subject','$ca1','$ca2','$ca3','$ca4','$pca1','$pca2')";

    if(mysqli_query($conns,$sql))
    {
        echo "<script>alert('Marks Uploaded');
        document.location='marks_upload.php';
        </script>
        ";
    }
    else
    {
        echo "<script>alert('Marks not Uploaded');
        document.location='marks_upload.php';
        </script>
        ";
    }
        mysqli_close($conns); 
 ?>
 
