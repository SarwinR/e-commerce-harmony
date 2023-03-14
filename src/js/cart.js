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

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }
}