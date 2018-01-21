<?php
/* Smarty version 3.1.30, created on 2018-01-21 11:27:08
  from "C:\wamp64\www\shop_hoa-master\views\dang_ki\v_dang_ki.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a64790c879389_11158019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77e432deac0aa99977635a4e895c482bad773260' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\dang_ki\\v_dang_ki.tpl',
      1 => 1516534027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a64790c879389_11158019 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="register">
		<div class="container">
			<h2 class="h2Login">Đăng kí tại đây</h2>
			<div class="login-form-grids">
				<h5>Thông tin cá nhân</h5>
				<form method="post">
					<input type="text" name="hoTen" placeholder="Họ tên..." required=" ">
					<div class="gioi_tinh">Giới tính:<label><input type="radio" value="1"  name="phai">Nam</label><label><input type="radio" value="0"  name="phai">Nữ</label></div>
                    <input type="text"  name="diaChi"  placeholder="Địa chỉ..." required=" " >
                    <input type="text" name="dienThoai" placeholder="Điện thoại..." required=" " >
				<h6>Thông tin đăng nhập</h6>
					<input type="email" name="email" placeholder="Nhập Email..." required=" " >
					<input type="password" name="matKhau" placeholder="Mật khẩu..." required=" " >
					<input type="password" placeholder="Nhập Lại Mật khẩu..." required=" " >
					<input type="submit" name="dang_ki" value="Đăng Kí">
				</form>
			</div>
			<div class="register-home">
				<a href=".">Trở Về Trang chủ</a>
			</div>
		</div>
	</div><?php }
}
