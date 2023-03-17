<?php
    require_once "./module/contact/contact.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Contact Us</title>
		<link rel="stylesheet" href="css\contactUs2.css" />
		<script src="./js/shop.js"></script>
	</head>
	<body>
		<div class="sidebar">
			<img src="../assets/Bannerreduced.png" alt="logo" />

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
		<div class="container">
            <div class="col-center">
                <form method="post" class="contact-form" action="./module/contact/contact2.php">
                    <h4>Contact Us</h4>
                    <input required="required" minlength="3" maxlength="64" type="text" name="firstName" placeholder="First Name" />
                    <input required="required" minlength="3" maxlength="64" type="text" name="lastName" placeholder="Last Name" />
                    <input required="required" type="email" name="email" placeholder="Email" />
                    <textarea required="required" name="comment" placeholder="Type your comment...."></textarea>

                    <input type="submit" name="submit" value="Submit" />                    
                </form>
            </div>
        </div>

		</div>
		<script src="./js/header.js"></script>
	</body>
</html>