<?php
/* Smarty version 3.1.30, created on 2018-01-28 14:37:17
  from "C:\wamp64\www\shop_hoa-master\views\v_san_pham_da_xem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6de01d0e9ea8_90683906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59c962b4aec3b2583a408e71ee3a8a9d9d7fdfa7' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\v_san_pham_da_xem.tpl',
      1 => 1517149932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/hoa/v_thanh_danh_muc.tpl' => 1,
    'file:views/hoa/v_san_pham_da_xem.tpl' => 1,
  ),
),false)) {
function content_5a6de01d0e9ea8_90683906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/hoa/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/hoa/v_san_pham_da_xem.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
