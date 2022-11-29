<?php
session_start();
?>
<link rel="stylesheet" href="css/style2.css">
<div class="heading">Attendance </div>
    <div>
        <?php
        include('includes/db_connect.php');
        $result=mysqli_query($conns,"select * from attendence where Roll_no='$_SESSION[loginid]'");

        if(mysqli_num_rows($result)!=0){
            ?>
            <table id="tab-des">
                    <tr>            
                    <th>Number of Days present</th>
                    <th>Total Number of Days</th>
                    <th>Attendance(%)</th>
                    </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
                echo "
                    <tr>
                    <td>".$row['pdays']."</td>
                    <td>".$row['totdays']."</td>
                    <td>".$row['attendence']."</td>
                    </tr> ";
                }
            }
            else{
                echo "<p class='message'>No records to show</p>";
            }
            ?>
            </table>
    </div>  
    </div>
