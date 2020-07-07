<?php
include("backend/database_connection.php");
session_start();
$cat=$_SESSION['category'];
$save= "select * from $cat";

$rs= $con->query($save);
	

?>

<html>
<head>
<!-- All Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">

<!-- Bootstrap CSS and other CSS files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Bootstrap JS and other JS files-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!--title tag-->
<title>Uploaded Files</title>

</head>
<body>
<h1><center>Uploaded Items on <?php echo $cat;?></center></h1>
<form action="backend/assets_remove.php" method="POST">
<div class="container">
<table class="table">
<tr><td>Product Id</td><td>Url</td><td>Image</td><td>Name</td><td>Price</td><td>Size</td><td>Quantity</td><td>Description</td><td>Select</td></tr>
<?php while($rw=$rs->fetch_array()) {
	?>
<tr><td><?php echo $rw[0];?></td><td><?php echo $rw[1];?></td><td><img src="<?php echo $rw[1];?>" height="200px" width="200px"></img></td><td><?php echo $rw[2];?></td><td><?php echo $rw[3];?></td><td><?php echo $rw[4];?></td><td><?php echo $rw[5];?></td><td><?php echo $rw[6];?></td><td><input type="checkbox" value="<?php echo $rw[0];?>" name="rev[]"></td></tr>
<?php 
}?>
</table>
</div>
<center><a href="admin.php" class="btn btn-primary">ADD</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="REMOVE" name="remove" class="btn btn-danger"></center>
</form>
</body>
</html>