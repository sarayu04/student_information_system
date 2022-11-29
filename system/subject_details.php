<?php
session_start();
?>
<link rel="stylesheet" href="css/style2.css">
<div class="heading">subject Details</div>
    <div id="show_sub">
        <?php
            include('includes/db_connect.php');
            $result=mysqli_query($conns,"select * from subjects where Roll_no='$_SESSION[loginid]'");

            if(mysqli_num_rows($result)!=0)
            {
                ?>
                <table id="tab-des">
                    <tr>
                    
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>Subject type</th>
                    </tr>
                    <?php
                    while($row=mysqli_fetch_assoc($result)){
                        echo "
                            <tr>
                            <td>".$row['subject_code']."</td>
                            <td>".$row['paper_name']."</td>
                            <td>".$row['paper_type']."</td>
                            </tr>
                    ";
                        }
                    }
                    else{
                        echo "<p class='message'>No records to show</p>";
                    }
                    ?>
                </table>
                
    </div>
    <div>