<?php

require_once "./module/database/database.php";

function getProdDetails($product_id){
    
    $sql = "SELECT * FROM products WHERE product_id = ?";
    $result = executeQuery($sql, "i", [$product_id]);
    $product = $result->fetch_assoc();

    // <img src='{$product['product_img']}' alt='album' class='album' />
    echo "<div class='col-multi'>
                <div class='section'>
                    <img src='../assets/" . $product['product_img'] . "' alt='album' class='album' />
                </div>
                <div class='col-left'>
                    <div class='rating-container'>
                        <p class='rating-text'>Rating:</p>
                        <p class='rating-value'>{$product['product_rating']}</p>
                    </div>
                        
                    <h3 class='product-title'>{$product['product_title']}</h3>
                    <h1 class='product-price'>Rs{$product['product_price']}</h1>

                    <div class='section-divider'></div>
                    <p class='product-categories'>Category: {$product['cat_title']}</p>
                    <div class='section-divider'></div>

                    <div class='quantity-container'>
                        <label for='quantity'>Quantity:</label>
                        <input type='number' id='quantity' name='quantity' min='1' value='1'>
                    </div>
                    <div class='but-left'>
                        <button>Add to Cart</button>
                    </div>

                </div>
            </div>";
}

function getProdDesc($product_id){
    $sql = "SELECT * FROM products WHERE product_id = ?";
    $result = executeQuery($sql, "i", [$product_id]);
    $product = $result->fetch_assoc();

    echo "<div class='col-left'>
                <h4> Description</h4>
                <div class='section-divider'></div>

                <h2>{$product['product_title']}</h2>
                <p>{$product['product_desc']}</p>
            </div>";
}

function getProdName($product_id){
    $sql = "SELECT * FROM products WHERE product_id = ?";
    $result = executeQuery($sql, "i", [$product_id]);
    $product = $result->fetch_assoc();

    echo "<title>{$product['product_title']}</title>";
}

?>