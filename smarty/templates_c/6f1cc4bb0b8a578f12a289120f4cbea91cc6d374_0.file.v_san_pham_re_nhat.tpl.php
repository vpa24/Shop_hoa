<?php
/* Smarty version 3.1.30, created on 2017-12-16 01:38:15
  from "C:\wamp64\www\shop_hoa-master_01\views\trang_chu\v_san_pham_re_nhat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3479077466b6_28391328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f1cc4bb0b8a578f12a289120f4cbea91cc6d374' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master_01\\views\\trang_chu\\v_san_pham_re_nhat.tpl',
      1 => 1513210000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3479077466b6_28391328 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 custom-product custom3">
  <div class= "vmqhdvpnqm magicproduct mage-custom">
    <div class="block-title-tabs">
      <ul class="magictabs">
        <li class="item active loaded single">
          <span class ="title">Sản phẩm rẻ nhất</span>
        </li>
      </ul>
    </div>
    <div class="content-products">
      <div class="mage-magictabs mc-random">
        <ul class="flexisel-content products-grid random zoomOut play">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['san_pham_re_nhat']->value, 're_nhat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['re_nhat']->value) {
?>
          <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class="item item-animate">
            <div class="per-product clearfix">
              <div class="images-container">
                <div class="product-hover">
                  <a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['re_nhat']->value->TenHoa);?>
-<?php echo $_smarty_tpl->tpl_vars['re_nhat']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['re_nhat']->value->TenHoa;?>
" class="product-image">
                    <img class="img-responsive hinh_san_pham" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['re_nhat']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['re_nhat']->value->TenHoa;?>
" />
                  </a>
                </div>
              </div>
              <div class="products-textlink product-featured-custom clearfix">
                <h2 class="product-name">
                  <a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['re_nhat']->value->TenHoa);?>
-<?php echo $_smarty_tpl->tpl_vars['re_nhat']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['re_nhat']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['re_nhat']->value->TenHoa;?>
</a>
                </h2>
                <div class="price-box">
                  <p class="old-price">
                    <span class="price-label">Giá mới:</span>
                    <span class="price" id="product-price-2107">
              <?php echo number_format($_smarty_tpl->tpl_vars['re_nhat']->value->Gia);?>
  đ</span>
                  </p>
                  <a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['re_nhat']->value > 'TenHoa');?>
-<?php echo $_smarty_tpl->tpl_vars['re_nhat']->value > 'MaHoa';?>
.html" class="minimal-price-link">
                    <span class="label">Mua online:</span>
                    <span class="price" id="product-minimal-price-2107">
        <?php echo number_format($_smarty_tpl->tpl_vars['re_nhat']->value->GiaKhuyenMai);?>
   đ   </span>
                  </a>
                </div>
                <div class="actions"></div>
              </div>
            </div>
          </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
      </div>
    </div>
    <!-- MAP -->
    <!-- MAP -->
  </div>

</div>
<?php }
}
