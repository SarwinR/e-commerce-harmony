function loadProduct(category) {
	//disable the button that was clicked
	// const buttons = document.querySelectorAll(".category-button");
	// buttons.forEach((button) => {
	// 	button.disabled = false;
	// });
	// document.getElementById(category).disabled = true;

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("titles").innerHTML = category;
			document.getElementsByClassName("products-container")[0].innerHTML =
				this.responseText;
		}
	};

	xmlhttp.open("GET", "module/shop/shop2.php?category=" + category, true);
	xmlhttp.send();
}

function loadIndividualProduct(productID) {
	// window.location.href = "http://localhost/e-commerce-harmony/src/singleProduct.php?product_id=" + productID;
	window.location.href = "./singleProduct2.php?product_id=" + productID;
}
