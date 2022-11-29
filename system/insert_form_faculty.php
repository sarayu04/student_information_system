<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<div class="heading">Please enter the details:</div>
<div id="form">
        <form action="form_data_faculty.php" method="POST">
            <label>Enter the ID: </label>
            <input type="text" name="id" required><br>

            <label>Enter the faculty name: </label>
            <input type="text" name="fal_name" required><br>
            
            <label>Enter the department: </label>
            <input type="text" name="dept" required><br>

            <label>Enter the DOB: </label>
            <input type="date" name="f_dob" style="width: 170px;text-align:center;" required><br>

            <label>Enter the Address: </label>
            <input type="text" name="f_add" required><br>

            <label>Enter the Gender: </label>
            <select style="width: 178px;text-align:center;" name="f_gender" required>
                <option value="select" selected>-------select-------</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>

            <label>Enter the Phone Number: </label>
            <input type="text" name="ph" required><br>

            <label>Enter the E-mail: </label>
            <input type="text" name="mail" required><br>

            <label>Enter the Blood Group: </label>
            <select style="width: 178px;text-align:center;" name="blood" required><br>
                <option value="select" selected>-------select-------</option>
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
            <input type="text" name="qula" required><br>

            <input type="submit" id="submit" value="Insert">
            <input type="reset" id="submit" value="Reset" style="margin-left: 3px;">

            
        </form>
    </div>
</body>
</html>