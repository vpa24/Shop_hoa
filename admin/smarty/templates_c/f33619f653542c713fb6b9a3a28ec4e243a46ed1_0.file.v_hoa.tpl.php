<?php
/* Smarty version 3.1.30, created on 2018-01-13 13:40:08
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5a0c38bb49e7_12380885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f33619f653542c713fb6b9a3a28ec4e243a46ed1' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_hoa.tpl',
      1 => 1515762266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/hoa/v_danh_sach_hoa.tpl' => 1,
    'file:views/hoa/v_modal_them_hoa.tpl' => 1,
  ),
),false)) {
function content_5a5a0c38bb49e7_12380885 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách hoa
            </div>
            <div class="col col-6">
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm hoa mới</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <?php $_smarty_tpl->_subTemplateRender("file:views/hoa/v_danh_sach_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        </div>
    <?php $_smarty_tpl->_subTemplateRender("file:views/hoa/v_modal_them_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_hoa.js"><?php echo '</script'; ?>
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
                window.location = "hoa.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
