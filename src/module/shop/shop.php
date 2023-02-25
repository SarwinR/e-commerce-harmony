<?php

require_once "../database/database.php";

$category = $_REQUEST["category"];

$sql = "SELECT * FROM products WHERE cat_title = ?";
$result = executeQuery($sql, "s", [$category]);

if ($result->num_rows == 0) {
    echo "<h1>No products found</h1>";
} else {
    while ($row = $result->fetch_assoc()) {
        echo "<button class='product-button' onclick='loadIndividualProduct(" . $row["product_id"] . ")'><div class='product'>
            <img src='../assets/product_img/" . $row["product_img"] . "'/>
            <h3>" . $row["product_title"] . "</h3>
            <p>Price: " . $row["product_price"] . "</p>
            </div></button>";
    }
}
