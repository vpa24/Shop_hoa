
            <!-- BEGIN HEADER PAGE -->
            <div id="bsm_header_page">
                <h1>Chi tiết hoa {$title}</h1>
            </div>
            <!-- END HEADER PAGE -->

            <!-- BEGIN PRODUCT DETAILS -->
            <div id="bsm_product_details" class="container">
                <form method="post" action="gio_hang.php?MaHoa={$hoa->MaHoa}">
                    <div id="bsm_product_details_content">
                      <div class="grid">
                    		<div class="flexslider">
                    			   <div class="thumb-image hinh_chi_tiet"> <img id="zoom_08" src="public/images/hoa/{$hoa->Hinh}" data-zoom-image="public/images/hoa/{$hoa->Hinh}" class="img-responsive hinh_ct"> </div>
                    		</div>
                    	</div>
                        <div class="col-md-6 col-sm-6 col-xs-12 noi_dung_ct">
                            <h1>{$hoa->TenHoa}</h1>
                            <ul>
                                <li><h4>Giá: </h4></li>
                                <li><h4>{number_format($hoa->Gia)} vnđ</h4></li>
                            </ul>
                            <h4>Thành phần: </h4>
                            <p>{$hoa->ThanhPhan}</p><br>
                            <h4>Nội dung: </h4>
                            <p>{$hoa->NoiDung}</p><br />
                            <h4 class="sl">Số lượng:</h4>

                            <div class="quantity">
               <div class="quantity-select">
                 <div class="entry value-minus" id="giam">&nbsp;</div>
                 <div class="so_luong"><input type="text" class="entry value item_quantity_" name="so_luong" value="1" id="sl_{$hoa->MaHoa}"></div>
                 <div class="entry value-plus active" id="tang">&nbsp;</div>
               </div>
             </div>
              <div>
                	<input type="submit" name="them" value="Thêm vào giỏ hàng" class="button gio_hang" />
              </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END PRODUCT DETAILS -->
            <!-- BEGIN NEW PRODUCTS -->
            <div id="bsm_products" class="bsm_new_products">
                <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section">
                    <h1>Những mẫu hoa đẹp</h1>
                    <img src="public/img/divider.png" alt="">
                </div>
                <div id="bsm_new_products" class="container">
                    <div class="swiper-wrapper">
                        {foreach $hoa_cung_loai as $hoa}
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
                        {/foreach}
                    </div>
                </div>
                <div class="bsm_products_new_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="bsm_products_new_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
            <!-- END NEW PRODUCTS -->
