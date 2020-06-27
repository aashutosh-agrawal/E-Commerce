<?php
//form data saved here
$n = $_POST['name'];
$u = $_POST['username'];
$m = $_POST['mobno'];
$e = $_POST['email'];
$p = $_POST['password'];

//database connection
$hostname="127.0.0.1";
$un="root";
$pass="";
$dbname="ecommerce";

//connecting database using php
$con=new mysqli($hostname,$un,$pass,$dbname);

//create sign up table
//$user="create table Users(name varchar(40),username varchar(10) primary key,email varchar(25),mobno int(10),password varchar(30))";
//create login table
//$login="create table log(username varchar(10) primary key,password varchar(30))";

$sql_u = "SELECT * FROM users WHERE username='$u'";
$res_u = mysqli_query($con,$sql_u);
if (mysqli_num_rows($res_u) > 0) 
{
header("location:signin.html");
}
else
{
//inserting values
$s1="insert into Users(name,username,email,mobno,password) values('$n','$u','$e',$m,'$p')";
if($con->query($s1))
{
//inserting in login
 $s2="insert into log(username,password) values('$u','$p')";
 $con->query($s2);
 header("location:womenwear.html");
}
else
{
echo "insertion failed".$con->error;
}
}
?>