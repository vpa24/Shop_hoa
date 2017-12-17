<?php
/* Smarty version 3.1.30, created on 2017-12-17 11:58:29
  from "C:\wamp64\www\shop_hoa-masterrr\views\v_xem_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a365be5156e31_37888708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '607ba52e6c992770b230963cbe193176e502bbfb' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-masterrr\\views\\v_xem_gio_hang.tpl',
      1 => 1513453820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a365be5156e31_37888708 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['giohang']->value) == 0) {?>
	<div class="canh_giua">
			<h2 class="giohang_rong">Rất tiếc bạn chưa mua hàng....!</h2>
	</div>
<?php } else { ?>
<form method="post">
	<div class="check-out">
		<div class="canh_giua">
				<h2 class="giohang">Giỏ hàng của bạn</h2>
		</div>
    <div class="container">
    	<div class="bs-example4" data-example-id="simple-responsive-table">
        <div class="table-responsive">
        	<table class="table-heading simpleCart_shelfItem">
	    		  <tr>
		    			<th>Sản Phẩm</th>
		    			<th>Đơn giá</th>
		    			<th class="sl_gh">Số lượng </th>
		    			<th>Tổng</th>
		          <th>Xóa</th>
	    		  </tr>
						<?php $_smarty_tpl->_assignInScope('tongtt', 0);
?>
						  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['giohang'], 'gh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gh']->key => $_smarty_tpl->tpl_vars['gh']->value) {
$__foreach_gh_0_saved = $_smarty_tpl->tpl_vars['gh'];
?>
						  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoa']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
						  		<?php if ($_smarty_tpl->tpl_vars['gh']->key == $_smarty_tpl->tpl_vars['sp']->value->MaHoa) {?>
						  			 <?php $_smarty_tpl->_assignInScope('tongtt', $_smarty_tpl->tpl_vars['tongtt']->value+$_smarty_tpl->tpl_vars['gh']->value*$_smarty_tpl->tpl_vars['sp']->value->Gia);
?>
						 <tr class="cart-header" id="delete<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
">
               <td><h4 class="ten_sp"><a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['sp']->value->TenHoa);?>
-<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
.html"><?php echo $_smarty_tpl->tpl_vars['sp']->value->TenHoa;?>
</a></h4></td>
							 <td id="tong_tien_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
"><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->Gia);?>
 đ</td>
							 <td>
									<div class="quantity td_sl">
	   								<div class="quantity-select">
											<div class="entry value-minus" id="giam_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
">&nbsp;</div>
											<div class="so_luong"><input type="text" class="entry value item_quantity_" id="qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
" name="sl[]" value="<?php echo $_smarty_tpl->tpl_vars['gh']->value;?>
" ></div>
			    						<div class="entry value-plus active" id="tang_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
">&nbsp;</div>
			    					</div>
			    				</div>
								</td>
								<td id="tong_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
"><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->Gia*$_smarty_tpl->tpl_vars['gh']->value);?>
 đ</td>
								<td>
									<div class="close1"><button type="button" onclick="xoagiohang(<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
)" class="btn btn-danger">x</button>

									</div>
								</td>
							</tr>
									<?php }?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							<?php
$_smarty_tpl->tpl_vars['gh'] = $__foreach_gh_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</table>
					</div>
				</div>
				<div class="tong_cong">
        	<h3>Tổng cộng: <span class="tong_tien"><?php echo number_format($_smarty_tpl->tpl_vars['tongtt']->value);?>
 đ</span></h3>
    	</div>
			<div class="produced">
    	 	<input type="submit" value="Cập nhập giỏ hàng" name="btnCapnhat" class="one" />
    	</div>
			<div class="produced">
				<a href="khach_hang.php"><input type="button" value="Tiến hành đặt hàng" class="one" /></a>
    	</div>
		</div>
 </div>
</form>
<?php }
}
}
