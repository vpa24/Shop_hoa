<div id="bsm_products" class="bsm_new_products">
    <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section">
        <h1>NHỮNG MẪU HOA TƯƠI CÙNG LOẠI KHÁC</h1>
        <img src="public/img/divider.png" alt="">
    </div>
    <div id="bsm_new_products" class="container">
        <div class="swiper-wrapper">
            {foreach $hoa_cung_loai as $hoa}
            <a href="san-pham/{makeURL($hoa->TenHoa)}-{$hoa->MaHoa}.html">
            <div class="bsm_product swiper-slide">
                <div class="bsm_product_image">
                    <img class="img-responsive hinh_anh" src="public/images/hoa/{$hoa->Hinh}" alt="{$hoa->TenHoa}">
                </div>
                <div class="bsm_product_info">
                     <a href="san-pham/{makeURL($hoa->TenHoa)}-{$hoa->MaHoa}.html"><h4>{$hoa->TenHoa}</h4></a>
                    <span>{number_format($hoa->Gia)} vnđ</span>
                </div>
                <div class="bsm_product_hover">
                </div>
            </div>
            </a>
            {/foreach}
        </div>
    </div>
    <div class="bsm_products_new_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="bsm_products_new_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>
