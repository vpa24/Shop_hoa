<?php
/* Smarty version 3.1.30, created on 2017-12-08 12:36:08
  from "C:\wamp\www\shop_hoa\admin\views\v_hoa_don.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a79281312d6_91756784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b345bad4050b78b617d85f3964d417a79cd3f8e3' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa\\admin\\views\\v_hoa_don.tpl',
      1 => 1512647192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a79281312d6_91756784 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách hoa</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Khách hàng</th>
                  <th>Ngày đặt</th>
                  <th>Sản phẩm</th>
                  <th>Tổng tiền</th>
                  <th>Ghi chú</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="khach_hang.php">Nguyễn Văn A</a></td>
                  <td>12/12/2017</td>
                  <td>Trót yêu</td>
                  <td>20.000 vnđ</td>
                  <td>Thanh toán tại nhà</td>
                  <td>
                      <button type="button" class="btn btn-primary">Xác nhận</button>
                      <button type="button" class="btn btn-danger">Xóa đơn hàng</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
<?php }
}
