<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:09:37
  from "C:\wamp64\www\shop_hoa-master\admin\views\index\v_don_hang_chua_duyet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef041e96849_89477551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c146e2edf865318f22109751f170d0f0ddb5286e' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\index\\v_don_hang_chua_duyet.tpl',
      1 => 1514074095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ef041e96849_89477551 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-danger o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-support"></i>
      </div>
      <div class="mr-5" style="font-size: 14px"><?php echo $_smarty_tpl->tpl_vars['so_hoa_don_chua_duyet']->value->count;?>
 đơn hàng chưa duyệt</div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="#chua_duyet">
      <span class="float-left">Xem chi tiết</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
<?php }
}
