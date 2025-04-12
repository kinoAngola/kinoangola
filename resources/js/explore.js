import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();








/*======================================== FOOD ======================================== */
var FoodSwiper = new Swiper(".FoodSwiper", {

    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }, slidesPerView: "auto",
    autoplay: {
      delay: 7000,
      disableOnInteraction: false,
    },
    breakpoints: {
      600: {
        slidesPerView: 2,
        spaceBetween: 25,
      },
      850: {
        slidesPerView: 3,
        spaceBetween: 25,
      },
      1350: {
        slidesPerView: 4,
        spaceBetween: 25,
      },
      1600: {
        slidesPerView: 5,
        spaceBetween: 25,
      },
      2150: {
        slidesPerView: 6,
        spaceBetween: 25,
      },
    },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

// CARD PRATOS: Função para ocultar o texto, aumentar o tamanho dos ícones e manter visíveis os ícones
function adjustDisplay() {
    const spans = document.querySelectorAll('.tagincolhe');
  
    // Verifica se a largura da tela é menor ou igual a 600px
    if (window.innerWidth <= 360) {
      spans.forEach(span => {
        // Aumenta o tamanho do ícone para 2rem
        const icon = span.querySelector('i');
        if (icon) {
          icon.style.fontSize = '.9rem';
        }
  
        // Aumenta o padding da tag <span> para 1rem
        span.style.padding = '0rem';
        span.style.padding = '.4rem';
  
        // Esconde o texto e deixa visível o ícone
        span.childNodes.forEach(child => {
          if (child.nodeType === Node.TEXT_NODE) {
            child.textContent = ''; // Esconde o texto
          }
        });
      });
    } else {
      spans.forEach(span => {
        // Restaura o texto quando a tela é maior que 600px
        span.childNodes.forEach(child => {
          if (child.nodeType === Node.TEXT_NODE) {
            if (span.classList.contains('pop')) {
              child.textContent = 'Popular'; // Restaura o texto de "Popular"
            } else if (span.classList.contains('freeshipping')) {
              child.textContent = 'Entrega'; // Restaura o texto de "Entrega"
            }
          }
        });
  
        // Restaura o tamanho original do ícone quando a tela for maior que 600px
        const icon = span.querySelector('i');
        if (icon) {
          icon.style.fontSize = ''; // Restaura o tamanho original do ícone
        }
  
        // Restaura o padding original da tag <span>
        span.style.padding = ''; // Restaura o padding original
      });
    }
  }



  
const filtros_ = document.querySelectorAll('.filtros');
var sidebar_ = document.querySelectorAll('.sidebar');

/* 
filtros_.addEventListener('mouseenter', function () {
  sidebar_.style.transform = 'translateX(0%)';
}); */

function abrirSide() {
  sidebar_.style.transform = 'translateX(0%)';
}