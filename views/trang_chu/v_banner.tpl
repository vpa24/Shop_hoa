<div class="container hidden-xs">
    <div class="cms-page-banner">
        <div class="row">
            {foreach $doc_thong_tin as $thong_tin}
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 box">
                <div class="box-content"><a href="{$thong_tin->DuongDan}">
                    <img alt="" class="img-responsive" src="public/images/banner/{$thong_tin->Hinh}"></a>
                    <a class="btn-shop" href="{$thong_tin->DuongDan}">{$thong_tin->HanhDong}</a>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</div>
