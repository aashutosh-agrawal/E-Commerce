<?php

session_start();
if(!isset($_SESSION["username"]) || !isset($_POST["remove"]))
	header("location:../womenwear.php");
else {
	$sr = $_POST["remove"];

	include("database_connection.php");

	$res = $con->query("DELETE from address where sr_no = $sr");
	header("location:../select_address.php");
}

?>