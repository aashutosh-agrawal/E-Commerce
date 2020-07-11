<?php
//------------------------------------------------------database connection---------------------------------------
include("database_connection.php");

session_start();
$user=$_SESSION['username'];
$pass="select * from users where username='$user'";
$tab=$con->query($pass);
$fet=$tab->fetch_array();
//--------------------------------------------fetch values------------------------------------------------------
$u=$_POST['name'];
$em=$_POST['email'];
$mo=$_POST['mobileno'];
if(isset($_POST['c_pass']))
{
$cp=$_POST['c_pass'];
$np=$_POST['n_pass'];
$epass=md5($cp);
}
//----------------------------------------------update database-------------------------------------------

$uu="UPDATE users set name='$u' where username='$user'";
$con->query($uu);
$eu="UPDATE users set email='$em' where username='$user'";
$con->query($eu);
$mu="UPDATE users set mobileno='$mo' where username='$user'";
$con->query($mu);
if($epass==$fet[4])
{
	$npass=md5($np);
$puu="UPDATE users set password='$npass' where username='$user'";
$pul="UPDATE login_details set password='$npass' where username='$user'";
$con->query($puu);
$con->query($pul);
}
else
{
	$msg="Passwords do not match!!";
	$_SESSION['perr']=$msg;
}
header("location:../profile.php");
?>