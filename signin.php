<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ExpressDeals/SignIn</title>
    <link rel="stylesheet" href="css/signin.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<!--Linking Jquery file-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        <form action="server.php" method="POST" onsubmit="return validateForm();">

                        <form action="backend/server.php" method="POST" onsubmit="return validateForm();">

                            <label for="name" class="label">Name</label></br>
                            <input id="name" type="text" placeholder="Name" class="user-input" name="name" required ></br>
                            <label for="username" class="label">Users name</label></br>
                            <input id="username" type="text" placeholder="Username" class="user-input" name="username" required></br>
                            <label for="email" class="label">Email</label></br>
                            <input id="email" type="email" placeholder="Email" class="user-input"  name="email" required></br>
                            <label for="mobileno" class="label">Mobile No.</label></br>
                            <input id="mobileno" type="text" placeholder="Mobile No." class="user-input" name="mobileno" required></br>
                            <label for="password" class="label">Password</label></br>
                            <input id="password" type="password" placeholder="Password" class="user-input" name="password" required></br>
                            <label for="confirmpassword" class="label">Confirm Password</label></br>
                            <input id="confirmpassword" type="password" placeholder="Confirm Password" class="user-input" name = "confirmpassword" required></br>
                             <a href="login.php" id="">Have an Account?</a></br>
							 <p style="color:red;"><?php 
									   if(isset($_SESSION['err']))
									   {
										echo $_SESSION['err'];
									    session_destroy();
										}?>

								</p>

                            <div class="login-form-button">
                                <input type="submit" name="checkreg" value="SignIn">
                            </div>
                        </form>
                    </div>
            </div>
	</div>

	<!--Form Validation-->

	<script>

		function validateName() {
			var name = document.getElementById("name").value;
			var pattern = /^[a-zA-Z ]{3,30}$/;
			if(!name.match(pattern)) {
				console.log("Please enter a valid name. ex - James Bond");
				return false;
			}
			return true;
		}
		function validateUsername() {
			var username = document.getElementById("username").value;
			var pattern = /^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{3,20}$/;
			if(!username.match(pattern)) {
				console.log("Please enter a valid username. ex - jbond007");
				return false;
			}
			return true;
		}
		function validateEmail() {
			var email = document.getElementById("email").value;
			var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(!email.match(pattern)) {
				console.log("Please enter a valid email. ex - jbond7@gmail.com");
				return false;
			}
			return true;
		}
		function validateMobile() {
			var mobile = document.getElementById("mobileno").value;
			var pattern = /^\d{10}$/;
			if(!mobile.match(pattern)) {
				console.log("Please enter a valid 10 digit Mobile No. ex - 9912XXXX89");
				return false;
			}
			return true;
		}
		function validatePassword() {
			var password = document.getElementById("password").value;
			var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
			if(!password.match(pattern)) {
				//console.log("Password must be of length 8-15 containing a small letter, a capital letter, a digit and a special character");
				console.log("Please set a strong password ex - James@007");
				return false;
			}
			return true;
		}
		function validateConfirmPassword() {
			var confirmpassword = document.getElementById("confirmpassword").value;
			var password = document.getElementById("password").value;
			if(password != confirmpassword) {
				console.log("Password and Confirm Password do not match");
				return false;
			}
			return true;
		}
		// Final function to validate all the fields
		function validateForm() {
			if(validateName() && validateUsername() && validateEmail() && validateMobile() && validatePassword() && 
				validateConfirmPassword()) {
					return true;
			}
			return false;
		}

		//JQuery actions for form validation

		$("#name").focusout(function() {validateName()});
		$("#username").focusout(function() {validateUsername()});
		$("#email").focusout(function() {validateEmail()});
		$("#mobileno").focusout(function() {validateMobile()});
		$("#password").focusout(function() {validatePassword()});
		$("#confirmpassword").focusout(function() {validateConfirmPassword()});
		

	</script>


</body>
</html>
