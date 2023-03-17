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
	<title>Harmony</title>
	<link rel="stylesheet" href="css\index.css" />
	<script src="./js/shop.js"></script>
</head>

<body>
	<object type="text/html" width="100%" height="100px" data="./header.html"></object>

	<div class="background-container">
		<img src="../assets/home/background.jpg" alt="product" />
		<div class="center-text">
			<h1 id="background-text">Welcome to Harmony</h1>
			<div class="user-name">

				<?php
				if ($loggedin) {
					echo "<h2>" . $user["firstName"] . " " . $user["lastName"] . "</h2>";
				} else {
					echo "<h2>Guest</h2>";
				}
				?>
			</div>
		</div>
	</div>

	<h1 id="titles">Featured Products</h1>

	<div class="products-container">
		<button onclick="loadIndividualProduct(6)" class="product">
			<img src="../assets/product_img/6.png" alt="1" />
			<h3>9 inch Paper Plates</h3>
			<p>Price: Rs 600</p>
		</button>

		<button onclick="loadIndividualProduct(1)" class="product">
			<img src="../assets/product_img/Spoon.jpg" alt="2" />
			<h3>Wooden Spoon</h3>
			<p>Price: Rs 20</p>
		</button>

		<button onclick="loadIndividualProduct(1)" class="product">
			<img src="../assets/product_img/Fork.jpg.crdownload" alt="3" />
			<h3>Wooden Fork</h3>
			<p>Price: Rs 20</p>
		</button>

		<button onclick="loadIndividualProduct(1)" class="product">
			<img src="../assets/product_img/Takeaway Box.jpg" alt="4" />
			<h3>Bamboo Takeaway Box</h3>
			<p>Price: Rs 10</p>
		</button>
	</div>

	<div class="hyper-button">
		<button id="shop-more-button" type="button" onclick="document.location='shop.html'">
			Shop More
		</button>
	</div>

	<h1 id="titles">Testimonials</h1>

	<div class="testimonials-container">
		<div class="testimonial">
			<h3>
				"I absolutely love the products I purchased from Harmony! It feels great knowing that I'm making a positive impact on the environment while also getting high-quality products that work great. I highly recommend this website to anyone looking for eco-friendly options."
			</h3>
			<br />
			<h5>-Geerish Bheekhum</h5>
		</div>

		<div class="testimonial">
			<h3>
				"I've been trying to switch to more eco-friendly products for a while now, but I always found them to be too expensive. Harmony has made it easy and affordable for me to make the switch, and I couldn't be happier with my purchases."
			</h3>
			<br />
			<h5>-Farhaan Nazirkhan</h5>
		</div>

		<div class="testimonial">
			<h3>
				"I recently bought some cleaning supplies from Harmony, and I'm so impressed with how well they work. Not only are they effective, but they're also much safer for my family and the environment. I'll definitely be a repeat customer!"

			</h3>
			<br />
			<h5>-Levyn Kwong</h5>
		</div>

		<div class="testimonial">
			<h3>
				"I love the range of products available on Harmony. It's great to have so many eco-friendly options all in one place. Plus, the prices are really competitive, which makes it even easier to make the switch to more sustainable products."
			</h3>
			<br />
			<h5>-Feiz Roojee</h5>
		</div>
	</div>
</body>

<footer>
	<object type="text/html" width="100%" height="280px" data="./footer.html"></object>
</footer>

</html>