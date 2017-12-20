<?php
/* Smarty version 3.1.30, created on 2017-12-20 11:39:07
  from "C:\wamp64\www\shop_hoa-master\admin\views\logo\v_modal_sua_logo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3a4bdb530d49_99160208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06fe768170b0f48c2407e2444e36bbb3c0d2acb8' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\logo\\v_modal_sua_logo.tpl',
      1 => 1513769945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a4bdb530d49_99160208 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết Logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="logo.php">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['doc_logo']->value->idlogo;?>
">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Chiều cao:</label>
            <input type="text" class="form-control" name="cao" value="<?php echo $_smarty_tpl->tpl_vars['doc_logo']->value->ChieuCao;?>
" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Độ rộng:</label>
            <input type="text" class="form-control" name="rong" value="<?php echo $_smarty_tpl->tpl_vars['doc_logo']->value->DoRong;?>
" autocomplete="off">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col col-3">
                <div class="input-file-container">
                  <input class="input-file" type="file" name="hinh" id="file<?php echo $_smarty_tpl->tpl_vars['doc_logo']->value->idlogo;?>
"/>
                  <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                </div>
                <p class="file-return"></p>
              </div>
              <div class="col col-3">
                  <img id="hienThi<?php echo $_smarty_tpl->tpl_vars['doc_logo']->value->idlogo;?>
" class="img-fluid" src="../public/images/logo/<?php echo $_smarty_tpl->tpl_vars['doc_logo']->value->Hinh;?>
"/>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-success" name="btn_update_logo">Cập nhật</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }
}
