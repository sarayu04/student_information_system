<?php
include('includes/db_connect.php');
error_reporting(0);

$id=$_GET['id'];
$nam=$_GET['nam'];
$dep=$_GET['dep'];
$dob=$_GET['dobo'];
$address=$_GET['address'];
$gender=$_GET['gender'];
$con=$_GET['con'];
$mail=$_GET['mail'];
$blood=$_GET['blood'];
$qualification=$_GET['qualification'];


?>

<div class="heading">Please enter the details:</div>
<div id="form">
        <form action="" method="GET">
            <label>Enter the ID: </label>
            <input type="text" name="id" value="<?php echo $id?>" required><br>

            <label>Enter the faculty name: </label>
            <input type="text" name="nam" value="<?php echo $nam?>" required><br>
            
            <label>Enter the department: </label>
            <input type="text" name="dep" value="<?php echo $dep?>" required><br>

            <label>Enter the DOB: </label>
            <input type="date" name="dob" value="<?php echo $dob?>" style="width: 170px;text-align:center;"  required><br>

            <label>Enter the Address: </label>
            <input type="text" name="address" value="<?php echo $address?>" required><br>

            <label>Enter the Gender: </label>
            <select style="width: 178px;text-align:center;" name="gender" required>
                <option value="<?php echo $gender?>" selected><?php echo $gender?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>

            <label>Enter the Phone Number: </label>
            <input type="text" name="con" value="<?php echo $con?>" required><br>

            <label>Enter the E-mail: </label>
            <input type="text" name="mail" value="<?php echo $mail?>" required><br>

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
            </select><br>

            <label>Enter the Qualification: </label>
            <input type="text" name="qualification"  value="<?php echo $qualification?>" required><br>

            <input type="submit" id="submit" name="submit" value="Update">
            <input type="reset" id="submit" value="Reset" style="margin-left: 3px;">

            
        </form>
    </div>
<link rel="stylesheet" href="css/style2.css">