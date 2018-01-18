<?php
/* Smarty version 3.1.30, created on 2018-01-18 07:57:16
  from "C:\wamp64\www\shop_hoa-master\admin\views\index\v_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a60535ceca771_75950345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf494c2e665ca8bf2491f3b134765a46dfce7db9' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\index\\v_san_pham.tpl',
      1 => 1516262235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a60535ceca771_75950345 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-gift"></i>
        </div>
        <div class="mr-5">có <?php echo $_smarty_tpl->tpl_vars['dem_hoa']->value;?>
 sản phẩm đang bán</div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-exclamation"></i>
        </div>
        <div class="mr-5">có <?php echo $_smarty_tpl->tpl_vars['hoa_het_hang']->value;?>
 sản phẩm đã hết hàng</div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-dark  o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-info"></i>
        </div>
        <div class="mr-5" style="font-size: 14px">có <?php echo $_smarty_tpl->tpl_vars['dem_loai_hoa']->value;?>
 loại hoa đang bán</div>
      </div>
    </div>
  </div>


</div>
<?php }
}
