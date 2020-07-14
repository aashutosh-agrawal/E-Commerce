<?php
//-----------------------------------------------database connection---------------------------------------
$hostname=$_ENV["HOSTNAME"];
$un=$_ENV["USERNAME"];
$pass=$_ENV["PASSWORD"];
$dbname=$_ENV["DBNAME"];

//----------------------------------------connecting database using php----------------------------------------
$con=new mysqli($hostname,$un,$pass,$dbname);
?>
