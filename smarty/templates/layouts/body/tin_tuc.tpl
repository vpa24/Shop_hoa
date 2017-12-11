<section class="container" style="padding-bottom:25px; margin-bottom: 15px">
    <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section">
        <h1>Những tin tức mới</h1>
        <img src="public/img/divider2.png" alt="">
    </div>
    <div>
    {foreach $tin_tuc as $tin}
    <div class="col-sm-3 col-xs-6">
    <figure>
        <a href="tin-tuc/{makeURL($tin->TenTT)}-{$tin->MaTT}.html"><img class="img-thumbnail" src="public/images/tin_tuc/{$tin->Hinh}" style="height:160px;width:100%;object-fit: cover;"></a>
        <figcaption>
            <h3 class="tieu_deTT"><a href="tin-tuc/{makeURL($tin->TenTT)}-{$tin->MaTT}.html">{$tin->TenTT}</a></h3>
            <div class="text ellipsis">
                <span>
                    <p class="hidden-text">{$tin->NoiDung}</p>
                </span>
            </div>
        </figcaption>
    </figure>
        </div>
    {/foreach}
    </div><span class="clearfix"></span></div>
</section>
