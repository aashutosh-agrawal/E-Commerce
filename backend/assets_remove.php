<?php
session_start();
//----------------------------------------------------database connection-------------------
include("database_connection.php");


//---------------------------------------------remove assets-------------------------------------
if(isset($_POST['remove']))
{
$co=$_POST['rev'];
$cat=$_SESSION['category'];
for($i=0;$i<count($co);$i++)
{
	$de="select *from $cat where productId='$co[$i]'";
	$ru=$con->query($de);
	$arr=$ru->fetch_array();
	unlink('../'.$arr[1]);
	$del="delete from $cat where productId='$co[$i]'";
	$con->query($del);
	echo "deleted";
}
}
$_SESSION['category']=$cat;
header("location:../show_assets.php");
?>