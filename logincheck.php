<?php
//form data saved here
$u = $_POST['username'];
$p = $_POST['password'];

//database connection
$hostname="127.0.0.1";
$un="root";
$pass="";
$dbname="ecommerce";

//connecting database using php
$con=new mysqli($hostname,$un,$pass,$dbname);
//
$sql_l = "SELECT * FROM log WHERE username='$u' and password='$p'";
$res_u = mysqli_query($con,$sql_l);
if (mysqli_num_rows($res_u) > 0) 
{
	header("location:womenwear.html");
}
else
{
 header("location:womenwear.html");
}
?>