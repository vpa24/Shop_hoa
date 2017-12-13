<div class="col-main col-lg-9 col-md-9 col-sm-9 col-xs-12 content-color color f-right">
    <div class="category-products">
        <ul class="products-grid row">
    {foreach $doc_hoa as $hoa}
            <li class="item">
                <div class="category-products-grid">
                    <div class="images-container">

                        <div class="product-hover">
                            <a href="san-pham/{makeURL($hoa->TenHoa)}-{$hoa->MaHoa}.html" title="{$hoa->TenHoa}" class="product-image">
                                <img id="product-collection-image-2678" class="img-responsive hinh_hoa" src="public/images/hoa/{$hoa->Hinh}" alt="{$hoa->TenHoa}">
                            </a>
                        </div>
                        <h2 class="product-name">
                            <a href="san-pham/{makeURL($hoa->TenHoa)}-{$hoa->MaHoa}.html" title="{$hoa->TenHoa}">{$hoa->TenHoa}</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678">{number_format({$hoa->Gia})} đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
    {/foreach}
        </ul>
    </div>
    <div class="bsm_products_pagination">
   {$phan_trang}
