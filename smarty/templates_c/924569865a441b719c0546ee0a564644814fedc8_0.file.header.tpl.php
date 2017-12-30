<?php
/* Smarty version 3.1.30, created on 2017-12-30 08:07:15
  from "C:\wamp64\www\shop_hoa-master\smarty\templates\layouts\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4749337c3649_64105278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '924569865a441b719c0546ee0a564644814fedc8' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\smarty\\templates\\layouts\\header.tpl',
      1 => 1514621195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4749337c3649_64105278 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="row">
    <div id="bsm_header_mobile">
        <i class="bsm_header_mobile_nav_button fa fa-bars" aria-hidden="true"></i>
        <i class="bsm_header_mobile_nav_button fa fa-times" aria-hidden="true"></i>
        <i class="bsm_header_mobile_search_button fa fa-search" aria-hidden="true"></i>
    </div>
    <div class="col-md-2 bsm_logo">
        <a href=".">
            <img src="public/images/logo/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="" style="width: 160px;height: 68px;">
        </a>
    </div>
    <nav id="bsm_header_mobile_nav"><ul class="bsm_header_nav_left">
            <li ><a href=".">Trang chủ</a></li>
            <li><a href="gioi-thieu.html">Giới thiệu</a></li>
            <li><a href="danh-sach-hoa">Hoa tươi</a></li>
        </ul>
        <ul class="bsm_header_nav_left">
            <li><a href="tin-tuc.html">Tin Tức</a></li>
            <li><a href="check-hoa-don.html">Check hóa đơn</a></li>
            <li><a href="lien-he.html">Liên hệ</a></li>
        </ul>
    </nav>
    <div id="bsm_header_mobile_search">
        <i class="bsm_header_mobile_button_close fa fa-times" aria-hidden="true"></i>
        <form method="post">
            <label>
                <div class="khung-tim-kiem-mobile">
                    <form class="form-inline" method="post" autocomplete="off">
                        <input name="search" id="search-mobile" class="form-control mr-sm-2" type="text" placeholder="Nhập hoa cần tìm kiếm">
                    </form>
                    <div class="hien-thi-tim-kiem-mobile">
                        <div id="result-tenHoa-mobile"></div>
                    </div>
                </div>
            </label>
        </form>
    </div>
    <div id="bsm_footer_mobile" style="background-color: #C9D35D;">
        <a href="gio-hang.html">
            <span class="bsm_header_mobile_cart_button">
                <svg  width="25px" height="22px">
                <image  x="0px" y="0px" width="25px" height="22px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAWCAQAAACftv89AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfhBBsAOw64XtbmAAABVklEQVQ4y42SsUtCURSHv+cTo6WUhiIbHIPaGhqEhhqacstF+jOCoK09GlpsEiSIKGiIwKFoKQqlUXhDDS4KQRY0RGr+GnrveS2Te+5wD/fe757zO+c4OqTDHh6f2Jru1VFX+5pXTNgsNKFteZJelLZFEJrWiaSsHRIBoM4l4NhJifr7OLBOnMi/YBeHBDGegnBbsrV81Pgnz9XQjDJscMSOidxxOhRZBQ6oR4yj0aHAHCt4PEIEW1skxQXP/UhnCOCwBFzT7hXZAWZIMTKwyB/MsoxHFSAo8qZFeXflCoVRbjhjDHAGRBHC4Z1jvgAcWesPrNeXOGskeOD2z5s0C7xyzpsRVWhKBbUl1ZT5NbkZ1SS1VdCUOfwoF4osK2oAUZXDm5w5/DAZppHENZJySYa+/yZAKjR8r0TLQFqUfK9BpV+Lq6yqaqoYZKyeyqKaqir70xXxDSYyPGVHpLjxAAAAAElFTkSuQmCC" />
                </svg>
            </span>
        </a>
        <a class="bsm_header_mobile_phone" href="tel:<?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
">
            <i class="fa fa-phone" aria-hidden="true"></i>
        </a>
    </div>
    <div id="bsm_header_top_bar">
        <div class="container">
            <div class="col-md-6 col-sm-8">
                <ul>
                    <li>
                        <a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
">Gọi ngay: <?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
</a>
                    </li>
                    <li>
                        <div class="khung-tim-kiem-pc">
                            <form class="form-inline" method="post" autocomplete="off">
                                <input name="search" id="search" class="form-control mr-sm-2" type="text" placeholder="Nhập hoa cần tìm kiếm">
                            </form>
                            <div class="hien-thi-tim-kiem">
                                <div id="result-tenHoa"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="bsm_header_navigation" class="container">
        <div class="col-md-5">
            <nav>
                <ul class="bsm_header_nav_left">
                    <li ><a href=".">Trang chủ</a></li>
                    <li><a href="gioi_thieu.php">Giới thiệu</a></li>
                    <li><a href="danh-sach-hoa">Hoa tươi</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-2">
            <a href=".">
            <img src="public/images/logo/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="" style="width: 165px;height: 130px;">
        </a>
        </div>
        <div class="col-md-5">
            <nav>
                <ul class="bsm_header_nav_left">
                    <li><a href="tin-tuc.html">Tin Tức</a></li>
                    <li><a href="check-hoa-don.html">Check hóa đơn</a></li>
                    <li><a href="lien-he.html">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php }
}
