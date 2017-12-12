            <!-- BEGIN HEADER PAGE -->
            <div id="bsm_header_page">
                <h1>Danh sách hoa</h1>
            </div>
            <!-- END HEADER PAGE -->

            <!-- BEGIN LISTING PRODUCTS -->
            <div id="bsm_listing_products">
                <div class="container">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <form>
                            <div class="bsm_shop_page_filters_form">
                                <div class="bsm_listing_products_widget bsm_listing_products_widget_categories">
                                    <h4>Loại hoa</h4>
                                    <ul>
                                        {foreach $doc_loai_hoa as $loai_hoa}
                                          <a href="loai-hoa/{makeURL($loai_hoa->TenLoai)}-{$loai_hoa->MaLoai}">  <li>{$loai_hoa->TenLoai}</li></a>
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="bsm_products" class="col-md-9 col-sm-8 col-xs-12">
                        {foreach $doc_hoa as $hoa}
                        <a href="san-pham/{makeURL($hoa->TenHoa)}-{$hoa->MaHoa}.html">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="bsm_product">
                                    <div class="bsm_product_image">
                                        <img class="img-responsive hinh_hoa"  src="public/images/hoa/{$hoa->Hinh}" alt="{$hoa->TenHoa}">
                                    </div>
                                    <div class="bsm_product_info">
                                        <h4>{$hoa->TenHoa}</h4>
                                        <span>{number_format($hoa->Gia)} đ</span>
                                    </div>
                                    <div class="bsm_product_hover">
                                </div>
                            </div>
                        </div>
                        </a>
                        {/foreach}
                      </div>
                      {if count($doc_hoa>9)}
                        <div class="bsm_products_pagination">
                            {$phan_trang}
                        </div>
                      {/if}
                </div>
            </div>
            <!-- END LISTING PRODUCTS -->
