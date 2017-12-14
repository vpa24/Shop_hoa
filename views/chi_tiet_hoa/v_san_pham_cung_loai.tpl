<div class="container">
  <ul class="magictabs">
        <li class="item active loaded single">
            <span class="title">Sản phẩm cùng loại</span>
        </li>
  </ul>
  <div class="category-products">
    <ul class="products-grid row">
      {foreach $hoa_cung_loai as $hoa}
        <li class="item">
            <div class="category-products-grid">
                <div class="images-container">
                    <div class="product-hover">
                        <a href="san-pham/{makeURL($hoa->TenHoa)}-{$hoa->MaHoa}.html" title="{$hoa->TenHoa}" class="product-image">
                            <img class="img-responsive hinh_hoa" src="public/images/hoa/{$hoa->Hinh}"  alt="{$hoa->TenHoa}">
                        </a>
                    </div>
                    <h2 class="product-name">
                      <a href="san-pham/{makeURL($hoa->TenHoa)}-{$hoa->MaHoa}.html" title="{$hoa->TenHoa}">{$hoa->TenHoa}</a>
                    </h2>
                    <div class="actions-no hover-box">
                        <div class="actions">
                            <div class="price-box">
                                <a class="minimal-price-link">
                                    <span class="mua_online">Mua online:</span>
                                    <span class="price" id="product-minimal-price-2678">{number_format({$hoa->Gia})} ₫</span>
                                </a>
                            </div>
                            <div class="actions-cart">
                                <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
        </li>
        {/foreach}
    </ul>
  </div>
</div>
