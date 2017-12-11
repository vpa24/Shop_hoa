<?php
/* Smarty version 3.1.30, created on 2017-12-10 12:36:56
  from "C:\wamp64\www\shop_hoa\smarty\templates\layouts\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2d2a685ed6d4_11807369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62a6e8c12d64ced068228a1386cad7b8ff64ba0f' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\smarty\\templates\\layouts\\header.tpl',
      1 => 1512909412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2d2a685ed6d4_11807369 (Smarty_Internal_Template $_smarty_tpl) {
?>


        <!-- BEGIN HEADER -->
        <header class="row">
            <div id="bsm_header_mobile">
                <i class="bsm_header_mobile_nav_button fa fa-bars" aria-hidden="true"></i>
                <i class="bsm_header_mobile_nav_button fa fa-times" aria-hidden="true"></i>
                <i class="bsm_header_mobile_search_button fa fa-search" aria-hidden="true"></i>
            </div>
            <div class="col-md-2 bsm_logo">
                <a href="trang-chu.html">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <nav id="bsm_header_mobile_nav"><ul class="bsm_header_nav_left">
                    <li ><a href="trang-chu.html">Trang chủ</a></li>
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
                        <svg width="16px" height="17px">
                        <path d="M15.164,8.969 L1.977,8.937 C0.941,8.937 1.008,7.906 1.008,7.906 C1.008,7.016 1.992,7.000 1.992,7.000 L3.023,7.000 C3.023,7.000 2.816,8.000 3.977,8.000 L5.998,8.000 C7.091,7.953 7.039,7.000 7.039,7.000 L9.914,7.000 C9.914,7.000 9.868,8.000 11.070,8.000 L12.952,8.000 C14.015,8.000 14.039,7.015 14.039,7.015 L15.195,7.015 C15.727,7.015 15.977,7.969 15.977,7.969 C15.977,8.802 15.164,8.969 15.164,8.969 ZM12.477,7.000 L11.227,7.000 C11.138,6.984 10.711,6.823 10.633,6.500 L8.695,1.468 C8.695,1.193 8.732,0.969 9.195,0.969 L10.695,0.969 C10.695,0.969 11.195,1.193 11.195,1.468 L12.977,6.500 C12.977,6.776 12.971,7.000 12.477,7.000 ZM6.320,6.500 C6.242,6.823 5.909,6.984 5.820,7.000 L4.508,7.000 C4.013,7.000 4.008,6.776 4.008,6.500 L5.664,1.468 C5.914,1.131 6.164,0.969 6.164,0.969 L7.539,0.969 C8.128,0.969 8.039,1.193 8.039,1.468 L6.320,6.500 ZM13.966,15.870 C13.826,16.432 12.997,16.963 12.997,16.963 L4.029,16.980 C3.622,16.980 3.013,15.901 3.013,15.901 L2.017,10.004 L15.028,10.021 L13.966,15.870 Z"></path>
                        </svg>
                        <p>2 items (357 $)</p>
                    </a>
                </div>
            </div>
            <div id="bsm_footer_mobile">
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
                                <svg width="16px" height="17px">
                                <path d="M15.164,8.969 L1.977,8.937 C0.941,8.937 1.008,7.906 1.008,7.906 C1.008,7.016 1.992,7.000 1.992,7.000 L3.023,7.000 C3.023,7.000 2.816,8.000 3.977,8.000 L5.998,8.000 C7.091,7.953 7.039,7.000 7.039,7.000 L9.914,7.000 C9.914,7.000 9.868,8.000 11.070,8.000 L12.952,8.000 C14.015,8.000 14.039,7.015 14.039,7.015 L15.195,7.015 C15.727,7.015 15.977,7.969 15.977,7.969 C15.977,8.802 15.164,8.969 15.164,8.969 ZM12.477,7.000 L11.227,7.000 C11.138,6.984 10.711,6.823 10.633,6.500 L8.695,1.468 C8.695,1.193 8.732,0.969 9.195,0.969 L10.695,0.969 C10.695,0.969 11.195,1.193 11.195,1.468 L12.977,6.500 C12.977,6.776 12.971,7.000 12.477,7.000 ZM6.320,6.500 C6.242,6.823 5.909,6.984 5.820,7.000 L4.508,7.000 C4.013,7.000 4.008,6.776 4.008,6.500 L5.664,1.468 C5.914,1.131 6.164,0.969 6.164,0.969 L7.539,0.969 C8.128,0.969 8.039,1.193 8.039,1.468 L6.320,6.500 ZM13.966,15.870 C13.826,16.432 12.997,16.963 12.997,16.963 L4.029,16.980 C3.622,16.980 3.013,15.901 3.013,15.901 L2.017,10.004 L15.028,10.021 L13.966,15.870 Z"/>
                                </svg>
                                <p>2 items (357 $)</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bsm_header_navigation" class="container">
                <div class="col-md-5">
                    <nav>
                        <ul class="bsm_header_nav_left">
                            <li ><a href="trang-chu.html">Trang chủ</a></li>
                            <li><a href="gioi_thieu.php">Giới thiệu</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2">
                    <a href="trang-chu.html">
                        <img src="public/img/logo2.png" alt="">
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
