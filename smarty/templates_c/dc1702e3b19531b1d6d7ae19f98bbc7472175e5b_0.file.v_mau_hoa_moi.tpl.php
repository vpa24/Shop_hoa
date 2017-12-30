<?php
/* Smarty version 3.1.30, created on 2017-12-29 13:15:47
  from "C:\wamp64\www\shop_hoa-master\views\trang_chu\v_mau_hoa_moi.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4640031d3b32_83688488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1702e3b19531b1d6d7ae19f98bbc7472175e5b' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\trang_chu\\v_mau_hoa_moi.tpl',
      1 => 1514553283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4640031d3b32_83688488 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="menu1" class="tab-pane fade in active">
    <div class="category-products">
        <ul class="products-grid row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_moi']->value, 'hoa_moi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_moi']->value) {
?>
            <li class="item mau_hoa_moi">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa_moi']->value->GiaKhuyenMai;
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>
 ₫</span>
                                    </a>
                                </div>
                            </div>
                            <div class="actions-cart" >
                                  <a  onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->MaHoa;?>
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
        <div class="cta">
            <button onclick="location.href='danh-sach-hoa'">Xem thêm hoa <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
<?php }
}
