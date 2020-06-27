<?php
//form data saved here
$n = $_POST['name'];
$u = $_POST['username'];
$e = $_POST['email'];
$m = $_POST['mobileno'];
$p = $_POST['password'];

//database connection
$hostname="127.0.0.1";
$un="root";
$pass="";
$dbname="ecommerce";

//connecting database using php
$con=new mysqli($hostname,$un,$pass,$dbname);

//create sign up table
//$user="create table Users(name varchar(50),username varchar(30) primary key,email varchar(50),mobileno int(15),password varchar(20))";
//create login table
//$login="create table login_details(username varchar(30) primary key,password varchar(20))";

$sql_u = "SELECT * FROM users WHERE username='$u'";
$res_u = mysqli_query($con,$sql_u);
if (mysqli_num_rows($res_u) > 0) 
{
header("location:signin.html");
}
else
{
//inserting values
$s1="insert into Users(name,username,email,mobileno,password) values('$n','$u','$e',$m,'$p')";
if($con->query($s1))
{
//inserting in login
 $s2="insert into login_details(username,password) values('$u','$p')";
 $con->query($s2);
 header("location:womenwear.html");
}
else
{
echo "insertion failed".$con->error;
}
}
?>
