<?php
session_start();
//---------------------------------------------------form value----------------------------------

$c = $_POST['catg'];
$n = $_POST['n'];
$pi = $_POST['pi'];
$f = $_FILES['file'];
$p = $_POST['price'];
$s = $_POST['size'];
$q = $_POST['quanty'];
$d = $_POST['des'];
 

//---------------------------------------Extracting file type---------------------------------------
$fname= $f['name'];
$fext =explode('.',$fname);
$ftype =strtolower(end($fext));

$reqtype= array('jpeg', 'jpg' , 'png');

if(in_array($ftype,$reqtype))
{
	$fileurl = '../assets/'.$fname;
	move_uploaded_file($f['tmp_name'],$fileurl);
}	



//-----------------------------------------database connect------------------------------------------

include("database_connection.php");
//-----------------------------------------upload on database------------------------------------ 
$save= "insert into $c values('$pi','$fileurl','$n','$p','$s','$q','$d')";

if($con->query($save))
{
	$_SESSION['category']=$c;
	header("location:../show_assets.php");
}
else
{
	echo "insertion failed".$con->error;
}


?>