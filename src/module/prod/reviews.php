<?php

require_once "./module/database/database.php";

if (isset($_POST['submit'])) {
    // $product_id = $_GET['id'];
    $rating = $_POST['rating'];
    $email= $_POST['email'];
    $comment = $_POST['comment'];
    $current_date = date("F j, Y");
    // $error = submitReview($product_id, $rating, $email, $comment, $current_date);
    $error = submitReview(1, $rating, $email, $comment, $current_date);
}

function getReviews($product_id){
    $sql = "SELECT r.*, u.firstName, u.lastName FROM reviews r JOIN users u ON r.email = u.email WHERE r.product_id = ? ORDER BY r.review_id DESC";
    $result = executeQuery($sql, "i", [$product_id]);
    $reviews = $result->fetch_all(MYSQLI_ASSOC);

    // Make a way to write "No Reviews Yet" if array empty

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

// must redo with rating
function submitReview($product_id, $rating, $email, $comment, $current_date){
    $sql = "INSERT INTO reviews (product_id, review_rating, email, review_comment, review_date) VALUES (?, ?, ?, ?, ?)";
    $result = executeQuery($sql, "idsss", [$product_id, $rating, $email, $comment, $current_date]);
}

?>