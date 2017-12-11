<!-- BEGIN PRODUCTS -->
            <div id="bsm_products" class="container">
                <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section">
                    <h1>Mẫu hoa mới!</h1>
                    <img src="public/img/divider2.png" alt="">
                </div>
                <!-- Foreach -->
{*<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>*}

                {foreach $doc_hoa as $hoa}
                <form method="post" action="gio_hang.php?MaHoa={$hoa->MaHoa}">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="bsm_product">
                        <div class="bsm_product_image">
                            <img class="img-responsive hinh_anh" src="public/images/hoa/{$hoa->Hinh}" alt="{$hoa->TenHoa}">
                        </div>
                        <div class="bsm_product_info">
                           <a href="san-pham/{makeURL($hoa->TenHoa)}-{$hoa->MaHoa}.html">
                             <h4>{$hoa->TenHoa}</h4></a>
                            <span>{number_format($hoa->Gia)} đ</span>
                        </div>
                        <div class="bsm_product_hover hidden-xs">
                            <button type="submit" class="btn btn-default btn_xem_ct" name="them_index" >Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                  </form>
                {/foreach}
                <!-- End Foreach -->

                <div class="col-md-12 col-sm-12 col-xs-12">
                   <a href="danh-sach-hoa.html"> <button id="bsm_products_more" class="bsm_button_style">Xem tất cả</button></a>
                </div>
            </div>
            {include file="layouts/body/tin_tuc.tpl"}
<!-- END PRODUCTS -->
