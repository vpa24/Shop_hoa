<?php
/* Smarty version 3.1.30, created on 2017-12-16 03:17:35
  from "C:\wamp64\www\shop_hoa-master\admin\views\hoa\v_danh_sach_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a34904fd0f284_30083722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd0c3af9d5311c11f09ae708d085eb13379cf85e' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\hoa\\v_danh_sach_hoa.tpl',
      1 => 1513394254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/hoa/v_modal_sua_hoa.tpl' => 1,
  ),
),false)) {
function content_5a34904fd0f284_30083722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Hình</th>
      <th>Tên hoa</th>
      <th>Loại hoa</th>
      <th>Giá</th>
      <th>Thời gian</th>
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
      <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->ThoiGian;?>
</td>
      <td>
          <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" >Sửa</button>
          <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
)" class="btn btn-danger">Xóa</button>
      </td>
    </tr>
<?php $_smarty_tpl->_subTemplateRender("file:views/hoa/v_modal_sua_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}
