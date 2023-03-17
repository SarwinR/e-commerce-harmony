<?php

require_once './module/cart/items.php';

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Shop</title>
	
        <link rel="stylesheet" href="./css/cart2.css">
		<script src="./js/cart.js"></script>
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
		<div class="contents">
            <h1>Harmony Cart</h1>
            <table>
              <tr>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
          
              <?php getCartItems(); ?>
          
            </table>
          
            <div class="total-price"></div>
            <br>
          
            <form action="checkout2.html" method="post">
            <button type="checkout1" value="Checkout">Checkout</button>
            </form>
            <br>

            <footer>
                <object type="text/html" width="100%" height="280px" data="./footer2.html"></object>
           </footer>
        </div>

        <script>updateTotal();</script>
		<script src="./js/header.js"></script>
	</body>
</html>