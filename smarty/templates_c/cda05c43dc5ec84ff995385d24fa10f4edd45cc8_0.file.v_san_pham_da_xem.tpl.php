<?php
/* Smarty version 3.1.30, created on 2018-01-28 14:48:43
  from "C:\wamp64\www\shop_hoa-master\views\hoa\v_san_pham_da_xem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6de2cb14d769_49706639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cda05c43dc5ec84ff995385d24fa10f4edd45cc8' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\hoa\\v_san_pham_da_xem.tpl',
      1 => 1517150921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6de2cb14d769_49706639 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="category-products container">
    <?php if (isset($_SESSION['makh'])) {?>  
        <ul class="products-grid row aos-all" id="transcroller-body">
           <?php $_smarty_tpl->_assignInScope('dem', 0);
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_lich_su']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
                <li class="item do_dai aos-item" >
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
    
    <?php } else { ?>
    <div class="alert alert-warning">
  <strong>Rất tiếc!</strong> Hãy đăng nhập vảo tài khoản để xem.
</div>
<?php }?>
</div>
          <?php }
}
