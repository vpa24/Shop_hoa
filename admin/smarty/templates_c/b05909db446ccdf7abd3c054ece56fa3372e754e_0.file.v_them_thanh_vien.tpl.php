<?php
/* Smarty version 3.1.30, created on 2018-01-12 20:18:48
  from "/home/wikicach/public_html/shop_hoa/admin/views/v_them_thanh_vien.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a58b5b86e1935_15307886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b05909db446ccdf7abd3c054ece56fa3372e754e' => 
    array (
      0 => '/home/wikicach/public_html/shop_hoa/admin/views/v_them_thanh_vien.tpl',
      1 => 1515763125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a58b5b86e1935_15307886 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST">
    <div class="form-group">
        <label for="ten">Tên thành viên:</label>
        <input type="text" class="form-control" name="ten" placeholder="Nhập tên thành viên" required>
    </div>
    <div class="form-group">
        <label for="tai_khoan">Tài khoản:</label>
        <input type="text" class="form-control" name="tai_khoan" placeholder="Nhập tài khoản cần đặt" required>
    </div>
    <div class="form-group">
        <label for="mat_khau">Mật khẩu:</label>
        <input type="password" class="form-control" name="mat_khau" placeholder="Nhập mật khẩu cần đặt" required>    
    </div>
    <div class="form-group">
        <label for="recipient-name" class="form-control-label">Quyền:</label>
        <select class="form-control" name="permission">
            <option value="0">Thành viên</option>
            <option value="1">Admin</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_submit">Thêm thành viên</button>
    </form>
</div>
<?php }
}
