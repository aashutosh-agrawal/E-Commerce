<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ExpressDeals/LogIn</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">

            <div class="left-side">
                <div class="left-center-image">
                    <img src="assets/k.svg" alt="">
                </div>
            </div>
            <div class="right-panel">
                    <div class="center-heading">
                        ExpressDeals
                    </div>
                    <div class="login-form">
<<<<<<< HEAD
                        <form action="logincheck.php" method="POST">
=======
                        <form action="backend/logincheck.php" method="POST">
>>>>>>> master
                           
                            <label for="username" class="label">Users name</label></br>
                            <input id="username" type="text" placeholder="username" class="user-input" name="username" required></br>
                            <label for="password" class="label">Password</label></br>
                            <input id="password" type="password" placeholder="password" class="user-input" name="password" required></br>
                             <a href="signin.php" id="">Not Registered?</a></br>
                             <!-- <a href="#forgot-password" id="">Forgot Password?</a></br> -->
							 <p style="color:red;"><?php
							 if(isset($_SESSION['error']))
							 {
								echo $_SESSION['error'];
								session_destroy();}
							 ?>
							 </p>
                            <div class="login-form-button">
                                <input type="submit" name="checkl" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
        </div>
</body>
</html>
