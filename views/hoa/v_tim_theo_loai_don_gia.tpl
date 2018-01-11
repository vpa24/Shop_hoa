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
                        <span class="maLoai" id="maloai_{$loai_hoa->MaLoai}">{$loai_hoa->TenLoai}</span>
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
                            <dt class="odd gia_ban">Giá bán</dt>
                            <dt class="toggle-tab mobile even" style="display:none"></dt>
                            <dd class="Giá bán toggle-content odd">
                                  <div class="filter-panel">
                                     <p><input type="hidden" class="price_range" value="0,1000000" /></p>
                                 </div>
                                 <input class="nut_tim" type="button"  value="Tìm" />
                            </dd>
                        </dl>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
