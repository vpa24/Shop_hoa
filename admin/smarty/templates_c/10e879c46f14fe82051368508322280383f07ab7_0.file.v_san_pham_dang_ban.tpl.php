<?php
/* Smarty version 3.1.30, created on 2017-12-22 15:37:07
  from "C:\wamp64\www\shop_hoa-master\admin\views\index\v_san_pham_dang_ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3d26a3acc306_48753583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e879c46f14fe82051368508322280383f07ab7' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\index\\v_san_pham_dang_ban.tpl',
      1 => 1513956964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3d26a3acc306_48753583 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-warning o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-list"></i>
      </div>
      <div class="mr-5"><?php echo $_smarty_tpl->tpl_vars['dem_hoa']->value->dem;?>
 sản phẩm đang bán</div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="hoa.php">
      <span class="float-left">Xem chi tiết</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
<?php }
}
