<?php
/* Smarty version 3.1.30, created on 2018-01-21 07:29:17
  from "C:\wamp64\www\shop_hoa-master\views\v_dang_ki.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a64414d2af869_34724886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f93c6e86116d7434623a99ad517569f13df13a0' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\v_dang_ki.tpl',
      1 => 1516519697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/dang_ki/v_thanh_danh_muc.tpl' => 1,
    'file:views/dang_ki/v_dang_ki.tpl' => 1,
  ),
),false)) {
function content_5a64414d2af869_34724886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/dang_ki/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/dang_ki/v_dang_ki.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
