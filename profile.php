<?php
//---------------------------------------database connection-----------------------------
include("backend/database_connection.php");

session_start();
if(!isset($_SESSION['username']))
{
	header("location:login.php");
}
$s=$_SESSION['username'];
$ut="select * from users where username='$s'";
$aut=$con->query($ut);

?>
<!--HTML5 DECLARARTION-->
 <!DOCTYPE>
 <html lang="en" dir="ltr">
   <head>
     <!--all meta tags-->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1 shrink-to-fit=no">
     <title>Home Page</title>
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

         <a class="navbar-brand" href="#"> <img src="assets/k.svg" width="120" height="120" alt=""></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav mx-auto">
                 <li class="nav-item active">
                   <h1><strong> <a class="nav-link text-light" href="#">ExpressDeals <span class="sr-only">(current)</span></a></strong>  </h1>
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
                            <a class="dropdown-item" href="#">Logout</a>
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
	 <br>
	 <br>

	 <div class="container">


	                     <div>
                        <form action="backend/profile_edit.php" method="POST">
						<?php
						$r = $aut->fetch_array();
						?>
						<label for="name" class="label">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="name" type="text" value="<?php echo $r[0]; ?>" class="user-input" name="name" required ></br>
                            <label for="email" class="label">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="email" type="email" value="<?php echo $r[2]; ?>" class="user-input"  name="email" required></br>
                            <label for="mobileno" class="label">Mobile No.</label>&nbsp;&nbsp;&nbsp;&nbsp;
							<input id="mobileno" type="text" value="<?php echo $r[3]; ?>" class="user-input" name="mobileno" required></br>
							<label for="name" class="label">Enter current Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="name" type="text" class="user-input" name="c_pass"></br>
							<label for="name" class="label">Enter New Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="name" type="text" class="user-input" name="n_pass"></br>
							<p style="color:red;"><?php
									   if(isset($_SESSION['perr']))
									   {
										echo $_SESSION['perr'];
									    session_destroy();
										}?>
								</p>
                            <div class="login-form-button">
                                <input type="submit" name="edit" value="Save Changes">
                            </div>
                        </form>
                    </div>
									</div>
            </div>
	</body>
	</html>
