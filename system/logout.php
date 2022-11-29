<?php
session_start();
session_destroy();

header("location: index.php");
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style rel="stylesheet" href="css/style2.css"></style>
</head>
<body>
    <a href="index.php" target="page_full"><input type="button" id="back" value="Home Page"></a>
</body>
</html> -->