<?php
require_once "./module/auth/profile.php";
require_once "./module/auth/token.php";

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

$user = getUser();

$loggedin = false;

if (checkForToken()) {
    $loggedin = true;
}

if (isset($_POST['logout'])) {
    logout();
}
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
        <a href="index2.php">Home</a>
        <a href="shop2.html">Shop</a>
        <a href="contactUs2.php">Contact</a>
        <a href="#">About</a>
        <div class="bottom-border-sidebar"></div>

        <div class="icons">
            <button class="profile-button">
                <a id="login_txt" href="./authPage.php" target="_top" style="padding: 10px">log in</a>
                <a id="login_img" href="./profilePage.php" target="_top">
                    <img src="../assets/icons8-customer.png" alt="Logo" />
                  
                </a>
            </button>

            <button class="cart-button">
                <a href="./cart.php" target="_top">
                    <img src="../assets/icons8-shopping-cart.png" alt="Logo" />
                </a>
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
                if ($loggedin) {
                    echo "<h2>" . $user["firstName"] . " " . $user["lastName"] . "</h2>";
                } else {
                    echo "<h2>Guest</h2>";
                }
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
                        <p class="description">Our Edible Rice Straw is an eco-friendly
                            and delicious alternative to plastic straws.
                            Made from rice flour, it's biodegradable,
                            gluten-free, vegan, and has a sweet, nutty
                            flavor. It comes in different sizes, is easy
                            to store, and has a long shelf life</p>
                    </div>
                </div>

                <div class="border"></div>

                <div class="product">
                    <img src="../assets/product_img/Spoon.jpg" alt="2" />
                    <div class="text">
                        <h3>Wooden Spoon</h3>
                        <p>Price: Rs 25</p>
                        <button>Add to cart</button>
                        <p class="description">Crafted from high-quality
                            and eco-friendly wood, our Wooden Spoon is a
                            perfect substitute for plastic utensils. It is
                            sturdy, durable, and will not melt or leach
                            harmful chemicals into your food. </p>
                    </div>
                </div>

                <div class="border"></div>

                <div class="product">
                    <img src="../assets/product_img/Fork.jpg.crdownload" alt="3" />
                    <div class="text">
                        <h3>Wooden Fork</h3>
                        <p>Price: Rs 25</p>
                        <button>Add to cart</button>
                        <p class="description">Crafted from high-quality
                            and eco-friendly wood, our Wooden Fork is a
                            perfect substitute for plastic utensils. It is
                            sturdy, durable, and will not melt or leach
                            harmful chemicals into your food. </p>
                    </div>
                </div>

                <div class="border"></div>


                <div class="product">
                    <img src="../assets/product_img/Takeaway Box.jpg" alt="4" />
                    <div class="text">
                        <h3>Bamboo Takeaway Box</h3>
                        <p>Price: Rs 25</p>
                        <button>Add to cart</button>
                        <p class="description"> Made from sustainable bamboo,
                            our Takeaway Box is a durable and practical
                            alternative to single-use plastic containers.
                            It is lightweight, leak-proof, and comes with a
                            secure lid, ensuring your food stays fresh and safe.

                        </p>
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

        <script src="./js/header.js"></script>
</body>

</html>