import './bootstrap';

window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
        navbar.classList.add("blurred-nav", "p-3");
    } else {
        navbar.classList.remove("blurred-nav", "p-3");
    }
});

    document.addEventListener("DOMContentLoaded", function () {
    const testimonials = document.querySelectorAll(".testimonial");
    let currentIndex = 0;

    function updateSlider() {
    testimonials.forEach((testimonial, index) => {
    if (index === currentIndex) {
    testimonial.classList.add("scale-100", "opacity-100");
    testimonial.classList.remove("scale-90", "opacity-50");
} else {
    testimonial.classList.add("scale-90", "opacity-50");
    testimonial.classList.remove("scale-100", "opacity-100");
}
});
}

    function nextSlide() {
    currentIndex = (currentIndex + 1) % testimonials.length;
    updateSlider();
}

    function prevSlide() {
    currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
    updateSlider();
}

    document.getElementById("next").addEventListener("click", nextSlide);
    document.getElementById("prev").addEventListener("click", prevSlide);
});


