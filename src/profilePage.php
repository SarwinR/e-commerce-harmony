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
    <link rel="stylesheet" href="css/profilePage.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Rowdies&display=swap" rel="stylesheet">
    <!--js link-->
    <script src="./js/shop.js"></script>
</head>

<body>
    <object
			type="text/html"
			width="100%"
			height="100px"
			data="./header.html"
		></object>
    
      
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
                    <p class="message">Before pressing Save changes, your current password should be input</p>
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

</body>

</html>