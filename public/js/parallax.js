$(window).scroll(function() {
  var wScroll = $(this).scrollTop();
  if ($('.item').hasClass('hoa')) {
    if (wScroll > $('.hoa').offset().top - ($(window).height() / 1.2)) {
      $('.hoa').each(function(i) {
        setTimeout(function() {
          $('.hoa').eq(i).addClass('is-showing');
        }, 150 * (i + 1));
      });
    }
  }
});
