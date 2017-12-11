<?php
/* Smarty version 3.1.30, created on 2017-12-07 10:17:27
  from "C:\wamp64\www\shop_hoa\admin\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2915372c3105_76709053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eea2efdcd34e535d156320b325cf38adb63efb3d' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\admin\\views\\v_dang_nhap.tpl',
      1 => 1512641777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2915372c3105_76709053 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng nhập</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Tài khoản</label>
            <input class="form-control" id="taiKhoan" type="text" placeholder="Nhập tài khoản">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <a class="btn btn-primary btn-block" href="index.html">Đăng nhập</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Quay về trang chủ</a>
        </div>
      </div>
    </div>
  </div><?php }
}
