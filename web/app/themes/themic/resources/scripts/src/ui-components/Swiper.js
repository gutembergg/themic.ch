import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

document.addEventListener('DOMContentLoaded', () => {
  const btnPrev = document.querySelector('.swiper-button-prev');
  const btnNext = document.querySelector('.swiper-button-next');

  new Swiper('.swiper', {
    modules: [Autoplay, Navigation, Pagination],
    slidesPerView: 1,
    loop: true,
    speed: 3000,
    autoplay: {
      delay: 4000,
    },
    navigation: {
      nextEl: btnNext,
      prevEl: btnPrev,
    },
  });
});
