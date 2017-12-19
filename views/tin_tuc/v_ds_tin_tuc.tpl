<div class="col-main col-lg-10 col-md-10 col-sm-12 col-xs-12 content-color color f-right">
    <div class="category-products">
        <ul class="products-grid row">
            {foreach $tin_tuc as $tin}
            <li class="item tt">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="tin-tuc/{makeURL($tin->TenTT)}-{$tin->MaTT}.html" title="{$tin->TenTT}" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/tin_tuc/{$tin->Hinh}"  alt="{$tin->TenTT}">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="tin-tuc/{makeURL($tin->TenTT)}-{$tin->MaTT}.html" title="{$tin->TenTT}">{$tin->TenTT}</a>
                        </h2>

                    </div>
                </div>
            </li>
            {/foreach}
        </ul>
    </div>
    <div class="bsm_products_pagination" >

</div>
