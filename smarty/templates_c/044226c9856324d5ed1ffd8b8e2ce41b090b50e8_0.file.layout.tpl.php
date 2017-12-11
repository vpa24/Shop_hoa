<?php
/* Smarty version 3.1.30, created on 2017-12-08 12:24:23
  from "C:\wamp\www\shop_hoa\smarty\templates\chi_tiet_hoa\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a766768aa66_62474889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '044226c9856324d5ed1ffd8b8e2ce41b090b50e8' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa\\smarty\\templates\\chi_tiet_hoa\\layout.tpl',
      1 => 1512732191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a2a766768aa66_62474889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_289075a2a7667683057_79421665', "about");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_241365a2a7667686d66_88147285', "event");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "about"} */
class Block_289075a2a7667683057_79421665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "about"} */
/* {block "event"} */
class Block_241365a2a7667686d66_88147285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "event"} */
}
