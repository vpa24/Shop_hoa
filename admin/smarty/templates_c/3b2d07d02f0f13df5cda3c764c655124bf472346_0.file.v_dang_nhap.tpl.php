<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:18:10
  from "C:\wamp\www\shop_hoa-master\admin\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ce9f244a7b9_61196593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b2d07d02f0f13df5cda3c764c655124bf472346' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\admin\\views\\v_dang_nhap.tpl',
      1 => 1513884612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ce9f244a7b9_61196593 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng nhập</div>
      <div class="card-body">
        <form method="POST" action="dang_nhap.php" autocomplete="off">
          <div class="form-group">
            <input class="form-control" name="tai_khoan" id="taiKhoan" type="text" 
            min="6" max="50"
            placeholder="Nhập tài khoản" value="<?php if (isset($_POST['btn_dang_nhap'])) {
echo $_POST['tai_khoan'];
}?>" autocomplete="off" required>
          </div>
          <div class="form-group">
            <input class="form-control" name="mat_khau" id="matKhau" type="password" 
            min="6" max="50"
            placeholder="Nhập mật khẩu" autocomplete="off" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="btn_dang_nhap">Đăng nhập</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../index.php">Quay về trang chủ</a>
        </div>
      </div>
    </div>
  </div>
  <?php if (isset($_SESSION['thongBao'])) {?>
    <?php echo '<script'; ?>
>swal("<?php echo $_SESSION['thongBao'];?>
");<?php echo '</script'; ?>
>
  <?php }
}
}
