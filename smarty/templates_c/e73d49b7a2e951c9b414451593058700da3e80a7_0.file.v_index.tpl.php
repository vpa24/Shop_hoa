<?php
/* Smarty version 3.1.30, created on 2017-12-12 09:15:20
  from "C:\wamp64\www\shop_hoa\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2f9e2828b2f9_40810051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e73d49b7a2e951c9b414451593058700da3e80a7' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\views\\v_index.tpl',
      1 => 1513070119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/body/quang_cao.tpl' => 1,
  ),
),false)) {
function content_5a2f9e2828b2f9_40810051 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="cms-page-banner">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 box">
                <div class="box-content"><a href="http://www.hoa18.com/global/"><img alt="" class="img-responsive" src="http://www.hoa18.com/media/wysiwyg/alothemes/static/demo1/3-Banner-dich-vu-1.jpg"></a><a class="btn-shop" href="http://www.hoa18.com/global/">MUA NGAY</a></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 box">
                <div class="box-content"><a href="http://www.hoa18.com/vi/"><img alt="" class="img-responsive" src="http://www.hoa18.com/media/wysiwyg/alothemes/static/demo1/3-Banner-dich-vu-2.jpg"></a><a class="btn-shop" href="http://www.hoa18.com/vi/">MUA NGAY</a></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 box">
                <div class="box-content"><a href="http://www.hoa18.com/vn/uu-dai-online-friday-2017"><img alt="" class="img-responsive" src="http://www.hoa18.com/media/wysiwyg/banner/3_Banner_dich_vu_3-2.jpg"></a><a class="btn-shop" href="http://www.hoa18.com/vn/uu-dai-online-friday-2017">XEM NGAY</a></div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 20px">
    <div class="magic-category clearfix">
        <div class="block-title-tabs clearfix">
            <ul class="magictabs">
                <li class="item active loaded">
                    <span class="title" data-toggle="tab" href="#menu1">Mẫu hoa mới</span>
                </li>
                <li class="item" >
                    <span class="title" data-toggle="tab" href="#menu2">Mẫu hoa bán chạy</span>
                </li>
                <li class="item">
                    <span class="title" data-toggle="tab" href="#menu3">Mẫu hoa giảm giá</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active">
            <div class="category-products">
                <ul class="products-grid row">
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
                    <li class="item">
                        <div class="category-products-grid">
                            <div class="images-container">
                                <h2 class="product-name">
                                    <a href="" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</a>
                                </h2>
                                <div class="product-hover">
                                    <a href="" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
" class="product-image">
                                        <img id="product-collection-image-2678" class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" style="max-height: 240px; max-width: 240px" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                                    </a>
                                </div>
                                <div class="actions-no hover-box">
                                    <div class="actions">
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-2678">
                                                <span class="price"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa']->value->Gia;
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>
 ₫</span>
                                            </span>
                                            <a href="http://www.hoa18.com/vn/mat-troi-cua-em.html" class="minimal-price-link">
                                                <span class="label">Mua online:</span>
                                                <span class="price" id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa']->value->Gia;
$_prefixVariable2=ob_get_clean();
echo number_format($_prefixVariable2);?>
 đ</span>
                                            </a>
                                        </div>
                                        <div class="actions-cart">
                                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                                        </div>
                                        <ul class="add-to-links pull-left-none">
                                            <li class="pull-left-none pull-compare">
                                                <a href="" title="So sánh" class="link-compare">
                                                    Cho vào giỏ hàng
                                                </a>
                                            </li>
                                            <li class="pull-left-none pull-wishlist">
                                                <a href="" title="Xem chi tiết" class="link-wishlist">
                                                    Xem chi tiết
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade in">
            <div class="category-products">
                <ul class="products-grid row">
                    <li class="item">
                        <div class="category-products-grid">
                            <div class="images-container">
                                <div class="link-view pull-left-none">
                                    <a title="Xem nhanh" href="http://www.hoa18.com/vn/magicshop/quickview/view/id/2678" class="link-quickview">
                                        <i class="pe-icon pe-7s-search icons"></i>
                                    </a>
                                </div>
                                <h2 class="product-name">
                                    <a href="http://www.hoa18.com/vn/mat-troi-cua-em.html" title="Mặt Trời Của Em">Mặt Trời Của Em</a>
                                    <span class="gift-grid">Tặng kèm:  - Mũ bảo hiểm - Ly sứ</span>
                                </h2>
                                <div class="product-hover">
                                    <a href="http://www.hoa18.com/vn/mat-troi-cua-em.html" title="Mặt Trời Của Em" class="product-image">
                                        <img id="product-collection-image-2678" class="img-responsive hinh_hoa" src="http://localhost/shop_hoa-master/public/images/hoa/hoa_hop_1.jpg" alt="Mặt Trời Của Em">
                                    </a>
                                </div>
                                <div class="actions-no hover-box">
                                    <div class="actions">
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-2678">
                                                <span class="price">1.150.000&nbsp;₫</span>
                                            </span>
                                            <a href="http://www.hoa18.com/vn/mat-troi-cua-em.html" class="minimal-price-link">
                                                <span class="label">Mua online:</span>
                                                <span class="price" id="product-minimal-price-2678">1.115.500&nbsp;₫</span>
                                            </a>
                                        </div>
                                        <div class="actions-cart">
                                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                                        </div>
                                        <ul class="add-to-links pull-left-none">
                                            <li class="pull-left-none pull-compare">
                                                <a href="http://www.hoa18.com/vn/catalog/product_compare/add/product/2678/uenc/aHR0cDovL3d3dy5ob2ExOC5jb20vdm4vc2hvcC1ob2EtdHAtaG8tY2hpLW1pbmgtaGEtbm9pL2hvYS10dW9pLWNodWMtbXVuZy1raGFpLXRydW9uZy8,/form_key/WX0sFPoAmZEA3SxX/" title="So sánh" class="link-compare">
                                                <i class="icon icon-compare icons"></i>Cho vào giỏ hàng
                                                </a>
                                            </li>
                                            <li class="pull-left-none pull-wishlist">
                                                <a href="http://www.hoa18.com/vn/wishlist/index/add/product/2678/form_key/WX0sFPoAmZEA3SxX/" title="Yêu thích" class="link-wishlist">
                                                <i class="icon icon-favorites icons"></i>Xem chi tiết
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade in">
            <div class="category-products">
                <ul class="products-grid row">
                    <li class="item">
                        <div class="category-products-grid">
                            <div class="images-container">
                                <div class="link-view pull-left-none">
                                    <a title="Xem nhanh" href="http://www.hoa18.com/vn/magicshop/quickview/view/id/2678" class="link-quickview">
                                        <i class="pe-icon pe-7s-search icons"></i>
                                    </a>
                                </div>
                                <h2 class="product-name">
                                    <a href="http://www.hoa18.com/vn/mat-troi-cua-em.html" title="Mặt Trời Của Em">Mặt Trời Của Em</a>
                                    <span class="gift-grid">Tặng kèm:  - Mũ bảo hiểm - Ly sứ</span>
                                </h2>
                                <div class="product-hover">
                                    <a href="http://www.hoa18.com/vn/mat-troi-cua-em.html" title="Mặt Trời Của Em" class="product-image">
                                        <img id="product-collection-image-2678" class="img-responsive hinh_hoa" src="http://localhost/shop_hoa-master/public/images/hoa/hoa_hop_1.jpg" alt="Mặt Trời Của Em">
                                    </a>
                                </div>
                                <div class="actions-no hover-box">
                                    <div class="actions">
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-2678">
                                                <span class="price">1.150.000&nbsp;₫</span>
                                            </span>
                                            <a href="http://www.hoa18.com/vn/mat-troi-cua-em.html" class="minimal-price-link">
                                                <span class="label">Mua online:</span>
                                                <span class="price" id="product-minimal-price-2678">1.115.500&nbsp;₫</span>
                                            </a>
                                        </div>
                                        <div class="actions-cart">
                                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                                        </div>
                                        <ul class="add-to-links pull-left-none">
                                            <li class="pull-left-none pull-compare">
                                                <a href="http://www.hoa18.com/vn/catalog/product_compare/add/product/2678/uenc/aHR0cDovL3d3dy5ob2ExOC5jb20vdm4vc2hvcC1ob2EtdHAtaG8tY2hpLW1pbmgtaGEtbm9pL2hvYS10dW9pLWNodWMtbXVuZy1raGFpLXRydW9uZy8,/form_key/WX0sFPoAmZEA3SxX/" title="So sánh" class="link-compare">
                                                <i class="icon icon-compare icons"></i>Cho vào giỏ hàng
                                                </a>
                                            </li>
                                            <li class="pull-left-none pull-wishlist">
                                                <a href="http://www.hoa18.com/vn/wishlist/index/add/product/2678/form_key/WX0sFPoAmZEA3SxX/" title="Yêu thích" class="link-wishlist">
                                                <i class="icon icon-favorites icons"></i>Xem chi tiết
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php $_smarty_tpl->_subTemplateRender("file:layouts/body/quang_cao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </div>
</div><?php }
}
