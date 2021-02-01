$(document).foundation()

//Simple client side form validation:
if (document.URL.includes('contact.html')) {
    const form = document.querySelector('form');
    var button = document.getElementById('form_send');
    form.addEventListener('input', updateValue);
    function updateValue(e) {
        if (form.checkValidity()) {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    }
}


if (document.URL.includes('index.html')) {
    var button1 = document.getElementById('featured-button-1');
    var button2 = document.getElementById('featured-button-2');

    //Featured project image filter
    button1.onmouseover = function () {
        document.getElementById('featured-image-1').style.filter = "contrast(130%)";
        document.getElementById('featured-image-1').style.transition = "all 0.25s ease-in-out";
        button1.onmouseleave = function () {
            document.getElementById('featured-image-1').style.filter = "contrast(100%)";
            document.getElementById('featured-image-1').style.transition = "all .25s ease-in-out";
        }
    }

    button2.onmouseover = function () {
        document.getElementById('featured-image-2').style.filter = "contrast(120%)";
        document.getElementById('featured-image-2').style.transition = "all 0.25s ease-in-out";
        button2.onmouseout = function () {
            document.getElementById('featured-image-2').style.filter = "contrast(100%)";
            document.getElementById('featured-image-2').style.transition = "all .25s ease-in-out";
        }
    }
}
