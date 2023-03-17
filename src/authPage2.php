<?php
require_once	"./module/auth/token.php";
require_once "./module/auth/authentication.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css\home2.css" />
    <script src="./js/shop.js"></script>

    <meta charset="utf-8" />
	<title>Harmony - Login / Register</title>
	<meta name="description" content="Harmony login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="shortcut icon" href="" type="image/x-icon" />
	<link rel="stylesheet" href="./css/style.css" />
</head>
<body>
	<div class="sidebar">
        <img src="../assets/Bannerreduced.png" alt="logo">

        <div class="upper-border-sidebar"></div>
		<a href="index2.php">Home</a>
		<a href="shop2.html">Shop</a>
		<a href="contactUs2.php">Contact</a>
		<a href="about2.html">About</a>
        <div class="bottom-border-sidebar"></div>
        
		<div class="icons">
            <button class="profile-button">
                <a id="login_txt" href="./authPage2.php" target="_top" style="padding: 10px">log in</a>
                <a id="login_img" href="./profilePage2.php" target="_top">
                    <img src="../assets/icons8-customer.png" alt="Logo" />
                  
                </a>
            </button>

            <button class="cart-button">
                <a href="./cart2.php" target="_top">
                    
                    <img src="../assets/icons8-shopping-cart.png"  alt="Logo" />
                   
                    
                </a>
            </button>
        </div>
    
	</div>
	<div class="main">
    <div class="body-wrapper">
		<div class="login-area">
			<div class="container">
				<div class="col-center" name="Register">
					<h1>Create an Account</h1>
					<form method="post" class="personal-details-form" action="./authPage.php">

						<input required="required" minlength="3" maxlength="64" type="text" name="firstName" placeholder="First Name" />
						<input required="required" minlength="3" maxlength="64" type="text" name="lastName" placeholder="Last Name" />
						<input required="required" type="email" name="email" placeholder="Email" />
						<input required="required" minlength="8" maxlength="64" type="password" name="password" placeholder="Password" />
						<input required="required" minlength="3" maxlength="64" type="password" name="confirm_password" placeholder="Confirm Password" />

						<?php
						if (isset($error_r)) {
							echo  "<p class='error-text'>" . $error_r . "</p>";
						}
						?>

						<input type="submit" name="register" value="Register" />
					</form>
				</div>
				<div class="col-center" name="Signin">
					<h1>Sign In</h1>
					<form method="post" class="personal-details-form" action="./authPage.php">
						<input id="lEmail" required="required" type="email" name="email" placeholder="Email" />
						<input id="lPassword" required="required" type="password" name="password" placeholder="Password" />

						<?php
						if (isset($error_l)) {
							echo  "<p class='error-text'>" . $error_l . "</p>";
						}
						?>

						<input type="submit" name="login" value="Login" />

					</form>
				</div>

			</div>
		</div>
	</div>
    
    </div>
	<footer>
			<object type="text/html" width="100%" height="310px" data="./footer2.html"></object>
		</footer>
    </div>

	<script src="./js/header.js"></script>
</body>
</html>