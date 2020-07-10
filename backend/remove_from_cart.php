<?php

session_start();
if(!isset($_SESSION["username"]))
	header("location:../login.php");
else {
	$u = $_SESSION["username"];
	$pid = $_POST["productId"];
	include("database_connection.php");
	$res = $con->query("DELETE from cart where username = '$u' and productId = '$pid' ");
	header("location:../cart.php");
}

?>