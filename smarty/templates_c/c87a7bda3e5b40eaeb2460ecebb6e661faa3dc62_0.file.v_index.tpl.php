<?php
/* Smarty version 3.1.30, created on 2017-11-30 14:49:28
  from "C:\wamp64\www\project_tn\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a201a782024c2_29510066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c87a7bda3e5b40eaeb2460ecebb6e661faa3dc62' => 
    array (
      0 => 'C:\\wamp64\\www\\project_tn\\views\\v_index.tpl',
      1 => 1512053366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a201a782024c2_29510066 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- BEGIN PRODUCTS -->
            <div id="bsm_products" class="container">
                <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section">
                    <h1>Mẫu hoa mới!</h1>
                    <img src="public/img/divider2.png" alt="">
                </div>
                <!-- Foreach -->

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="bsm_product">
                        <div class="bsm_product_image">
                            <img class="img-responsive hinh_anh" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                        </div>
                        <div class="bsm_product_info">
                            <a href="chi_tiet_hoa.php?id=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h4></a>
                            <span><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->Gia);?>
 đ</span>
                        </div>
                        <div class="bsm_product_hover">
                        </div>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <!-- End Foreach -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button id="bsm_products_more" class="bsm_button_style">Xem tất cả</button>
                </div>
            </div>
<!-- END PRODUCTS -->
<?php }
}
