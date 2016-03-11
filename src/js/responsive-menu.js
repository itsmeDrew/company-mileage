// ==== MOBILE MENU ==== //

;(function($){
  $(function(){
    $('.js-mobile-menu').click(function() {
      var $this = $(this);

      $('body').toggleClass('menu-active');
    });
  });
}(jQuery));
