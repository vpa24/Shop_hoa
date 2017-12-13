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
            
            {foreach $doc_hoa as $hoa}
                    <li class="item">
                        <div class="category-products-grid">
                            <div class="images-container">
                                <h2 class="product-name">
                                    <a href="" title="{$hoa->TenHoa}">{$hoa->TenHoa}</a>
                                </h2>
                                <div class="product-hover">
                                    <a href="" title="{$hoa->TenHoa}" class="product-image">
                                        <img id="product-collection-image-2678" class="img-responsive hinh_hoa" src="public/images/hoa/{$hoa->Hinh}" style="max-height: 240px; max-width: 240px" alt="{$hoa->TenHoa}">
                                    </a>
                                </div>
                                <div class="actions-no hover-box">
                                    <div class="actions">
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-2678">
                                                <span class="price">{number_format({$hoa->Gia})} ₫</span>
                                            </span>
                                            <a href="http://www.hoa18.com/vn/mat-troi-cua-em.html" class="minimal-price-link">
                                                <span class="label">Mua online:</span>
                                                <span class="price" id="product-minimal-price-2678">{number_format({$hoa->Gia})} đ</span>
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
            {/foreach}
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
            {include file="layouts/body/quang_cao.tpl"}
        </div>
    </div>
</div>