<?php

require_once "./module/prod/product.php";
require_once "./module/prod/reviews.php";

$product_id = $_GET['product_id'];
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    getProdName($product_id);
    ?>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container">
        <?php
        getProdDetails($product_id);
        ?>
    </div>

    <div class="container">
        <?php
        getProdDesc($product_id);
        ?>
    </div>

    <div class="container">
        <div class="col-left">
            <h4>Reviews</h4>
            <div class="section-divider"></div>

            <?php
            getReviews($product_id);

            echo "<form method='post' class='review-form' action='./module/prod/reviews.php?product_id=" . $product_id . "'>";
            ?>
            <h4>Add a Review</h4>
            <div class="review-container">
                <label for="rating">Your Rating: </label>
                <input type="number" id="rating" name="rating" min="0.5" max="5" step="0.5" value="1" onkeydown="return false" />
            </div>

            <textarea required="required" name="comment" placeholder="Type your comment...."></textarea>
            <input required="required" type="email" name="email" placeholder="Type your email...." />

            <input type="submit" name="submit" value="Submit" />
            </form>

        </div>
    </div>

</body>

</html>