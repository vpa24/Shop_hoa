<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:16:24
  from "C:\wamp\www\shop_hoa-master\views\trang_chu\v_hoa_ban_chay.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ce988f3a775_74867074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2702772bda758d98f22a141040de48c3ad66b1d7' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\views\\trang_chu\\v_hoa_ban_chay.tpl',
      1 => 1513884612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ce988f3a775_74867074 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="menu2" class="tab-pane fade in">
    <div class="category-products">
        <ul class="products-grid row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_ban_chay']->value, 'hoa_ban_chay');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_ban_chay']->value) {
?>
            <li class="item mau_hoa_moi">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa;?>
" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa;?>
">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa;?>
</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->Gia;
$_prefixVariable2=ob_get_clean();
echo number_format($_prefixVariable2);?>
 ₫</span>
                                    </a>
                                </div>
                            </div>
                            <div class="actions-cart">
                              <?php if (isset($_SESSION['tong_gio_hang'])) {?>
                                <a  onclick="chuyen_huong_gio_hang(<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->MaHoa;?>
,<?php echo $_SESSION['tong_gio_hang'];?>
,<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->SoLuongSP;?>
)" href="javascript:void(0)"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                              <?php } else { ?>
                                  <a  onclick="chuyen_huong_gio_hang(<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->MaHoa;?>
,0,<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->SoLuongSP;?>
)" href="javascript:void(0)"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                              <?php }?>
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
