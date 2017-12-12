<?php
/* Smarty version 3.1.30, created on 2017-12-12 13:48:49
  from "C:\wamp64\www\shop_hoa\views\v_chi_tiet_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2fde41c677f6_32136945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f480e303df46b9b31a8487d0c239ab88e32b604f' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\views\\v_chi_tiet_hoa.tpl',
      1 => 1513086527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/v_hoa_cung_loai.tpl' => 1,
  ),
),false)) {
function content_5a2fde41c677f6_32136945 (Smarty_Internal_Template $_smarty_tpl) {
?>
            <div id="bsm_product_details" class="container">
                <form method="post" action="gio_hang.php?MaHoa=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
                    <div id="bsm_product_details_content">
                      <div class="grid">
                    		<div class="flexslider">
                    			   <div class="thumb-image hinh_chi_tiet"> <img id="zoom_08" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" data-zoom-image="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" class="img-responsive hinh_ct"> </div>
                    		</div>
                    	</div>
                        <div class="col-md-6 col-sm-6 col-xs-12 noi_dung_ct">
                            <h1><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h1>
                            <ul>
                                <li><h4>Giá: </h4></li>
                                <li><h4><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->Gia);?>
 vnđ</h4></li>
                            </ul>
                            <h4>Thành phần: </h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['hoa']->value->ThanhPhan;?>
</p><br>
                            <h4>Nội dung: </h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['hoa']->value->NoiDung;?>
</p><br />
                            <h4 class="sl">Số lượng:</h4>

                            <div class="quantity">
               <div class="quantity-select">
                 <div class="entry value-minus" id="giam">&nbsp;</div>
                 <div class="so_luong"><input type="text" class="entry value item_quantity_" name="so_luong" value="1" id="sl_<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
"></div>
                 <div class="entry value-plus active" id="tang">&nbsp;</div>
               </div>
             </div>
              <div>
                	<input type="submit" name="them" value="Thêm vào giỏ hàng" class="button gio_hang" />
              </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:views/v_hoa_cung_loai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
