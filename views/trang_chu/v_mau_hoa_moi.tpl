<div id="menu1" class="tab-pane fade in active">
    <div class="category-products">
        <ul class="products-grid row">
        {foreach $doc_hoa_moi as $hoa_moi}
            <li class="item mau_hoa_moi">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/{makeURL($hoa_moi->TenHoa)}-{$hoa_moi->MaHoa}.html" title="{$hoa_moi->TenHoa}" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/{$hoa_moi->Hinh}"  alt="{$hoa_moi->TenHoa}">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/{makeURL($hoa_moi->TenHoa)}-{$hoa_moi->MaHoa}.html" title="{$hoa_moi->TenHoa}">{$hoa_moi->TenHoa}</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678">{number_format({$hoa_moi->Gia})} ₫</span>
                                    </a>
                                </div>
                            </div>
                            <div class="actions-cart">
                                <a href="gio_hang.php?MaHoa={$hoa_moi->MaHoa}"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
    {/foreach}
        </ul>
    </div>
</div>