<?php

    require_once "./module/prod/product.php";
    require_once "./module/prod/reviews.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            // Set product name as page title
            getProdName(1);
        ?>
        <!-- <script src=".js/reviews.js" type="text/javascript"></script> -->
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <div class="container">
            <?php
                getProdDetails(1);
            ?>
        </div>

        <div class="container">
            <?php
                getProdDesc(1);
            ?>
        </div>

        <div class="container">
            <div class="col-left">
                <h4>Reviews</h4>
                <div class="section-divider"></div>

                <?php
                    getReviews(1);
                ?>

                <form method="post" class="review-form" action="./singleProduct.php">
                    <h4>Add a Review</h4>
                    <div class="review-container">
                        <label for="rating">Your Rating: </label>
                        <input type="number" id="rating" name="rating" min="0.5" max="5" step="0.5" value="1" onkeydown="return false"/>
                    </div>
                    
                    <textarea required="required" name="comment" placeholder="Type your comment...."></textarea>
                    <input required="required" type="email" name="email" placeholder="Type your email...." />
                    
                    <input type="submit" name="submit" value="Submit" />
                </form>

            </div>
        </div>
    
    </body>
    
</html>