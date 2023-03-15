<?php
require_once "./module/auth/profile.php";
require_once "./module/auth/update.php";

$user= getUser();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Rowdies&display=swap" rel="stylesheet">
    <!--js link-->
    <script src="./js/shop.js"></script>
</head>

<body>
    <!-- header starts here -->
    <header>
       
        <a href="#" class="logo" href="index.html"><img src="../assets/Bannerreduced.png" alt="Logo"></a>
        <ul class="navbar">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">About</a></li>
        </ul>

        <div class="main">
            <div class="dropdown">
                <button class="profile-button">
                    <img src="../assets/icons8-customer.png" alt="profile-Logo">
                </button>
                <div>
                    <a href="#"><b>Sign in | Register</b></a>
                    <a href="#"><b>My Account</b></a>
                    <a href="#"><b>WishList</b></a>
                </div>
            </div>

            <button class="cart-button">
                <img src="../assets/icons8-shopping-cart.png" alt="cart-Logo">

            </button>
        </div>
    </header>
    <!-- End of header -->
    <!-- start of breadcrum area -->
    <div class="breadcrumb">
        <img src="../assets/banner-logopattern.jpg">
        <div class="banner"></div>
        <div class="banner-message">
            <h2><b>Welcome to Harmony</b></h2>
        </div>
        <div class="user-name">
        <?php
         echo "<h2>".$user["firstName"]." ".$user["lastName"]."</h2>";

        ?> 
        </div>
    </div>
    <!-- End of breadcumb area -->
    <div class="menu-list">
        <div class="nav">
            <a class="active-show" data-toggle="tab">
                Dashboard
            </a>
            <a onclick="toggleOrder()" id="order-toggle" data-toogle="tab">
                Orders
            </a>
            <a onclick="toggleAddress()" data-toogle="tab">
                Address
            </a>
            <a onclick="toggleAccount()" data-toogle="tab">
                Account Details
            </a>
            
            <a>
            <?php
            
                echo "<form method='post' action='./index.php'>
                <input type='submit' name='logout' value='Logout' />
                </form>";
                
            ?>
            </a>

        </div>
<div class="tab">
            <div class="tab-dashboard" id="tab-dashboard">
                <p>From your account dashboard you can review your recent orders, manage your shipping and billing
                    addresses, and edit your password and account details </p>
            </div>
            
            <div class="tab-account-detail" id="tab-account-detail">
                <div class="account-top">
                    <p>
                    <h3>Manage account</h3>
                    <br>
                    Add or update your personal data
                    </p>
                </div>

                <form method="post" action="">
                    <fieldset class="accountChange">
                        <legend>Account change</legend>
                        <div class="first-name">
                            <label>
                                First Name:
                            </label>
                            <input value="<?php echo $user["firstName"]?>" type="text" name="firstName">
                        </div>
                        <div class="last-name">
                            <label>
                                Last Name:
                            </label>
                            <input value="<?php echo $user["lastName"]?>" type="text" name="lastName">
                        </div>
                                    
                        <div class="display-email">
                            <label>
                                Display Email:
                            </label>
                            <input value="<?php echo $_SESSION['user']['email']?>" type="email" name="email" placeholder="example@example.com" class="input-email">
                        </div>
                    </fieldset>
                   
                    <fieldset class="passwordChange">
                        <legend>Password change</legend>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Current password (leave blank to leave unchanged):</label>
                                <input type="password" name="currentPassword">
                                <br>
                                <label>New password (leave blank to leave unchanged):</label>
                                <input  type="password" name="newPassword">
                                <br>
                                <label>Confirm new password:</label>
                                <input  type="password" name="confirmNewPassword">
                            </div>
                        </div>
                    </fieldset>
                    <div class="button-save">
                        <button id="myForm" type="submit" name="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
                    </div>
                </form>
        
            </div>
        </div>

    </div>
    
</body>

</html>