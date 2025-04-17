// Função para alterar a foto de capa
function changeCoverPhoto(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('cover-perfil').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

// Função para alterar a foto de perfil
function changeProfilePhoto(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('profile-photo').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}












var swiper2 = new Swiper(".testmonials", {
    grabCursor: true,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    effect: "creative",
    creativeEffect: {
      prev: {
        shadow: true,
        translate: ["-120%", 0, -500],
      },
      next: {
        shadow: true,
        translate: ["120%", 0, -500],
      },
      centeredSlides: true,
    },
  });


  document.querySelectorAll('.mySwiper2 .swiper-wrapper .swiper-slide').forEach(function (slide) {
    slide.addEventListener('mouseenter', function () {
      swiper2.autoplay.stop();
    });
  
    // Retoma o autoplay quando o mouse sair do swiper-slide
    slide.addEventListener('mouseleave', function () {
      swiper2.autoplay.start();
    });
  });