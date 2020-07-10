<?php
session_start();
if(!isset($_POST['checkl']))
	header("location:../login.php");
//-------------------------------------------------------form data saved here--------------------------
$u = $_POST['username'];
$p = $_POST['password'];

//------------------------------------------------------database connection---------------------------------------
include("database_connection.php");

//--------------------------------------------checking--------------------------------------------
$ep = md5($p);
$sql_l = "SELECT * FROM login_details WHERE username='$u' and password='$ep'";
$res_u = $con->query($sql_l);
if(mysqli_num_rows($res_u) > 0) 
{
	$_SESSION['username']=$u;
	header("location:../womenwear.php");
}
else
{
	$msg="Username or password is Invalid";
	$_SESSION['error']=$msg;
	header("location:../login.php");
}
?>