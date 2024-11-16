 /* Botão "ler mais/menos" no card */
 var button = document.getElementsByClassName('botaoCursoCard');

 button.addEventListener('click', function() {
   var card = document.querySelector('#involucroCard');
   card.classList.toggle('active');
 
   if(card.classList.contains(active)){
     return button.textContent = 'Ler menos';
   }
 
   button.textContent = 'Ler mais';
 })

 /* swiper - card com navegação semelhante ao carrossel */
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
      // Se for possível usar uma scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  });