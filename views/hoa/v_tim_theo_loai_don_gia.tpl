<div class="col-left sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12 left-color color f-left">
    <div class="anav-container">
        <div class="block block-anav">
            <ul class="magictabs">
                <li class="item active loaded single">
                    <span class="title">Tìm theo loại sản phẩm</span>
                </li>
            </ul>
            <ul class="nav-accordion left">
                <ul class="level0" style="display: block;">
                    {foreach $doc_loai_hoa as $loai_hoa}
                    <li>
                        <a href="loai-hoa/{makeURL($loai_hoa->TenLoai)}-{$loai_hoa->MaLoai}">
                            <span>{$loai_hoa->TenLoai}</span>
                        </a>
                    </li>
                    {/foreach}
                </ul>
            </ul>
        </div>
        <div class="block block-layered-nav block-layered-nav--no-filters">
            <ul class="magictabs">
                <li class="item active loaded single">
                    <span class="title">Tìm theo giá</span>
                </li>
            </ul>
            <div class="block-content toggle-content1">
                <div id="narrow-by-list">
                    <dl class="narrow-by">
                        <dl class="narrow-by">
                            <dt class="odd">Giá bán</dt>
                            <dt class="toggle-tab mobile even" style="display:none"></dt>
                            <dd class="Giá bán toggle-content odd">
                                <ol>
                                    <li class="tim_theo_gia">
                                        <a href="http://www.hoa18.com/vn/shop-hoa-tp-ho-chi-minh-ha-noi/hoa-tuoi-chuc-mung-khai-truong?price=-1000000">
                                            <span class="price">0&nbsp;₫</span> -
                                            <span class="price">{number_format(500000)}&nbsp;₫</span>
                                            <span class="count">(25)</span>
                                        </a>
                                    </li>
                                    <li class="tim_theo_gia">
                                        <a href="http://www.hoa18.com/vn/shop-hoa-tp-ho-chi-minh-ha-noi/hoa-tuoi-chuc-mung-khai-truong?price=-1000000">
                                            <span class="price">{number_format(500000)}&nbsp;₫</span> -
                                            <span class="price">{number_format(1000000)}&nbsp;₫</span>
                                            <span class="count">(25)</span>
                                        </a>
                                    </li>
                                </ol>
                            </dd>
                        </dl>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
