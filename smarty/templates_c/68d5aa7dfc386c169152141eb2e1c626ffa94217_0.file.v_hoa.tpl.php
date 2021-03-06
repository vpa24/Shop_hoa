<?php
/* Smarty version 3.1.30, created on 2017-12-01 03:30:45
  from "C:\wamp\www\project_tn_Phuong_Anh\views\v_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a20bed56b1a11_23252600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68d5aa7dfc386c169152141eb2e1c626ffa94217' => 
    array (
      0 => 'C:\\wamp\\www\\project_tn_Phuong_Anh\\views\\v_hoa.tpl',
      1 => 1512095095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a20bed56b1a11_23252600 (Smarty_Internal_Template $_smarty_tpl) {
?>
            <!-- BEGIN HEADER PAGE -->
            <div id="bsm_header_page">
                <h1>Danh sách hoa</h1>
            </div>
            <!-- END HEADER PAGE -->

            <!-- BEGIN LISTING PRODUCTS -->
            <div id="bsm_listing_products">
                <div class="container">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <form>
                            <div class="bsm_shop_page_filters_form">
                                <div class="bsm_listing_products_widget bsm_listing_products_widget_categories">
                                    <h4>Loại hoa</h4>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_loai_hoa']->value, 'loai_hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_hoa']->value) {
?>
                                          <a href="hoa.php?loai_hoa=<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
">  <li><?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
</li></a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="bsm_products" class="col-md-9 col-sm-8 col-xs-12">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
                        <a href="chi_tiet_hoa.php?id=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="bsm_product">
                                    <div class="bsm_product_image">
                                        <img class="img-responsive hinh_hoa"  src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
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

                      </div>
                        <div class="bsm_products_pagination">
                            <?php echo $_smarty_tpl->tpl_vars['phan_trang']->value;?>

                        </div>

                </div>
            </div>
            <!-- END LISTING PRODUCTS -->
<?php }
}
