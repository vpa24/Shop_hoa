<?php
/* Smarty version 3.1.30, created on 2017-12-01 03:31:26
  from "C:\wamp\www\project_tn_Phuong_Anh\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a20befef2efa1_63104652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc4ed31485405e10c7582b457e8b3810e2ee3415' => 
    array (
      0 => 'C:\\wamp\\www\\project_tn_Phuong_Anh\\views\\v_index.tpl',
      1 => 1512095480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a20befef2efa1_63104652 (Smarty_Internal_Template $_smarty_tpl) {
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
                 <a href="chi_tiet_hoa.php?id=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="bsm_product">
                        <div class="bsm_product_image">
                            <img class="img-responsive hinh_anh" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                        </div>
                        <div class="bsm_product_info">
                           <h4><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h4>
                            <span><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->Gia);?>
 đ</span>
                        </div>
                        <div class="bsm_product_hover">
                        </div>
                    </div>
                </div>
                </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <!-- End Foreach -->
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                   <a href="hoa.php"> <button id="bsm_products_more" class="bsm_button_style">Xem tất cả</button></a>
                </div>
            </div>
<!-- END PRODUCTS -->
<?php }
}
