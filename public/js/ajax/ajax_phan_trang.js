$(document).ready(function() {
  phantrang(1);
  var maloai = 0;
  var gia1 = -1;
  var gia2 = -1;

  function phantrang(page) {
    $.ajax({
      type: 'post',
      url: 'ajax_danh_sach_hoa.php',
      data: {
        page: page,
      },
      success: function(data) {
        hienthi(data, page);
      },
    });
  }

  function doctheoMaLoai(maloai, page) {
    $.ajax({
      type: 'post',
      url: 'ajax_danh_sach_hoa.php',
      data: {
        maloai: maloai,
        page: page,
      },
      success: function(data) {
        hienthi(data, page);
      },
    });
  }

  function doctheoGia(gia1, gia2, page) {
    $.ajax({
      type: 'post',
      url: 'ajax_danh_sach_hoa.php',
      data: {
        gia1: gia1,
        gia2: gia2,
        page: page,
      },
      success: function(data) {
        hienthi(data, page);
      },
    });
  }

  function doctheoMaLoaiGia(maloai, gia1, gia2, page) {
    $.ajax({
      type: 'post',
      url: 'ajax_danh_sach_hoa.php',
      data: {
        maloaigia: maloai,
        loaigia1: gia1,
        loaigia2: gia2,
        page: page,
      },
      success: function(data) {
        hienthi(data, page);
      },
    });
  }

  //click vao link phan trang
  $(document).on('click', '.pagination_link', function() {
    var page = $(this).attr('id');
    phantrang(page);
    if (maloai != 0 && gia1 != -1 && gia2 != -1) {
      doctheoMaLoaiGia(maloai, gia1, gia2, page);
    } else if (maloai != 0) {
      doctheoMaLoai(maloai, page);
    } else if (gia1 != -1 && gia2 != -1) {
      doctheoGia(gia1, gia2, page);
    }

    $('html, body').animate({
      scrollTop: 250,
    }, 'fast');
  });

  //ma loai
  $(document).on('click', '.maLoai', function() {
    var chuoiMaLoai = $(this).attr('id');
    maloai = chuoiMaLoai.replace('maloai_', '');
    if (gia1 != -1 && gia2 != -1) {
      doctheoMaLoaiGia(maloai, gia1, gia2, 1);
    } else {
      doctheoMaLoai(maloai, 1);
    }

    $('html, body').animate({
      scrollTop: 250,
    }, 'fast');
  });

  //Giá
  $(document).on('click', '.tim_theo_gia', function() {
    var chuoiGia = $(this).attr('id');
    var mangGia = chuoiGia.split('-');
    gia1 = mangGia[0];
    gia2 = mangGia[1];
    if (maloai != 0) {
      doctheoMaLoaiGia(maloai, gia1, gia2, 1);
    } else {
      doctheoGia(gia1, gia2, 1);
    }

    $('html, body').animate({
      scrollTop: 250,
    }, 'fast');
  });
});

function hienthi(data, page) {
  $('.ds_hoa').html(data);
  $('#' + page).addClass('active');
}
