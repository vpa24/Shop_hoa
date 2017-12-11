<?php
/* Smarty version 3.1.30, created on 2017-11-30 06:20:35
  from "C:\wamp64\www\project_tn\smarty\templates\layout\body_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1fa3330973b1_97434226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94853a23a19ba3207459c31676ed74cf6141dbe7' => 
    array (
      0 => 'C:\\wamp64\\www\\project_tn\\smarty\\templates\\layout\\body_index.tpl',
      1 => 1512022648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:body/slider.tpl' => 1,
    'file:body/boxes.tpl' => 1,
    'file:body/about.tpl' => 1,
    'file:body/event.tpl' => 1,
    'file:body/contact.tpl' => 1,
  ),
),false)) {
function content_5a1fa3330973b1_97434226 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <!-- BEGIN MAIN CONTENT -->
        <div id="bsm_main_content" class="row">
            <?php $_smarty_tpl->_subTemplateRender("file:body/slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:body/boxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("file:body/about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:body/event.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:body/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <!-- END MAIN CONTENT -->
<?php }
}
