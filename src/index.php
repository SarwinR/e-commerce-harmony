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
</head>

<body>
	<h1>HARMONY</h1>

	<?php
	if ($loggedin) {
		echo "<form method='post' action='./index.php'>
		<input type='submit' name='logout' value='Logout' />
		</form>";
	} else {
		echo "<a href='./authPage.php'>Login/Register</a>";
	}
	?>
</body>

</html>