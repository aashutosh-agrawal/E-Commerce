<?php

session_start();

if(!isset($_SESSION["username"]))
	header("location:../login.php");
else {

	if(isset($_POST["Cart"])) 
		$pid = $_POST["Cart"];
	else 
		$pid = $_POST["Buy"];

	$u = $_SESSION["username"];
	$quantity = $_POST["quantity"];
	$size = $_POST["size"];
	$pid[strlen($pid) - 1] = $size;

	include("database_connection.php");

	//figure out product table
	$temp = " ".$pid;
	if(strpos($temp, "ww"))
		$table = "womenwear";
	else if(strpos($temp, "mw"))
		$table = "menwear";
	else if(strpos($temp, "wfw"))
		$table = "womenfootwear";
	else if(strpos($temp, "mfw"))
		$table = "menfootwear";

	//fetch the product details
	$prod_det = $con->query("SELECT * FROM $table WHERE productId='$pid'");
	$prod = mysqli_fetch_array($prod_det);

	$price = $prod[3];

	$duplicate = $con->query("SELECT * FROM cart where username = '$u' and productId = '$pid' ");

	if (mysqli_num_rows($duplicate) > 0) {
		$old = mysqli_fetch_array($duplicate);
		$new_quantity = $old[3] + $quantity;
		$new_price = $new_quantity * $price;
		$update = $con->query("UPDATE cart SET quantity = '$new_quantity', total_price = $new_price where username = '$u' and productId = '$pid' ");
	}
	else {
		$total_price = $quantity * $price;
		$insert = $con->query("INSERT INTO cart(username, productId, quantity, total_price) values('$u', '$pid', '$quantity', $total_price)");
	}

	if(isset($_POST["Cart"])) {
		header("location:../womenwear.php");
		console.log("Added to Cart");
	}
	else {
		header("location:../cart.php");
	}
}
?>