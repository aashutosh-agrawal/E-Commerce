<!DOCTYPE>
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
<title></title>
</head>
<body>
<h1><center>UPLOAD ASSETS</center></h1>
<!-- Page Header start-->
<div class="container-fluid">
<div class="row" style="margin-top:100px;">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="backend/assets_check.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
   <label> Enter Category </label>
   <input type="text" name="catg" class="form-control" required>
  </div>
  <div class="form-group">
   <label> Enter Image name </label>
   <input type="text" name="n" class="form-control" required>
  </div>
  <div class="form-group">
   <label> Enter Product Id</label>
   <input type="text" name="pi" class="form-control" required>
  </div>
  <div class="form-group">
   <label> Upload Image</label>
   <input type="file" name="file" class="form-control" required>
  </div>
  <div class="form-group">
   <label> Enter price </label>
   <input type="number" name="price" class="form-control" required>
  </div>
  <div class="form-group">
   <label> Enter size </label>
   <input type="text" name="size" class="form-control" required>
  </div>
  <div class="form-group">
   <label> Enter Quantity </label>
   <input type="number" name="quanty" class="form-control" required>
  </div>
  <div class="form-group">
   <label> Enter Description </label>
   <input type="text" name="des" class="form-control" required>
  </div>
  <input type="submit" value="SAVE" name="imgupload" class="btn btn-success">
</form>
</div>
<div class="col-md-3"></div>
</div>
</body>
</html>