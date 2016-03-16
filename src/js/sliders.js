// ==== MOBILE MENU ==== //

;(function($){
  $(function(){
    $('.js-feature-slider__slides').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.js-feature-slider__nav'
    });
    $('.js-feature-slider__nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.js-feature-slider__slides',
      dots: true,
      centerMode: true,
      focusOnSelect: true
    });
  });
}(jQuery));
