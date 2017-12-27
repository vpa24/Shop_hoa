<?php
/* Smarty version 3.1.30, created on 2017-12-27 13:30:59
  from "C:\wamp64\www\shop_hoa-master\smarty\templates\layouts\script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a43a0931807c7_57794807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c35e8fa296b490d6b753f72e5f0b7391d6948c' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\smarty\\templates\\layouts\\script.tpl',
      1 => 1514381446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43a0931807c7_57794807 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/slider.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_tim_kiem.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_tim_kiem-mobile.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_gio_hang.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/gio_hang.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/xoa_gio_hang.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_phan_trang.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/jquery.gotop.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/slider/bxslider.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/slider/script.slider.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/chat.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
      $("#giam").click(function(){
        var sl=$(".value").val();
        sl--;
        $(".value").val(sl);
        if(sl<=1)
          $(".value").val(1);
      });
      $("#tang").click(function(){
          var sl=$(".value").val();
          sl++;
          $(".value").val(sl);
          if(sl>=10)
            $(".value").val(10);

      });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  <?php if (isset($_smarty_tpl->tpl_vars['giohang']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoa']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
      $("#tang_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").click(function(){
        var sl=$("#qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").val();
        sl++;
        $("#qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").val(sl);
      });
    $("#giam_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").click(function(){
      var sl=$("#qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").val();
      sl--;
      $("#qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").val(sl);
      if(sl<=1)
        $("#qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").val(1);
      });
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <?php }
echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  $('#gotop').gotop({
    background: '#FF3366',
    bottom : '100px',
    mobileOnly: false
  });
<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
  <?php if (isset($_SESSION['success'])) {?>
	swal({
	title: "Đặt hàng thành công!",
	text: "<?php echo $_SESSION['success'];?>
!",
	type: "success"
	}).then(function() {
		window.location="check_hoa_don.php?dien_thoai=<?php echo $_SESSION['dien_thoai'];?>
";
	});
  <?php }?>
	<?php echo '</script'; ?>
>
<?php }
}
