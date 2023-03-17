<?php
require_once "./module/auth/profile.php";
require_once "./module/auth/update.php";

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

$user = getUser();

$err = null;
if (isset($_SESSION['profile_update_error'])) {
    $err = $_SESSION['profile_update_error'];
    $_SESSION['profile_update_error'] = null;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="css/profilePage2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Rowdies&display=swap" rel="stylesheet">
    <!--js link-->
    <script src="./js/shop.js"></script>
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


      
<div class="tab">
        <div class="tab-dashboard" id="tab-dashboard">
            <p>From your account dashboard you can edit your password and account details </p>
        </div>

        <div class="tab-account-detail" id="tab-account-detail">


            <form method="post" action="">
                <fieldset class="accountChange">
                    <legend>Account change</legend>
                    <div class="first-name">
                        <label>
                            First Name:
                        </label>
                        <input required="required" minlength="3" maxlength="64" value="<?php echo $user["firstName"] ?>" type="text" name="firstName">
                    </div>
                    <div class="last-name">
                        <label>
                            Last Name:
                        </label>
                        <input required="required" minlength="3" maxlength="64" value="<?php echo $user["lastName"] ?>" type="text" name="lastName">
                    </div>

                    <div class="display-email">
                        <label>
                            Display Email:
                        </label>
                        <input readonly value="<?php echo $_SESSION['user']['email'] ?>" type="email" name="email" placeholder="example@example.com" class="input-email">
                    </div>
                </fieldset>

                <fieldset class="passwordChange">
                    <legend>Password change</legend>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Current password (leave blank to leave unchanged):</label>
                            <input required="required" type="password" name="currentPassword">
                            <br>
                            <label>New password (leave blank to leave unchanged):</label>
                            <input minlength="8" maxlength="64" type="password" name="newPassword">
                            <br>
                            <label>Confirm new password:</label>
                            <input minlength="8" maxlength="64" type="password" name="confirmNewPassword">
                        </div>
                    </div>
                </fieldset>
                <p class="message">Before pressing Save changes, your current password should be input</p>

                <?php
                if ($err) {
                    echo "<p class='error'>$err</p>";
                }
                ?>

                <div class="button-save">
                    <button id="myForm" type="submit" name="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
                </div>
            </form>

        </div>
    </div>

    </div>
    <div class="logout">
        <?php

        echo "<form method='post'  action='./index.php'>
            <input type='submit' name='logout' value='Logout' />
            </form>";

        ?>
        </a>
    </div>

    <script src="./js/header.js"></script>
    <footer>
            <object type="text/html" width="100%" height="280px" data="./footer2.html"></object>
    </footer>
</body>


</html>