<div id="menu3" class="tab-pane fade in">
    <div class="category-products">
        <ul class="products-grid row">
        {foreach $doc_hoa_khuyen_mai as $hoa_km}
            <li class="item mau_hoa_moi">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/{makeURL($hoa_km->TenHoa)}-{$hoa_km->MaHoa}.html" title="{$hoa_km->TenHoa}" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/{$hoa_km->Hinh}"  alt="{$hoa_km->TenHoa}">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/{makeURL($hoa_km->TenHoa)}-{$hoa_km->MaHoa}.html" title="{$hoa_km->TenHoa}">{$hoa_km->TenHoa}</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678">{number_format({$hoa_km->Gia})} ₫</span>
                                    </a>
                                </div>
                            </div>
                            <div class="actions-cart">
                                <a href="gio_hang.php?MaHoa={$hoa_km->MaHoa}"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
    {/foreach}
        </ul>
    </div>
</div>
