var Swiper = new Swiper(".slideCursos", {
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
    },      /* swiper - card com navegação semelhante ao carrossel */
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
      /*Se for possível usar uma scrollbar*/
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  });