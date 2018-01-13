<?php
/* Smarty version 3.1.30, created on 2018-01-12 12:38:35
  from "/home/wikicach/public_html/shop_hoa/admin/views/v_thong_tin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5849db439ac2_82372650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9918c724bbb12fbf05282d3a24b31c5c8dc6048c' => 
    array (
      0 => '/home/wikicach/public_html/shop_hoa/admin/views/v_thong_tin.tpl',
      1 => 1515420236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/thong_tin/v_danh_sach_thong_tin.tpl' => 1,
    'file:views/thong_tin/v_modal_them_thong_tin.tpl' => 1,
  ),
),false)) {
function content_5a5849db439ac2_82372650 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách thông tin
            </div>
            <div class="col col-6">
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm thông tin mới</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <?php $_smarty_tpl->_subTemplateRender("file:views/thong_tin/v_danh_sach_thong_tin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:views/thong_tin/v_modal_them_thong_tin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_thong_tin.js"><?php echo '</script'; ?>
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
                window.location = "thong_tin.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
