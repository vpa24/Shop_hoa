<?php
/* Smarty version 3.1.30, created on 2017-12-10 09:11:11
  from "C:\wamp64\www\shop_hoa\views\v_chi_tiet_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2cfa2f143116_88561112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f480e303df46b9b31a8487d0c239ab88e32b604f' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\views\\v_chi_tiet_hoa.tpl',
      1 => 1512896927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2cfa2f143116_88561112 (Smarty_Internal_Template $_smarty_tpl) {
?>

            <!-- BEGIN HEADER PAGE -->
            <div id="bsm_header_page">
                <h1>Chi tiết hoa <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
            </div>
            <!-- END HEADER PAGE -->

            <!-- BEGIN PRODUCT DETAILS -->
            <div id="bsm_product_details" class="container">
                <form method="post" action="gio_hang.php?MaHoa=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
                    <div id="bsm_product_details_content">
                      <div class="grid">
                    		<div class="flexslider">
                    			   <div class="thumb-image hinh_chi_tiet"> <img id="zoom_08" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" data-zoom-image="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" class="img-responsive hinh_ct"> </div>
                    		</div>
                    	</div>
                        <div class="col-md-6 col-sm-6 col-xs-12 noi_dung_ct">
                            <h1><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h1>
                            <ul>
                                <li><h4>Giá: </h4></li>
                                <li><h4><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->Gia);?>
 vnđ</h4></li>
                            </ul>
                            <h4>Thành phần: </h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['hoa']->value->ThanhPhan;?>
</p><br>
                            <h4>Nội dung: </h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['hoa']->value->NoiDung;?>
</p><br />
                            <h4 class="sl">Số lượng:</h4>

                            <div class="quantity">
               <div class="quantity-select">
                 <div class="entry value-minus" id="giam">&nbsp;</div>
                 <div class="so_luong"><input type="text" class="entry value item_quantity_" name="so_luong" value="1" id="sl_<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
"></div>
                 <div class="entry value-plus active" id="tang">&nbsp;</div>
               </div>
             </div>
              <div>
                	<input type="submit" name="them" value="Thêm vào giỏ hàng" class="button gio_hang" />
              </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END PRODUCT DETAILS -->
            <!-- BEGIN NEW PRODUCTS -->
            <div id="bsm_products" class="bsm_new_products">
                <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section">
                    <h1>Những mẫu hoa đẹp</h1>
                    <img src="public/img/divider.png" alt="">
                </div>
                <div id="bsm_new_products" class="container">
                    <div class="swiper-wrapper">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoa_cung_loai']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
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
            <!-- END NEW PRODUCTS -->
<?php }
}
