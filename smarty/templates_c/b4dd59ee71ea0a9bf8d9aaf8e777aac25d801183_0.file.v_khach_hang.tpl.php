<?php
/* Smarty version 3.1.30, created on 2017-12-21 15:05:31
  from "C:\wamp64\www\shop_hoa-master\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3bcdbb7cbe14_19321927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4dd59ee71ea0a9bf8d9aaf8e777aac25d801183' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\v_khach_hang.tpl',
      1 => 1513861308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_thanh_danh_muc.tpl' => 1,
    'file:views/khach_hang/v_thong_tin.tpl' => 1,
    'file:views/khach_hang/v_thong_tin_don_hang.tpl' => 1,
  ),
),false)) {
function content_5a3bcdbb7cbe14_19321927 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thong_tin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thong_tin_don_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php if (isset($_SESSION['success'])) {?>
	<?php echo '<script'; ?>
>
	swal({
	title: "Đặt hàng thành công!",
	text: "<?php echo $_SESSION['success'];?>
!",
	type: "success"
	}).then(function() {
		window.location="check_hoa_don.php?dien_thoai=<?php echo $_SESSION['dien_thoai'];?>
";
	});
	<?php echo '</script'; ?>
>
<?php }
}
}
