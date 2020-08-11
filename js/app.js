$(document).foundation()

//Simple client side form validation:
const form = document.querySelector('form');
var button = document.getElementById('form_send');
var fieldCheck = false

function updateValue(e) {
    if (form.checkValidity()) {
        button.disabled = false;
    } else {
        button.disabled = true;
    }
}