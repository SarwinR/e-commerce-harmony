
// cookies are stored in this format productID.quantity,productID.quantity,...
function add2Cart(productID, quantity = 1, msg="Item added to cart ") {
	var cartString = getCookie("cart");
	var cart = {};

	if (cartString == "") {
		cart[productID] = quantity;
	}
	
	else {
		
		cart = string2Dict(cartString);

		if (cart[productID] == undefined) {
			cart[productID] = quantity;
		}
		
		else {
			cart[productID] = parseInt(cart[productID]) + parseInt(quantity);
		}
	}

	var cartString = "cart=" + dict2String(cart);
	setCookie(cartString, 30);

	if (msg != "")
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


// Remove product from cart
function removeProduct(productID, quantity) {
	const target = event.target;
	const row = target.closest('tr');
	row.remove();

	add2Cart(productID, -quantity, "");
	updateTotal(); // Update the cart total
}
  
// Increment product quantity
function incrementQuantity(button = "plus-btn", productID) {
	const counter = button.parentElement;
	var quantitySpan = counter.querySelector('.quantity');
	var quantity = parseInt(quantitySpan.innerText);
	var oldQty = quantity;
	quantity++;
	quantitySpan.innerText = quantity;

	add2Cart(productID, 1, "");
	updatePrice(counter, oldQty, quantity); // Update the cart total and per item price
}

// Decrement product quantity
function decrementQuantity(button = "minus-btn", productID) {
	const counter = button.parentElement;
	var quantitySpan = counter.querySelector(".quantity");
	var quantity = parseInt(quantitySpan.innerText);
	var oldQty = quantity;
	if (quantity > 1) {
		quantity--;
		quantitySpan.innerText = quantity;

		add2Cart(productID, -1, "");
		updatePrice(counter, oldQty, quantity); // Update the cart total and per item price
	}
}

function updatePrice(counter, oldQty, newQty){
	var row = counter.closest("tr");
	var priceTD = row.querySelector(".price");
	var price = parseFloat(priceTD.innerText);
	var indvPrice = price / oldQty;
	priceTD.innerText = (indvPrice * newQty);

	updateTotal();
}

function updateTotal(){
	var total = 0;
	var rows = document.querySelectorAll("tr");
	rows.forEach(function(row, index) {
		// Skip the first row (index 0)
		if (index === 0) {
			return;
		}

		var priceTD = row.querySelector('.price');
		var price = parseFloat(priceTD.innerText);
		total += price;
		});
	document.querySelector(".total-price").innerText = "Total Price: Rs " + total;
}