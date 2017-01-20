// javascript functions
jQuery(document).foundation();

jQuery(document).ready(function() {
  jQuery('.slider-container').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    easing: 'swing',
    speed: 700,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    appendDots: '.slider-container',
    appendArrows : '.slider-container'
  });
});
