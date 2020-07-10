<!--HTML5 DECLARARTION-->
 <!DOCTYPE>
 <html lang="en" dir="ltr">
   <head>
     <!--all meta tags-->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
     <title>My Cart</title>
     <!--Bootstrap CSS and other CSS files-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <!--Bootstrap JS and other JS files-->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



  </head>
   <body>
     <div class="container-fluid">


       <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">


         <a class="navbar-brand" href="homepage.php"> <img src="assets/k.svg" width="120" height="120" alt=""></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav mx-auto">
                 <li class="nav-item active">
                   <h1><strong> <a class="nav-link text-light" href="homepage.php">ExpressDeals <span class="sr-only">(current)</span></a></strong>  </h1>

                 </li>

             </ul>

              <ul class="navbar-nav">
                     <li class="nav-item">
                         <a class="nav-link" href="#">
                             <img src="assets/log.png" width="30" height="30"/>
                         </a>
                     </li>




                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <img src="assets/more.png" width="30" height="30"/>
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="my_orders.php">My Orders</a>
						   <a class="dropdown-item" href="my_transactions.php">My Transactions</a>
                            <a class="dropdown-item" href="backend/logout.php">Logout</a>

                     </li>







                     <li class="nav-item">
                         <a class="nav-link" href="cart.php">
                             <img src="assets/shopping-cart.png" width="30" height="30"/>
                         </a>
                     </li>


                 </ul>



         </div>

     </nav>

   <nav class="navbar navbar-light bg-dark justify-content-between ">
     <a class="navbar-brand mx-auto text-light" href="Homepage.php"><b>Home</b></a>
   <a class="navbar-brand mx-auto text-light" href="menwear.php"><b>Men's Wear</b></a>
     <a class="navbar-brand mx-auto text-light" href="womenwear.php"><b>Women's Wear</b></a>
     <a class="navbar-brand mx-auto text-light" href="kidswear.php"><b>Kid's Wear</b></a>
     <a class="navbar-brand mx-auto text-light" href="menfootwear.php"><b>Men's FootWear</b></a>
     <a class="navbar-brand mx-auto text-light" href="womenfootwear.php"><b>Women's FootWear</b></a>

     <form class="form-inline ">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button type="submit" class="btn btn-dark">
         <img src="assets/search.png" width="30" height="30"/>
       </button>
       <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
     </form>
   </nav>
	<div class="container">

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

	if(mysqli_num_rows($res) >0) {

		//Variable to hold the grand total of the cart
		$grand_total_price = 0;


?>

			<div class="container">
				<div class="alert alert-dark" role="alert" style="margin-top: 50px">

<?php
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
			else if(strpos($temp, "kw"))
				$table = "kidswear";

			//fetch the product details
			$prod_det = $con->query("SELECT * FROM $table WHERE productId='$pid'");
			$prod = mysqli_fetch_array($prod_det);

?>



					<table>
						<tr> <td rowspan="4"> <img src = "<?php echo $prod[1]; ?>" alt="product image" height="200px" width="200px"> </td> <td> <?php echo $prod[2]; ?> </td> </tr>
						<tr> 																											   <td> Size: <?php echo $prod[4]; ?></td> </tr>
						<tr>																				  						  	   <td> Quantity: <?php echo $item[3]; ?> </td> </tr>
						<tr> 																				   						 	   <td> Total Price: <?php $grand_total_price += $item[4]; echo $item[4]; ?> </td> </tr>
					</table>
					<div class="text-right">
				<form action="backend/remove_from_cart.php" method="POST">
 					<button class="btn btn-dark" type="submit" value="<?php echo $pid; ?>" name="productId"> Remove Item </button>
 		  		</form>
				   </div>

<?php
		}
?>

		<!-- Display the Cart's Total Amount -->
		<br><br>
		<div>
			<p class="text-center"> The Grand Total for the cart is <?php echo $grand_total_price; ?> </p>
			<div class="text-center">
			<form action="select_address.php" method="POST">
 				<button class="btn btn-dark" type="submit" value="success" name="Select_address"> Select Delivery Address </button>
 		  	</form>
			</div>
		</div>
		<!-- Cart Body Closes -->
		</div>
		</div>
		</div>

<?php
	}
	else {

?>
		<!-- This is for the situation when cart is empty, then the above php/html code doesn't produce any output on page -->
		<div class="container">
				<div class="alert alert-dark text-center" role="alert" style="margin-top: 50px">
			<h5 class="text-info">The Shopping Cart Is Empty</h5>
			<br>
			<h5><a href = "homepage.php" class="text-primary"> Continue Shopping </a></h5>
		</div>
		</div>

<?php
	}
}
?>

		<div>
			<!----Footer---->
		</div>
	</div>
	</div>
	</body>
</html>
