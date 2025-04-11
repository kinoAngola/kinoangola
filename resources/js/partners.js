import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();







/*======================================== TESTEMUNHO ======================================== */
var swiper = new Swiper(".testimonials-partners", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,autoplay: {
      delay: 7000,
      disableOnInteraction: false,
    },
    breakpoints: {
      850: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1350: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1600: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      2150: {
        slidesPerView: 5,
        spaceBetween: 30,
      },
    },
    spaceBetween: 30,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });