<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>My Orders</title>
  </head>
  <body>
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light bg-danger">

          <a class="navbar-brand" href="#"> <img src="assets/k.svg" width="120" height="120" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item active">
                    <h1><strong> <a class="nav-link" href="#">ExpressDeals <span class="sr-only">(current)</span></a></strong>  </h1>
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
                            <a class="dropdown-item" href="#">My Profile</a>
                            <a class="dropdown-item" href="#">Orders</a>
                            <a class="dropdown-item" href="#">Notification</a>
                             <a class="dropdown-item" href="#">Wishlist</a>
                      </li>







                      <li class="nav-item">
                          <a class="nav-link" href="#">
                              <img src="assets/shopping-cart.png" width="30" height="30"/>
                          </a>
                      </li>


                  </ul>



          </div>

      </nav>

    <nav class="navbar navbar-light bg-danger justify-content-between ">
      <a class="navbar-brand mx-auto" href="#">Men's Wear</a>
      <a class="navbar-brand mx-auto" href="#">Women's Wear</a>
      <a class="navbar-brand mx-auto" href="#">Men's FootWear</a>
      <a class="navbar-brand mx-auto" href="#">Women's FootWear</a>
      <form class="form-inline ">
        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button type="submit" class="btn btn-dark">
          <img src="assets/search.png" width="30" height="30"/>
        </button> -->
        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
      </form>
    </nav>
	<div class="container">

<?php

session_start();
if(!isset($_SESSION["username"])) 
	header("location:login.php");
else {
	include("backend/database_connection.php");

	$u = $_SESSION["username"];
	$orders = $con->query("SELECT * from orders_log where username = '$u' ");
	if(mysqli_num_rows($orders) > 0) {
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
		<div class="alert alert-dark" role="alert" style="margin-top: 30px">	
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
		</div>

<?php
	}
	}
	else {

?>

		<br>
		<div class="alert text-info" align="center" role="alert">
      			<h4><b>You have not placed any orders till now..!</b></h4>
	  		</div>

<?php
	}
}

?>
</div>
</div>
</body>
</html>
