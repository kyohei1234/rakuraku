$(function() {
  console.log(1);
  $(window).on('scroll', function() {
    if ($(window).scrollTop() <= 0) {
      if ($('body').hasClass('scrolling')) {
          $('body').removeClass('scrolling');
      }
    } else {
      $('body').addClass('scrolling');
    }

  });

});