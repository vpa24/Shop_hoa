<?php
/* Smarty version 3.1.30, created on 2017-11-30 09:38:24
  from "C:\wamp64\www\project_tn\smarty\templates\hoa\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1fd1905dac37_40016661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4686f9782ac5ddf818aad75ad2eeb9a8f820ce3d' => 
    array (
      0 => 'C:\\wamp64\\www\\project_tn\\smarty\\templates\\hoa\\layout.tpl',
      1 => 1512034703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a1fd1905dac37_40016661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211215a1fd1905c97c4_91072652', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79745a1fd1905d0db1_90995087', "boxes");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18955a1fd1905d8075_39722450', "about");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_211215a1fd1905c97c4_91072652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "boxes"} */
class Block_79745a1fd1905d0db1_90995087 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "boxes"} */
/* {block "about"} */
class Block_18955a1fd1905d8075_39722450 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "about"} */
}
