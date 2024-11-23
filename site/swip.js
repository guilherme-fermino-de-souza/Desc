/*var swiper = new swiper(".slideCursos", {
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



let proxDom = document.getElementById('proximo');
let anteDom = document.getElementById('anterior');
let carrosselDom = document.querySelector('.carrossel');
let SliderDom = carrosselDom.querySelector('.carrossel .list');
let thumbnailBorderDom = carrosselDom.querySelector('.thumbnail');
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item');

let tempoOperando = 3000; // tempo para a animação
let timeAutoNext = 7000; // tempo para o próximo automático

proxDom.onclick = function() { 
    showSlider('proximo');
};

anteDom.onclick = function() {
    showSlider('anterior');
};

let operarProxAuto = setTimeout(() => { 
    proxDom.click();
}, timeAutoNext);

function showSlider(type) {
    let SliderItemsDom = SliderDom.querySelectorAll('.carrossel .list .item');

    if (type === 'proximo') {
        SliderDom.appendChild(SliderItemsDom[0]);
        carrosselDom.classList.add('proximo');
    } else {
        SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
        carrosselDom.classList.add('anterior');
    }

    clearTimeout(operarProxAuto);
    operarProxAuto = setTimeout(() => {
        proxDom.click();
    }, timeAutoNext);
}*/

//CRÉDITOS PELO CÓDIGO: LUNDEV   step 1: get DOM
let anteDom = document.getElementById('anterior');//prev
let proxDom = document.getElementById('proximo'); //next

let carrosselDom = document.querySelector('.carrossel'); //carousel
let SliderDom = carrosselDom.querySelector('.carrossel .list'); //carousel e list
let thumbnailBorderDom = document.querySelector('.carrossel .thumbnail'); //thumbnailBorderDom e carousel e thumbnail
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item'); //thumbnailItemsDom e thumbnailBorderDom
let tempoDom = document.querySelector('.carrossel .tempo'); //timeDom e carousel e time[HTML]

thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
let tempoOperando = 3000; //timeRunning
let tempoProxAuto = 7000; //timeAutoNext

proxDom.onclick = function(){ 
    showSlider('proximo');    //nextDom e next
}

anteDom.onclick = function(){
    showSlider('anterior');   //prevDom ou prev
}

let operarInterim; //runTimeOut
let operarProxAuto = setTimeout(() => { //runNextAuto
    proxDom.click();
}, tempoProxAuto);
function showSlider(type){
  let SliderItemsDom = SliderDom.querySelectorAll('.carrossel .list .item');
  let thumbnailItemsDom = document.querySelectorAll('.carrossel .thumbnail .item');
  
  // Lógica de transição para "proximo" (next)
  if(type === 'proximo'){ 
      SliderDom.appendChild(SliderItemsDom[0]);  // Move o primeiro item para o final
      thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);  // Move o primeiro thumbnail para o final
      carrosselDom.classList.add('proximo');  // Adiciona a classe "proximo" para animação
  } else { // Lógica de transição para "anterior" (prev)
      SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);  // Move o último item para o início
      thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);  // Move o último thumbnail para o início
      carrosselDom.classList.add('anterior');  // Adiciona a classe "anterior" para animação
  }

  // Remove a animação de transição após o tempo
  clearTimeout(operarInterim);
  operarInterim = setTimeout(() => {
      carrosselDom.classList.remove('proximo'); // next
      carrosselDom.classList.remove('anterior'); // prev
  }, tempoOperando);

  // Reinicia o auto próximo
  clearTimeout(operarProxAuto);
  operarProxAuto = setTimeout(() => {
      proxDom.click();
  }, tempoProxAuto);
}