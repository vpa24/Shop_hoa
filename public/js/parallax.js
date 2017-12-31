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

  if ($('.item').hasClass('dshoa')) {
    if (wScroll > $('.dshoa').offset().top - 300) {
      $('.dshoa').each(function(i) {
        setTimeout(function() {
          $('.dshoa').eq(i).addClass('is-showing');
        }, 150 * (i + 1));
      });
    }
  }
});
