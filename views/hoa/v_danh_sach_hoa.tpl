    <div class="category-products">
        <ul class="products-grid row">
            {foreach $doc_hoa as $hoa}
            <li class="item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/{$hoa->TenHoa_URL}-{$hoa->MaHoa}.html" title="{$hoa->TenHoa}" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/{$hoa->Hinh}" alt="{$hoa->TenHoa}">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/{$hoa->TenHoa_URL}-{$hoa->MaHoa}.html" title="{$hoa->TenHoa}">{$hoa->TenHoa}</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678">{number_format({$hoa->GiaKhuyenMai})} ₫</span>
                                    </a>
                                </div>
                            </div>
                            <div class="actions-cart">
                                <a  onclick="addToCart({$hoa->MaHoa},1)" href="javascript:void(0)"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            {/foreach}
        </ul>
    </div>
    <div class="bsm_products_pagination" >
      {for $i=1;$i<=$phan_trang;$i++}
      <span class="pagination_link" id="{$i}">  {$i}</span>
      {/for}
</div>
</div>
