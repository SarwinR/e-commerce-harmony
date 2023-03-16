<?php

require_once "./module/database/database.php";

function getCartItems(){
  // Get cart details from cookie
  $cartString = $_COOKIE['cart'];

  $items = explode(",", $cartString);
  array_pop($items);
  
  foreach ($items as $item) {
    list($id, $quantity) = explode(".", $item);
    $product = fetchFromDB($id);
    displayItems($product, $quantity);
  }
}

function displayItems($product, $quantity){
  echo "<tr>";
  echo "<td>" . $product['product_title'] . "</td>";
  echo "<td><img src='../assets/product_img/" . $product['product_img'] . "' alt='" . $product['product_title'] . "' width='250' height='200'></td>";
  echo "<td>";

  echo "<div class='counter'>";
  echo "<button class='minus-btn' onclick= 'decrementQuantity(this, " . $product['product_id'] . ")'>-</button>";
  echo "<span class='quantity'>" . $quantity . "</span>";
  echo "<button class='plus-btn' onclick='incrementQuantity(this, " . $product['product_id'] . ")'>+</button>";
  echo "</div>";
  echo "</td>";

  echo "<td class='price'>Rs " . ($product['product_price'] * $quantity) . "</td>";
  echo "<td><button onclick='removeProduct(" . $product['product_id'] . ", " . $quantity . ")'>Remove</button></td>";
  
  echo "</tr>";
}

function fetchFromDB($product_id){
  $sql = "SELECT * FROM products WHERE product_id = ?";
  $result = executeQuery($sql, "i", [$product_id]);
  $product = $result->fetch_assoc();
  return $product;
}
?>
