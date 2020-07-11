<?php
session_start();
//----------------------------------------------------database connection-------------------
include("database_connection.php");


//---------------------------------------------remove assets-------------------------------------
if(isset($_POST['del']))
{
$ud=$_POST['id'];
$a="select * from users where username='$ud'";
$res_a = $con->query($a);
if(mysqli_num_rows($res_a) > 0) 
{
	$delu="delete from users where username='$ud'";
	$con->query($delu);
	$msg="User has been removed";
	$_SESSION['crrm']=$msg;
	header("location:../admin_profile.php");
}
else
{
	$msg="Username Invalid";
	$_SESSION['errm']=$msg;
	header("location:../admin_profile.php");
}
$b="select * from login_details where username='$ud'";
$res_b = $con->query($b);
if(mysqli_num_rows($res_b) > 0) 
{
	$dell="delete from login_details where username='$ud'";
	$con->query($dell);
}
$c="select * from address where username='$ud'";
$res_c = $con->query($c);
if(mysqli_num_rows($res_c) > 0) 
{
	$dela="delete from address where username='$ud'";
	$con->query($dela);
}
$d="select * from orders_log where username='$ud'";
$res_d = $con->query($d);
if(mysqli_num_rows($res_d) > 0) 
{
	$delo="delete from orders_log where username='$ud'";
	$con->query($delo);
}
$e="select * from transaction where username='$ud'";
$res_e = $con->query($e);
if(mysqli_num_rows($res_e) > 0) 
{
	$delt="delete from transaction where username='$ud'";
	$con->query($delt);
}
}

?>