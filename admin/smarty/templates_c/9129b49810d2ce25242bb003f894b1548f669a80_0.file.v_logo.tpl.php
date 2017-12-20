<?php
/* Smarty version 3.1.30, created on 2017-12-20 10:50:18
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_logo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3a406a603573_77437904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9129b49810d2ce25242bb003f894b1548f669a80' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_logo.tpl',
      1 => 1513747650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/logo/v_hien_thi_logo.tpl' => 1,
  ),
),false)) {
function content_5a3a406a603573_77437904 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i>Logo</div>
  <div class="card-body">
    <div class="table-responsive">
    <?php $_smarty_tpl->_subTemplateRender("file:views/logo/v_hien_thi_logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
  </div>
  <?php if (isset($_SESSION['thongBao'])) {?>
    <?php echo '<script'; ?>
>swal("<?php echo $_SESSION['thongBao'];?>
");<?php echo '</script'; ?>
>
  <?php }?>
  <?php if (isset($_SESSION['thongBaoThanhCong'])) {?>
    <?php echo '<script'; ?>
>
        swal({
          title: "Thành công!",
          text: "<?php echo $_SESSION['thongBaoThanhCong'];?>
!",
          icon: "success"
          }).then(function() {
              window.location = "logo.php";
          });
    <?php echo '</script'; ?>
>
  <?php }
}
}
