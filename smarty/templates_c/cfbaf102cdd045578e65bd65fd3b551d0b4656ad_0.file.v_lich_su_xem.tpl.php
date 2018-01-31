<?php
/* Smarty version 3.1.30, created on 2018-01-29 09:02:26
  from "C:\wamp64\www\shop_hoa-master\views\chi_tiet_hoa\v_lich_su_xem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6ee3222ed561_57714301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfbaf102cdd045578e65bd65fd3b551d0b4656ad' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\chi_tiet_hoa\\v_lich_su_xem.tpl',
      1 => 1517216521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6ee3222ed561_57714301 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['ds_lich_su']->value) > 1) {?>
    <div class="container MarginTop">
  <ul class="magictabs">
        <li class="item active loaded single">
            <span class="title da_xem">Sản phẩm đã xem</span>
        </li>
         <?php if (isset($_SESSION['makh'])) {?>
        <div>
         <a class="xem_tat_ca" href="san-pham-da-xem">Xem thêm</a>
         </div>
         <?php }?>
  </ul>
  <div class="category-products">
    <ul class="products-grid row">
      <?php $_smarty_tpl->_assignInScope('i', 0);
?>
      <?php $_smarty_tpl->_assignInScope('j', 0);
?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_lich_su']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
        <li class="item">
            <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover cp_img">
                            <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                            </a>
                        </div>

                        <h2 class="product-name">
                        <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa']->value->GiaKhuyenMai;
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>
 ₫</span>
                                    </a>
                                </div>
                            </div>
                              <?php if ($_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP > 0) {?>
                            <div class="actions-cart">
                            <div class="btnGioHang" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
,1)">Thêm vào giỏ hàng</div>
                            </div>
                              <?php } else { ?>
                                <p class="notify"><button>Đã hết hàng</button></p>
                              <?php }?>
                        </div>
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
<?php }?>
   <?php }
}
