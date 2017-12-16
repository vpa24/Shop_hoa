<?php
/* Smarty version 3.1.30, created on 2017-12-16 09:51:49
  from "C:\wamp64\www\shop_hoa-master\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a34ecb54883a6_95053458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec218a40991a5b6b7d1bb54c54dea4fdabd09f40' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\smarty\\templates\\layout.tpl',
      1 => 1513417893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout_trang_chu.tpl' => 1,
  ),
),false)) {
function content_5a34ecb54883a6_95053458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129935a34ecb5486129_75234242', "slider");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout_trang_chu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_129935a34ecb5486129_75234242 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
}
