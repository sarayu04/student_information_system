<?php
include('includes/db_connect.php');
error_reporting(0);
$rn=$_GET['rn'];
$nam=$_GET['nam'];
$dep=$_GET['dep'];
$guar=$_GET['guar'];
$dob=$_GET['dob'];
$con=$_GET['con'];
$mail=$_GET['mail'];
$gen=$_GET['gen'];
$add=$_GET['add'];
$blood=$_GET['blood'];
?>
  <div class="heading">Please enter the details:</div>
    <div id="form">
        <form action="" method="GET">
            <label>Enter the Roll Number: </label>
            <input type="text" name="ron"  value="<?php echo $rn?>" required><br>

            <label>Enter the student name: </label>
            <input type="text" name="nam" value="<?php echo $nam?>" required><br>

            <label>Enter the department: </label>
            <input type="text" name="dep" value="<?php echo $dep?>" required><br>

            <label>Enter the guardian name: </label>
            <input type="text" name="guar" value="<?php echo $guar?>" required><br>

            <label>Enter the DOB: </label>
            <input type="date" name="dob" style="width: 170px;text-align:center;" value="<?php echo $dob?>" required><br>

            <label>Enter the contact number: </label>
            <input type="text" name="con"  value="<?php echo $con?>" required><br>

            <label>Enter the E-mail: </label>
            <input type="text" name="mail" value="<?php echo $mail?>" required><br>

            <label>Enter the Gender: </label>
            <select style="width: 178px;text-align:center;" name="gen" required>
                <option value="<?php echo $gen?>" selected><?php echo $gen?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>

            <label>Enter the Address: </label>
            <input type="text" name="add" value="<?php echo $add?>" required><br>

            <label>Enter the Blood Group: </label>
            <select style="width: 178px;text-align:center;" name="blood" required><br>
                <option value="<?php echo $blood?>" selected><?php echo $blood?></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="o+">o+</option>
                <option value="o-">o-</option>
            </select>
            <input type="submit" id="submit" name="submit" value="update">
            
        </form>
    </div>
    <link rel="stylesheet" href="css/style2.css">
<?php
include('includes/db_connect.php');
if($_GET['submit']){
    $rn=$_GET['ron'];
    $nam=$_GET['nam'];
    $dep=$_GET['dep'];
    $guar=$_GET['guar'];
    $dob=$_GET['dob'];
    $con=$_GET['con'];
    $mail=$_GET['mail'];
    $gen=$_GET['gen'];
    $add=$_GET['add'];
    $blood=$_GET['blood'];

    $sql="update student_login set Roll_no='$rn',Name='$nam',dept='$dep',Guardian='$guar',
    DOB='$dob',contact='$con',email='$mail',Gender='$gen',Address='$add' ,Blood_Group='$blood'";

    $result=mysqli_query($conns,$sql);

    if($result){
        echo "<script>alert('Record updated');
                document.location='update_student.php';
        </script>";
    }
    else{
        echo "<script>alert('Record not updated');
        document.location='update_student.php';
        </script>";
    }
}
?>