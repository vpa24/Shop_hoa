<?php
/* Smarty version 3.1.30, created on 2017-12-08 12:07:51
  from "C:\wamp\www\shop_hoa\admin\views\v_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a728763a8b9_34136387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17f769e93416aa32a2ae39dad5e0a0fcb9329ea4' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa\\admin\\views\\v_hoa.tpl',
      1 => 1512716596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a728763a8b9_34136387 (Smarty_Internal_Template $_smarty_tpl) {
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
                  <th>Tên hoa</th>
                  <th>Loại hoa</th>
                  <th>Giá</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
                <tr id="delete<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
                  <td width="75px" ><img src="../public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</td>
                  <td><a href="hoa.php?loai_hoa=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</a></td>
                  <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->Gia);?>
 đ</td>
                  <td>
                      <button type="button" class="btn btn-primary">Sửa</button>
                      <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
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
 src="public/js/ajax/ajax_delete_hoa.js"><?php echo '</script'; ?>
>
<?php }
}
