const form = document.querySelector("checkout-form");
const nameInput = document.querySelector("#name");
const emailInput = document.querySelector("#email");
const addressInput = document.querySelector("#address");
const cardNumberInput = document.querySelector("#card-number");
const expirationDateInput = document.querySelector("#expiration-date");
const cvvInput = document.querySelector("#cvv");


function add2Cart(onclick = form.submit) {
alert("Order placed successfully!");
      form.reset();
    }