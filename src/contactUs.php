<?php
    require_once "./module/contact/contact.php";
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Contact Us</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
    
	<body>
		<div class="container">
            <div class="col-center">
                <form method="post" class="contact-form" action="./module/contact/contact.php">
                    <h4>Contact Us</h4>
                    <input required="required" minlength="3" maxlength="64" type="text" name="firstName" placeholder="First Name" />
                    <input required="required" minlength="3" maxlength="64" type="text" name="lastName" placeholder="Last Name" />
                    <input required="required" type="email" name="email" placeholder="Email" />
                    <textarea required="required" name="comment" placeholder="Type your comment...."></textarea>

                    <input type="submit" name="submit" value="Submit" />                    
                </form>
            </div>
        </div>
	</body>

</html>