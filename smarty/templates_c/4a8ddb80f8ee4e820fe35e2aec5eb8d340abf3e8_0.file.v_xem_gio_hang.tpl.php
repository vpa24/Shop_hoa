<?php
/* Smarty version 3.1.30, created on 2017-12-11 13:36:53
  from "C:\wamp64\www\shop_hoa\views\v_xem_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2e89f5403585_19616363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8ddb80f8ee4e820fe35e2aec5eb8d340abf3e8' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\views\\v_xem_gio_hang.tpl',
      1 => 1512966158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2e89f5403585_19616363 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['giohang']->value) == 0) {?>
	<div class="canh_giua">
			<h2 class="giohang_rong">Rất tiếc bạn chưa mua hàng....!</h2>
	</div>
<?php } else { ?>
<form method="post">
	<div class="check-out">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['giohang']->value, 'gh');
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
						 <tr class="cart-header">
               <td><h4 class="ten_sp"><a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['sp']->value->TenHoa);?>
-<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
.html"><?php echo $_smarty_tpl->tpl_vars['sp']->value->TenHoa;?>
</a></h4></td>
							 <td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->Gia);?>
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
								<td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->Gia*$_smarty_tpl->tpl_vars['gh']->value);?>
 đ</td>
								<td>
									<div class="close1"><a href="xoagiohang.php?id=<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
">x</a></div>
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
