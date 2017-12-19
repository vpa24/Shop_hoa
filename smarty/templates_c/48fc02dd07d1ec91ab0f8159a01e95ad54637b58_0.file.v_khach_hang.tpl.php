<?php
/* Smarty version 3.1.30, created on 2017-12-19 02:06:05
  from "C:\wamp64\www\shop_hoa-master\views\gio_hang\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38740d0e6d99_67363783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48fc02dd07d1ec91ab0f8159a01e95ad54637b58' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\gio_hang\\v_khach_hang.tpl',
      1 => 1513648390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38740d0e6d99_67363783 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset class="section">
  <h3>Nhập thông tin khách hàng</h3>
    <form name="them_khach_hang" action="khach_hang.php" method="post">
         <input type="text" name="ten_kh" class="field-divided" placeholder="Tên khách hàng" />
         <select name="phai" class="field-select phai">
          <option value="1"selected>Nam</option>
          <option value="0">Nữ</option>
          <option value="2">Khác</option>
         </select>
         <input type="text" name="email" id="email" placeholder="Email">
         <input type="text" name="dia_chi" class="field-long dia_chi" placeholder="Địa chỉ"/>
         <input type="text" name="dien_thoai" class="field-long dien_thoai" placeholder="Điện thoại"/>
         <div class="button"><input type="submit" name="luu" value="Giao đến địa chỉ này" /></div>
    </form>
</fieldset>
<?php }
}
