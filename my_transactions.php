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
      <title>My Transactions</title>
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



<div class="alert alert-dark text-light bg-dark" role="alert">
      <div class="container mx-auto" align="center">
   
    ExpressDealz: The Best Shopping Destination

Lifestyle
ExpressDealz, is your one-stop fashion destination for anything and everything you need to look good. Our exhaustive range of Western and Indian wear, summer and winter clothing, formal and casual footwear are sure to sweep you off your feet. Shop from crowd favourites like Vero Moda, Forever 21, Only, Arrow, among dozens of other top-of-the-ladder names. From summer staple maxi dresses, no-nonsense cigarette pants, traditional Bandhani kurtis to street-smart biker jackets, you can rely on us for a wardrobe that is up to date. Explore our in-house brands like Metronaut, Anmi, and Denizen, to name a few, for carefully curated designs that are the talk of the town. Get ready to be spoiled for choice.Festivals, office get-togethers, weddings, brunches, or nightwear - ExpressDealz will have your back each time.
 Kids
Your kids deserve only the best. From bodysuits, booties to strollers. When it comes to safety, hygiene and comfort, you can rely on us without a second thought: we host only the most-trusted names in the business for your baby.

<br>
<br>
<table>
<tr>
      <td class="text-light" align="center">
      ©2020 developed by <br>
      Aashutosh Agrawal <a href="https://in.linkedin.com/in/aashutosh-agrawal-281201191"><img src="assets/link.png" width="20" height="20" alt=""></a> <a href="https://github.com/inbornhandsome"><img src="assets/git.png" width="20" height="20" alt=""></a><br>
      Ashutosh Kumar Singh <a href="https://www.linkedin.com/in/ashutosh-kumar-singh-576b111b2/"><img src="assets/link.png" width="20" height="20" alt=""></a> <a href="https://github.com/ashutosh113"><img src="assets/git.png" width="20" height="20" alt=""></a><br>
      Avanya Wadhwa <a href="https://www.linkedin.com/in/avanya-wadhwa-07b171197"><img src="assets/link.png" width="20" height="20" alt=""></a> <a href="https://github.com/avanya080"><img src="assets/git.png" width="20" height="20" alt=""></a><br>
      Kartikeya Sharma <a href="https://www.linkedin.com/in/kartikeya-sharma-459990188"><img src="assets/link.png" width="20" height="20" alt=""></a> <a herf="https://github.com/savagecarol"><img src="assets/git.png" width="20" height="20" alt=""></a><br>
     under the guidance of Mr. Anand Kumar Srivastva
      </td>
      </tr>
      
       </table>
       </div>
</div>



</body>
</html>
