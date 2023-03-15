// cookies are stored in this format productID.quantity,productID.quantity,...

function add2Cart(productID, quantity = 1, msg="Item added to cart ") {
	var cartString = getCookie("cart");
	var cart = {};

	// cart is empty
	if (cartString == "") {
		cart[productID] = quantity;
	}
	// cart is not empty
	else {
		// populating the dictionary of cart items
		cart = string2Dict(cartString);

		// the item to be added is not in the cart
		if (cart[productID] == undefined) {
			cart[productID] = quantity;
		}
		// the item to be added is already in the cart
		else {
			cart[productID] = parseInt(cart[productID]) + parseInt(quantity);
		}
	}

	// converting the dictionary to a string
	var cartString = "cart=" + dict2String(cart);

	setCookie(cartString, 30);
	alert(msg);
}

function string2Dict(string) {
	var cart = {};
	cartItems = string.split(",");
	cartItems.forEach((element) => {
		item = element.split(".");
		if (item[0] != "") {
			if (parseInt(item[1]) > 0) cart[item[0]] = item[1];
		}
	});

	return cart;
}

function dict2String(dict) {
	var str = "";
	for (var key in dict) {
		if (dict[key] > 0) str += key + "." + dict[key] + ",";
	}
	return str;
}

function setCookie(cookieString, days) {
	const d = new Date();
	d.setTime(d.getTime() + days * 24 * 60 * 60 * 1000);
	let expires = "expires=" + d.toUTCString();
	document.cookie = cookieString + ";" + expires + ";path=/";
}

function getCookie(name) {
	let cookies = document.cookie;
	let cookieArray = cookies.split(";");
	let cookieDataString = "";

	cookieArray.forEach((element) => {
		cookieData = element.split("=");

		if (cookieData[0].trim() == name) {
			cookieDataString = cookieData[1];
		}
	});

	return cookieDataString;
}



//codes for updating the cart

// Remove product from cart
function removeProduct(onclick="remove-btn") {

	const target = event.target; // Get the clicked element
	const row = target.closest('tr'); // Get the row that contains the clicked button
	row.remove(); // Remove the row from the table
	//updateCart(); // Update the cart total and item count
  }
  
  // Increment product quantity
  function incrementQuantity(button = "plus-btn") {

	const quantityContainer = button.parentElement;
	const quantitySpan = quantityContainer.querySelector('.quantity');
	let quantity = parseInt(quantitySpan.innerText); // Parse the current quantity as an integer
	quantity++;// Increment
	quantitySpan.innerText = quantity; // Update the quantity span
	//updateCart();// Update the cart total and item count

  }
  
  // Decrement product quantity
  function decrementQuantity(button = "minus-btn") {
	const counter = button.parentElement;

	var quantitySpan = counter.querySelector(".quantity");
  var quantity = parseInt(quantitySpan.innerText);
	//const quantityContainer = button.parentElement; // Get the quantity container
	//const quantitySpan = quantityContainer.querySelector('.quantity'); // Get the quantity span

	//let quantity = parseInt(quantitySpan.innerText); // Parse the current quantity as an integer
	if (quantity > 1) { // Check if the quantity is greater than 1
	  quantity--; // Decrement the quantity
	  quantitySpan.innerText = quantity; // Update the quantity span
	  //updateCart(); // Update the cart total and item count
	}
  }

// Update the cart total and item count
/*function updateCart() {
	const cartItems = document.querySelectorAll('.cart-item'); // Get all cart items
	let itemCount = 0; // Initialize the item count
	let total = 0; // Initialize the total

	// Loop through each cart item
	cartItems.forEach((cartItem) => {
	  const quantity = parseInt(cartItem.querySelector('.quantity').innerText); // Get the quantity
	  const price = parseFloat(cartItem.querySelector('.price').innerText.replace('$', '')); // Get the price
	  total += quantity * price; // Update the total
	  itemCount += quantity; // Update the item count
	});

	// Update the cart total and item count
	document.querySelector('.item-count').innerText = itemCount;
	document.querySelector('.total').innerText = total.toFixed(2);
  }*/