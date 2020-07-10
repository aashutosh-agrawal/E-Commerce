<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>My Transactions</title>
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
	<div class="container">


<?php

session_start();
if(!isset($_SESSION["username"])) 
	header("location:login.php");
else {
	include("backend/database_connection.php");

	$u = $_SESSION["username"];
	$transactions = $con->query("SELECT * from transaction where username = '$u' ");
	if(mysqli_num_rows($transactions) > 0) {
		$sr = 0;

?>

		<div class="alert alert-dark" role="alert" style="margin-top: 30px">	
			<table>
				<tr> <th> Sr. No. </th> <td>&nbsp; &nbsp;&nbsp; &nbsp;</td> <th> Transaction Id. </th> <td>&nbsp; &nbsp;&nbsp; &nbsp;</td> <th> Processed on </th> <td>&nbsp; &nbsp;&nbsp; &nbsp;</td> <th> Amount Paid </th> <td>&nbsp; &nbsp;&nbsp; &nbsp;</td> <th> Status </th> </tr>

<?php
	while($transaction = mysqli_fetch_array($transactions)) {
		$sr ++;

?>

				<tr> <td> <?php echo $sr; ?> </td> <td>&nbsp; &nbsp;&nbsp; &nbsp;</td> <td> <?php echo md5($transaction[0]); ?> </td> <td>&nbsp; &nbsp;&nbsp; &nbsp;</td> <td> <?php echo $transaction[3]; ?> </td> <td>&nbsp; &nbsp;&nbsp; &nbsp;</td> <td> <?php echo $transaction[2]; ?> </td> <td>&nbsp; &nbsp;&nbsp; &nbsp;</td> <td> <?php echo $transaction[4]; ?> </td></tr>	

<?php
	}
?>

			</table>
		</div>

<?php
	}
	else {
?>
		<br>
		<div class="alert text-info" align="center" role="alert">
      			<h4><b>You have not done any transaction..!</b></h4>
	  		</div>

<?php
	}
}
?>

</div>
</div>
</body>
</html>
