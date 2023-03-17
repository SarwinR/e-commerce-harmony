<?php

require_once "./module/prod/product.php";
require_once "./module/prod/reviews.php";

$product_id = $_GET['product_id'];
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css\shop2.css" />
    <?php
    getProdName($product_id);
    ?>
    <link rel="stylesheet" href="css/singleProduct2.css" />
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
                <a id="login_txt" href="./authPage.php" target="_top" style="padding: 10px">log in</a>
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
        <?php
        getProdDetails($product_id);
        ?>
    </div>

    <div class="container">
        <?php
        getProdDesc($product_id);
        ?>
    </div>

    <div class="container">
        <div class="col-left">
            <h4>Reviews</h4>
            <div class="section-divider"></div>

            <?php
            getReviews($product_id);

            echo "<form method='post' class='review-form' action='./module/prod/reviews.php?product_id=" . $product_id . "'>";
            ?>
            <h4>Add a Review</h4>
            <div class="review-container">
                <label for="rating">Your Rating: </label>
                <input type="number" id="rating" name="rating" min="0.5" max="5" step="0.5" value="1" onkeydown="return false" />
            </div>

            <textarea required="required" name="comment" placeholder="Type your comment...."></textarea>
            <input required="required" type="email" name="email" placeholder="Type your email...." />

            <input type="submit" name="submit" value="Submit" />
            </form>

        </div>
	</div>
    <script src="./js/header.js"></script>

    <footer>
            <object type="text/html" width="100%" height="280px" data="./footer2.html"></object>
    </footer>
</body>

</html>