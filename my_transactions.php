<?php

session_start();
if(!isset($_SESSION["username"])) 
	header("location:login.php");
else {
	include("backend/database_connection.php");

	$u = $_SESSION["username"];
	$transactions = $con->query("SELECT * from transaction where username = '$u' ");
	if(mysqli_num_rows($transactions) > 0) {

?>

		<div>
			<table>
				<tr> <th> Transaction Id. </th> <th> Processed on </th> <th> Amount Paid </th> <th> Status </th> </tr>

<?php
	while($transaction = mysqli_fetch_array($transactions)) {

?>

				<tr> <td> <?php echo md5($transaction[0]); ?> </td> <td> <?php echo $transaction[3]; ?> </td> <td> <?php echo $transaction[2]; ?> </td> <td> <?php echo $transaction[4]; ?> </td></tr>	

<?php
	}
?>

			</table>
		</div>

<?php
	}
}
?>