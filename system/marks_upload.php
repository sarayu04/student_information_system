<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="heading">Please enter the marks:</div>
    <div id="form">
        <form action="marks_student.php" method="POST">
            <label>Enter the Roll Number: </label>
            <input type="text" name="rollst"><br>

            <label>Student Name: </label>
            <input type="text" name="stname"><br>

            <label>select the subject:</label>
            <select name="sub" style="width: 200px;">
                <option value="select" selected>----select the subject----</option>
                <option value="Physics">Physics</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Maths">Maths</option>
                <option value="Basic electrical">Basic Electrical</option>
                <option value="Machine learning">Machine learning</option>
                <option value="Cyber Security">Cyber Security</option>
                <option value="Operational Research">Operational Research</option>
                <option value="Project management">Project management</option>
            </select><br>
            <label>CA1 </label>
            <input type="text" name="ca1"><br>

            <label>CA2 </label>
            <input type="text" name="ca2"><br>

            <label>CA3</label>
            <input type="text" name="ca3"><br>

            <label>CA4</label>
            <input type="text" name="ca4"><br>

            <label>PCA1 </label>
            <input type="text" name="pca1"><br>

            <label>PCA2</label>
            <input type="text" name="pca2"><br><br>

            <input type="submit" id="submit" value="Upload">
            <input type="reset" id="submit" value="Reset" style="margin-left: 0px;">
        </form>
    </div>
</body>
</html>