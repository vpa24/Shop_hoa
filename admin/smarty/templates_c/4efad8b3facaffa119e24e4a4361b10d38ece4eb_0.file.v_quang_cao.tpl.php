<?php
/* Smarty version 3.1.30, created on 2018-01-12 05:52:57
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_quang_cao.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a584d39de71b4_18359224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4efad8b3facaffa119e24e4a4361b10d38ece4eb' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_quang_cao.tpl',
      1 => 1515130855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/quang_cao/v_danh_sach_quang_cao.tpl' => 1,
    'file:views/quang_cao/v_modal_them_quang_cao.tpl' => 1,
  ),
),false)) {
function content_5a584d39de71b4_18359224 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách quảng cáo
            </div>
            <div class="col col-6">
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm quảng cáo mới</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <?php $_smarty_tpl->_subTemplateRender("file:views/quang_cao/v_danh_sach_quang_cao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:views/quang_cao/v_modal_them_quang_cao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_quang_cao.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/input_file.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh_add.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
>
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
                window.location = "quang_cao.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
