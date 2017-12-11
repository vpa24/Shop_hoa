<?php
/* Smarty version 3.1.30, created on 2017-11-30 06:41:17
  from "C:\wamp64\www\project_tn\smarty\templates\contact\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1fa80dad8370_39743229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0787907e67fcac1667170910d2b3dc6c8b2665b2' => 
    array (
      0 => 'C:\\wamp64\\www\\project_tn\\smarty\\templates\\contact\\layout.tpl',
      1 => 1512024076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a1fa80dad8370_39743229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_225515a1fa80dac6d65_46042840', "boxes");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133165a1fa80dace171_53304038', "about");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35655a1fa80dad4cd7_94179257', "event");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "boxes"} */
class Block_225515a1fa80dac6d65_46042840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "boxes"} */
/* {block "about"} */
class Block_133165a1fa80dace171_53304038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "about"} */
/* {block "event"} */
class Block_35655a1fa80dad4cd7_94179257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "event"} */
}
