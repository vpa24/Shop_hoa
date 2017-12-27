function xoagiohang(id) {
  $.ajax({
    type: 'post',
    url: 'xoagiohang.php',
    data: {
      id: id,
    },
    success: function (data) {
      $('#delete' + id).hide('slow');
      swal('Sản phẩm đã xóa thành công', {
        icon: 'success',
      }).then(function () {
        window.location = 'gio-hang.html';
      });
    },
  });
}
