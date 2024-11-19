const swiper = new Swiper(".slideCursos", { //S maiúsculo!!!!
      loop: true,
      slidesPerView: 2,
      spaceBetween: 30,
      grabCursor: 'true',
      pagination: {
        el: "swiper-pagination",
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: "swiper-button-next",
        prevEl: "swiper-button-prev",
      },
      breakpoints:{
        0: {
          slidesPerView: 1,
        },
        460: {
          slidesPerView: 2,
        },
        800: {
          slidesPerView: 2,
        },
      },
    });
