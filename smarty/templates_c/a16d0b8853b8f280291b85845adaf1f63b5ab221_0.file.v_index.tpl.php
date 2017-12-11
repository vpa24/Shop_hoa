<?php
/* Smarty version 3.1.30, created on 2017-12-08 12:43:03
  from "C:\wamp\www\shop_hoa\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a7ac70bebc2_09837439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a16d0b8853b8f280291b85845adaf1f63b5ab221' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa\\views\\v_index.tpl',
      1 => 1512733357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/body/tin_tuc.tpl' => 1,
  ),
),false)) {
function content_5a2a7ac70bebc2_09837439 (Smarty_Internal_Template $_smarty_tpl) {
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
                           <a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['hoa']->value->TenHoa);?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html">
                             <h4><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h4></a>
                            <span><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->Gia);?>
 đ</span>
                        </div>
                        <div class="bsm_product_hover hidden-xs">
                            <button type="button" class="btn btn-default btn_xem_ct" data-toggle="modal" data-target="#<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">Xem sản phẩm</button>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div id="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h4>
                        </div>
                            <div id="bsm_product_details_content">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" class="img-responsive hinh_modal" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
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

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!--end modal-->
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <!-- End Foreach -->

                <div class="col-md-12 col-sm-12 col-xs-12">
                   <a href="danh-sach-hoa.html"> <button id="bsm_products_more" class="bsm_button_style">Xem tất cả</button></a>
                </div>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:layouts/body/tin_tuc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- END PRODUCTS -->
<?php }
}
