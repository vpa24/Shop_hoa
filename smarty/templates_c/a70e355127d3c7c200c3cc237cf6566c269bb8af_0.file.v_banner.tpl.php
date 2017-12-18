<?php
/* Smarty version 3.1.30, created on 2017-12-18 13:54:56
  from "C:\wamp64\www\shop_hoa-master_loi\views\trang_chu\v_banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37c8b0324f87_67054846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a70e355127d3c7c200c3cc237cf6566c269bb8af' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master_loi\\views\\trang_chu\\v_banner.tpl',
      1 => 1513586802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37c8b0324f87_67054846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container hidden-xs">
    <div class="cms-page-banner">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_thong_tin']->value, 'thong_tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thong_tin']->value) {
?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 box">
                <div class="box-content"><a href="<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->DuongDan;?>
">
                    <img alt="" class="img-responsive" src="public/images/banner/<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->Hinh;?>
"></a>
                    <a class="btn-shop" href="<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->DuongDan;?>
"><?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->HanhDong;?>
</a>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</div>
<?php }
}
