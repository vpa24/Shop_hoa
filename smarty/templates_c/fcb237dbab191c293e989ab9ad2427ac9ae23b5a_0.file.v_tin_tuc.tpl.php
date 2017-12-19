<?php
/* Smarty version 3.1.30, created on 2017-12-19 15:16:37
  from "C:\wamp64\www\shop_hoa-master\views\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a392d554f6793_46984555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcb237dbab191c293e989ab9ad2427ac9ae23b5a' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\v_tin_tuc.tpl',
      1 => 1513696595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tin_tuc/v_thanh_danh_muc.tpl' => 1,
    'file:views/tin_tuc/v_ds_tin_tuc.tpl' => 1,
  ),
),false)) {
function content_5a392d554f6793_46984555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_ds_tin_tuc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
