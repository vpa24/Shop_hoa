<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 custom-product custom3">
  <div class= "vmqhdvpnqm magicproduct mage-custom">
    <div class="block-title-tabs">
      <ul class="magictabs">
        <li class="item active loaded single">
          <span class ="title">Sản phẩm rẻ nhất</span>
        </li>
      </ul>
    </div>
    <div class="content-products">
      <div class="mage-magictabs mc-random">
        <ul class="flexisel-content products-grid random zoomOut play">
          {foreach $san_pham_re_nhat as $re_nhat}
          <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class="item item-animate">
            <div class="per-product clearfix">
              <div class="images-container">
                <div class="product-hover">
                  <a href="san-pham/{makeURL($re_nhat->TenHoa)}-{$re_nhat->MaHoa}.html" title="{$re_nhat->TenHoa}" class="product-image">
                    <img class="img-responsive hinh_san_pham" src="public/images/hoa/{$re_nhat->Hinh}" alt="{$re_nhat->TenHoa}" />
                  </a>
                </div>
              </div>
              <div class="products-textlink product-featured-custom clearfix">
                <h2 class="product-name">
                  <a href="san-pham/{makeURL($re_nhat->TenHoa)}-{$re_nhat->MaHoa}.html" title="{$re_nhat->TenHoa}">{$re_nhat->TenHoa}</a>
                </h2>
                <div class="price-box">
                  <p class="old-price">
                    <span class="price-label">Giá mới:</span>
                    <span class="price" id="product-price-2107">
              {number_format($re_nhat->Gia)}  đ</span>
                  </p>
                  <a href="san-pham/{makeURL($re_nhat>TenHoa)}-{$re_nhat>MaHoa}.html" class="minimal-price-link">
                    <span class="label">Mua online:</span>
                    <span class="price" id="product-minimal-price-2107">
        {number_format($re_nhat->GiaKhuyenMai)}   đ   </span>
                  </a>
                </div>
                <div class="actions"></div>
              </div>
            </div>
          </li>
          {/foreach}
        </ul>
      </div>
    </div>
    <!-- MAP -->
    <!-- MAP -->
  </div>

</div>
