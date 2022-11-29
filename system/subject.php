<?php
include('includes/db_connect.php');
$sql="select * from subjects";

$result=mysqli_query($conns,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    
    <div class="heading">Please enter the details:</div>
    <div id="form">
        
        <form action="insertsub.php" method="POST">
            <label>Enter the roll no:</label>
            <input type="text" name="roll"><br>

            <label>Enter the subject code:</label>
            <select name="sub" style="width: 38%;text-align: center;font-size: 17px;" >
            <option value="----select----" selected>----select----</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select><br>

            <label>Enter the subject name:</label>
            <select name="subname" style="width: 38%;text-align: center;font-size: 17px;">
                <option value="-----select----"  selected>-----select----</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Cybersecurity">Cybersecurity</option>
                <option value="Operational Research">Operational Research</option>
                <option value="Project Managenet">Project Managenet</option>
            </select><br>

            
            <label>Enter the paper type:</label>
            <select name="type" style="width: 38%;text-align: center;font-size: 17px;">
                <option value="-----select----"  selected>----select----</option>
                <option value="Theory">Theory</option>
                <option value="Sessional">Sessional</option>
            </select><br>

            <input type="submit" id="submit" value="submit">
        </form>
    </div>
    &nbsp;
    <div id="show_sub">
        <?php
            include('includes/db_connect.php');
            $result=mysqli_query($conns,"select * from subjects");

            if(mysqli_num_rows($result)!=0)
            {
                ?>
                <table id="tab-des">
                    <tr>
                    <th>Roll no</th>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>Subject type</th>
                    </tr>
                    <?php
                     while($row=mysqli_fetch_assoc($result)){
                      echo "
                      <tr>
                        <td>".$row['Roll_no']."</td>
                        <td>".$row['subject_code']."</td>
                        <td>".$row['paper_name']."</td>
                        <td>".$row['paper_type']."</td>
                      </tr>
                      ";
                     }
                    }
                    else{
                        echo "No records to show";
                    }
                    ?>
                </table>
                
    </div>
</body>
</html>