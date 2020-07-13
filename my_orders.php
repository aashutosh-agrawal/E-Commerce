<?php

session_start();
if(!isset($_SESSION["username"])) 
	header("location:login.php");
else {
	include("backend/database_connection.php");

	$u = $_SESSION["username"];
?>
<!--HTML5 DECLARARTION-->
  <!DOCTYPE>
  <html lang="en" dir="ltr">
    <head>
      <!--all meta tags-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>My Orders</title>
      <!--Bootstrap CSS and other CSS files-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--Bootstrap JS and other JS files-->
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



   </head>
    <body>
      <div class="container-fluid">


        <nav class="navbar navbar-expand-lg navbar-light bg-dark">


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
                          <a class="nav-link" href="<?php if(!isset($_SESSION['username'])){ echo 'login.php';} else if($u=='admin'){ echo 'admin_profile.php';} else{ echo 'profile.php';}?>">
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
      <a class="navbar-brand mx-auto text-light" href="homepage.php"><b>Home</b></a>
    <a class="navbar-brand mx-auto text-light" href="menwear.php"><b>Men's Wear</b></a>
      <a class="navbar-brand mx-auto text-light" href="womenwear.php"><b>Women's Wear</b></a>
      <a class="navbar-brand mx-auto text-light" href="kidswear.php"><b>Kid's Wear</b></a>
      <a class="navbar-brand mx-auto text-light" href="menfootwear.php"><b>Men's FootWear</b></a>
      <a class="navbar-brand mx-auto text-light" href="womenfootwear.php"><b>Women's FootWear</b></a>

    </nav>
	<div class="container">

<?php
	if(!isset($_GET['page'])) {$page=1;}
		else {$page= $_GET['page'];}

		$lowerlimit= ($page-1)*10;
		$noofrow= 10;
	$orders = $con->query("SELECT * from orders_log where username = '$u' limit $lowerlimit,$noofrow");
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
		else if(strpos($temp, "kw"))
			$table = "kidswear";

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
	$s2= "select * from orders_log where username='$u'";
		   $result1= $con->query($s2);
           $page = ceil($result1->num_rows/$noofrow);
?>
<center>
<?php		   
		   for($i=1;$i<=$page;$i++)
		   { ?>
	      <a href= "my_orders.php?page=<?php echo $i; ?>"><?php echo $i;?> </a>
		  <?php
	}
	}
	else {

?></center>

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
