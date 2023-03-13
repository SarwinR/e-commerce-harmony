<?php

require_once "./module/auth/profile.php";
require_once "./module/auth/token.php";

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
	<title>Harmony</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="./js/cart.js"></script>
</head>

<body>
	<object type="text/html" width="100%" height="100px" data="./header.html"></object>

	<button onclick="add2Cart(5)">debug</button>

	<?php
	if ($loggedin) {
		echo "<form method='post' action='./index.php'>
		<input type='submit' name='logout' value='Logout' />
		</form>";
	} else {
		echo "<a href='./authPage.php'>Login/Register</a>";
	}

	echo "<br><a href = './shop.html'>All Products</a>"
	?>
</body>

<footer>
	<object type="text/html" width="100%" height="200px" data="./footer.html"></object>
</footer>


</html>