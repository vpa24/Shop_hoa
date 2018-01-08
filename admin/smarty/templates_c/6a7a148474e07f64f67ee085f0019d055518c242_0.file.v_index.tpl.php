<?php
/* Smarty version 3.1.30, created on 2018-01-08 13:39:21
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a537489c89a52_25731357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a7a148474e07f64f67ee085f0019d055518c242' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_index.tpl',
      1 => 1515418759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/index/v_don_hang.tpl' => 1,
    'file:views/index/v_ds_hoa_don_chua_duyet.tpl' => 1,
  ),
),false)) {
function content_5a537489c89a52_25731357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/index/v_don_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container auto_refresh">
    <?php $_smarty_tpl->_subTemplateRender("file:views/index/v_ds_hoa_don_chua_duyet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row">
      
    </div>
</div>
	<?php echo '<script'; ?>
 src="public/js/ajax/ajax_update_hoa_don.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_hoa_don.js"><?php echo '</script'; ?>
>
<?php }
}
