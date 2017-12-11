<?php
/* Smarty version 3.1.30, created on 2017-12-01 02:31:25
  from "C:\wamp\www\project_tn_Phuong_Anh\smarty\templates\hoa\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a20b0edd854f8_69111651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a162c990b99a61ea853ec8fb79748c519f9d99cc' => 
    array (
      0 => 'C:\\wamp\\www\\project_tn_Phuong_Anh\\smarty\\templates\\hoa\\layout.tpl',
      1 => 1512034703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a20b0edd854f8_69111651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12035a20b0edd79969_94560284', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149605a20b0edd7d7e5_60781456', "boxes");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127775a20b0edd81660_37221972', "about");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_12035a20b0edd79969_94560284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "boxes"} */
class Block_149605a20b0edd7d7e5_60781456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "boxes"} */
/* {block "about"} */
class Block_127775a20b0edd81660_37221972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "about"} */
}
