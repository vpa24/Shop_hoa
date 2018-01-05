<div class="col-md-5 product-left-block">
    <div class="product-name"><h1>{$hoa->TenHoa}</h1></div>
    <div class="product-type-data">
        <div class="price-box">
            <p class="old-price"><span class="price-label">Giá:</span></p>
            <p class="special-price">
                <span class="price" id="product-price-2107">{number_format({$hoa->GiaKhuyenMai})} ₫</span>
            </p>
        </div>
        {if $hoa->SoLuongSP >0 }
        <p class="availability in-stock">Tình trạng: <span>Còn hàng</span></p>
        <div class="product-qty" style="margin: 0px 0px 10px 0px">
          <div class="sl">Số lượng:</div>
          <div class="quantity">
            <div class="quantity-select">
              <div class="entry value-minus" id="giam">&nbsp;</div>
                <div class="so_luong"><input type="text" class="entry value item_quantity_" name="so_luong" value="1" id="sl_{$hoa->MaHoa}"></div>
                <div class="entry value-plus active" id="tang">&nbsp;</div>
            </div>
          </div>
        </div>
        {else}
        <p class="availability in-stock">Tình trạng: <span class="het_hang">Đã hết hàng</span></p>
        {/if}
        {if $hoa->SoLuongSP>0}
        <div class="add-to-cart" style="margin: 0px 0px 10px 0px">
          <button type="button" title="Mua ngay" name="them" class="button btn-cart" onclick="addToCartCT({$hoa->MaHoa})">
              <span>
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span class="view-cart"> Mua ngay</span>
              </span>
          </button>
        </div>
        {/if}
    </div>
</div>
