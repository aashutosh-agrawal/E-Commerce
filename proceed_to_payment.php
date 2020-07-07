<?php

session_start();
if(!isset($_SESSION["username"]) || !isset($_POST["proceed_to_payment"]))
	header("location:womenwear.php");
else {
	include("backend/database_connection.php");

	$u = $_SESSION["username"];
	$date = date("Y-m-d h:i:sa");
	$status = "Success";
	$amount_query = $con->query("SELECT SUM(total_price) AS total from cart where username = '$u' ");
	$amount_array = mysqli_fetch_array($amount_query);
	$amount = $amount_array["total"];

	//$address_id = $_POST["address"];
	//$address_q = $con->query("SELECT * from address where sr_no = $address_id);
	//We can use the address data to store in the order log or somewhere likewise
	//But currently we don't need it. If need be, it can easily be used from here.

	$res = $con->query("INSERT into transaction(username, amount, date, status) values('$u', '$amount', '$date', '$status')");

	$res2 = $con->query("SELECT * from cart where username = '$u'");
	while($row = mysqli_fetch_array($res2)) {
		$pid = $row[2];
		$quantity = $row[3];
		$res3 = $con->query("INSERT into orders_log(username, productId, quantity, date) values('$u', '$pid', '$quantity', '$date')");
		$res4 = $con->query("DELETE from cart where username = '$u' and productId = '$pid' ");
	}
	header("location:congratulate.php");
}
?>