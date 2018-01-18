<?php
/* Smarty version 3.1.30, created on 2018-01-18 02:51:54
  from "C:\wamp64\www\shop_hoa-master\admin\views\index\v_ds_hoa_het_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a600bca390408_76073327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8053e42169dd2f5a8ef458627bd2009d760e4cdc' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\index\\v_ds_hoa_het_hang.tpl',
      1 => 1516243913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/index/v_modal_sua_sl_hoa.tpl' => 1,
  ),
),false)) {
function content_5a600bca390408_76073327 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="card-header">
    <i class="fa fa-table"></i> Danh sách hoa hết hàng</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
    <tr>
      <th>Hình</th>
      <th>Tên hoa</th>
      <th>Số Lượng</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dshoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
    <tr id="delete<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
      <td width="75px" ><img src="../public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
      <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP;?>
</td>
      <td>
          <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" data-toggle="modal" data-target="#sua<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" >Sửa</button>
      </td>
    </tr>
    <?php $_smarty_tpl->_subTemplateRender("file:views/index/v_modal_sua_sl_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

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
