<?php
session_start();
include("backend/database_connection.php");
if(isset($_SESSION['username']))
{
	$u=$_SESSION['username'];
}
?>

<!--HTML5 DECLARARTION-->
 <!DOCTYPE>
 <html lang="en" dir="ltr">
   <head>
     <!--all meta tags-->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
     <title>Admin's Profile</title>
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
     <a class="navbar-brand mx-auto text-light" href="Homepage.php"><b>Home</b></a>
     <a class="navbar-brand mx-auto text-light" href="menwear.php"><b>Men's Wear</b></a>
     <a class="navbar-brand mx-auto text-light" href="womenwear.php"><b>Women's Wear</b></a>
    <a class="navbar-brand mx-auto text-light" href="kidswear.php"><b>Kid's Wear</b></a>
     <a class="navbar-brand mx-auto text-light" href="womenfootwear.php"><b>Women's FootWear</b></a>
     <a class="navbar-brand mx-auto text-light" href="menfootwear.php"><b>Men's FootWear</b></a>
     <form class="form-inline ">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button type="submit" class="btn btn-dark">
         <img src="assets/search.png" width="30" height="30"/>
       </button>
       <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
     </form>
   </nav>
 </div>

 <div class="container">

   <div>
     <br>
 <h3>MODIFY ASSETS</h3>
 <br>
 <a href="add_assets.php" class="btn btn-primary">ADD</a></br></br>
 <form action="show_assets.php" method="POST">
<div class="form-group">
  <label>Enter the category in which you want to delete the item.</label>
  <input type="text" name="category" class="form-control" required>
</div>
 <input type="submit" value="REMOVE" name="del" class="btn btn-danger">
 </form>
 <a href="admin_update.php" class="btn btn-success">UPDATE</a>
 </br>
 </br>
 </br>
 <h3>DELETE USER</h3>
 <form action="backend/delete_user.php" method="POST">
<div class="form-group">
  <label> Enter Username </label>
  <input type="text" name="id" class="form-control" required>
</div>
<p style="color:green;"><?php
 if(isset($_SESSION['crrm']))
 {
 echo $_SESSION['crrm'];
 session_destroy();
 }?>
</p>
<p style="color:red;"><?php
 if(isset($_SESSION['errm']))
 {
 echo $_SESSION['errm'];
 session_destroy();
 }?>
</p>
 <input type="submit" value="DELETE" name="del" class="btn btn-success">
 </form>
   </div>
 </div>
</div>
 </body>
 </html>
