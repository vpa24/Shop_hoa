<?php
/* Smarty version 3.1.30, created on 2018-01-12 05:52:58
  from "C:\wamp64\www\shop_hoa-master\admin\views\quang_cao\v_modal_them_quang_cao.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a584d3a277008_98832667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c66f272c31ab7d6662b854fa94aa04f6098af8c8' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\quang_cao\\v_modal_them_quang_cao.tpl',
      1 => 1515130855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a584d3a277008_98832667 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 875px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm quảng cáo mới</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="quang_cao.php" id="uploadForm" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Tên quảng cáo:</label>
            <input type="text" class="form-control" name="tieu_de" value="" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Đường dẫn:</label>
            <input type="text" class="form-control" name="duong_dan" value="" autocomplete="off">
          </div>
          <div class="form-group">
              <div class="row">
                <div class="col col-3">
                  <div class="input-file-container">
                    <input class="input-file" id="file" name="hinh" type="file" required>
                    <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                  </div>
                  <p class="file-return"></p>
                </div>
                <div class="col col-3">
                    <img id="hienThi" class="img-fluid" src=""/>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-success" name="btn_add">Thêm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php }
}
