<?php
$conns=new mysqli("localhost","root","","student_information_system");
if($conns->connect_error)
{
	die('unable to connect:'.$conns->connect_error);
}
?>