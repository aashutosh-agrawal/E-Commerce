<?php

session_start();
if(!isset($_SESSION["username"]) || !isset($_POST["add"]))
	header("location:../womenwear.php");
else {
	$u = $_SESSION["username"];
	$n = $_POST["name"];
	$m = $_POST["mobileno"];
	$p = $_POST["pincode"];
	$l = $_POST["locality"];
	$a = $_POST["address"];
	$c = $_POST["city"];
	$s = $_POST["state"];

	include("database_connection.php");

	$res = $con->query("INSERT into address(username, name, mobileno, pincode, locality, address, city, state) values('$u', '$n', '$m', '$p', '$l', '$a', '$c', '$s')");
	header("location:../select_address.php");
}

?>