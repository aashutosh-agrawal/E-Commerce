<?php

session_start();
if(!isset($_SESSION["username"])) 
	header("location:login.php");
else {
	include("backend/database_connection.php");

	$u = $_SESSION["username"];
	$orders = $con->query("SELECT * from orders_log where username = '$u' ");
	while($order = mysqli_fetch_array($orders)) {
		$pid = $order[2];
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

		<!-- This prints all the orders done by the user -->
		<div>
			<table>
				<tr> <td rowspan="4"> <img src = "<?php echo $prod[1]; ?>" alt="image" height="100" width="100"> </td> <td> <?php echo $prod[2]; ?> </td> </tr>
				<tr> 																									<td> Size: <?php echo $prod[4]; ?> </td> </tr>
				<tr>																				  					<td> Quantity: <?php echo $order[3]; ?> </td> </tr>
				<tr> 																				   					<td> Total Price: <?php echo $order[3]*$prod[3]; ?> </td> </tr>
				<tr> <td> Order Placed On: </td> 																<td> <?php echo $order[4]; ?> </td> </tr>
			</table>
		</div>

<?php
	}
}

?>