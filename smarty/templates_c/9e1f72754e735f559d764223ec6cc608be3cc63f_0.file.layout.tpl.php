<?php
/* Smarty version 3.1.30, created on 2017-12-07 09:37:27
  from "C:\wamp64\www\shop_hoa\smarty\templates\lien_he\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a290bd72b8ed1_84523670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e1f72754e735f559d764223ec6cc608be3cc63f' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\smarty\\templates\\lien_he\\layout.tpl',
      1 => 1512133311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a290bd72b8ed1_84523670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_286925a290bd72aeb45_08484498', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1895a290bd72b3673_68261894', "about");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58105a290bd72b7a33_07277023', "event");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_286925a290bd72aeb45_08484498 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "about"} */
class Block_1895a290bd72b3673_68261894 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "about"} */
/* {block "event"} */
class Block_58105a290bd72b7a33_07277023 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "event"} */
}
