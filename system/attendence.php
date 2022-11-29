<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style2.css">
</head>
<body>
<div class="heading">Please enter the attendence details:</div>
    <div id="form">
        <form action="insert_att.php" name="attend" method="POST">
            <label>Enter the Roll Number: </label>
            <input type="text" name="roll"><br>

            <label>Enter the student name: </label>
            <input type="text" name="st_name"><br>

            <label>Enter the Department: </label>
            <input type="text" name="dept"><br>

            <label>Number of days present: </label>
            <input type="text" name="pres"><br>

            <label>Total number of days: </label>
            <input type="text" name="tot" >
            <input type="button" value="Calculate" style="display:inline;margin-left:12px" onclick="show()" ><br>

            
            <label>Attendence </label>
            <input type="text" name="atten" readonly><br>

            <input type="submit" id="submit" value="submit">
            <input type="reset" id="submit" value="Reset" style="margin-left: 0px;">
        </form>
    </div>
<script>


function show(){
    let x=document.forms["attend"]["pres"].value;
    let y=document.forms["attend"]["tot"].value;

    let k=(x*100)/y;

    
    document.forms["attend"]["atten"].value=k+'%';

}
</script>   
</body>
</html>