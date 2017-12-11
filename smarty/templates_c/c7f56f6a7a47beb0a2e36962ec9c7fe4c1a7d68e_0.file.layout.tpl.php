<?php
/* Smarty version 3.1.30, created on 2017-12-04 12:25:07
  from "C:\wamp\www\shop_hoa\smarty\templates\lien_he\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2530933376c6_68649918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7f56f6a7a47beb0a2e36962ec9c7fe4c1a7d68e' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa\\smarty\\templates\\lien_he\\layout.tpl',
      1 => 1512133311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a2530933376c6_68649918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141205a25309332fcb7_03430056', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236175a2530933339c7_93302111', "about");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178945a2530933376c0_09594014', "event");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_141205a25309332fcb7_03430056 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "about"} */
class Block_236175a2530933339c7_93302111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "about"} */
/* {block "event"} */
class Block_178945a2530933376c0_09594014 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "event"} */
}
