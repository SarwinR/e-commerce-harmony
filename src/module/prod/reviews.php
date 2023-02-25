<?php

if (isset($_POST['submit'])) {
    require_once "../database/database.php";
    $product_id = $_GET['product_id'];
    $rating = $_POST['rating'];
    $email= $_POST['email'];
    $comment = $_POST['comment'];
    $current_date = date("F j, Y");
    $error = submitReview($product_id, $rating, $email, $comment, $current_date);

    if ($error){
        echo "<script> 
            alert('Review not sent!');
            window.location.href='../../singleProduct.php?product_id=" . $product_id .
            "'</script>";
    }
    else{
        header("Location: ../../singleProduct.php?product_id=" . $product_id);
    }
}

function getReviews($product_id){
    require_once "./module/database/database.php";
    $sql = "SELECT r.*, u.firstName, u.lastName FROM reviews r JOIN users u ON r.email = u.email WHERE r.product_id = ? ORDER BY r.review_id DESC";
    $result = executeQuery($sql, "i", [$product_id]);
    $reviews = $result->fetch_all(MYSQLI_ASSOC);

    if ($reviews){
        echo "<ul class='reviews'>";
        foreach ($reviews as $review) {
            echo "<li>";
            echo "<div class='review-container'>";
            echo "<img src='../assets/img/user.jpg' alt='user' class='commenter-image' />"; //Make image increment with a number
            echo "<div class='comment'>";
            echo "<h6>" . $review['firstName'] . " " . $review['lastName'] . "</h6>";
            echo "<span class='rating-container'>";
            echo "<i> Rating: " . $review['review_rating'] . "</i>";
            echo "</span>";
            echo "<p>" . $review['review_comment'] . "</p>";
            echo "<span class='comment-date'>" . $review['review_date'] . "</span>";
            echo "</div>";
            echo "</div>";
            echo "</li>";
            echo "<br>";
            echo "<div class='section-divider'></div>";
        }
        echo "</ul>";
    }
    else
        echo "<h4> No Reviews </h4>";
}

function submitReview($product_id, $rating, $email, $comment, $current_date){
    $sql = "INSERT INTO reviews (product_id, review_rating, email, review_comment, review_date) VALUES (?, ?, ?, ?, ?)";
    $result = executeQuery($sql, "idsss", [$product_id, $rating, $email, $comment, $current_date]);
}

?>