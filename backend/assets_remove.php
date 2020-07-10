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
	$del="delete from $cat where productId='$co[$i]'";
	$con->query($del);
	echo "deleted";
}
}
header("location:../show_assets.php");
?>