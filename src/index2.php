<?php
require_once "./module/auth/profile.php";
session_start();
$user= getUser();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Shop</title>
    <link rel="stylesheet" href="css\index2.css" />
    <script src="./js/shop.js"></script>
</head>

<body>
    <div class="sidebar">
        <img src="../assets/Bannerreduced.png" alt="logo">

        <div class="upper-border-sidebar"></div>
        <a href="home2.html">Home</a>
        <a href="shop2.html">Shop</a>
        <a href="contactUs2.php">Contact</a>
        <a href="#">About</a>
        <div class="bottom-border-sidebar"></div>

        <div class="icons">
            <button class="profile-button">
                <img src="../assets/icons8-customer.png" alt="Logo" />
            </button>

            <button class="cart-button">
                <img src="../assets/icons8-shopping-cart.png" alt="Logo" />
            </button>
        </div>

    </div>
    <div class="main">
        <div class="background-container">
            <img src="../assets/home/background2.jpg" alt="food">
            <div class="center-text">
                <h1 id="background-text">Welcome to Harmony</h1>
            </div>
            <div class="user-name">
            <?php
				 echo "<h2>".$user["firstName"]." ".$user["lastName"]."</h2>";
	
				?> 
            </div>



        <h1 id="titles">Featured Products</h1>

        <div class="products-container">
            <div class="product">
                <img src="../assets/product_img/Straw.jpg" alt="1" />
                <div class="text">
                    <h3>Edible Rice Straw</h3>
                    <p>Price: Rs 25</p>
                    <button>Add to cart</button>
                </div>
            </div>

            <div class="border"></div>

            <div class="product">
                <img src="../assets/product_img/Spoon.jpg" alt="2" />
                <div class="text">
                    <h3>Wooden Spoon</h3>
                    <p>Price: Rs 25</p>
                    <button>Add to cart</button>
                </div>
            </div>

            <div class="border"></div>

            <div class="product">
                <img src="../assets/product_img/Fork.jpg.crdownload" alt="3" />
                <div class="text">
                    <h3>Wooden Fork</h3>
                    <p>Price: Rs 25</p>
                    <button>Add to cart</button>
                </div>
            </div>

            <div class="border"></div>


            <div class="product">
                <img src="../assets/product_img/Takeaway Box.jpg" alt="4" />
                <div class="text">
                    <h3>Bamboo Takeaway Box</h3>
                    <p>Price: Rs 25</p>
                    <button>Add to cart</button>
                </div>
            </div>
            <div class="hyper-button">
                <button id="shop-more-button" type="button">Shop More</button>
            </div>
        </div>

        <h1 id="titles">Testimonials</h1>

        <div class="testimonials-container">
            <div class="testimonial">
                <h3>"Overall, I would highly recommend
                    this online shop to anyone looking for a seamless
                    shopping experience, top-notch customer service, and high-quality products.
                    Thank you for making my shopping experience a truly enjoyable one!"
                </h3>
                <br>
                <h5>-Sarwin Rajiah</h5>
            </div>

            <div class="testimonial">
                <h3>"The customer service at Harmony is top-notch. I had a question about a product, and they were so
                    helpful and informative. It's clear that they really care about their customers and making a
                    positive impact on the planet."
                </h3>
                <br>
                <h5>-Farhaan Nazirkhan</h5>
            </div>


        </div>


        <footer>
            <object type="text/html" width="100%" height="280px" data="./footer2.html"></object>
        </footer>

    </div>


</body>

</html>