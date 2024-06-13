var scrollpos = window.scrollY;
var navbar = document.getElementById("navbar");
var logo_image = document.getElementById("logo_image");

function add_class_on_scroll() {
  navbar.classList.add("navbar-small");
  logo_image.classList.add("logo-style");
}

function remove_class_on_scroll() {
  navbar.classList.remove("navbar-small");
  logo_image.classList.remove("logo-style");
}

window.addEventListener('scroll', function(){ 
    //Here you forgot to update the value
    scrollpos = window.scrollY;

    if(scrollpos > 10){
        add_class_on_scroll();
    }
    else {
        remove_class_on_scroll();
    }
});

document.getElementById("year").innerHTML = new Date().getFullYear()