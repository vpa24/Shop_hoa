<?php
/* Smarty version 3.1.30, created on 2018-01-21 13:30:06
  from "C:\wamp64\www\shop_hoa-master\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6495de068620_70530711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e15b1d29f3a640f21fa3d9ac25d89778d25c098d' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\v_dang_nhap.tpl',
      1 => 1516541389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/dang_nhap/v_thanh_danh_muc.tpl' => 1,
    'file:views/dang_nhap/v_dang_nhap.tpl' => 1,
  ),
),false)) {
function content_5a6495de068620_70530711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/dang_nhap/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/dang_nhap/v_dang_nhap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
