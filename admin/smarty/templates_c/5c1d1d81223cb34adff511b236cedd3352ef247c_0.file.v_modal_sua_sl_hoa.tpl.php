<?php
/* Smarty version 3.1.30, created on 2018-01-18 03:04:00
  from "C:\wamp64\www\shop_hoa-master\admin\views\index\v_modal_sua_sl_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a600ea095ec34_01607698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c1d1d81223cb34adff511b236cedd3352ef247c' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\index\\v_modal_sua_sl_hoa.tpl',
      1 => 1516244637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a600ea095ec34_01607698 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="sua<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST" id="uploadForm<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" action="sua_sl_hoa.php">
          <input type="hidden" name="ma_hoa" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
         
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Số lượng:</label>
            <input type="text" class="form-control" name="sl" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP;?>
" autocomplete="off">
          </div>
       
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-success" name="btn_update">Cập nhật</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php }
}
