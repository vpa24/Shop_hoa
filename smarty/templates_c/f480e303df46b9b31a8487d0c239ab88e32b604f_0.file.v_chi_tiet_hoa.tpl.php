<?php
/* Smarty version 3.1.30, created on 2017-12-13 05:51:51
  from "C:\wamp64\www\shop_hoa\views\v_chi_tiet_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a30bff736bbb9_26772999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f480e303df46b9b31a8487d0c239ab88e32b604f' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\views\\v_chi_tiet_hoa.tpl',
      1 => 1513144309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/chi_tiet_hoa/v_thanh_danh_muc.tpl' => 1,
    'file:views/chi_tiet_hoa/v_thong_tin_khac.tpl' => 1,
    'file:views/chi_tiet_hoa/v_thong_tin_hoa.tpl' => 1,
    'file:views/chi_tiet_hoa/v_san_pham_cung_loai.tpl' => 1,
    'file:layouts/body/quang_cao.tpl' => 1,
  ),
),false)) {
function content_5a30bff736bbb9_26772999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="product-view">
    <div class="row">
      <div class="col-md-5">
          <img class="img-responsive hinh_ct" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
      </div>
      <div class="product-shop col-md-7 col-sm-6 col-xs-12">
        <div class="product-shop-content">
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
                    <div class="product-qty" style="margin: 0px 0px 10px 5px">
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
                    <button class="bttn-fill bttn-md bttn-warning bttn-no-outline">Thêm vào giỏ hàng</button>
                </div>
            </div>
          <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_thong_tin_khac.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_thong_tin_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </div>
  </div>
</div>
  <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_san_pham_cung_loai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:layouts/body/quang_cao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
