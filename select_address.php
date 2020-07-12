<!--HTML5 DECLARARTION-->
<!DOCTYPE>
  <html lang="en" dir="ltr">
    <head>
      <!--all meta tags-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Select Delivery Address</title>
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

session_start();
if(!isset($_SESSION["username"])) 
	header("location:login.php");
else {
	$u = $_SESSION["username"];
	include("backend/database_connection.php");
	$res = $con->query("SELECT * from address where username = '$u'");

?>

	<form action="backend/proceed_to_payment.php" method="POST" id="proceed">
		<!-- Not a waste Form, Do not delete this. -->
		<!-- Its Elements are below in the code using form attribute -->
	</form>

<?php
	if(mysqli_num_rows($res) > 0) {
?>

	<!-- <div class="right-panel">  -->
			<br>
			<div class="alert text-secondary" align="center" role="alert">
      			<h4><b>Your previously saved addresses are:</b></h4>
	  		</div>
			<!-- <p align="center"> Your previously saved addresses are: </p>-->
			
<?php		
		while($adr = mysqli_fetch_array($res)) {	
?>

			<!-- This prints the saved addresses if available -->
			<div class="alert alert-dark" role="alert" style="margin-top: 30px">	
			
			<input type="radio" value="<?php echo $adr[0]; ?>" name="address" form="proceed">
				<table>
				<div class="text-center">
					<tr><td>Name: </td><td><?php echo $adr[2]; ?>   </td></tr>
					<tr><td>Mobile: </td><td><?php echo $adr[3]; ?></td></tr>
					<tr><td>Pincode: </td><td><?php echo $adr[4]; ?></td></tr>
					<tr><td>Locality: </td><td><?php echo $adr[5]; ?></td></tr>
					<tr><td>Address: </td><td><?php echo $adr[6]; ?></td></tr>
					<tr><td>City: </td><td><?php echo $adr[7]; ?></td></tr>
					<tr><td>State: </td><td><?php echo $adr[8]; ?></td></tr>
		</div>
				</table>
			<form action="backend/remove_address.php" method="POST">
			<div class="text-right">
			<button class="btn btn-dark" type="submit" value="<?php echo $adr[0]; ?>" name="remove"> remove </button>
		</div>
			   </form>
		</div>
		
			

<?php 		
		}	
?>
		<!-- </div> -->
<?php
	}
?>

	<div class="alert alert-dark" role="alert" style="margin-top: 20px">
	<b><p align="center" style="font-size:30px;">Add Address</p></b>
	<div class="row">	
	<div class="col-sm-6 mx-auto" style="margin-top: 35px">
		<form action="backend/add_address.php" method="POST">
		




		<div class="form-group row">
                        <label for="name" class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input name='name' class="form-control" type="text" placeholder="Name" id="name">
                        </div>
                    </div>
			<!-- <label for="name" class="label">Name</label></br>
			<input id="name" type="text" placeholder="Name" class="user-input" name="name" required ></br> -->
			<div class="form-group row">
                        <label for="mobileno" class="col-2 col-form-label">MobileNo</label>
                        <div class="col-10">
                            <input name='mobileno' class="form-control" type="text" placeholder="Mobile No." id="mobileno" required>
                        </div>
                    </div>
			<!-- <label for="mobileno" class="label">Mobile No.</label></br>
			<input id="mobileno" type="text" placeholder="Mobile No." class="user-input" name="mobileno" required></br> -->
			<div class="form-group row">
                        <label for="pincode" class="col-2 col-form-label">Pincode</label>
                        <div class="col-10">
                            <input name='pincode' class="form-control" type="text" placeholder="Pincode" id="pincode" required>
                        </div>
                    </div>
            <!-- <label for="pincode" class="label">Pincode</label></br>
			<input id="pincode" type="text" placeholder="Pincode" class="user-input"  name="pincode" required></br> -->
			<div class="form-group row">
                        <label for="locality" class="col-2 col-form-label">Locality</label>
                        <div class="col-10">
                            <input name='locality' class="form-control" type="text" placeholder="Locality" id="locality">
                        </div>
                    </div>
			<!-- <label for="locality" class="label">Locality</label></br>
			<input id="locality" type="text" placeholder="Locality" class="user-input"  name="locality" required></br> -->
			<div class="form-group row">
                        <label for="address" class="col-2 col-form-label">Address</label>
                        <div class="col-10">
                            <input name='address' class="form-control" type="text" placeholder="Address" id="Address">
                        </div>
                    </div>
            <!-- <label for="address" class="label">Address</label></br>
			<input id="address" type="text" placeholder="Address" class="user-input" name="address" required></br> -->
			<div class="form-group row">
                        <label for="city" class="col-2 col-form-label">City</label>
                        <div class="col-10">
                            <input name='city' class="form-control" type="text" placeholder="City" id="city">
                        </div>
                    </div>
            <!-- <label for="city" class="label">City</label></br>
			<input id="city" type="text" placeholder="City" class="user-input" name="city" required></br> -->
			<div class="form-group row">
                        <label for="state" class="col-2 col-form-label">State</label>
                        <div class="col-10">
                            <input name='state' class="form-control" type="text" placeholder="State" id="state">
                        </div>
                    </div>
			<!-- <label for="state" class="label">State</label></br>
			<input id="state" type="text" placeholder="State" class="user-input" name="state" required></br> -->
			<div class="text-center">
			<button class="btn btn-dark" type="submit" value="address" name="add"> Add Address </button>	 
			</div>	
		</form>
</div>
	</div>
</div>
	<div class="alert alert-dark" role="alert" style="margin-top: 20px">
			<div class="text-center">
			<button class="btn btn-dark p-3 mb-2" type="submit" form="proceed" value="Proceed to payment" name="proceed_to_payment"> Proceed to Payment </button>
	</div>
</div>



</div>
	
<?php
}
?>
