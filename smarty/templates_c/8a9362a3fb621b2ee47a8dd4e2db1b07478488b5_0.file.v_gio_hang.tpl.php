<?php
/* Smarty version 3.1.30, created on 2017-12-29 13:04:04
  from "C:\wamp64\www\shop_hoa-master\views\trang_chu\v_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a463d4416f3b6_62461540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a9362a3fb621b2ee47a8dd4e2db1b07478488b5' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\trang_chu\\v_gio_hang.tpl',
      1 => 1514552620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a463d4416f3b6_62461540 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_SESSION['giohang'])) {?>
  <div class="cd-cart-container">
<?php } else { ?>
  <div class="cd-cart-container empty">
<?php }?>

	<a  class="cd-cart-trigger">
		Cart
		<ul class="count" id="count">
      <?php if (isset($_SESSION['tong_gio_hang'])) {?><!-- cart items count -->
			  <li><?php echo $_SESSION['tong_gio_hang'];?>
</li>
			  <li><?php echo $_SESSION['tong_gio_hang'];?>
</li>
      <?php } else { ?>
        <li>0</li>
        <li>0</li>
      <?php }?>
		</ul> <!-- .count -->
	</a>

	<div class="cd-cart">
		<div class="wrapper">
			<header>
				<h2>Giỏ Hàng</h2>
			</header>

			<div class="body">
				<ul id="listGioHang">
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<footer>
				<a href="gio-hang.html" alt="Xem giỏ hàng" class="checkout"><em>Tổng cộng - <span><?php if (isset($_SESSION['giohang'])) {?>
                                                              <?php ob_start();
echo $_SESSION['tong_tt'];
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>
 đ
                                                            <?php } else { ?>
                                                                0
                                                            <?php }?>
                                                          </span></em></a>
			</footer>
		</div>
	</div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->
<?php }
}
