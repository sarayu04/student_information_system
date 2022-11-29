<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="form">
        <form action="form_data.php" method="POST">
            <label>Enter the Roll Number: </label>
            <input type="text" name="roll"><br>
            <label>Enter the student name: </label>
            <input type="text" name="name"><br>
            <label>Enter the guardian name: </label>
            <input type="text" name="gname"><br>
            <label>Enter the DOB: </label>
            <input type="text" name="dob"><br>
            <label>Enter the contact number: </label>
            <input type="text" name="contact"><br>
            <label>Enter the Gender: </label>
            <input type="text" name="gender"><br>
            <label>Enter the Address: </label>
            <input type="text" name="address"><br>
            <label>Enter the Blood Group: </label>
            <input type="text" name="blood"><br>
            <span><input type="submit" value="submit" name="submit" style="color: blue;padding: 8px;border-radius: 23%;left: 20%;position: absolute;top: 74%;font-size: 18px;"></span>
        </form>
    </div>
   
</body>
</html>