<!DOCTYPE html>
<html>
	<head>
		<title>Your Cart</title>
	</head>
	<body>
		<div>
			<!----Header---->
		</div>

		<div>
			<!-- Cart Body Starts Here -->


<?php

session_start();
if(!isset($_SESSION["username"])) {
	header("location:login.php");
}
else {
	include("backend/database_connection.php");
	$u = $_SESSION["username"];
	$res = $con->query("SELECT * from cart where username = '$u'");

	if(mysqli_num_rows($res) > 0) {

		//Variable to hold the grand total of the cart
		$grand_total_price = 0;

		while($item = mysqli_fetch_array($res)) {
			$pid = $item[2];
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

?>

			<div>
				<div>
					<table>
						<tr> <td rowspan="4"> <img src = "<?php echo $prod[1]; ?>" alt="product image" height="200px" width="200px"> </td> <td> <?php echo $prod[2]; ?> </td> </tr>
						<tr> 																											   <td> Size: <?php echo $prod[4]; ?> </td> </tr>
						<tr>																				  						  	   <td> Quantity: <?php echo $item[3]; ?> </td> </tr>
						<tr> 																				   						 	   <td> Total Price: <?php $grand_total_price += $item[4]; echo $item[4]; ?> </td> </tr>
					</table>
				</div>
				<form action="backend/remove_from_cart.php" method="POST">
 					<button class="btn btn-dark" type="submit" value="<?php echo $pid; ?>" name="productId"> Remove Item </button>
 		  		</form>
			</div>

<?php
		}
?>

		<!-- Cart Body Closes -->
		</div>
		<!-- Display the Cart's Total Amount -->
		<div>
			<p> The Grand Total for the cart is <?php echo $grand_total_price; ?> </p>
			<form action="select_address.php" method="POST">
 				<button class="btn btn-dark" type="submit" value="success" name="Select_address"> Select Address </button>
 		  	</form>
		</div>
<?php 	
	}
	else {

?>
		<!-- This is for the situation when cart is empty, then the above php/html code doesn't produce any output on page -->
		<div>
			<p> The Shopping Cart Is Empty </p>
			<a href = "womenwear.php"> Continue Shopping </a>
		</div>

<?php
	}
}
?>		

		<div>
			<!----Footer---->
		</div>
	</body>
</html>
