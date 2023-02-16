<?php
    require_once "./module/product/functions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>*Product Name*</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <?php
                getPro(1);
            ?>
        </div>

        <div class="container">
            <div class="col-left">
                <h4> Description</h4>
                <div class="section-divider"></div>

                <h2>*Product Name*</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    <br> <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
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

                <form method="post" class="review-form" action="./singleProduct.html">
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
                    
                    <textarea name="comment" placeholder="Type your comments...."></textarea>
                    <input required="required" type="text" name="username" placeholder="Type your name...." />
                    <input required="required" type="email" placeholder="Type your email...." />
                    <input type="submit" name="submit" value="Submit" />

                </form>

            </div>
        </div>
    
    </body>
    
</html>