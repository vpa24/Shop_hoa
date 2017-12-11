<?php
/* Smarty version 3.1.30, created on 2017-12-07 09:35:29
  from "C:\wamp64\www\shop_hoa\smarty\templates\gioi_thieu\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a290b61ecba47_46310488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bbeb8e30c5bd3598cf747d39b0dea272118ba6e' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\smarty\\templates\\gioi_thieu\\layout.tpl',
      1 => 1512133303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a290b61ecba47_46310488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_235835a290b61ebcc79_25818088', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234045a290b61ec5f74_75516510', "about");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13335a290b61eca2f1_40932364', "event");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_235835a290b61ebcc79_25818088 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "about"} */
class Block_234045a290b61ec5f74_75516510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "about"} */
/* {block "event"} */
class Block_13335a290b61eca2f1_40932364 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "event"} */
}
