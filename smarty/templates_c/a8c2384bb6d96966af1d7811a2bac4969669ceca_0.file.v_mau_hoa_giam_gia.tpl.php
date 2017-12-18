<?php
/* Smarty version 3.1.30, created on 2017-12-18 13:54:56
  from "C:\wamp64\www\shop_hoa-master_loi\views\trang_chu\v_mau_hoa_giam_gia.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37c8b0629c56_88550715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c2384bb6d96966af1d7811a2bac4969669ceca' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master_loi\\views\\trang_chu\\v_mau_hoa_giam_gia.tpl',
      1 => 1513586802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37c8b0629c56_88550715 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="menu3" class="tab-pane fade in">
    <div class="category-products">
        <ul class="products-grid row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_khuyen_mai']->value, 'hoa_km');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_km']->value) {
?>
            <li class="item mau_hoa_moi">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa;?>
" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa;?>
">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa;?>
</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa_km']->value->Gia;
$_prefixVariable3=ob_get_clean();
echo number_format($_prefixVariable3);?>
 ₫</span>
                                    </a>
                                </div>
                            </div>
                            <div class="actions-cart">
                                  <a  onclick="chuyen_huong_gio_hang(<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->MaHoa;?>
)" href="javascript:void(0)"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
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
