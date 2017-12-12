<?php
/* Smarty version 3.1.30, created on 2017-12-12 13:41:55
  from "C:\wamp64\www\shop_hoa\views\v_hoa_cung_loai.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2fdca3c5a7a1_37634664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfbe908d44957947636dca6241341a1de5803258' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\views\\v_hoa_cung_loai.tpl',
      1 => 1513086113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2fdca3c5a7a1_37634664 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="bsm_products" class="bsm_new_products">
    <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section">
        <h1>NHỮNG MẪU HOA TƯƠI CÙNG LOẠI KHÁC</h1>
        <img src="public/img/divider.png" alt="">
    </div>
    <div id="bsm_new_products" class="container">
        <div class="swiper-wrapper">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoa_cung_loai']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
            <a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['hoa']->value->TenHoa);?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html">
            <div class="bsm_product swiper-slide">
                <div class="bsm_product_image">
                    <img class="img-responsive hinh_anh" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                </div>
                <div class="bsm_product_info">
                     <a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['hoa']->value->TenHoa);?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html"><h4><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h4></a>
                    <span><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->Gia);?>
 vnđ</span>
                </div>
                <div class="bsm_product_hover">
                </div>
            </div>
            </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <div class="bsm_products_new_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="bsm_products_new_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>
<?php }
}
