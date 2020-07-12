<?php
session_start();
if(!isset($_POST['productId'])) 
	header("location:homepage.php");
$pid = $_POST["productId"];
if(isset($_SESSION['username']))
{
	$u=$_SESSION['username'];
}
//------------------------------------------------------database connection---------------------------------------


include("backend/database_connection.php");


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
else if(strpos($temp, "kw"))
	$table = "kidswear";
else 
	header("location:homepage.php");

//-------------------------------------------------------fetching all the details---------------------------------

$sql_l = "SELECT * FROM $table WHERE productId='$pid'";
$res = $con->query($sql_l);
$prod = mysqli_fetch_array($res);

$image = $prod[1];
$name = $prod[2];
$price = $prod[3];
$size = $prod[4];
$description = $prod[5];

//-----------------------------------------------------Show the Details-------------------------------------------

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title><?php echo $name." -Item Description"; ?></title>
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

    <nav class="navbar navbar-dark bg-dark text-light justify-content-between ">
	    <a class="navbar-brand mx-auto text-light" href="homepage.php"><b>Home</b></a>
    <a class="navbar-brand mx-auto text-light" href="menwear.php"><b>Men's Wear</b></a>
      <a class="navbar-brand mx-auto text-light" href="womenwear.php"><b>Women's Wear</b></a>
      <a class="navbar-brand mx-auto text-light" href="kidswear.php"><b>Kid's Wear</b></a>
      <a class="navbar-brand mx-auto text-light" href="menfootwear.php"><b>Men's FootWear</b></a>
      <a class="navbar-brand mx-auto text-light" href="womenfootwear.php"><b>Women's FootWear</b></a>
      <form class="form-inline ">
        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button type="submit" class="btn btn-dark">
          <img src="assets/search.png" width="30" height="30"/>
        </button> -->
        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
      </form>
    </nav>


 <!-- <div class="container"> -->

    <br>
    <br>
    <div class="alert text-info" align="center" role="alert">
      <h1><b><?php echo $name; ?></b></h2>
  </div>
    

  <div class="container">
	<div class="alert alert-dark" role="alert" style="margin-top: 50px">

	<form action="backend/add_to_cart.php" method="POST">

        <p align="center">
            <a class="navbar-brand" >
              <img src="<?php echo $image; ?>" width="300" height="300" class="d-inline-block align-top" alt="" loading="lazy">
			</a>
          <p align="center"> 
          <tr> <td> Product:</td><td> <?php echo $name; ?></td></tr><br><br>
          <tr> <td>	Price:</td> <td><?php echo "Rs. ".$price; ?></td> </tr><br><br>
					<tr> <td>Size: </td><td><select name="size"><option value="s">S</option>
            <option value="m">M</option><option value="l">L</option></select></td> </tr><br><br>
			<tr> <td>Quantity: </td><td><select name="quantity"><option value="1">1</option>
						<option value="2">2</option><option value="3">3</option><option value="4">4</option>
						<option value="5">5</option><option value="6">6</option><option value="7">7</option>
						<option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td> </tr><br><br>
          <tr> <td>About: </td> <td><?php echo $description; ?></td> </tr><br><br>
		  <tr> <td> <button class="btn btn-outline-dark" type="submit" value="<?php echo $pid; ?>" name="Cart">Add to Cart</button></td> <td><button class="btn btn-outline-dark" type="submit" value="<?php echo $pid; ?>" name="Buy">Buy Now</button> </td> </tr><br><br>
		  </p>
		</p>
		</form>
    </div>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
