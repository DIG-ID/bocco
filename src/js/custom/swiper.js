import Swiper from 'swiper/bundle';

$(function() {
  const partnersSwiper = new Swiper('.partners-swiper', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    speed: 6000,
    autoplay: {
      delay: 1,
      disableOnInteraction: false,
    },
  });

  const testimonialsThumbs = new Swiper('.testimonials-swiper-thumbnails', {
    loop: true,
    spaceBetween: 30,
    speed: 400,
    slidesPerView: 1,
    effect: 'fade',
    allowTouchMove: false,
    pagination: {
      el: '.testimonials-pagination',
      type: 'bullets',
      clickable: true,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });

  const testimonialsSwiper = new Swiper('.testimonials-swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    speed: 400,
    effect: 'fade',
    allowTouchMove: false,
    pagination: {
      el: '.testimonials-pagination',
      type: 'bullets',
      clickable: true,
    },
    thumbs: {
      swiper: testimonialsThumbs,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
});