// javascript functions
var j = jQuery.noConflict();
j(document).foundation();

j(document).ready(function() {

  j('.slider-container').slick({
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

  j(document).on('click', '.open-search > a', function(e) {
    e.preventDefault();

    j('.search-form-container').slideToggle(300);
  });
});
