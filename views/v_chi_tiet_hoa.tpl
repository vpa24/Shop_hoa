{include file="views/chi_tiet_hoa/v_thanh_danh_muc.tpl" }
<div class="container">
  <div class="product-view">
    <div class="row">
      <div class="col-md-5">
          <img class="img-responsive hinh_ct" src="public/images/hoa/{$hoa->Hinh}" alt="{$hoa->TenHoa}" title="{$hoa->TenHoa}">
      </div>
      <div class="product-shop col-md-7 col-sm-6 col-xs-12">
        <div class="product-shop-content">
            <div class="col-md-5 product-left-block">
                <div class="product-name"><h1>{$hoa->TenHoa}</h1></div>
                <div class="product-type-data">
                    <div class="price-box">
                        <p class="old-price"><span class="price-label">Giá:</span></p>
                        <p class="special-price">
                            <span class="price" id="product-price-2107">{number_format({$hoa->Gia})} ₫</span>
                        </p>
                    </div>
                    <p class="availability in-stock">Tình trạng: <span>Còn hàng</span></p>
                    <div class="product-qty" style="margin: 0px 0px 10px 5px">
                      <div class="sl">Số lượng:</div>
                      <div class="quantity">
                        <div class="quantity-select">
                          <div class="entry value-minus" id="giam">&nbsp;</div>
                            <div class="so_luong"><input type="text" class="entry value item_quantity_" name="so_luong" value="1" id="sl_{$hoa->MaHoa}"></div>
                            <div class="entry value-plus active" id="tang">&nbsp;</div>
                        </div>
                      </div>
                    </div>
                    <button class="bttn-fill bttn-md bttn-warning bttn-no-outline">Thêm vào giỏ hàng</button>
                </div>
            </div>
          {include file="views/chi_tiet_hoa/v_thong_tin_khac.tpl"}
          {include file="views/chi_tiet_hoa/v_thong_tin_hoa.tpl"}
        </div>
    </div>
  </div>
</div>
  {include file="views/chi_tiet_hoa/v_san_pham_cung_loai.tpl"}
  {include file="layouts/body/quang_cao.tpl"}
</div>
