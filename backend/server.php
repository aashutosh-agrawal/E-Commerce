<?php
session_start();
if(!isset($_POST['checkreg']))
{
	header("location:../signin.php");
}
else {

//---------------------------------form data saved here---------------------------
$n = $_POST['name'];
$u = $_POST['username'];
$e = $_POST['email'];
$m = $_POST['mobileno'];
$p = $_POST['password'];

//----------------------------------------------------database connection-------------------
include("database_connection.php");

//----------------------------------------create sign up table--------------------------------
//$user="create table Users(name varchar(50),username varchar(30) primary key,email varchar(50),mobileno varchar(15),password varchar(50))";
//$con->query($user);
//-------------------------------------------create login table------------------------------
//$login="create table login_details(username varchar(30) primary key, password varchar(50));";
//$con->query($login);


//---------------------------------------------existing user checking------------------------------
$sql_u = "SELECT * FROM users WHERE username='$u'";
$res_u = $con->query($sql_u);
if (mysqli_num_rows($res_u) > 0) 
{
	$msg="Username already taken!!";
	$_SESSION['err']=$msg;
	header("location:../signin.php");
}
else
{
//---------------------------------------encrypting password------------------------------------
$ep = md5($p);
//----------------------------------------inserting values---------------------------------------
$s1="insert into users(name,username,email,mobileno,password) values('$n','$u','$e','$m','$ep')";
if($con->query($s1))
{
//---------------------------------------------inserting in login-----------------------------------------
 $s2="insert into login_details(username,password) values('$u','$ep')";
 $con->query($s2);
 $_SESSION['username']=$u;
 header("location:../homepage.php");
}
else
{
echo "insertion failed".$con->error;
}
}
}
?>
