<?php

require_once "./module/database/database.php";

function getPro($product_id){
    
    $sql = "SELECT * FROM products WHERE product_id = ?";
    $result = executeQuery($sql, "i", [$product_id]);
    $product = $result->fetch_assoc();

    echo "<div class='col-multi'>
                <div class='section'>
                    <img src='{$product['product_img']}' alt='album' class='album' />
                </div>
                <div class='col-left'>
                    <div class='rating-container'>
                        <span class='star-rating'>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                        </span>
                        <span class='rating-value'>4.5</span>
                    </div>
                        
                    <h3 class='product-title'>{$product['product_title']}</h3>
                    <h1 class='product-price'>Rs{$product['product_price']}</h1>

                    <div class='section-divider'></div>
                    <p class='product-categories'>Category: {$product['cat_title']}</p>
                    <div class='section-divider'></div>

                    <div class='quantity-container'>
                        <label for='quantity'>Quantity:</label>
                        <input type='number' id='quantity' value='1'>
                    </div>
                    <div class='but-left'>
                        <button>Add to Cart</button>
                    </div>

                </div>
            </div>";
}

?>