<!DOCTYPE html>
<html>
	<head>
		<title>Select An Address</title>
	</head>
	<body>

<?php

session_start();
if(!isset($_SESSION["username"])) 
	header("location:login.php");
else {
	$u = $_SESSION["username"];
	include("backend/database_connection.php");
	$res = $con->query("SELECT * from address where username = '$u'");

?>

	<form action="proceed_to_payment.php" method="POST" id="proceed">
		<!-- Not a waste Form, Do not delete this. -->
		<!-- Its Elements are below in the code using form attribute -->
	</form>

<?php
	if(mysqli_num_rows($res) > 0) {
?>

		<div>
			<p> Your previously saved addresses are: </p>
			
<?php		
		while($adr = mysqli_fetch_array($res)) {	
?>

			<!-- This prints the saved addresses if available -->

			<div>
			<input type="radio" value="<?php echo $adr[0]; ?>" name="address" form="proceed">
				<table>
					<tr><td>Name: </td><td><?php echo $adr[2]; ?></td></tr>
					<tr><td>Mobile: </td><td><?php echo $adr[3]; ?></td></tr>
					<tr><td>Pincode: </td><td><?php echo $adr[4]; ?></td></tr>
					<tr><td>Locality: </td><td><?php echo $adr[5]; ?></td></tr>
					<tr><td>Address: </td><td><?php echo $adr[6]; ?></td></tr>
					<tr><td>City: </td><td><?php echo $adr[7]; ?></td></tr>
					<tr><td>State: </td><td><?php echo $adr[8]; ?></td></tr>
				</table>
			<form action="backend/remove_address.php" method="POST">
 				<button class="btn btn-dark" type="submit" value="<?php echo $adr[0]; ?>" name="remove"> Remove Address </button>
 		  	</form>
			</div>

<?php 		
		}	
?>
		</div>
<?php
	}
?>

	<!-- To Enter Another Address which will be added to db and then page reloads with new address added-->

		<div>
			<form action="backend/add_address.php" method="POST">
			<p> Add An Address <p>
			<label for="name" class="label">Name</label></br>
			<input id="name" type="text" placeholder="Name" class="user-input" name="name" required ></br>
			<label for="mobileno" class="label">Mobile No.</label></br>
            <input id="mobileno" type="text" placeholder="Mobile No." class="user-input" name="mobileno" required></br>
            <label for="pincode" class="label">Pincode</label></br>
			<input id="pincode" type="text" placeholder="Pincode" class="user-input"  name="pincode" required></br>
			<label for="locality" class="label">Locality</label></br>
            <input id="locality" type="text" placeholder="Locality" class="user-input"  name="locality" required></br>
            <label for="address" class="label">Address</label></br>
            <input id="address" type="text" placeholder="Address" class="user-input" name="address" required></br>
            <label for="city" class="label">City</label></br>
			<input id="city" type="text" placeholder="City" class="user-input" name="city" required></br>
			<label for="state" class="label">State</label></br>
			<input id="state" type="text" placeholder="State" class="user-input" name="state" required></br>
			<button class="btn btn-dark" type="submit" value="address" name="add"> Add This Address </button>	
			</form>
		</div>

		<!-- Go to the confirmation page-->
		
		<button class="btn btn-dark" type="submit" form="proceed" value="success" name="proceed_to_payment"> Proceed To Payment </button>

<?php
}
?>