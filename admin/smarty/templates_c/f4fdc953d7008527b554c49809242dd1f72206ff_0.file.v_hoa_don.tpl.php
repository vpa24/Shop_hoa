<?php
/* Smarty version 3.1.30, created on 2017-12-22 15:39:35
  from "C:\wamp64\www\shop_hoa-master\admin\views\index\v_hoa_don.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3d27374e0e97_26793199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4fdc953d7008527b554c49809242dd1f72206ff' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\index\\v_hoa_don.tpl',
      1 => 1513957049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3d27374e0e97_26793199 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-success o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-shopping-cart"></i>
      </div>
      <div class="mr-5"><?php echo $_smarty_tpl->tpl_vars['so_hoa_don_trong_ngay']->value->count;?>
 hóa đơn ngày <?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</div>
    </div>
  </div>
</div>
<?php }
}
