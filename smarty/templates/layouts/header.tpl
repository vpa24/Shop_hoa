        <!-- BEGIN HEADER -->
        <header class="row">
            <div id="bsm_header_mobile">
                <i class="bsm_header_mobile_nav_button fa fa-bars" aria-hidden="true"></i>
                <i class="bsm_header_mobile_nav_button fa fa-times" aria-hidden="true"></i>
                <i class="bsm_header_mobile_search_button fa fa-search" aria-hidden="true"></i>
            </div>
            <div class="col-md-2 bsm_logo">
                <a href=".">
                    <img src="http://marry.vn/wp-content/uploads/users/335244/2014/10/12/logo-600x416-pixel.png" alt="" style="width: 160px;height: 68px;">
                </a>
            </div>
            <nav id="bsm_header_mobile_nav"><ul class="bsm_header_nav_left">
                    <li ><a href=".">Trang chủ</a></li>
                    <li><a href="gioi_thieu.php">Giới thiệu</a></li>
                </ul>
                <ul class="bsm_header_nav_left">
                    <li><a href="danh-sach-hoa">Hoa tươi</a></li>
                    <li><a href="lien_he.php">Liên hệ</a></li>
                </ul>
            </nav>
            <div id="bsm_header_mobile_search">
                <i class="bsm_header_mobile_button_close fa fa-times" aria-hidden="true"></i>
                <form method="post">
                    <label>
                        <input placeholder="Tìm kiếm" name="bsm_header_search" type="text">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                </form>
            </div>
            <div id="bsm_header_mobile_cart">
                <i class="bsm_header_mobile_button_close fa fa-times" aria-hidden="true"></i>
                <div class="bsm_virtual_cart">
                    <a href="gio-hang.html" class="bsm_virtual_cart_content">
                        <img src="public/images/shopping-circle-blue-512.png"/>
                        <p>
                        {if isset($smarty.session.tong_gio_hang)}
                          {$smarty.session.tong_gio_hang}
                          {else}
                          0
                        {/if}
                        </p>
                    </a>
                </div>
            </div>
            <div id="bsm_footer_mobile">
                <span class="bsm_header_mobile_cart_button">
                    <img src="public/images/shopping-circle-blue-512.png"/>
                </span>
                <a class="bsm_header_mobile_phone" href="tel:+40721777777">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
            </div>
            <div id="bsm_header_top_bar">
                <div class="container">
                    <div class="col-md-6 col-sm-8">
                        <ul>
                            <li><a href="tel:012345678">Gọi ngay: +841789008221</a></li>
                            <li>
                                <form method="post">
                                    <label>
                                        <input type="text" placeholder="Nhập từ khóa" name="bsm_header_search">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </label>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <div class="bsm_virtual_cart">
                            <a href="gio-hang.html" class="bsm_virtual_cart_content">
                                <img src="public/images/shopping-circle-blue-512.png" class="hinh_gio_hang"/>
                                <p class="sl_gio_hang">{if isset($smarty.session.tong_gio_hang)>0}
                                  <span class="tong_sl">{$smarty.session.tong_gio_hang}</span>
                                  {else}
                                  <span class="tong_sl">0</span>
                                {/if}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bsm_header_navigation" class="container">
                <div class="col-md-5">
                    <nav>
                        <ul class="bsm_header_nav_left">
                            <li ><a href=".">Trang chủ</a></li>
                            <li><a href="gioi_thieu.php">Giới thiệu</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2">
                    <a href=".">
                    <img src="http://marry.vn/wp-content/uploads/users/335244/2014/10/12/logo-600x416-pixel.png" alt="" style="width: 165px;height: 130px;">
                </a>
                </div>
                <div class="col-md-5">
                    <nav>
                        <ul class="bsm_header_nav_left">
                            <li><a href="danh-sach-hoa">Hoa tươi</a></li>
                            <li><a href="lien-he.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- END HEADER -->
