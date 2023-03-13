// cookies are stored in this format productID.quantity,productID.quantity,...

function add2Cart(productID) {
	var cartString = getCookie("cart");
	var cart = {};

	// cart is empty
	if (cartString == "") {
		cart[productID] = 1;
	}
	// cart is not empty
	else {
		// populating the dictionary of cart items
		cartItems = cartString.split(",");
		cartItems.forEach((element) => {
			item = element.split(".");
			if (item[0] != "") cart[item[0]] = item[1];
		});

		// the item to be added is not in the cart
		if (cart[productID] == undefined) {
			cart[productID] = 1;
		}
		// the item to be added is already in the cart
		else {
			cart[productID] = parseInt(cart[productID]) + 1;
		}
	}

	// converting the dictionary to a string
	var cartString = "cart=";
	for (var key in cart) {
		cartString += key + "." + cart[key] + ",";
	}

	setCookie(cartString, 30);
	alert("Item added to cart");
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
