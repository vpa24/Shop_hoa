<?php
/* Smarty version 3.1.30, created on 2017-12-08 07:16:22
  from "C:\wamp64\www\shop_hoa\admin\views\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a3c46266a73_64851735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff7c22e80b3d66ceca44f461a78b23bc66de1fb' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\admin\\views\\v_tin_tuc.tpl',
      1 => 1512717378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a3c46266a73_64851735 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách hoa</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hình</th>
                  <th>Tên tin tức</th>
                  <th>Nội dung</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_tin_tuc']->value, 'tin_tuc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tin_tuc']->value) {
?>
                <tr id="delete<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
">
                  <td width="75px" ><img src="../public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenTT;?>
</td>
                  <td width="300px">
                    <span>
                        <p class="hidden-text"><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->NoiDung;?>
</p>
                    </span>
                </td>
                  <td>
                      <button type="button" class="btn btn-primary">Sửa</button>
                      <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
)" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </tbody>
            </table>
          </div>
        </div>
            <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_tin_tuc.js"><?php echo '</script'; ?>
>

<?php }
}
