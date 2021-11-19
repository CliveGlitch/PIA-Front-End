$(window).load(function(){
    $('.title-carousel').css({ 'top': 90+'px', 'opacity': 1 });
    $('.text-carousel').css({ 'opacity': 1 });
    $('.more-carousel').css({ 'opacity': 1, 'bottom': 90+'px' });
  });
  $('#header-carousel').on('slide-carousel.bs.carousel', function () {
    $('.title-carousel').css({ 'top': 90+'px', 'opacity': 1 });
    $('.text-carousel').css({ 'opacity': 1 });
    $('.more-carousel').css({ 'opacity': 1, 'bottom': 90+'px' });
  });
  $('#header-carousel').on('slide-carousel.bs.carousel', function () {
    $('.title-carousel').css({ 'top': 0+'px', 'opacity': 0 });
    $('.text-carousel').css({ 'opacity': 0 });
    $('.more-carousel').css({ 'opacity': 0, 'bottom': 0+'px' });
  });
  function carouselFix() {
    $('.carousel.slide-carousel').carousel(pause);
    $('.carousel.slide-carousel.item-carousel').removeClass('active');
    $('.carousel.slide-carousel').find('.itemfirst').addClass('active');
  }
  $(document).ready(function() {      
    carouselFix();
  });