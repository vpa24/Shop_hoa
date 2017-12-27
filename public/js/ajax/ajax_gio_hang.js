$(document).ready(function() {
  $.ajax({
    type: 'post',
    url: 'tong_gio_hang.php',
    data: {
      total_cart_items: 'totalitems',
    },
    success: function(response) {
      document.getElementById('tong_sl_hoa').innerHTML = response;
    },
  });
});

function cart(id, sl) {
  var MaHoa = id;
  $.ajax({
    type: 'post',
    url: 'gio_hang.php',
    data: {
      MaHoa: MaHoa,
      sl: sl,
    },
    success: function (response) {
      document.getElementById('tong_sl_hoa').innerHTML = response;
    },
  });
}

function show_cart() {
  $.ajax({
    type: 'post',
    url: 'hien_gio_hang.php',
    data: {
      showcart: 'cart',
    },
    success: function (response) {
      document.getElementById('mycart').innerHTML = response;

      //$('#mycart').slideToggle();
    },
  });
}
