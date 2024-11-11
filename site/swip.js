var swiper = new Swiper(".slideCursos", {
    slidesPerView: 2,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
      0: {
        slidesPerView: 1,
      },
      750: {
        slidesPerView: 2,
      },
    },
      // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  });