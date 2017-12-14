<?php
/* Smarty version 3.1.30, created on 2017-12-14 00:06:47
  from "C:\wamp64\www\shop_hoa-master\smarty\templates\layouts\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a31c0976964c8_39665311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '924569865a441b719c0546ee0a564644814fedc8' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\smarty\\templates\\layouts\\header.tpl',
      1 => 1513209985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a31c0976964c8_39665311 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                        <?php if (isset($_SESSION['tong_gio_hang'])) {?>
                          <?php echo $_SESSION['tong_gio_hang'];?>

                          <?php } else { ?>
                          0
                        <?php }?>
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
                                <p class="sl_gio_hang"><?php if (isset($_SESSION['tong_gio_hang']) > 0) {?>
                                  <span class="tong_sl"><?php echo $_SESSION['tong_gio_hang'];?>
</span>
                                  <?php } else { ?>
                                  <span class="tong_sl">0</span>
                                <?php }?></p>
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
<?php }
}
