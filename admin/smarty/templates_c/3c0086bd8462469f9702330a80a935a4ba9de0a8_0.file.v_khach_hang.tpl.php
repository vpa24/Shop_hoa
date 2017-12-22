<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:43:47
  from "C:\wamp\www\shop_hoa-master\admin\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ceff3804273_15998473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c0086bd8462469f9702330a80a935a4ba9de0a8' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\admin\\views\\v_khach_hang.tpl',
      1 => 1513884612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ceff3804273_15998473 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách khách hàng</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tên khách hàng</th>
                  <th>Phái</th>
                  <th>Email</th>
                  <th>Địa chỉ</th>
                  <th>Điện thoại</th>
                </tr>
              </thead>
              <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_khach_hang']->value, 'khach_hang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['khach_hang']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ten_khach_hang;?>
</td>
                  <td>
                  <?php if ($_smarty_tpl->tpl_vars['khach_hang']->value->phai == 1) {?>
                    Nam
                  <?php } else { ?>
                    Nữ
                  <?php }?>
                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->email;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->dia_chi;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->dien_thoai;?>
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
<?php }
}
