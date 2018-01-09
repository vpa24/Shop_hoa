var cartWrapper = $('.cd-cart-container');
var tongThanhTien = 0;

function addToCart(MaHoa, sl) {
  var cartIsEmpty = cartWrapper.hasClass('empty');
  addProduct(MaHoa, sl);
  updateCartCount(cartIsEmpty);
  cartWrapper.removeClass('empty');
}

function addToCartCT(MaHoa) {
  var cartIsEmpty = cartWrapper.hasClass('empty');
  var sl = parseInt(document.getElementById('sl_' + MaHoa).value);
  addProduct(MaHoa, sl);
  updateCartCount(true, sl);
  cartWrapper.removeClass('empty');
}

function tang(mahoa) {
  $.ajax({
    type: 'post',
    url: 'tang_giam_sl_gio_hang.php',
    data: {
      tang: 'tang',
      mahoa: mahoa,
    },
    success: function(response) {
      cap_nhap_gia_gio_hang(response, mahoa);
      updateCartCount(true, 1);
    },
  });
}

function giam(mahoa) {
  $.ajax({
    type: 'post',
    url: 'tang_giam_sl_gio_hang.php',
    data: {
      giam: true,
      mahoa: mahoa,
    },
    success: function(response) {
      cap_nhap_gia_gio_hang(response, mahoa);
      updateCartCount(true, -1);
    },
  });
}

function cap_nhap_gia_gio_hang(response, mahoa) {
  var sl = 0;
  var tongTienTheoMaHoa = 0;
  var mang = jQuery.parseJSON(response);
  sl = mang.sl;
  tongTienTheoMaHoa = mang.tongTienTheoMaHoa;
  if (sl == 1) {
    document.getElementById('tru_' + mahoa).setAttribute("onClick", "xoagiohang(" + mahoa + "," + sl + "," + tongTienTheoMaHoa + ");");
  } else {
    document.getElementById('tru_' + mahoa).setAttribute("onClick", "giam(" + mahoa + ");");
  }

  document.getElementById('tong_' + mahoa).innerHTML = numeral(tongTienTheoMaHoa).format('0,0') + ' đ';
  document.getElementById('gio_hang' + mahoa).innerHTML = sl;
  document.getElementById('xoa_' + mahoa).setAttribute("onClick", "xoagiohang(" + mahoa + "," + sl + "," + tongTienTheoMaHoa + ");");
  cap_nhap_tong_tt();

}

function cap_nhap_tong_tt() {
  $.ajax({
    url: 'cap_nhap_tong_tt.php',
    success: function(response) {
      tongThanhTien = response;
      document.getElementById('tong_thanh_tien').innerHTML = numeral(response).format('0,0') + ' đ';
    },
  });
}

if (cartWrapper.length > 0) {
  //store jQuery objects
  var cartBody = cartWrapper.find('.body');
  var cartList = cartBody.find('ul').eq(0);
  var cartTotal = cartWrapper.find('.checkout').find('span');
  var cartTrigger = cartWrapper.children('.cd-cart-trigger');
  var cartCount = cartTrigger.children('.count');
  var undoTimeoutId;

  //open/close cart
  cartTrigger.on('click', function(event) {
    $.ajax({
      type: 'post',
      url: 'hien_gio_hang.php',
      data: {
        showcart: 'cart',
      },
      success: function(response) {
        document.getElementById('listGioHang').innerHTML = response;
      },
    });

    cap_nhap_tong_tt();
    event.preventDefault();
    toggleCart();
  });

  //close cart when clicking on the .cd-cart-container::before (bg layer)
  cartWrapper.on('click', function(event) {
    if ($(event.target).is($(this))) toggleCart(true);
  });

}

function toggleCart(bool) {
  var cartIsOpen = (typeof bool === 'undefined') ? cartWrapper.hasClass('cart-open') : bool;

  if (cartIsOpen) {
    cartWrapper.removeClass('cart-open');
    $('.footer_gio_hang').show('slow');
    clearInterval(undoTimeoutId);
    cartList.find('.deleted').remove();
    setTimeout(function() {
      cartBody.scrollTop(0);
      if (Number(cartCount.find('li').eq(0).text()) == 0) cartWrapper.addClass('empty');
    }, 500);
  } else {
    cartWrapper.addClass('cart-open');
  }
}

function xoagiohang(mahoa, sl, gia) {
  $.ajax({
    type: 'post',
    url: 'xoagiohang.php',
    data: {
      mahoa: mahoa,
    },
  });
  $('#delete' + mahoa).hide('slow');
  cartList.find('.deleted').remove();
  updateCartTotal(-gia);
  updateCartCount(true, -sl);
}

function updateCartTotal(price) {
  tongThanhTien = parseInt(tongThanhTien) + parseInt(price);
  if (tongThanhTien == 0)
    $('.footer_gio_hang').hide('slow');
  document.getElementById('tong_thanh_tien').innerHTML = numeral(tongThanhTien).format('0,0') + ' đ';
}

function addProduct(MaHoa, sl) {
  $.ajax({
    type: 'post',
    url: 'gio_hang.php',
    data: {
      MaHoa: MaHoa,
      sl: sl,
    },
  });
}

function updateCartCount(emptyCart, quantity) {
  if (typeof quantity === 'undefined') {
    var actual = Number(cartCount.find('li').eq(0).text()) + 1;
    var next = actual + 1;
    cartCount.find('li').eq(0).text(actual);
    cartCount.find('li').eq(1).text(next);
  } else {
    var actual = Number(cartCount.find('li').eq(0).text()) + quantity;
    var next = actual + 1;
    cartCount.find('li').eq(0).text(actual);
    cartCount.find('li').eq(1).text(next);
  }

  cartCount.addClass('update-count');

  setTimeout(function() {
    cartCount.find('li').eq(0).text(actual);
  }, 150);

  setTimeout(function() {
    cartCount.removeClass('update-count');
  }, 200);

  setTimeout(function() {
    cartCount.find('li').eq(1).text(next);
  }, 230);

}
