<?php
session_start();
//----------------------------------------------------database connection-------------------
include("database_connection.php");


//---------------------------------------------remove assets-------------------------------------
if(isset($_POST['asset_update']))
{
$i=$_POST['id'];
	
$temp = " ".$i;
if(strpos($temp, "ww"))
	$table = "womenwear";
else if(strpos($temp, "mw"))
	$table = "menwear";
else if(strpos($temp, "wfw"))
	$table = "womenfootwear";
else if(strpos($temp, "mfw"))
	$table = "menfootwear";
else if(strpos($temp, "kw"))
	$table = "kidswear";
else
    echo "Wrong Input";


$nu=$_POST['n'];
$fu=$_FILES['file'];
$pu=$_POST['price'];
$a=$_POST['address'];
$su=$_POST['size'];
$du=$_POST['des'];


//--------------------image url-------------------------------
$fname= $fu['name'];
$fext =explode('.',$fname);
$ftype =strtolower(end($fext));

$reqtype= array('jpeg', 'jpg' , 'png');

if(in_array($ftype,$reqtype))
{
	$fileurl = 'assets/'.$fname;
	move_uploaded_file($fu['tmp_name'],'../'.$fileurl);
}


//-------------------------------update--------------------------
$de="select * from $table where productId='$i'";
	$ru=$con->query($de);
	$arr=$ru->fetch_array();
	unlink('../'.$arr[1]);
$up="UPDATE $table set image='$fileurl' where productId='$i'";
$con->query($up);
$up="UPDATE $table set name='$nu' where productId='$i'";
$con->query($up);
$up="UPDATE $table set price='$pu' where productId='$i'";
$con->query($up);
$up="UPDATE $table set size='$su' where productId='$i'";
$con->query($up);
$up="UPDATE $table set description='$du' where productId='$i'";
$con->query($up);
$_SESSION['tab']=$table;
header("location:../show_assets.php");
}
else
	echo "failed";
?>