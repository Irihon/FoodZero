import $ from 'jquery'; // Import jQuery

import Foundation from 'foundation-sites';

(function () {
    document.addEventListener('DOMContentLoaded', function () {
        $(document).foundation(); // Initialize Foundation using jQuery
    });
})(jQuery);

document.addEventListener("DOMContentLoaded", function () {
    const burgerIcon = document.querySelector(".menu-icon");
    const menuOverlay = document.querySelector(".menu-overlay");
    const closeMenu = document.querySelector(".close-menu");

    // Open Menu
    burgerIcon.addEventListener("click", function () {
        menuOverlay.classList.add("active");
    });

    // Close Menu (via close button)
    closeMenu.addEventListener("click", function () {
        menuOverlay.classList.remove("active");
    });

    // Close Menu (via clicking outside the menu content)
    menuOverlay.addEventListener("click", function (e) {
        if (e.target === menuOverlay) {
            menuOverlay.classList.remove("active");
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.testimonial-swiper', {
        navigation: {
            nextEl: '.swiper-arrow-next',
            prevEl: '.swiper-arrow-prev',
            loop: true,
        },
        on: {
            transitionEnd: function () {
                const currentSlide = document.querySelector('.swiper-slide.swiper-slide-active');
                let slideNumber = this.realIndex + 1; // ← Corrected here
                document.querySelector('.slide-counter .current-slide').textContent = slideNumber;
            }
        }
    });
});

