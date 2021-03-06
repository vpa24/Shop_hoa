<?php
/* Smarty version 3.1.30, created on 2017-12-18 13:54:55
  from "C:\wamp64\www\shop_hoa-master_loi\smarty\templates\layouts\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37c8afe88c74_30312749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcd7a9d7545c573af179d14592aa7351d6d3a9dd' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master_loi\\smarty\\templates\\layouts\\header.tpl',
      1 => 1513586802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37c8afe88c74_30312749 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div id="bsm_footer_mobile" style="background-color: #C9D35D;">
                <span class="bsm_header_mobile_cart_button">
                    <svg  width="25px" height="22px">
                    <image  x="0px" y="0px" width="25px" height="22px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAWCAQAAACftv89AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfhBBsAOw64XtbmAAABVklEQVQ4y42SsUtCURSHv+cTo6WUhiIbHIPaGhqEhhqacstF+jOCoK09GlpsEiSIKGiIwKFoKQqlUXhDDS4KQRY0RGr+GnrveS2Te+5wD/fe757zO+c4OqTDHh6f2Jru1VFX+5pXTNgsNKFteZJelLZFEJrWiaSsHRIBoM4l4NhJifr7OLBOnMi/YBeHBDGegnBbsrV81Pgnz9XQjDJscMSOidxxOhRZBQ6oR4yj0aHAHCt4PEIEW1skxQXP/UhnCOCwBFzT7hXZAWZIMTKwyB/MsoxHFSAo8qZFeXflCoVRbjhjDHAGRBHC4Z1jvgAcWesPrNeXOGskeOD2z5s0C7xyzpsRVWhKBbUl1ZT5NbkZ1SS1VdCUOfwoF4osK2oAUZXDm5w5/DAZppHENZJySYa+/yZAKjR8r0TLQFqUfK9BpV+Lq6yqaqoYZKyeyqKaqir70xXxDSYyPGVHpLjxAAAAAElFTkSuQmCC" />
                    </svg>
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
