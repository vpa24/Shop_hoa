<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:48:21
  from "C:\wamp\www\shop_hoa-master\views\chi_tiet_hoa\v_chi_tiet_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3cf1055c4225_42673932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1db2283814d3f89a76692aa5cad327559ad40d8' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\views\\chi_tiet_hoa\\v_chi_tiet_hoa.tpl',
      1 => 1513884612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3cf1055c4225_42673932 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-5 product-left-block">
    <div class="product-name"><h1><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h1></div>
    <div class="product-type-data">
        <div class="price-box">
            <p class="old-price"><span class="price-label">Giá:</span></p>
            <p class="special-price">
                <span class="price" id="product-price-2107"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa']->value->Gia;
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>
 ₫</span>
            </p>
        </div>
        <p class="availability in-stock">Tình trạng: <span>Còn hàng</span></p>
        <div class="product-qty" style="margin: 0px 0px 10px 0px">
          <div class="sl">Số lượng:</div>
          <div class="quantity">
            <div class="quantity-select">
              <div class="entry value-minus" id="giam">&nbsp;</div>
                <div class="so_luong"><input type="text" class="entry value item_quantity_" name="so_luong" value="1" id="sl_<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
"></div>
                <div class="entry value-plus active" id="tang">&nbsp;</div>
            </div>
          </div>
        </div>
        <div class="add-to-cart" style="margin: 0px 0px 10px 0px">
          <?php if (isset($_SESSION['tong_gio_hang'])) {?>
            <button type="button" title="Mua ngay" name="them" class="button btn-cart" onclick="kt_sl_mua(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
,<?php echo $_SESSION['tong_gio_hang'];?>
,<?php echo $_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP;?>
)">
                <span>
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span class="view-cart"> Mua ngay</span>
                </span>
            </button>
          <?php } else { ?>
          <button type="button" title="Mua ngay" name="them" class="button btn-cart" onclick="kt_sl_mua(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
,0,<?php echo $_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP;?>
)">
              <span>
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span class="view-cart"> Mua ngay</span>
              </span>
          </button>
          <?php }?>
        </div>
    </div>
</div>
<?php }
}
