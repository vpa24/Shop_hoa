<?php
/* Smarty version 3.1.30, created on 2017-12-20 14:45:35
  from "C:\wamp64\www\shop_hoa-master\admin\smarty\templates\layouts\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3a778f379661_35298638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fc87dc108a604a591d65671f02cd23ed97bdb56' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\smarty\\templates\\layouts\\footer.tpl',
      1 => 1513781129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a778f379661_35298638 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/jquery.number.min.js"><?php echo '</script'; ?>
>
  <!-- Custom scripts for all pages-->
  <?php echo '<script'; ?>
 src="public/js/sb-admin.min.js"><?php echo '</script'; ?>
>
  <!-- Custom scripts for this page-->
  <?php echo '<script'; ?>
 src="public/js/sb-admin-datatables.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/Chart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/app.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/so_luong_ban_theo_ngay.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $('#price').number(true);
    $('#gia_khuyen_mai').number(true);
  <?php echo '</script'; ?>
>
  </div>
</body>

</html>
<?php }
}
