// import Swiper JS
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';



const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    autoplay: {
        delay: 2500, // Задержка между прокруткой слайдов (в миллисекундах)
        disableOnInteraction: false, // Если true, то автопрокрутка остановится после взаимодействия с пользователем
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    slidesPerView: 4,
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
  
