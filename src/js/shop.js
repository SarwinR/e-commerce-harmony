function loadProduct(category) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("cat_title").innerHTML = category;
			document.getElementsByClassName("products-container")[0].innerHTML =
				this.responseText;
		}
	};

	xmlhttp.open("GET", "module/shop/shop.php?category=" + category, true);
	xmlhttp.send();
}
