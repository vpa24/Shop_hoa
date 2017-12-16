<?php
/* Smarty version 3.1.30, created on 2017-12-16 12:52:07
  from "C:\wamp64\www\shop_hoa-master\views\hoa\v_danh_sach_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3516f7c735b9_15778504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfc95f7f864f441877e724cb121d55d403e71e18' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\hoa\\v_danh_sach_hoa.tpl',
      1 => 1513428722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3516f7c735b9_15778504 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-main col-lg-9 col-md-9 col-sm-9 col-xs-12 content-color color f-right">
    <div class="category-products">
        <ul class="products-grid row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
            <li class="item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['hoa']->value->TenHoa);?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['hoa']->value->TenHoa);?>
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
                            </div>
                            <div class="actions-cart">
                                <a  onclick="chuyen_huong_gio_hang(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
)" href="javascript:void(0)"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
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
    <div class="bsm_products_pagination">
   <?php echo $_smarty_tpl->tpl_vars['phan_trang']->value;?>

<?php }
}
