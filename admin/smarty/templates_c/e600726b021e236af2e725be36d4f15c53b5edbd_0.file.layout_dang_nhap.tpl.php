<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:18:10
  from "C:\wamp\www\shop_hoa-master\admin\smarty\templates\layout_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ce9f23fe2f6_49267546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e600726b021e236af2e725be36d4f15c53b5edbd' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\admin\\smarty\\templates\\layout_dang_nhap.tpl',
      1 => 1513884612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/head.tpl' => 1,
    'file:layouts/body_dang_nhap.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5a3ce9f23fe2f6_49267546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/body_dang_nhap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
