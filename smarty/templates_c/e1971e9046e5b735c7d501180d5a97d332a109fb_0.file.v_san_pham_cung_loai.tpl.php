<?php
/* Smarty version 3.1.30, created on 2017-12-30 08:54:19
  from "C:\wamp64\www\shop_hoa-master\views\chi_tiet_hoa\v_san_pham_cung_loai.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a47543beeae66_19885015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1971e9046e5b735c7d501180d5a97d332a109fb' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\chi_tiet_hoa\\v_san_pham_cung_loai.tpl',
      1 => 1514624053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a47543beeae66_19885015 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <ul class="magictabs">
        <li class="item active loaded single">
            <span class="title">Sản phẩm cùng loại</span>
        </li>
  </ul>
  <div class="category-products">
    <ul class="products-grid row">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoa_cung_loai']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
        <li class="item">
            <div class="category-products-grid">
                <div class="images-container">
                    <div class="product-hover">
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
echo $_smarty_tpl->tpl_vars['hoa']->value->Gia;
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>
 ₫</span>
                                </a>
                            </div>
                            <div class="actions-cart">  <a  onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
,1)" href="javascript:void(0)"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                        </div>
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
<?php }
}
