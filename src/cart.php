<?php

require_once './module/cart/items.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Harmony Cart</title>
  <link rel="stylesheet" href="./css/cart.css">
  <script src="./js/cart.js"></script>
</head>
<body>
  
  <iframe src="header.html" width="100%" height="100px" frameborder="0"></iframe>

  <h1>Harmony Cart</h1>
  <table>
    <tr>
      <th>Product Name</th>
      <th>Product Image</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Action</th>
    </tr>

    <?php 

    getCartItems();

    ?>

  </table>
  <div class="total-price">Total Price: Rs 0</div>
  <br>

  <form action="checkout.html" method="post">
  <button type="checkout1" value="Checkout">Checkout</button>

  

</div>
</form>

<footer>
		<object
			type="text/html"
			width="100%"
			height="310px"
			data="./footer.html"
		></object>
	</footer>
  
</body>
</html>
