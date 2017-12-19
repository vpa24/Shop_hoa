<?php
/* Smarty version 3.1.30, created on 2017-12-19 02:15:02
  from "C:\wamp64\www\shop_hoa-master\views\v_trang_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a387626bf7566_17264969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28492ed8b98d0c76856c5458fdca4741f7145da' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\v_trang_gio_hang.tpl',
      1 => 1513649700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/gio_hang/v_xem_gio_hang.tpl' => 1,
    'file:views/gio_hang/v_khach_hang.tpl' => 1,
    'file:views/gio_hang/v_dat_hang_thanh_cong.tpl' => 1,
  ),
),false)) {
function content_5a387626bf7566_17264969 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="main">
        <div class="row">
  <div class="wrapper">
    <ul class="steps">
      <li class="is-active">Xem giỏ hàng</li>
      <li>Địa  chỉ giao hàng</li>
      <li>Thanh toán & Đặt mua</li>
    </ul>
    <form class="form-wrapper">
      <?php $_smarty_tpl->_subTemplateRender("file:views/gio_hang/v_xem_gio_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php $_smarty_tpl->_subTemplateRender("file:views/gio_hang/v_khach_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php $_smarty_tpl->_subTemplateRender("file:views/gio_hang/v_dat_hang_thanh_cong.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </form>
  </div>
</div>
</div>
</div>
<?php }
}
