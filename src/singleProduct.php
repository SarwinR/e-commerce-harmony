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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
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
                
                <h2>Customer Reviews</h2>
                <div class="rating-container">
                    <span class="star-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </span>
                    <span class="rating-value">4.5</span>
                </div>

                <br>
                <div class="section-divider"></div>

                <ul class="reviews">
                    <li>
                        <div class="review-container">
                            <img src="../assets/img/user.jpg" alt="user" class="commenter-image" />
                            <div class="comment">
                                <h6>Feiz Roojee</h6>
                                <div class="rating-container">
                                    <span class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                <span class="comment-date">September 3, 2020</span>
                            </div>
                        </div>
                    </li>
                    <br>
                    <div class="section-divider"></div>
                    <li>
                        <div class="review-container">
                            <img src="../assets/img/user.jpg" alt="user" class="commenter-image" />
                            <div class="comment">
                                <h6>Feiz Roojee</h6>
                                <div class="rating-container">
                                    <span class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                <span class="comment-date">September 3, 2020</span>
                            </div>
                        </div>
                    </li>
                    <br>
                    <div class="section-divider"></div>
                    <li>
                        <div class="review-container">
                            <img src="../assets/img/user.jpg" alt="user" class="commenter-image" />
                            <div class="comment">
                                <h6>Feiz Roojee</h6>
                                <div class="rating-container">
                                    <span class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                <span class="comment-date">September 3, 2020</span>
                            </div>
                        </div>
                    </li>
                </ul>

                <!-- should link to an external page with all reviews -->
                <button class="but-center">Show all reviews</button>

                <form method="post" class="review-form" action="./singleProduct.php">
                    <h4>Add a Review</h4>
                    <div class="review-container">
                        <h6>Your Ratings:</h6>
                        <div class="rating-container">
                            <span class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                    
                    <textarea required="required" name="comment" placeholder="Type your comment...."></textarea>
                    <input required="required" type="email" name="email" placeholder="Type your email...." />
                    
                    <?php
                        if(isset($error)){
                            echo  "<p class='error-text'>" . $error . "</p>";
                        }
                    ?>
                    
                    <input type="submit" name="submit" value="Submit" />
                </form>

            </div>
        </div>
    
    </body>
    
</html>