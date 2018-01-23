<?php
/* Smarty version 3.1.30, created on 2018-01-23 14:47:20
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a674af81a3320_93911985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe982a2d41fd6bd983806c28d1407811670bd2d6' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_khach_hang.tpl',
      1 => 1516718791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_ds_khach_hang.tpl' => 1,
  ),
),false)) {
function content_5a674af81a3320_93911985 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách khách hàng</div>
        <div class="card-body">
          <div class="table-responsive">
          <?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_ds_khach_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        </div>
</div><?php }
}
