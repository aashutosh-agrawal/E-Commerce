<?php
if(!isset($_POST['productId'])) 
	header("location:womenwear.php");
$pid = $_POST["productId"];

//------------------------------------------------------database connection---------------------------------------

include("database_connection.php");

//------------------------------------------------------checking the product table--------------------------------

$temp = " ".$pid;
if(strpos($temp, "ww"))
	$table = "womenwear";
else if(strpos($temp, "mw"))
	$table = "menwear";
else if(strpos($temp, "wfw"))
	$table = "womenfootwear";
else if(strpos($temp, "mfw"))
	$table = "menfootwear";
else 
	header("location:womenwear.php");

//-------------------------------------------------------fetching all the details---------------------------------

$sql_l = "SELECT * FROM $table WHERE productId='$pid'";
$res = $con->query($sql_l);
$prod = mysqli_fetch_array($res);

$image = $prod[1];
$name = $prod[2];
$price = $prod[3];
$size = $prod[4];
$quantity = $prod[5];
$description = $prod[6];

//-----------------------------------------------------Show the Details-------------------------------------------

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $name." -Item Description"; ?></title>
	</head>
	<body>
		<div class="container">
			<div style="float:left">
				<img src="<?php echo $image; ?>">
			</div>
			<div>
				<table>
					<tr> <td>Product: </td><td><?php echo $name; ?></td> </tr>
					<tr> <td>Price: </td><td><?php echo "Rs. ".$price; ?></td> </tr>
					<tr> <td>Size: </td><td><select name="size"><option value="S">S</option>
						<option value="M">M</option><option value="L">L</option></select></td> </tr>
					<tr> <td>Qunatity: </td><td><input type="number"></td> </tr>
					<tr> <td>About: </td> <td><?php echo $description; ?></td> </tr>
					<tr> <td> <button>Add to Cart </button> </td>  <td> <button> Buy Now </button> </td> </tr>
				</table>
			</div>
		</div>
	</body>
</html>