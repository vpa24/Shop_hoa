<?php
/* Smarty version 3.1.30, created on 2017-12-13 13:08:17
  from "C:\wamp64\www\shop_hoa-master\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a312641b6f119_76791053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4dd59ee71ea0a9bf8d9aaf8e777aac25d801183' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\v_khach_hang.tpl',
      1 => 1513090550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a312641b6f119_76791053 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="tieu_de_kh">Vui lòng nhập thông tin khách hàng</h1>
<form name="them_khach_hang" action="khach_hang.php" method="post">
		<table>
        <tr>
					<td>Tên khách hàng</td>
          <td><input type="text" name="ten_kh" /></td>
				</tr>
        <tr>
          <td>Phái</td>
          <td>
            <select name="phai">
              <option value="1">Nam</option>
              <option value="0">Nữ</option>
              <option value="2">Khác</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" /></td>
        </tr>
        <tr>
					<td>Địa chỉ</td>
          <td><input type="text" name="dia_chi" /></td>
				</tr>
				<tr>
					<td>Điện thoại</td>
          <td><input type="text" name="dien_thoai"/></td>
				</tr>
        <tr>
					<td align="center"><input type="submit"  class="one" value="Lưu" name="luu"/>
						<a href="gio_hang.html"><input type="button" class="one" value="<<< Quay về" /></a>
					</td>
				</tr>
			</table>
			</form>
<?php }
}
