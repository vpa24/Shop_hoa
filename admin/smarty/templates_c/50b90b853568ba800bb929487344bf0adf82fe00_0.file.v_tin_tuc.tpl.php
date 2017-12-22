<?php
/* Smarty version 3.1.30, created on 2017-12-22 15:37:07
  from "C:\wamp64\www\shop_hoa-master\admin\views\index\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3d26a3a00892_92868052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b90b853568ba800bb929487344bf0adf82fe00' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\index\\v_tin_tuc.tpl',
      1 => 1513956931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3d26a3a00892_92868052 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-primary o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-comments"></i>
      </div>
      <div class="mr-5"><?php echo $_smarty_tpl->tpl_vars['dem_tin_tuc']->value->dem;?>
 tin tức</div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="tin_tuc.php">
      <span class="float-left">Xem chi tiết</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
<?php }
}
