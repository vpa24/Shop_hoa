<?php
/* Smarty version 3.1.30, created on 2017-11-30 10:13:30
  from "C:\wamp64\www\project_tn\views\v_chi_tiet_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1fd9ca3d4fd7_55405348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c16df9b8539698dd0e36acbd7390d4acc0aa486f' => 
    array (
      0 => 'C:\\wamp64\\www\\project_tn\\views\\v_chi_tiet_hoa.tpl',
      1 => 1512036809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1fd9ca3d4fd7_55405348 (Smarty_Internal_Template $_smarty_tpl) {
?>

            <!-- BEGIN HEADER PAGE -->
            <div id="bsm_header_page">
                <h1>Chi tiết hoa <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
            </div>
            <!-- END HEADER PAGE -->

            <!-- BEGIN PRODUCT DETAILS -->
            <div id="bsm_product_details" class="container">
                <form>
                    <div id="bsm_product_details_content">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
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
</p>
                            <div>
                                <button type="submit">
                                    <svg width="25px" height="22px"><image  x="0px" y="0px" width="25px" height="22px"  xlink:href="data:public/img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAWCAQAAACftv89AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfhBQ8NCBEr/sQIAAABVklEQVQ4y42SsUtCURSHv+cTo6WUhiIbHIPaGhqEhhqacstF+jOCoK09GlpsEiSIKGiIwKFoKQqlUXhDDS4KQRY0RGr+GnrveS2Te+5wD/fe757zO+c4OqTDHh6f2Jru1VFX+5pXTNgsNKFteZJelLZFEJrWiaSsHRIBoM4l4NhJifr7OLBOnMi/YBeHBDGegnBbsrV81Pgnz9XQjDJscMSOidxxOhRZBQ6oR4yj0aHAHCt4PEIEW1skxQXP/UhnCOCwBFzT7hXZAWZIMTKwyB/MsoxHFSAo8qZFeXflCoVRbjhjDHAGRBHC4Z1jvgAcWesPrNeXOGskeOD2z5s0C7xyzpsRVWhKBbUl1ZT5NbkZ1SS1VdCUOfwoF4osK2oAUZXDm5w5/DAZppHENZJySYa+/yZAKjR8r0TLQFqUfK9BpV+Lq6yqaqoYZKyeyqKaqir70xXxDSYyPGVHpLjxAAAAAElFTkSuQmCC" /></svg>
                                    <span>Mua ngay</span>
                                </button>
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
                                <img class="img-responsive" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                            </div>
                            <div class="bsm_product_info">
                                 <a href="chi_tiet_hoa.php?id=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
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
