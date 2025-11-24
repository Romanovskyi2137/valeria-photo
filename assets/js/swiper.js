document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.stories-slider', {
        // Custom navigation arrows defined in HTML
        navigation: {
            nextEl: '.custom-next',
            prevEl: '.custom-prev',
        },
        // watchOverflow: false, // always show navigation arrows
        speed: 800,
        spaceBetween: 30,
        loop: true, // Infinite scrolling

        // Responsive breakpoints
        breakpoints: {
            // Mobile: 1 slide, centered
            320: {
                slidesPerView: 1, 
                spaceBetween: 15,
                centeredSlides: true 
            },
            // Tablet: 3 slides
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
                centeredSlides: false
            },
            // Desktop: 4 slides
            1200: {
                slidesPerView: 3, 
                spaceBetween: 40,
                centeredSlides: false 
            },
            // Large screens: 5 slides
            1600: {
                slidesPerView: 3,
                spaceBetween: 50
            }
        }
    });
});