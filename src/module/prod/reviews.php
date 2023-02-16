<?php

require_once "./module/database/database.php";

if (isset($_POST['submit'])) {
    $product_id = $_GET['id'];
    $email= $_POST['email'];
    $comment = $_POST['comment'];
    $current_date = date("Y-m-d");
    $error = submitReview($product_id, $email, $comment, $current_date);
}

// function getReviews($product_id){
//     $sql = "SELECT * FROM reviews WHERE product_id = ?";
//     $result = executeQuery($sql, "i", [$product_id]);
//     $reviews = $result->fetch_all(MYSQLI_ASSOC);

    
// }

// must redo with rating
function submitReview($product_id, $email, $comment, $current_date){
    $sql = "INSERT INTO reviews (product_id, email, review_comment, review_date) VALUES (?, ?, ?, ?)";
    $result = executeQuery($sql, "isss", [$product_id, $email, $comment, $current_date]);
    
    // not sure
    if (!$result) {
        $error = "Review submitted successfully";
        return $error;
    }
}

?>