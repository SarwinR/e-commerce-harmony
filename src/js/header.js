let cookies = document.cookie;
let cookieArray = cookies.split(";");
let cookieDataString = "";

cookieArray.forEach((element) => {
	cookieData = element.split("=");

	if (cookieData[0].trim() == "loggedin") {
		cookieDataString = cookieData[1];
	}
});

if (cookieDataString == "1") {
	document.getElementById("login_txt").style.display = "none";
	document.getElementById("login_img").style.display = "block";
} else {
	document.getElementById("login_txt").style.display = "block";
	document.getElementById("login_img").style.display = "none";
}
