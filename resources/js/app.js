import './bootstrap';

window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
        navbar.classList.add("blurred-nav", "p-3");
    } else {
        navbar.classList.remove("blurred-nav", "p-3");
    }
});






